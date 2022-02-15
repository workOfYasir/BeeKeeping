<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/testview',[ProductController::class,'test']);
Route::get('/ap', function () {
    return view('addproduct');
});

Route::post('/comments',[ProductController::class,'comments'])->name('comment');

Route::get('/products/category/{cat_id}/{type_id}',[ProductController::class,'categoryProducts'])->name('categoryProducts');
Route::get('/product/category/{cat_id}',[ProductController::class,'categoryProduct'])->name('categoryProduct');


Route::get('/blog/detail/{id}',[ProductController::class,'detailBlog'])->name('blog.detail');
Route::get('/blog/all',[ProductController::class,'showBlog'])->name('blog.all');
Route::post('/storeproduct',[ProductController::class,'store']);
Route::get('/product/{id}',[ProductController::class,'show']);

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('/rating/{post}', [ProductController::class,'postStar'])->name('productStar');
Auth::routes();

