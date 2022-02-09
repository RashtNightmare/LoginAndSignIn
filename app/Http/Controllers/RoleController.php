<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Exception;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // `id`, `name`, `remember_token`, `created_at`, `updated_at`
        $roles= Role::query()->select([
            'id', 'name'
        ])->get();
        if (!$roles){
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
               return view('Role.all', compact('roles'));
           }
            catch(Exception $exception){
 
            }
        }
        return view('Role.all',compact('roles'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Role.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 // 'student_id', 'teacher_id', 'score', 'acceptance_quorum', 'amount', 'title'
 // , 'major_id', 'lesson_id', 'date', 'duration', 'start_time'
 
        try {
            $roles=Role::create([
                'name'=>$request->name,
            ]);
            return $roles;
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
    // //'user_id', 'test_id', 'score', 'status', 'paid', 'canceled'
 
 
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
     *+
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles= Role::query()->where('id',$id)->first();
        if (!$roles) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Role.edit", compact('roles'));
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
        $roles= Role::query()->where('id', $id)->first();
        if (!$roles) {
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
 
 // 'student_id', 'teacher_id', 'score', 'acceptance_quorum', 'amount', 'title'
 // , 'major_id', 'lesson_id', 'date', 'duration', 'start_time'
 
    $roles->name=$request->name;

            // $users->password=$request->password;
            $roles->save();
          return $this->index();    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::query()->where('id', $id)->delete();
        return $this->index();
        }
 }
 