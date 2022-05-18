@extends('frontend.layouts.master')
@section('content')
    <main class="site-main">

        <!--================ Hero banner start =================-->
        <section class="hero-banner">
            <div class="container">
                <div class="row no-gutters align-items-center pt-60px">
                    <div class="col-5 d-none d-sm-block">
                        <div class="hero-banner__img">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/home/hero-banner.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                        <div class="hero-banner__content">
                            <h4>Cumpărăturile sunt distractive</h4>
                            <h1>Răsfoiți produsele noastre</h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Hero banner start =================-->


        <!-- ================ trending product section start ================= -->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Articole populare pe piață</p>
                    <h2>Produse <span class="section-intro__style">noi</span></h2>
                </div>
                <div class="row">

                    @foreach($new_products as $product)
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card text-center card-product">
                                <div class="card-product__img">
                                    <img class="card-img" src="{{ $product->photo }}" alt="">
                                    <ul class="card-product__imgOverlay">
                                        <li>
                                            <button><i class="ti-search"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="ti-shopping-cart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="ti-heart"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <p>{{\App\Models\User::where('id',$product->vendor_id)->pluck('username')->first()}}</p>
                                    <h4 style="height: 60px;" class="card-product__title"><a
                                            href="{{route('product.getProductByID',$product->id)}}">{{ $product->title }}</a>
                                    </h4>
                                    @if($product->offer_price === NULL)
                                        <p class="card-product__price">{{ $product->price }} MDL</p>
                                    @else
                                        <p style="text-decoration: line-through;"
                                           class="card-product__price">{{ $product->price }} MDL</p>
                                        <p style="color: red;" class="card-product__price">{{ $product->offer_price }}
                                            MDL</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- ================ trending product section end ================= -->


        <!-- ================ offer section start ================= -->
        <section class="offer" id="parallax-1" data-anchor-target="#parallax-1"
                 data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="offer__content text-center">
                            <h3>Până la 50% reducere</h3>
                            <h4>Reduceri de vară</h4>
                            <p>Nu rata oferta</p>
                            <a class="button button--active mt-3 mt-xl-4" href="{{route('products')}}">Cumpără acum</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ offer section end ================= -->

        <!-- ================ Best Selling item  carousel ================= -->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Articole populare pe piață</p>
                    <h2>Cele <span class="section-intro__style">mai vandute</span></h2>
                </div>
                <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                    @foreach($popular_products as $product)
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="img-fluid" style="width: 100%!important;height: auto!important;" src="{{$product->photo}}" alt="">
                                <ul class="card-product__imgOverlay">
                                    <li>
                                        <button><i class="ti-search"></i></button>
                                    </li>
                                    <li>
                                        <button><i class="ti-shopping-cart"></i></button>
                                    </li>
                                    <li>
                                        <button><i class="ti-heart"></i></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <p>{{\App\Models\User::where('id',$product->vendor_id)->pluck('username')->first()}}</p>
                                <h4  style="height: 60px;" class="card-product__title"><a
                                        href="{{route('product.getProductByID',$product->id)}}">{{ $product->title }}</a>

                                </h4>
                                @if($product->offer_price === NULL)
                                    <p class="card-product__price">{{ $product->price }} MDL</p>
                                @else
                                    <p style="text-decoration: line-through;"
                                       class="card-product__price">{{ $product->price }} MDL</p>
                                    <p style="color: red;" class="card-product__price">{{ $product->offer_price }}
                                        MDL</p>
                                @endif
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- ================ Best Selling item  carousel end ================= -->

        <!-- ================ Blog section start ================= -->
        <section class="blog">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Cele mai recente știri de pe piață</p>
                    <h2>Cele  <span class="section-intro__style">mai recente știri</span></h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded-0" src="{{asset('frontend/assets/img/blog/blog1.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <ul class="card-blog__info">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                </ul>
                                <h4 class="card-blog__title"><a href="single-blog.html">The Richland Center Shooping
                                        News and weekly shooper</a></h4>
                                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged
                                    divided light Forth.</p>
                                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded-0" src="{{asset('frontend/assets/img/blog/blog2.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <ul class="card-blog__info">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                </ul>
                                <h4 class="card-blog__title"><a href="single-blog.html">The Shopping News also offers
                                        top-quality printing services</a></h4>
                                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged
                                    divided light Forth.</p>
                                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded-0" src="{{asset('frontend/assets/img/blog/blog3.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <ul class="card-blog__info">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                </ul>
                                <h4 class="card-blog__title"><a href="single-blog.html">Professional design staff and
                                        efficient equipment you’ll find we offer</a></h4>
                                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged
                                    divided light Forth.</p>
                                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ Blog section end ================= -->




    </main>
@endsection
