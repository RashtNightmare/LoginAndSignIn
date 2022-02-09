<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Exception;
use Illuminate\Http\Request;

class TestController extends Controller
{  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       //`id`, `student_id`, `teacher_id`, `score`, `acceptance_quorum`, `amount`, `title`, 
       //`major_id`, `lesson_id`, `date`, `duration`, `start_time`

       $tests= Test::query()->select([
           'id', 'student_id', 'teacher_id', 'score', 'acceptance_quorum', 'amount', 'title'
           , 'major_id', 'lesson_id', 'date', 'duration', 'start_time'
       ])->get();
       if (!$tests){
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
              return view('Test.all', compact('tests'));
          }
           catch(Exception $exception){

           }
       }
       return view('Test.all',compact('tests'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('Test.create');
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
           $tests=Test::create([
               'student_id'=>$request->student_id,
               'teacher_id'=>$request->teacher_id,
               'score'=>$request->score, 
               'acceptance_quorum'=>$request->acceptance_quorum, 
               'amount'=>$request->amount, 
               'title'=>$request->title, 
               'major_id'=>$request->major_id, 
               'lesson_id'=>$request->lesson_id, 
               'date'=>$request->date, 
               'duration'=>$request->duration, 
               'start_time'=>$request->start_time, 
           ]);
           return $tests;
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
       $tests= Test::query()->where('id',$id)->first();
       if (!$tests) {
        return response()->json([
               'msg' => "NOT FOUND",
           ],404);}
        else{
            return view("Test.edit", compact('tests'));
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
       $tests= Test::query()->where('id', $id)->first();
       if (!$tests) {
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

   $tests->student_id=$request->student_id;
   $tests->teacher_id=$request->teacher_id;
   $tests->score=$request->score;
   $tests->acceptance_quorum=$request->acceptance_quorum;
   $tests->amount=$request->amount;
   $tests->title=$request->title;
   $tests->major_id=$request->major_id;
   $tests->lesson_id=$request->lesson_id;
   $tests->date=$request->date;
   $tests->duration=$request->duration;
   $tests->start_time=$request->start_time;
           // $users->password=$request->password;
           $tests->save();
         return $this->index();    }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
    Test::query()->where('id', $id)->delete();
       return $this->index();
       }
}
