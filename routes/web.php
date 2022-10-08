<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'show']);
Route::get("/category/{id}", [CategoryController::class, 'show'])->name("category.show");
Route::get("/product/{id}", [ProductController::class, 'show'])->name("product.show");
Route::get("/products", [ProductController::class, 'allProducts'])->name("product.all");
Route::get("/feedback", [FeedbackController::class, 'show'])->name("feedback.show");
Route::post("/add_feedback", [FeedbackController::class, 'create'])->name("feedback.store");
Route::get("/search/{query}",[SearchController::class, 'search'])->name("search");
#Route::resource("category", "CategoryController");
Route::get("/login-signup", [CustomerController::class, 'show'])->name("customer.login-signup");
Route::post('/login-customer', [CustomerController::class, 'login'])->name("login-customer");
Route::post('/register-customer', [CustomerController::class, 'register'])->name("register-customer");
Route::get("/account", [CustomerController::class, 'account'])->name("customer-account")->middleware("auth:customer");
Route::get("/cart", [CartController::class, 'index'])->name("customer-cart")->middleware("auth:customer");
Route::get("/logout", [CustomerController::class, 'logout'])->name("customer-logout")->middleware("auth:customer");
Route::get("/cart/add/{product_id}", [CartController::class, 'store'])->name("customer-cart-add")->middleware("auth:customer");
Route::get("/cart/remove/{product_id}", [CartController::class, 'destroy'])->name("customer-cart-remove")->middleware("auth:customer");
#Route::match(array('GET','POST'),'/customer/register', [UsersController::class, 'register']);
