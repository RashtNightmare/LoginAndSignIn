<?php

namespace App\Http\Controllers;

use App\Models\Personal_access_token;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

 trait UserAndTokenController{

    function createUserAndAccessToken(Request $data){
        try{
       $token= Hash::make($data['password']);  
       $user= User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => $token,]);
       $personalAccessToken= Personal_access_token::create([
              'tokenable_type'=>'App\Models\User', 
              'tokenable_id'=>'1', 
              'name'=>$data['email'], 
              'token'=>$token]);   
       if($user){
           if($personalAccessToken){
            return "Authorization Has Been Done Successfully";
           }else{
            return "Authorization Has Been Failed";
        }
       }else{
        return "Authorization Has Been Failed";
    }

       }catch(Exception $error){
         return "Authorization Has Been Failed";
       }
     }}
