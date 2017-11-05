<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function profile(Request $request, \App\User $user){
        return view('pages.user.profile')->withUser($user);
    }

    public function myProfile(){
        return view('pages.user.myprofile')->withUser(Auth::user());
    }
}
