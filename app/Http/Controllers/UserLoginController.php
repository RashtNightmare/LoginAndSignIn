<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $users= User::query()->select([
           'id','name','email','password'
       ])->get();
       if (!$users){
           return response()->json([
               'data' => '',
               'msg' =>"NOT FOUND"
           ],404);
       }else{
           // return response()->json([
           //     'data' => $users,
           //     'msg' =>"SUCCESSFULLY"
           // ],200);
          try {
              return view('SignIn.all', compact('users'));
          }
           catch(Exception $exception){
               return response()->json([
                'data' => $exception,
                'msg' =>"FAILED"
                ],404
               );
           }
       }
       return view('SignIn.all',compact('users'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('LogIn.login');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       try {
           $users=User::create([
               'name'=>$request->name
               ,'email'=>$request->email
               ,'password' => $request->password
           ]);
           return $users;
       } catch (Exception $exception) {
           return response()->json([
               'data' => $exception,
               'msg' => 'failed'], 500);
       }
   return $this->index();    }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($name)
   {
       $users= User::query()->select([
           'name','email','password'])->get();
       if (!$users){
           return response()->json([
               'data' => '',
               'msg' =>"NOT FOUND"
           ],404);
       }else{
           // return response()->json([
           //     'data' => $users,
           //     'msg' =>"SUCCESSFULLY"
           // ],200);
          try {
              return view('SignIn.all', compact('users'));
          }
           catch(Exception $exception){

           }
       }
              return view('SignIn.all', compact('users'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     
       $users= User::query()->where('id',$id)->first();
       if (!$users) {
        return response()->json([
               'msg' => "NOT FOUND",
           ],404);}
        else{
            return view("SignIn.edit", compact('users'));
        }       }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       $users= User::query()->where('id', $id)->first();
       if (!$users) {
           return response()->json([
               'msg' => "NOT FOUND",
           ], 200);
       }
     //  $tmp=['name'=>$request->name];
     //  $role->update($tmp);
     //  $role->save();
     //  return view("Role.all",compact('role'));
     //'name','email','identity_card','national_code','mobile','username','password','avatar'
   //,'role_id','major_id'
   $users->name=$request->name;
   $users->email=$request->email;
   $users->password=$request->password;

           // $users->password=$request->password;
           $users->save();
         return $this->index();    }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       User::query()->where('id', $id)->delete();
       return $this->index();
       }
}