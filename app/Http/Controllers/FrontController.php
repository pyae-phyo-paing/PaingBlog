<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class FrontController extends Controller
{
    public function blogHome()
    {
        $latestpost = Post::latest()->first();
        $id = $latestpost->id;
        $posts = Post::where('id','!=',$id)->orderBy('id','DESC')->paginate(4);
        $categories = Category::all();
        return view('front.blog-home',compact('posts','categories','latestpost'));
    }

    public function blogPost($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('front.blog-post',compact('post','categories'));
    }

    public function categoryPost($categoryId){
        $categoryPosts = Post::where('category_id',$categoryId)->orderBy('id','DESC')->paginate(8);
        $categories = Category::all();
        return view('front.category-post',compact('categoryPosts','categories'));
    }

}
