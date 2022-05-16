@extends('frontend.layouts.master')
@section('content')


    <!-- ================ category section start ================= -->
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">Răsfoiți categorii</div>
                        <ul class="main-categories">
                            <li class="common-filter">
                                <form action="#">
                                    <ul>
                                        @foreach($categories as $category)
                                            <li class="filter-list"><input class="pixel-radio" type="radio" id="men"
                                                                           name="brand"><label
                                                    for="men">{{ $category->title }}
                                                    <span> {{" ( " . $count = \App\Models\Product::where('cat_id', $category->id)->count() . " ) "}}</span></label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting">
                            <select>
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                            </select>
                        </div>
                        <div class="sorting mr-auto">
                            <select>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                            </select>
                        </div>
                        <div>
                            <div class="input-group filter-bar-search">
                                <input type="text" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">

                            @foreach($products as $product)
                                <div class="col-md-6 col-lg-4">
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
                                                    href="single-product.html">{{ $product->title }}</a>
                                            </h4>
                                            @if($product->offer_price === NULL)
                                                <p class="card-product__price">{{ $product->price }} MDL</p>
                                            @else
                                                <p style="text-decoration: line-through;"
                                                   class="card-product__price">{{ $product->price }} MDL</p>
                                                <p style="color: red;"
                                                   class="card-product__price">{{ $product->offer_price }}
                                                    MDL</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- End Best Seller -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================ category section end ================= -->

    <!-- ================ top product area start ================= -->
    <section class="related-product-area">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Articole populare pe piață</p>
                <h2>Produse <span class="section-intro__style">de top</span></h2>
            </div>
            <div class="row mt-30">
                @foreach($products as $product)
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="single-search-product-wrapper">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="{{ $product->photo }}" alt=""></a>
                                <div class="desc">
                                    <a href="#" style="height: 75px;" class="title">{{ $product->title }}</a>


                                    @if($product->offer_price === NULL)
                                        <div class="price">{{ $product->price }} MDL</div>
                                    @else
                                        <div style="text-decoration: line-through;" class="price">{{ $product->price }} MDL</div>
                                        <div style="color: red;" class="price">{{ $product->offer_price }} MDL</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ================ top product area end ================= -->
@endsection
