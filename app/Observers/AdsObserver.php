<?php
namespace App\Observers;

use App\Ads;
use App\AdsUrl;

class AdsObserver
{

    public function created(Ads $ads)
    {
        $this->generateFullUrlPath($ads);
    }

    public function updated(Ads $ads)
    {
        $this->generateFullUrlPath($ads);
    }

    private function generateFullUrlPath(Ads $ads){
        $fullUrlPath = $ads->getFullUrlPath();
        $adsUrl = new AdsUrl;
        $adsUrl->url = $fullUrlPath;

        $ads->url()->save($adsUrl);
    }
}