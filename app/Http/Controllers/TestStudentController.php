<?php

namespace App\Http\Controllers;

use App\Models\TestStudent;
use Exception;
use Illuminate\Http\Request;

class TestStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //`id`, `user_id`, `test_id`, `score`, `status`, `paid`, `canceled`, `created_at`, `updated_at`

        $test_students= TestStudent::query()->select([
            'id', 'user_id', 'test_id', 'score', 'status', 'paid', 'canceled'
        ])->get();
        if (!$test_students){
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
               return view('TestStudent.all', compact('test_students'));
           }
            catch(Exception $exception){

            }
        }
        return view('TestStudent.all',compact('test_students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TestStudent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//'user_id', 'test_id', 'score', 'status', 'paid', 'canceled'

        try {
            $test_students=TestStudent::create([
                'user_id'=>$request->user_id,
                'test_id'=>$request->test_id,
                'score'=>$request->score, 
                'status'=>$request->status, 
                'paid'=>$request->paid, 
                'canceled'=>$request->canceled, 
            ]);
            return $test_students;
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
        $test_students= TestStudent::query()->where('id',$id)->first();
        if (!$test_students) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("TestStudent.edit", compact('test_students'));
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
        $test_students= TestStudent::query()->where('id', $id)->first();
        if (!$test_students) {
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

    //'user_id', 'test_id', 'score', 'status', 'paid', 'canceled'

    $test_students->user_id=$request->user_id;
    $test_students->test_id=$request->test_id;
    $test_students->score=$request->score;
    $test_students->status=$request->status;
    $test_students->paid=$request->paid;
    $test_students->canceled=$request->canceled;
            // $users->password=$request->password;
            $test_students->save();
          return $this->index();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TestStudent::query()->where('id', $id)->delete();
        return $this->index();
        }
}
