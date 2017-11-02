<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('pages.main.index');
    }

    public function catalog(){
        return view('pages.ads.catalog');
    }
}
