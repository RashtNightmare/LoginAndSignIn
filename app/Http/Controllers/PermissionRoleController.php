<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Role_has_permission;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PermissionRoleController extends Controller
{


    public function DoInsertOne($data){
        
      try {
          if (Auth::guard('web')->check()) {
              Role::create([
            'name'=> $data['email'],
            'guard_name' => 'web'
         ]);
              Permission::create([
            'name'=> 'write post',
            'guard_name' => 'web'
         ]);
        //  $this->DoLastInsert($data);
       } else {
              Role::create([
                'name'=> $data['email'],
                'guard_name' => 'api'
             ]);
              Permission::create([
                'name'=> 'write post',
                'guard_name' => 'api'
             ]);
            //  $this->DoLastInsert($data);
         
          }
      
      }catch(Exception $exception){
        return response()->json([
            'data' => $exception,
            'msg' => 'failed'], 500);
      }

    }

   

}
