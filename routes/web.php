<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('/products',[ProductController::class,'products'] );
Route::get('/productdetail/{productname}/{productid}',[ProductController::class,'productdetail']);
Route::post('product/purchase', [ProductController::class,'purchase'])->name('product.purchase');
