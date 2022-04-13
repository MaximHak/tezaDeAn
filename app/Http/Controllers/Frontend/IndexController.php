<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        $banners = Banner::where(['status'=>'active','condition'=>'banner'])->orderBy('id','DESC')->limit('3')->get();
        $categories = Category::where(['status'=>'active','is_parent'=>1])->limit(3)->orderBy('id','DESC')->get();
        return view('frontend.index',compact(['banners','categories']));
    }
}
