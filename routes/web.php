<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('customer-login');
});
Route::get('/customer/login', [UsersController::class, 'loginIndex']);
Route::post('/customer/login', [UsersController::class, 'login']);
Route::get('/customer/register', [UsersController::class, 'registerIndex']);
Route::post('/customer/register', [UsersController::class, 'register']);
#Route::match(array('GET','POST'),'/customer/register', [UsersController::class, 'register']);
