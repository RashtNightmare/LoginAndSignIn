<?php

namespace App\Http\Controllers;

use App\Models\Personal_access_token;
use App\Models\User;
use App\Http\Controllers\UserAndTokenController;
use CreatePersonalAccessTokensTable;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    use UserAndTokenController;

    public function doRegister(Request $data){
     $password_confirm=$data['password_confirm'];
     $password=$data['password'];
     $name=$data['name'];
      if(strlen($password) >=8) 
        { 
        if (strlen($password_confirm) >=8) {
           if($password == $password_confirm){

    
            if($this->createUserAndAccessToken($data) == "Authorization Has Been Done Successfully"){
               return "Authorization Has Been Done Successfully . Plz Go To ( /login ) and Do The Login";
            }else{
                return "Authorization Has Been Failed";
            }
                   
               
           }else{return "Password And Password Confirm Aren't the Same . Rewrite Them";} 
        }else{return "Password Confirm Length Must Be at Least eight";}}else{return "Password Length Must Be at Least eight";}
    }

}
