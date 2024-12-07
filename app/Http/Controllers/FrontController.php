<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
    public function blogHome()
    {
        $posts = Post::orderBy('id','DESC')->paginate(4);
        $latestpost = Post::orderBy('id','DESC')->first();
        return view('front.blog-home',compact('posts','latestpost'));
    }

    public function blogPost($id)
    {
        $post = Post::find($id);
        return view('front.blog-post',compact('post'));
    }
}
