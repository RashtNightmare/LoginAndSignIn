<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Role_has_permission;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         
        try {
            $user=Auth::guard('web')->user();
            $data=$user;
            $idRole=Role::query()->select(['id'])->where('name', $data['email'])->get();
            $Role_ID=$idRole[0]['id'];
            $idPermissionWriter=Permission::query()->select(['id'])->where('name', 'write post')->get();
            $idPermissionEditor=Permission::query()->select(['id'])->where('name', 'editor')->get();
            $Permission_ID=null;
            if(count($idPermissionWriter)>0){
                $Permission_ID=$idPermissionWriter[0]['id'];
            }else if(count($idPermissionEditor)>0)
            {
                $Permission_ID=$idPermissionEditor[0]['id'];
            }
            if($Permission_ID == null){
                return response()->json([
                    'data' => 'You Have Gotten No Permission Available In DataBase ; Please Contact With Admin TO Add Permissions To The DataBase.',
                    'msg' => 'failed'], 500);
            }else{
                $RoleHas=Role_has_permission::query()->select(['permission_id','role_id'])->where('role_id', $Role_ID)
              ->where('permission_id', $Permission_ID)->get();
                if (count($RoleHas)>0) {
                    return view('home');
                } else {
                    Role_has_permission::create([
                    'permission_id' => $Permission_ID,
                     'role_id' => $Role_ID
                    ]);
                }
            }
        }catch(Exception $exception){
            return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
        }   


        return view('home');
    }
}
