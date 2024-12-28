<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function userProfile($id){
        $user = User::find($id);
        return view('admin.users.profile',compact('user'));
    }
}
