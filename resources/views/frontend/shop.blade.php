@extends('frontend.layouts.master')
@section('content')


    <!-- ================ category section start ================= -->
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <div style="padding-right: 0;" class="col-xl-3 col-lg-4 col-md-5">


                    <div class="sidebar-categories">
                        <div class="head">Răsfoiți categorii</div>
                        <ul class="main-categories">
                            <li class="common-filter">
                                <form action="#">
                                    <ul>
                                        <li class="filter-list"><input class="pixel-radio categoryID" checked
                                                                       value="all"
                                                                       type="radio" id="all"
                                                                       name="brand"><label
                                                for="all">Toate
                                                <span> {{" ( " . $count = \App\Models\Product::where(['status' => 'active'])->count() . " ) "}}</span></label>
                                        </li>
                                        @foreach($categories as $category)
                                            <li class="filter-list"><input class="pixel-radio categoryID"
                                                                           value="{{ $category->id }}" type="radio"
                                                                           id="{{ $category->slug }}"
                                                                           name="brand"><label
                                                    for="{{ $category->slug }}">{{ $category->title }}
                                                    <span> {{" ( " . $count = \App\Models\Product::where(['cat_id' => $category->id,'status' => 'active'])->count() . " ) "}}</span></label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-filter">
                        <div class="top-filter-head">Filtre</div>
                        <div class="common-filter">
                            <div class="head">Magazine</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio vendor" checked type="radio"
                                                                   id="all_vend"
                                                                   value="all" name="vendor_id"><label for="all_vend">Toate<span></span></label>
                                    </li>
                                    @foreach($vendors as $vend)
                                        <li class="filter-list"><input class="pixel-radio vendor" type="radio"
                                                                       id="{{$vend->id}}"
                                                                       value="{{$vend->id}}" name="vendor_id"><label
                                                for="{{$vend->id}}">{{$vend->username}}<span></span></label>
                                        </li>
                                    @endforeach
                                </ul>
                            </form>
                        </div>
                        <div class="common-filter">
                            <div class="head">Condiție</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio condition" checked type="radio"
                                                                   id="condition0"
                                                                   value="all" name="condition"><label
                                            for="condition0">Toate<span></span></label></li>
                                    <li class="filter-list"><input class="pixel-radio condition" type="radio"
                                                                   id="condition1"
                                                                   value="new" name="condition"><label
                                            for="condition1">Noi<span></span></label></li>
                                    <li class="filter-list"><input class="pixel-radio condition" type="radio" id="condition2"
                                                                   value="popular" name="condition"><label
                                            for="condition2">Populare<span></span></label>
                                    </li>

                                </ul>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting">
                            <select class="order_by" name="order_by">
                                <option selected value="1">Ordonează după A-Z</option>
                                <option value="2">Ordonează după Z-A</option>
                                <option value="3">Ordonează după data adăugării</option>

                            </select>
                        </div>
                        <div class="sorting mr-auto">
                            <select class="show_amount" name="show_amount">
                                <option selected value="12">Arată 12</option>
                                <option value="24">Arată 24</option>
                                <option value="36">Arată 36</option>
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
                        <div class="row productList">

                            @foreach($products as $product)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card text-center card-product">
                                        <div class="card-product__img">
                                            <img class="card-img" src="{{ $product->photo }}" alt="">
                                            <ul class="card-product__imgOverlay">
                                                <li>
                                                    <button
                                                        onclick="location.href='{{route('product.getProductByID',$product->id)}}';">
                                                        <i class="ti-search"></i></button>


                                                </li>
                                                <li>
                                                    <button
                                                        onclick="location.href='{{route('product.getProductByID',$product->id)}}';">
                                                        <i class="ti-shopping-cart"></i></button>
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
                                                <p style="color: red;"
                                                   class="card-product__price">{{ $product->offer_price }}
                                                    MDL</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--                            <div style="width: 100%;--}}
                            {{--    margin-left: 41%;" class="text-center">    {{ $products->links() }}</div>--}}
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
                @foreach($related_products as $product)
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="single-search-product-wrapper">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="{{ $product->photo }}" alt=""></a>
                                <div class="desc">
                                    <a href="{{route('product.getProductByID',$product->id)}}" style="height: 75px;" class="title">{{ $product->title }}</a>


                                    @if($product->offer_price === NULL)
                                        <div class="price">{{ $product->price }} MDL</div>
                                    @else
                                        <div style="text-decoration: line-through;" class="price">{{ $product->price }}
                                            MDL
                                        </div>
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
@section('scripts')
    <script>
        $(document).ready(function () {
            $('input:radio.categoryID').change(function () {
                console.log('test');
                const vendor = $('input[name=vendor_id]:checked').val();
                const condition = $('input[name=condition]:checked').val();
                const catId = $(this).val();
                const order_by = $('.order_by').val();
                const show_amount = $('.show_amount').val();
                $.ajax({
                    url: '{{ route('update.product.list') }}',
                    method: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        catId: catId,
                        order_by: order_by,
                        condition: condition,
                        vendor: vendor,
                        show_amount: show_amount
                    },
                    success: function (response) {
                        $('.productList').empty();
                        $('body').find('.productList').append(response.html);
                    }
                });
            });
        });
        $(document).ready(function () {
            $('.show_amount').change(function () {
                const vendor = $('input[name=vendor_id]:checked').val();
                const catId = $('input[name=brand]:checked').val();
                const condition = $('input[name=condition]:checked').val();
                const order_by = $('.order_by').val();
                const show_amount = $(this).val();
                $.ajax({
                    url: '{{ route('update.product.list') }}',
                    method: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        catId: catId,
                        order_by: order_by,
                        condition: condition,
                        vendor: vendor,
                        show_amount: show_amount
                    },
                    success: function (response) {
                        $('.productList').empty();
                        $('body').find('.productList').append(response.html);
                    }
                });
            });
        });
        $(document).ready(function () {
            $('.order_by').change(function () {
                const vendor = $('input[name=vendor_id]:checked').val();
                const catId = $('input[name=brand]:checked').val();
                const condition = $('input[name=condition]:checked').val();
                const order_by = $(this).val();
                const show_amount = $('.show_amount').val();
                $.ajax({
                    url: '{{ route('update.product.list') }}',
                    method: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        catId: catId,
                        order_by: order_by,
                        condition: condition,
                        vendor: vendor,
                        show_amount: show_amount
                    },
                    success: function (response) {
                        $('.productList').empty();
                        $('body').find('.productList').append(response.html);
                    }
                });
            });
        });
        $(document).ready(function () {
            $('input:radio.vendor').change(function () {
                const condition = $('input[name=condition]:checked').val();
                const vendor = $(this).val();
                const catId = $('input[name=brand]:checked').val();
                const order_by = $('.order_by').val();
                const show_amount = $('.show_amount').val();
                $.ajax({
                    url: '{{ route('update.product.list') }}',
                    method: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        catId: catId,
                        vendor: vendor,
                        condition: condition,
                        order_by: order_by,
                        show_amount: show_amount
                    },
                    success: function (response) {
                        $('.productList').empty();
                        $('body').find('.productList').append(response.html);
                    }
                });
            });
        });
        $(document).ready(function () {
            $('input:radio.condition').change(function () {
                const condition = $(this).val();
                const vendor = $('input[name=vendor_id]:checked').val();
                const catId = $('input[name=brand]:checked').val();
                const order_by = $('.order_by').val();
                const show_amount = $('.show_amount').val();
                $.ajax({
                    url: '{{ route('update.product.list') }}',
                    method: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        catId: catId,
                        condition: condition,
                        vendor: vendor,
                        order_by: order_by,
                        show_amount: show_amount
                    },
                    success: function (response) {
                        $('.productList').empty();
                        $('body').find('.productList').append(response.html);
                    }
                });
            });
        });
    </script>
@endsection
