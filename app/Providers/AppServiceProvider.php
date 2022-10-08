<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
class   AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category = new Category();
        $product = new Product();
        $categories = collect($category::all())->map(function ($category){
            return $category;
        });
        $featured_products = collect($product::where("is_featured", "1")->get())->map(function ($product){
            $product["main_image"] = $product->getMedia("main-image")[0]->getFullUrl("thumb");
            return $product;

        });
        View::share("categories",$categories);
        View::share("featured_products",$featured_products);
        //
    }
}
