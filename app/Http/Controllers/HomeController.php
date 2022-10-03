<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Product;
class HomeController extends Controller
{
    public function show(){
        $product = new Product();
//        $media = Product::all();
//        $images = $media->getMedia("main-image");
//        $images = Product::where("id","1")->map(function($product) {
//            return $product->getMedia('main-image');
//        })->flatten();
        $main_image = $product->first()->getMedia("main-image");
        var_dump($main_image[0]->getFullUrl());
        $featured_products = $product->where("is_featured","1")->get();
        return view("home", ["featured_products"=>$featured_products, "main_images"=>$main_image]);
    }
    //
}
