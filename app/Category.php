<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public static function table(){
        return (new self)->getTable();
    }

    /**
     * Подкатегории
     */
    public function children(){
        return $this->hasMany(self::class,'parent_id');
    }

    /*
     * Родительский каталог
     */
    public function parentCategory(){
        return $this->belongsTo(self::class,'parent_id');
    }

    /**
     * Объявления привязанные к текущему каталогу
     */
    public function ads(){
        return $this->hasMany(Ads::class,'categories_id');
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

    /**
     * Получить главный каталог по отношению к текущему
     */
    public function getTopCatalog(){
        if (!$this->hasParent()){
            return $this;
        }

        return $this->parentCategory;
    }

    /**
     * Получить все объявление текущего и дочерних каталогов
     */
    public function fullTreeAds(){
        $catalogIds = $this->children()
                ->select('id')
                ->get()
                ->toArray();

        $ids = [];

        foreach ($catalogIds as $id){
            $ids[] = $id['id'];
        }

        $ids[] = $this->id;

        return Ads::whereIn('categories_id',$ids)->get();
    }

    /**
     * Поучить полный url
     * @example catalog/category1/category2?
     */
    public function getUrlPath(){
        $parent = $this->parentCategory;

        $params = [
            'slug1' => $this->slug
        ];

        if ($parent){
            $params = [
                'slug1' => $parent->slug,
                'slug2' => $this->slug
            ];
        }

        return ltrim(route('catalog',$params,false), '/');
    }
}
