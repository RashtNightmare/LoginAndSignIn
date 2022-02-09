<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        'test_id','user_id','type','action','description','balance'

        $user_logins= User::query()->select([
            'id', 'name', 'email', 'identity_card', 'national_code', 'mobile', 
            'username', 'password', 'avatar', 'role_id', 'major_id'
        ])->get();
        if (!$user_logins){
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
               return view('SignIn_Login.all', compact('user_logins'));
           }
            catch(Exception $exception){

            }
        }
        return view('SignIn_Login.all',compact('user_logins'));
    }

    
    public function show_login(Request $request)
    {
        //        'test_id','user_id','type','action','description','balance'

        $user_logins= User::query()->select([
            'id', 'name', 'email', 'identity_card', 'national_code', 'mobile', 
            'username', 'password', 'avatar', 'role_id', 'major_id'
        ])->where('name',$request->name)->where('password',$request->password)->get();
        if (count($user_logins) == 0){
            return view('SignIn_Login.login2');
        }else{
  
           try {
               return view('SignIn_Login.all', compact('user_logins'));
           }
            catch(Exception $exception){

            }
        } return view('SignIn_Login.all',compact('user_logins'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SignIn_Login.sign_in');
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
                'name'=>$request->name,
                'email'=>$request->email,
                'identity_card'=>$request->identity_card, 
                'national_code'=>$request->national_code, 
                'mobile'=>$request->mobile, 
                'username'=>$request->username, 
                'password'=>$request->password, 
                'avatar'=>$request->avatar,
                'role_id'=>$request->role_id, 
                'major_id'=>$request->major_id
            ]);
            return $users;
        } catch (Exception $exception) {
            return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
        }    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    //    //        'test_id','user_id','type','action','description','balance'

    //    $user_logins= User::query()->select([
    //     'id', 'name', 'email', 'identity_card', 'national_code', 'mobile', 
    //     'username', 'password', 'avatar', 'role_id', 'major_id'
    // ])->where('username',$request->username)->where('password',$request->password)->get();
    // if (!$user_logins){
    //     return response()->json([
    //         'data' => '',
    //         'msg' =>"NOT FOUND"
    //     ],404);
    // }else{
    //     // return response()->json([
    //     //     'data' => $users,
    //     //     'msg' =>"SUCCESSFULLY"
    //     // ],200);
    //    try {
    //        return view('SignIn_Login.all', compact('user_logins'));
    //    }
    //     catch(Exception $exception){

    //     }
    // }
    // return view('SignIn_Login.all',compact('user_logins'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_logins= User::query()->where('id',$id)->first();
        if (!$user_logins) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("SignIn_Login.edit", compact('user_logins'));
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
        $user_logins= User::query()->where('id', $id)->first();
        if (!$user_logins) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
      //  $tmp=['name'=>$request->name];
      //  $role->update($tmp);
      //  $role->save();
      //  return view("Role.all",compact('role'));
      //            'test_id','user_id','type','action','description','balance'

    //   'name', 'email', 'identity_card', 'national_code', 'mobile', 
    //   'username', 'password', 'avatar', 'role_id', 'major_id'

    $user_logins->name=$request->name;
    $user_logins->email=$request->email;
    $user_logins->identity_card=$request->identity_card;
    $user_logins->national_code=$request->national_code;
    $user_logins->mobile=$request->mobile;
    $user_logins->username=$request->username;
    $user_logins->password=$request->password;
    $user_logins->avatar=$request->avatar;
    $user_logins->role_id=$request->role_id;
    $user_logins->major_id=$request->major_id;

            // $users->password=$request->password;
            $user_logins->save();
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
