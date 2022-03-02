<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Role_has_permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPermissionController extends Controller
{
    public function user_can($permission_type){
        $user=Auth::guard('web')->user();
        $email=$user['email'];
        $idRole=Role::query()->select(['id'])->where('name', $email)->get();
        $Role_ID=$idRole[0]['id'];
        $Role_Has_Permission=Role_has_permission::query()
        ->select(['permission_id'])->where('role_id',$Role_ID)->get();
        $permission_id=$Role_Has_Permission[0]['permission_id'];
        $idPermission=Permission::query()->select(['name'])->where('id', $permission_id)->get();
        $Permission_Name=$idPermission[0]['name'];
        if ($Permission_Name == $permission_type){
            return true;
        }else{
            return false;
        }
    }
}
