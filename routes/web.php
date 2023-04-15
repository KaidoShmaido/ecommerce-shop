<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\frontend\Rating;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\frontend\RatingController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\FrontendHomeController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[FrontendHomeController::class,'index']);
Route::get('/category',[FrontendHomeController::class,'category']);
Route::get('/view-category/{slug}',[FrontendHomeController::class,'viewcategory']);
Route::get('/category/{cate_slug}/{prod_slug}',[FrontendHomeController::class,'productview']);


Route::get('product-list',[FrontendHomeController::class,'productlistAjax']);
Route::get('Searchproduct',[FrontendHomeController::class,'searchPro']);




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('add-to-cart',[CartController::class,"add_product"]);
Route::post('delete-cart-item',[CartController::class,"deleteProduct"]);
Route::post('update-cart',[CartController::class,"updatecart"]);


Route::post('load-cart-data',[CartController::class,"cartcount"]);
Route::post('load-wishlist-data',[WishlistController::class,"wishlistCount"]);

Route::get('add-to-wishlist',[WishlistController::class,'add']);
Route::post('remove-wishlist-item',[WishlistController::class,'delete_item']);





Route::middleware(['auth'])->group(function () {
   Route::get('cart',[CartController::class,"viewCart"]);
   Route::get('checkout',[CheckoutController::class,"index"]);
   Route::post('place-order',[CheckoutController::class,"placeorder"]);
   Route::get('wishlist',[WishlistController::class,'index']);
   Route::put('/add-rating',[RatingController::class,'add']);
   Route::get('my-orders',[UserController::class,'index']);
   Route::get('view-order/{id}',[UserController::class,'view']);



});


 Route::middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard',[FrontendController::class, 'index']);
    Route::get('categories',[CategoryController::class, 'index']);
    Route::get('add-category',[CategoryController::class, 'add']);

    Route::post("insert-category",[CategoryController::class,'insert']);
    Route::get('edit-category/{id}',[CategoryController::class,'edit']);
    Route::get('update-category/{id}',[CategoryController::class,'update']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroy']);


    Route::get('products',[ProductController::class,'index']);
    Route::get('add-product',[ProductController::class,'add']);
    Route::post('insert-product',[ProductController::class,'insert']);

    Route::get('edit-product/{id}',[ProductController::class,'edit']);
    Route::post('update-product/{id}',[ProductController::class,'update']);
    Route::get('delete-product/{id}',[ProductController::class,'destroy']);

    Route::get('users', [FrontendController::class,'users']);

    Route::get('orders',[OrderController::class,'index']);
    Route::get('/admin/view-order/{id}',[OrderController::class,'view']);
    Route::put('update-order/{id}',[OrderController::class,'updateorder']);

    Route::get('order-history',[OrderController::class,'orderhistory']);
    Route::get('users',[DashboardController::class,'users']);
    Route::get('view-users/{id}',[DashboardController::class,'viewuser']);







 
    
 
 });