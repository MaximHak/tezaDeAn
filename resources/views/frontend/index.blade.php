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
          @foreach($promos as $promo)
            <div class="header-min-item product-style-25 bg_cover"
                 style="background-image: url({{$promo->photo}});">
                <div class="product-content">
                    <h4 class="title"><a href="product-details-page.html">{{$promo->title}}</a></h4>
                    <p>{!! html_entity_decode($promo->description) !!}</p>
                    <a href="javascript:void(0)" class="main-btn primary-btn-border"> Vezi mai multe</a>
                </div>
            </div>
            @endforeach
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
                            <h4 class="title"><a href="javascript:void(0)">Cea mai rapida livrare din tara</a></h4>
                            <p>Este disponibila pentru majoritatea comenzilor</p>
                            <a href="javascript:void(0)" class="more">Vezi detalii</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-message-text"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Recenzii urmarite si respectate</a></h4>
                            <p>Ai o întrebare? Apelați un specialist sau discutați online pentru ajutor</p>
                            <a href="contact-page.html" class="more">Pagina de contacte</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-ticket-percent"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Gaseste reduceri zilnice</a></h4>
                            <p>Partenerii nostri sunt dispusi sa lucreze pentru apricierea voastra</p>
                            <a href="javascript:void(0)" class="more">Citeste mai mult</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
