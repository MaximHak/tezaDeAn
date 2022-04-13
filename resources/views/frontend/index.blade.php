@extends('frontend.layouts.master')
@section('content')
    <section class="header-style-1">
        <div class="header-big">
            <div class="header-items-active">
                @if(count($banners) > 0)
                    @foreach($banners as $banner)
                        <div class="single-header-item bg_cover"
                             style="background-image: url({{$banner->photo}});">
                            <div class="header-item-content">
                                <h3 class="title">{{$banner->title}}</h3>
                                <a href="javascript:void(0)" class="link">{!! html_entity_decode($banner->description) !!}</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="header-min">
            <div class="header-min-item product-style-25 bg_cover"
                 style="background-image: url({{asset('frontend/assets/images/header-1/header-min-1.jpg')}});">
                <div class="product-content">
                    <h4 class="title"><a href="product-details-page.html">Metro 38 Date</a></h4>
                    <p>Reference 1102</p>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border"> <img
                            src="{{asset('frontend/assets/images/icon-svg/cart-5.svg')}}" alt="">$
                        399</a>
                </div>
            </div>
            <div class="header-min-item product-style-25 bg_cover"
                 style="background-image: url({{asset('frontend/assets/images/header-1/header-min-2.jpg')}});">
                <div class="product-content">
                    <h4 class="title"><a href="product-details-page.html">Metro 38 Date</a></h4>
                    <p>Reference 1102</p>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border"> <img
                            src="{{asset('frontend/assets/images/icon-svg/cart-5.svg')}}" alt="">$
                        399</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content-card-style-4 pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-truck-fast"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Two-hour delivery</a></h4>
                            <p>Available in most metros on selected in-stock products</p>
                            <a href="javascript:void(0)" class="more">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-message-text"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Get help buying</a></h4>
                            <p>Have a question? Call a Specialist or chat online for help</p>
                            <a href="contact-page.html" class="more">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-ticket-percent"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Find the card for you</a></h4>
                            <p>Get 3% Daily Cash with special financing offers from us</p>
                            <a href="javascript:void(0)" class="more">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
