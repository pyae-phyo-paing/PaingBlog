<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function blogHome()
    {
        return view('front.blog-home');
    }

    public function blogPost($id)
    {
        return view('front.blog-post');
    }
}
