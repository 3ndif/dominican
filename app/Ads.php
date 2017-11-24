<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Observers\AdsObserver;

class Ads extends Model
{

    public static function boot(){
        self::observe(AdsObserver::class);

        parent::boot();
    }

    public function getRouteKeyName(){
      return 'slug';
    }

    public function catalog(){
        return $this->belongsTo(Category::class,'categories_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }

    public function images(){
        return $this->belongsToMany(\App\File::class,'ads_files','ads_id','files_id');
    }

    public function url(){
        return $this->hasOne(AdsUrl::class,'ads_id');
    }

    /**
     * Получить path для объявления
     * @example "/catalog/puteshestvie/aviabilety/proverka_na_slag_dlya_obyavleniya_15"
     */
    public function getFullUrlPath(){
        $catalogUrlPath = $this->catalog->getUrlPath();
        $adsUrlPath = $catalogUrlPath . '/' . $this->slug . '_' . $this->id;

        return $adsUrlPath;
    }
}
