<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(Request $request, \App\User $user){
        return view('pages.user.profile')->withUser($user);
    }

    public function myProfile(){
        return view('pages.user.myprofile')->withUser(Auth::user());
    }
}
