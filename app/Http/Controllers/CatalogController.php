<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\Models\Catalog;

class CatalogController extends Controller
{

    public function catalog_old($categoriesSlug){

        $categories = explode('/', $categoriesSlug);
        $slug = array_pop($categories);

        $category = Category::where('categories.slug',$slug);

        if (count($categories) > 0){

            $category->leftJoin('categories as parent','categories.parent_id','=','parent.id')
                    ->select('categories.*')
                    ->where('parent.slug',$categories[0]);
        }

        $catalog = $category->firstOrFail();

        return view('pages.catalog.list')
                ->withCatalog($catalog)
                ->withTopCatalog($catalog->getTopCatalog());
    }

    public function catalog($slug1, $slug2 = null){
        $category = Category::where('categories.slug',$slug1);

        if ($slug2){
            $category->leftJoin('categories as child','categories.id','=','child.parent_id')
                ->select('categories.*')
                ->where('child.slug',$slug2);
        }

        $catalog = $category->firstOrFail();

        return view('pages.catalog.list')
                ->withCatalog($catalog)
                ->withTopCatalog($catalog->getTopCatalog());
    }
}
