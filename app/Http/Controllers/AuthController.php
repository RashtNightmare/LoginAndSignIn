<?php

namespace App\Http\Controllers;

use App\Models\Personal_access_token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    public function register(Request $request){
      $fields= $request->validate([
          'name' => 'required|string',
          'email' => 'required|string|unique:users,email',
          'password' => 'required|string|confirmed'
      ]);
      $user=User::create([
         'name' => $fields['name'],
         'email' => $fields['email'],
         'password' => bcrypt($fields['name']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;
        $response=['user' => $user , 'token' => $token];

        return response($response,201);
    }
    public function login(Request $request){
        $fields= $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        //check email
        $user =User::query()->select('name','password','email')->where('email',$request->email)->first();
        if(count($user) == 0 ){
            return response()->json([
                'message' => 'NOT FOUND || 404'
            ],404);
        }else{
            if($user->password != bcrypt($fields['password']) ){
                return response()->json([
                    'message' => 'INCORRECT PASSWORD || 401'
                ],500);
            }    
        }
        $token = $user->createToken('myapptoken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ],200);
      }
    public function logout(Request $request){
        
        Personal_access_token::query()->where('tokenable_id', $request->id)->where('tokenable_type','App\Models\User')->delete();
        User::query()->where('id',$request->id)->delete();
        return response([
            'message' => 'logged out'
        ]);
    }
}
