<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ads;
use App\AdsUrl;

class AdsController extends Controller
{

    public function viewCreate(){
        return view('pages.ads.new');
    }

    public function single(Request $request, AdsUrl $adsUrl){
        $ads = $adsUrl->ads;
        return view('pages.ads.single')->withAds($ads);
    }
}
