<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class FrontController extends Controller
{
    public function blogHome()
    {
        $posts = Post::orderBy('id','DESC')->paginate(4);
        $latestpost = Post::orderBy('id','DESC')->first();
        $categories = Category::all();
        return view('front.blog-home',compact('posts','latestpost','categories'));
    }

    public function blogPost($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('front.blog-post',compact('post','categories'));
    }
}
