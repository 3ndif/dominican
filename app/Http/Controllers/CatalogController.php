<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Category;

class CatalogController extends Controller
{

    public function catalog($categories){

        $categories = explode('/', $categories);
        $slug = array_pop($categories);

        $category = Category::where('categories.url',$slug);

        if (count($categories) > 0){

            $category->leftJoin('categories as parent','categories.parent_id','=','parent.id')
                    ->select('categories.*')
                    ->where('parent.url',$categories[0]);
        }

        $catalog = $category->firstOrFail();

        return view('pages.catalog.list')
                ->withCatalog($catalog)
                ->withTopCatalog($catalog->getTopCatalog());
    }
}
