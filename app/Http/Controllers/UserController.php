<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        'test_id','user_id','type','action','description','balance'

        $users= User::query()->select([
            'id', 'name', 'email', 'identity_card', 'national_code', 'mobile', 
            'username', 'password', 'avatar', 'role_id', 'major_id'
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
               return view('User.all', compact('users'));
           }
            catch(Exception $exception){

            }
        }
        return view('User.all',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.create');
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
    public function show($id)
    {
    //    //        'test_id','user_id','type','action','description','balance'

    //    $users= User::query()->select([
    //     'id', 'name', 'email', 'identity_card', 'national_code', 'mobile', 
    //     'username', 'password', 'avatar', 'role_id', 'major_id'
    // ])->get();
    // if (!$users){
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
    //        return view('User.all', compact('users'));
    //    }
    //     catch(Exception $exception){

    //     }
    // }
    // return view('User.all',compact('users'));
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
             return view("User.edit", compact('users'));
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
      //            'test_id','user_id','type','action','description','balance'

    //   'name', 'email', 'identity_card', 'national_code', 'mobile', 
    //   'username', 'password', 'avatar', 'role_id', 'major_id'

    $users->name=$request->name;
    $users->email=$request->email;
    $users->identity_card=$request->identity_card;
    $users->national_code=$request->national_code;
    $users->mobile=$request->mobile;
    $users->username=$request->username;
    $users->password=$request->password;
    $users->avatar=$request->avatar;
    $users->role_id=$request->role_id;
    $users->major_id=$request->major_id;

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
