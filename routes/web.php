<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerControler;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorCategoriesController;
use Illuminate\Support\Facades\Auth;
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


//FrontEnd
//Route::group(['middleware' => 'auth'], function () {
Route::get('/', [IndexController::class, 'home'])->name('home');

//Product get
    Route::get('products',[IndexController::class,'productCategory'])->name('products');
    Route::post('productList',[IndexController::class,'productList'])->name('update.product.list');
    Route::get('getProductByID/{id}',[IndexController::class,'getProductByID'])->name('product.getProductByID');
    Route::get('checkout',[IndexController::class,'checkout'])->name('checkout');
    Route::post('orderConfirmation',[IndexController::class,'orderConfirmation'])->name('order_confirmation');
    Route::get('contact',[IndexController::class,'contact'])->name('contact');
    Route::post('contact_send',[IndexController::class,'contactSend'])->name('contact.create');
//EndFront

    //Cart
    Route::get('cart', [\App\Http\Controllers\Frontend\ProductController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [\App\Http\Controllers\Frontend\ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [\App\Http\Controllers\Frontend\ProductController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [\App\Http\Controllers\Frontend\ProductController::class, 'remove'])->name('remove.from.cart');
    //
//});

Auth::routes(['register' => true]);



//Admin dashboard
Route::group(['prefix' => 'admin/', 'middleware' => ['auth','admin']], function () {
    Route::get('/', [AdminController::class, 'admin'])->name('admin');

    //Banner
    Route::resource('banner', BannerControler::class);
    Route::post('banner_status', [BannerControler::class, 'bannerStatus'])->name('banner.status');

    //Category
    Route::resource('category', CategoryController::class);
    Route::post('category_status', [CategoryController::class, 'categoryStatus'])->name('category.status');
    Route::post('category/{id}/child', [CategoryController::class, 'getChildByParentID']);

    //Brand
    Route::resource('brand', BrandController::class);
    Route::post('brand_status', [BrandController::class, 'brandStatus'])->name('brand.status');

    //Product
    Route::resource('product', ProductController::class);
    Route::post('product_status', [ProductController::class, 'productStatus'])->name('product.status');

    //User
    Route::resource('user', UserController::class);
    Route::post('user_status', [UserController::class, 'userStatus'])->name('user.status');

    //Vendor Categories
    Route::resource('city', CityController::class);
    Route::post('city_status', [CityController::class, 'cityStatus'])->name('city.status');


});

Route::group(['prefix' => 'seller/', 'middleware' => ['auth','seller']], function () {
    Route::get('/', [AdminController::class, 'admin'])->name('seller');
});
