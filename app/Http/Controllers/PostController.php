<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $posts = Post::query()->select([
            'id','title','body','user_id'
        ])->get();

        return response()->json(['data' => $posts],200,[],JSON_NUMERIC_CHECK);
    }
}
