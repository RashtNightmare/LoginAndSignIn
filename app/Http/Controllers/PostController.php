<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        'test_id','user_id','type','action','description','balance'
       if(Auth::guard('web')->check()){
        $posts=Post::query()->select(['id','title','body'])->get();   
          

        if (!$posts){
            return response()->json([
                'data' => '',
                'msg' =>"NOT FOUND"
            ],404);
        }else{
           
           try {
               return view('Post.all', compact('posts'));
           }
            catch(Exception $exception){

            }
        }
        return view('Post.all', compact('posts'));
       }else{
        return '<script>window.alert("You\'re Not Authenticated Yet")</script>';
    }  

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        if (Auth::guard('web')->check()) {
            $userCheck=new CheckPermissionController();
            if ($userCheck->user_can('editor') || $userCheck->user_can('admin')) {
                return view('Post.create');
            } else {
                return $this->index();
            }
        }else{
            return '<script>window.alert("You\'re Not Authenticated Yet")</script>';
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
        if (Auth::guard('web')->check()) {
            try {
                $post=Post::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);

                if ($post) {
                    return $this->index();
                }
            } catch (Exception $exception) {
                return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
            }
        }else{
            return '<script>window.alert("You\'re Not Authenticated Yet")</script>';
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
        if(Auth::guard('web')->check()){

        $userCheck=new CheckPermissionController();  
      if ($userCheck->user_can('editor') || $userCheck->user_can('admin')) {
        $posts= Post::query()->select([
           'id', 'title','body'
           ])->where('id',$id)->get();
        if (!$posts) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Post.edit", compact('posts'));
         }  }else{
             return $this->index();
         }      }else{
            return '<script>window.alert("You\'re Not Authenticated Yet")</script>';

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
        if(Auth::guard('web')->check()){

        $posts= Post::query()->where('id', $id)->first();
        if (!$posts) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
    $posts->title=$request->title;
    $posts->body=$request->body;
    $posts->save();
          return $this->index();    }else{
            return '<script>window.alert("You\'re Not Authenticated Yet")</script>';

        }  
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::guard('web')->check()) {
            $userCheck=new CheckPermissionController();  
            if ($userCheck->user_can('admin')) {
                Post::query()->where('id', $id)->delete();
             
                return $this->index();
            }else{
                return $this->index(); 
            } }else{
            return '<script>window.alert("You\'re Not Authenticated Yet")</script>';
        }        }
}
