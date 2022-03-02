<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Comment;
use Exception;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
   
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        'test_id','user_id','type','action','description','balance'
        $comments=Comment::query()->select(['id','body'])->where('commentable_type','App\Models\Photo')->get();   
        $photos_1= Photo::query()->select([
            'id','file_name'
           ])->get();
        $photos=[$comments,$photos_1];   
        if (!$photos){
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
               return view('Photo.all', compact('photos'));
           }
            catch(Exception $exception){

            }
        }
        return view('Photo.all',compact('photos'));
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
          return view('Photo.create');
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
        try {
            $photos=Photo::create([
                'file_name' => $request->file_name,
            ]);

            if($photos){
                $id= Photo::query()->select([
                    'id'
                 ])->where('file_name',$request->file_name)->get();
                $id2=$id[0]['id'];
                Comment::create([
                    'body' => $request->body,
                    'commentable_id' => $id2,
                    'commentable_type' => Photo::class
                ]);

                return $this->index();                               
            }
            

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
          $comments=Comment::query()->select(['id','body'])->where('commentable_type','App\Models\Photo')->get();   
        $photos_1= Photo::query()->select([
            'id','file_name'
           ])->get();
        $photos=[$comments,$photos_1]; 

        if (!$photos) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],404);}
         else{
             return view("Photo.edit", compact('photos'));
         }
        }else{
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
        $photos= Photo::query()->where('id', $id)->first();
        if (!$photos) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }

        $comments= Comment::query()->where('commentable_id', $id)->where('commentable_type', 'App\Models\Photo')->first();
        if (!$photos) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
        if (!$comments) {
            return response()->json([
                'msg' => "NOT FOUND",
            ], 200);
        }
      //  $tmp=['name'=>$request->name];
      //  $role->update($tmp);
      //  $role->save();
      //  return view("Role.all",compact('role'));
    //        'text','option1','option2','option3','option4','true_answer','test_id'

    $photos->file_name=$request->file_name;
     
    // $users->password=$request->password;
            $photos->save();
            $comments->body=$request->body;
     
            // $users->password=$request->password;
                    $comments->save();

          return $this->index();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Photo::query()->where('id', $id)->delete();
        Comment::query()->where('commentable_id', $id)->where('commentable_type', 'App\Models\Photo')->delete();
        return $this->index();
        }
}
