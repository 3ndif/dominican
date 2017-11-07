<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public static function table(){
        return (new self)->getTable();
    }

    public function children(){
        return $this->hasMany(self::class,'parent_id');
    }

    public function parentCategory(){
        return $this->belongsTo(self::class,'parent_id');
    }

    public function hasParent(){
        return !is_null($this->parent_id);
    }

    /**
     * Получить основные категории
     */
    public static function getMain(){
        return Category::with('children')->whereNull('parent_id')->get();
    }

    public function getTopCatalog(){
        if (!$this->hasParent()){
            return $this;
        }

        return $this->parentCategory;
    }
}
