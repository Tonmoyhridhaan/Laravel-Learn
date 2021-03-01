<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function all(){
        //$products = Product::all();

        // $products = Product::join ('categories', 'products.category_id','category_id')
        //             ->select('products.name as product','products.price','categories.name as category')
        //             ->get(); #eloquent query; ORM

        # query builder

        $products = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->select('products.name as product','products.price','categories.name as category')
                    ->get();
        return view('products.all',compact('products'));
    }
}
