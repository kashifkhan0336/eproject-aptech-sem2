<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    public function show(){
        $product = new Product();
        $category = new Category();
//        $media = Product::all();
//        $images = $media->getMedia("main-image");
//        $images = Product::where("id","1")->map(function($product) {
//            return $product->getMedia('main-image');
//        })->flatten();
        $featured_products = collect($product::where("is_featured", "1")->get())->map(function ($product){
           $product["main_image"] = $product->getMedia("main-image")[0]->getFullUrl("thumb");
           return $product;

        });
        $products = collect($product::all())->map(function ($product){
            return $product;
        });
        $categories = collect($category::all())->map(function ($category){
            return $category;
        });
        #var_dump($main_image[0]->getFullUrl());
        #var_dump($main_image[0]->getFullUrl("thumb"));
        #var_dump($featured_products);
        #$featured_products = $product->where("is_featured","1")->get();
        return view("home", ["all_products"=>$products]);
    }
    //
}
