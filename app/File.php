<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    public function getAdsImg(){
        return '/images/uploads/'.$this->name.'.'.$this->ext;
    }
}
