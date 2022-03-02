<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
  
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        'test_id','user_id','type','action','description','balance'


        $comments=Comment::query()->select(['id','body'])->where('commentable_type','App\Models\Video')->get();   
        $videos_1= Video::query()->select([
            'id','title'
           ])->get();
        $videos=[$comments,$videos_1];   

        if (!$videos){
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
               return view('Video.all', compact('videos'));
           }
            catch(Exception $exception){

            }
        }
        return view('Video.all',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {            
        $userCheck=new CheckPermissionController();  
        if ($userCheck->user_can('write post') || $userCheck->user_can('editor')) {
        return view('Video.create');}else{
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
         try {
              $videos=Video::create([
                'title' => $request->title,
            ]);

              if ($videos) {
                  $id= Video::query()->select([
                    'id'
                 ])->where('title', $request->title)->get();
                  $id2=$id[0]['id'];
                  Comment::create([
                    'body' => $request->body,
                    'commentable_id' => $id2,
                    'commentable_type' => Video::class
                ]);
                  return $this->index();
              }
          } catch (Exception $exception) {
              return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
          }
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $users= User::query()->select([
        //     'name','email','identity_card','national_code','mobile','username','password','avatar'
        //     ,'role_id','major_id'
        // ])->with('role')->get();
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
        //        return view('User.all', compact('users'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userCheck=new CheckPermissionController();  
      if ($userCheck->user_can('editor')) {
     $comments=Comment::query()->select(['id','body'])->where('commentable_type','App\Models\Video')->get();   
        $videos_1= Video::query()->select([
            'id','title'
           ])->get();
        $videos=[$comments,$videos_1];   
        if (!$videos) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Video.edit", compact('videos'));
         }  }else{
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
        $videos= Video::query()->where('id', $id)->first();
        if (!$videos) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
        $comments= Comment::query()->where('commentable_id', $id)->where('commentable_type', 'App\Models\Video')->first();
 
        if (!$comments) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
    $videos->title=$request->title;
    $comments->body=$request->body;
    $comments->save();

     // $users->password=$request->password;
            $videos->save();
          return $this->index();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::query()->where('id', $id)->delete();
        Comment::query()->where('commentable_id', $id)->where('commentable_type', 'App\Models\Video')->delete();

        return $this->index();
        }
}
