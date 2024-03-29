<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function retrieve(){
        $user = auth()->user();
        if($user){
            $posts = Post::where("user_id", $user->id)->get();
        }else{
            $posts = [];
        }
        return view('home/posts', ['posts'=>$posts]);
    }

    public function create(Request $request){
        $user = auth()->user();
        $post = Post::create([
            'user_id'=> $user->id,
            'title'=> $request->title,
            'description'=> $request->description
        ]);
        return redirect("posts")->with("success","Post");
    }
}
