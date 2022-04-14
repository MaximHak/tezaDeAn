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
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [IndexController::class, 'home'])->name('home');
//EndFront

});

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
