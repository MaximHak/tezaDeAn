<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function home(){

        $user = Auth::user();
        $banners = Banner::where(['status'=>'active','condition'=>'banner'])->orderBy('id','DESC')->limit('3')->get();
        $promos = Banner::where(['status'=>'active','condition'=>'promo'])->orderBy('id','DESC')->limit('3')->get();
        $categories = Category::where(['status'=>'active','is_parent'=>1])->limit(3)->orderBy('id','DESC')->get();
        $vendors = User::where(['status'=>'active','role'=>'seller'])->limit(5)->orderBy('id','DESC')->get();
        $user_city = City::where('id',$user->city_id)->get();

        return view('frontend.index',compact(['banners','categories','promos','vendors','user','user_city']));
    }
}
