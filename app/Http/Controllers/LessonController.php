<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Exception;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // `id`, `name`, `remember_token`, `created_at`, `updated_at`
        $lessons= Lesson::query()->select([
            'id', 'name', 'major_id'
        ])->get();
        if (!$lessons){
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
               return view('Lesson.all', compact('lessons'));
           }
            catch(Exception $exception){
 
            }
        }
        return view('Lesson.all',compact('lessons'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userCheck=new CheckPermissionController();  
        if ($userCheck->user_can('editor')) {
         return view('Lesson.create');
   }else{
        return $this->index();
    }

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
            Lesson::create([
                'name'=>$request->name,
                'major_id'=>$request->major_id,
            ]);
            return $this->index();        } catch (Exception $exception) {
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
        $userCheck=new CheckPermissionController();  
        if ($userCheck->user_can('editor')) {
  
        $lessons= Lesson::query()->where('id',$id)->first();
        if (!$lessons) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Lesson.edit", compact('lessons'));
         }    }else{
        return $this->index();
    }
     }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lessons= Lesson::query()->where('id', $id)->first();
        if (!$lessons) {
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
 
    $lessons->name=$request->name;
    $lessons->major_id=$request->major_id;

            // $users->password=$request->password;
            $lessons->save();
          return $this->index();    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lesson::query()->where('id', $id)->delete();
        return $this->index();
        }
 }
 