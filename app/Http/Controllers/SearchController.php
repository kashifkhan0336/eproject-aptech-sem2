<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SearchController extends Controller
{
    public function search($term)
    {
        $allProducts = Product::search($term)->get();
        return view("product.search-results", ["allProducts"=>$allProducts]);
    }
    //
}
