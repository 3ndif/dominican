<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsUrl extends Model
{
    protected $table = 'ads_url';

    public function getRouteKeyName(){
      return 'url';
    }

    public function ads(){
        return $this->belongsTo(Ads::class,'ads_id');
    }
}
