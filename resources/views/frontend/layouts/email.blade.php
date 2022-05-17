<!doctype html>
<html class="no-js" lang="en">
<head>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Oswald:400,500,600");
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,500");

        body {
            color: #777;
            font-family: "Roboto", sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.667
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        a:hover {
            text-decoration: none
        }

        button {
            cursor: pointer
        }

        button:focus {
            outline: 0;
            box-shadow: none
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "Oswald", sans-serif;
            color: #222;
            line-height: 1.1
        }

        h1, .h1 {
            font-size: 50px;
            font-weight: 700
        }

        h2, .h2 {
            font-size: 36px;
            font-weight: 600
        }

        h3, .h3 {
            font-size: 26px;
            font-weight: 600
        }

        @media (min-width: 600px) {
            h3, .h3 {
                font-size: 36px
            }
        }

        h4, .h4 {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.3
        }

        a {
            display: inline-block
        }

        .fixed {
            background: #fff;
            position: fixed !important;
            top: 0;
            left: 0;
            width: 100% !important
        }

        .owl-carousel .owl-stage {
            display: flex
        }

        .section-margin {
            margin: 45px 0
        }

        @media (min-width: 980px) {
            .section-margin {
                margin: 70px 0
            }
        }

        @media (min-width: 1100px) {
            .section-margin {
                margin: 120px 0
            }

            .section-margin.calc-60px {
                margin: 120px 0 70px 0
            }
        }

        .section-margin--small {
            margin: 35px 0
        }

        @media (min-width: 1000px) {
            .section-margin--small {
                margin: 98px 0
            }
        }

        .section-padding {
            padding: 60px 0
        }

        @media (min-width: 1000px) {
            .section-padding {
                padding: 130px 0
            }
        }

        .pb-60px {
            padding-bottom: 60px
        }

        .pt-60px {
            padding-top: 60px
        }

        .ml-40 {
            margin-left: 40px
        }

        .header_area {
            position: relative;
            width: 100%;
            z-index: 9999;
            transition: background 0.4s, all 0.3s linear;
            box-shadow: 0px 10px 27px 3px rgba(221, 221, 221, 0.3)
        }

        .header_area .navbar {
            background: transparent;
            padding: 0px;
            border: 0px;
            border-radius: 0px
        }

        .header_area .navbar .nav .nav-item {
            margin-right: 45px
        }

        .header_area .navbar .nav .nav-item .nav-link {
            text-transform: capitalize;
            color: #222;
            display: inline-block
        }

        @media (min-width: 991px) {
            .header_area .navbar .nav .nav-item .nav-link {
                padding: 32px 0px
            }
        }

        .header_area .navbar .nav .nav-item .nav-link:after {
            display: none
        }

        .header_area .navbar .nav .nav-item:hover .nav-link, .header_area .navbar .nav .nav-item.active .nav-link {
            color: #384aeb
        }

        .header_area .navbar .nav .nav-item.submenu {
            position: relative
        }

        .header_area .navbar .nav .nav-item.submenu ul {
            border: none;
            padding: 0px;
            border-radius: 0px;
            box-shadow: none;
            margin: 0px;
            background: #fff
        }

        @media (min-width: 992px) {
            .header_area .navbar .nav .nav-item.submenu ul {
                position: absolute;
                top: 120%;
                left: 0px;
                min-width: 200px;
                text-align: left;
                opacity: 0;
                transition: all 300ms ease-in;
                visibility: hidden;
                display: block;
                border: none;
                padding: 0px;
                border-radius: 0px
            }
        }

        .header_area .navbar .nav .nav-item.submenu ul:before {
            content: "";
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px 10px 0 10px;
            border-color: #eeeeee transparent transparent transparent;
            position: absolute;
            right: 24px;
            top: 45px;
            z-index: 3;
            opacity: 0;
            transition: all 400ms linear
        }

        .header_area .navbar .nav .nav-item.submenu ul .nav-item {
            display: block;
            float: none;
            margin-right: 0px;
            border-bottom: 1px solid #ededed;
            margin-left: 0px;
            transition: all 0.4s linear
        }

        .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
            line-height: 45px;
            color: #222;
            padding: 0px 30px;
            transition: all 150ms linear;
            display: block;
            margin-right: 0px
        }

        .header_area .navbar .nav .nav-item.submenu ul .nav-item:last-child {
            border-bottom: none
        }

        .header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {
            background: #384aeb;
            color: #fff
        }

        @media (min-width: 992px) {
            .header_area .navbar .nav .nav-item.submenu:hover ul {
                visibility: visible;
                opacity: 1;
                top: 100%
            }
        }

        .header_area .navbar .nav .nav-item.submenu:hover ul .nav-item {
            margin-top: 0px
        }

        .header_area .navbar .nav .nav-item:last-child {
            margin-right: 0px
        }

        .header_area .navbar .search {
            font-size: 12px;
            line-height: 60px;
            display: inline-block;
            color: #222
        }

        .header_area .navbar .search i {
            font-weight: 600
        }

        .header_area.navbar_fixed .main_menu {
            position: fixed;
            width: 100%;
            top: -70px;
            left: 0;
            right: 0;
            background: #ffffff;
            -webkit-transform: translateY(70px);
            -moz-transform: translateY(70px);
            -ms-transform: translateY(70px);
            -o-transform: translateY(70px);
            transform: translateY(70px);
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1)
        }

        .header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
            line-height: 70px
        }

        #search_input_box {
            text-align: center;
            padding: 5px 20px
        }

        #search_input_box .form-control {
            padding-left: 0;
            background: transparent;
            border: 0;
            color: #ffffff;
            font-weight: 600;
            font-size: 18px
        }

        #search_input_box .form-control:focus {
            box-shadow: none;
            outline: none
        }

        #search_input_box input.placeholder {
            color: #ffffff;
            font-size: 16px
        }

        #search_input_box input:-moz-placeholder {
            color: #ffffff;
            font-size: 16px
        }

        #search_input_box input::-moz-placeholder {
            color: #ffffff;
            font-size: 16px
        }

        #search_input_box input::-webkit-input-placeholder {
            color: #ffffff;
            font-size: 16px
        }

        #search_input_box .btn {
            width: 0;
            height: 0;
            padding: 0;
            border: 0
        }

        #search_input_box .lnr-cross {
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 0
        }

        .header-top {
            background: #000000
        }

        @media (max-width: 991px) {
            .header-top {
                display: none
            }
        }

        .header-top a {
            color: #fff
        }

        .header-top ul li {
            display: inline-block;
            margin-left: 15px
        }

        .header-top .header-top-left a {
            margin-right: 60px;
            font-weight: 600
        }

        .header-top .header-top-left a .text {
            margin-top: -2px
        }

        .header-top .header-top-left a .text span {
            font-size: 14px;
            color: #ffffff
        }

        .header-top .header-top-left a .lnr {
            color: #ffffff;
            margin-right: 8px
        }

        @media (max-width: 767px) {
            .header-top .header-top-left .text {
                display: none
            }
        }

        .header-top .header-top-right {
            text-align: right
        }

        .header-top .header-top-right a {
            padding: 0 20px;
            height: 40px;
            display: inline-block;
            line-height: 40px;
            font-size: 14px;
            font-weight: 600;
            font-family: "Oswald", sans-serif;
            background: transparent;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .nav-shop li {
            display: inline-block;
            margin-right: 15px
        }

        .nav-shop li i, .nav-shop li span {
            font-size: 16px;
            color: #222
        }

        .nav-shop li button {
            padding: 0;
            border: 0;
            background: transparent;
            position: relative
        }

        .nav-shop li button .nav-shop__circle {
            font-size: 9px;
            display: inline-block;
            background: #384aeb;
            color: #fff;
            padding: 0px 5px;
            border-radius: 50%;
            position: absolute;
            top: -8px;
            right: -12px
        }

        .nav-shop li:last-child {
            margin-left: 40px
        }

        @media (max-width: 1619px) {
            .header_area .navbar .search {
                margin-left: 40px
            }
        }

        @media (max-width: 1199px) {
            .header_area .navbar .nav .nav-item {
                margin-right: 28px
            }

            .home_banner_area .banner_inner {
                padding: 100px 0px
            }

            .header_area .navbar .tickets_btn {
                margin-left: 40px
            }
        }

        @media (max-width: 991px) {
            .navbar-toggler {
                border: none;
                border-radius: 0px;
                padding: 0px;
                cursor: pointer;
                margin-top: 27px;
                margin-bottom: 23px
            }

            .header_area .navbar {
                background: #ffffff
            }

            .navbar-toggler[aria-expanded="false"] span:nth-child(2) {
                opacity: 1
            }

            .navbar-toggler[aria-expanded="true"] span:nth-child(2) {
                opacity: 0
            }

            .navbar-toggler[aria-expanded="true"] span:first-child {
                transform: rotate(-45deg);
                position: relative;
                top: 7.5px
            }

            .navbar-toggler[aria-expanded="true"] span:last-child {
                transform: rotate(45deg);
                bottom: 6px;
                position: relative
            }

            .navbar-toggler span {
                display: block;
                width: 25px;
                height: 3px;
                background: #384aeb;
                margin: auto;
                margin-bottom: 4px;
                transition: all 400ms linear;
                cursor: pointer
            }

            .navbar .container {
                padding-left: 15px;
                padding-right: 15px
            }

            .nav {
                padding: 0px 0px
            }

            .header_area + section, .header_area + row, .header_area + div {
                margin-top: 117px
            }

            .header_top .nav {
                padding: 0px
            }

            .header_area .navbar .nav .nav-item .nav-link {
                line-height: 30px;
                margin-right: 0px;
                display: block;
                border-bottom: 1px solid #ededed33;
                border-radius: 0px
            }

            .header_area .navbar .nav-shop {
                padding-bottom: 40px
            }

            .header_area .navbar .search {
                margin-left: 0px
            }

            .header_area .navbar-collapse {
                max-height: 340px;
                overflow-y: scroll
            }

            .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
                padding: 0px 15px
            }

            .header_area .navbar .nav .nav-item {
                margin-right: 0px
            }

            .header_area + section, .header_area + row, .header_area + div {
                margin-top: 0px;
                padding-top: 71px
            }

            .header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
                line-height: 40px
            }

            .categories_post img {
                width: 100%
            }

            .categories_post {
                max-width: 360px;
                margin: 0 auto
            }

            .blog_categorie_area .col-lg-4 {
                margin-top: 30px
            }

            .blog_area {
                padding-bottom: 80px
            }

            .single-post-area .blog_right_sidebar {
                margin-top: 30px
            }

            .contact_info {
                margin-bottom: 50px
            }

            .home_banner_area .donation_inner {
                margin-bottom: -30px
            }

            .home_banner_area .dontation_item {
                max-width: 350px;
                margin: auto
            }

            .footer-area .col-sm-6 {
                margin-bottom: 30px
            }

            .header_area .navbar .tickets_btn {
                margin-left: 0px
            }

            .home_banner_area {
                min-height: 700px
            }
        }

        @media (max-width: 767px) {
            .home_banner_area {
                min-height: 500px
            }

            .home_banner_area .banner_inner {
                min-height: 500px
            }

            .home_banner_area .banner_inner .banner_content {
                margin-top: 0px
            }

            .blog_banner .banner_inner .blog_b_text h2 {
                font-size: 40px;
                line-height: 50px
            }

            .blog_info.text-right {
                text-align: left !important;
                margin-bottom: 10px
            }

            .home_banner_area .banner_inner .banner_content h3 {
                font-size: 30px
            }

            .home_banner_area .banner_inner .banner_content p br {
                display: none
            }

            .home_banner_area .banner_inner .banner_content h3 span {
                line-height: 45px;
                padding-bottom: 0px;
                padding-top: 0px
            }

            .footer-bottom {
                text-align: center
            }

            .footer-bottom .footer-social {
                text-align: center;
                margin-top: 15px
            }
        }

        @media (max-width: 575px) {
            .top_menu {
                display: none
            }

            .header_area + section, .header_area + row, .header_area + div {
                margin-top: 0px;
                padding-top: 71px
            }

            .home_banner_area .banner_inner .banner_content h2 {
                font-size: 40px;
                line-height: 44px
            }

            .home_banner_area {
                min-height: 500px
            }

            .home_banner_area .banner_inner {
                min-height: 500px
            }

            .blog_banner .banner_inner .blog_b_text {
                margin-top: 0px
            }

            .home_banner_area .banner_inner .banner_content img {
                display: none
            }

            .home_banner_area .banner_inner .banner_content h5 {
                margin-top: 0px
            }

            .sample-text-area {
                padding: 70px 0 70px 0
            }

            .generic-blockquote {
                padding: 30px 15px 30px 30px
            }

            .blog_details h2 {
                font-size: 20px;
                line-height: 30px
            }

            .blog_banner .banner_inner .blog_b_text h2 {
                font-size: 28px;
                line-height: 38px
            }

            .footer-area {
                padding: 70px 0px
            }

            .single-footer-widget .sub-btn {
                right: 0px
            }
        }

        @media (max-width: 480px) {
            .header_area .navbar-collapse {
                max-height: 250px
            }

            .home_banner_area .banner_inner .banner_content {
                margin-top: 0px
            }

            .home_banner_area .banner_inner .banner_content h3 {
                font-size: 24px
            }

            .banner_area .banner_inner .banner_content h2 {
                font-size: 32px
            }

            .comments-area .thumb {
                margin-right: 10px
            }
        }

        .section-intro p {
            margin-bottom: 3px
        }

        .section-intro__style {
            border-bottom: 2px solid #384aeb;
            padding-bottom: 8px
        }

        .hero-banner {
            background: #F1F6F7;
            position: relative;
            margin-bottom: 10px
        }

        @media (min-width: 991px) {
            .hero-banner {
                z-index: 111
            }
        }

        .hero-banner::before {
            content: "";
            display: block;
            width: 5%;
            height: 100%;
            background: #384aeb;
            position: absolute;
            top: 0;
            left: 0
        }

        @media (min-width: 575px) {
            .hero-banner::before {
                width: 20%
            }
        }

        @media (min-width: 991px) {
            .hero-banner::before {
                width: 35%
            }
        }

        .hero-banner__img {
            position: relative;
            top: 1px
        }

        @media (max-width: 575px) {
            .hero-banner__content {
                padding-bottom: 50px
            }
        }

        @media (min-width: 1000px) {
            .hero-banner__content {
                max-width: 495px
            }
        }

        .hero-banner__content h4 {
            font-size: 30px;
            font-family: "Roboto", sans-serif;
            color: #555555;
            margin-bottom: 12px
        }

        .hero-banner__content h1 {
            font-family: "Roboto", sans-serif;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 10px
        }

        @media (min-width: 767px) {
            .hero-banner__content h1 {
                font-size: 30px;
                margin-bottom: 25px
            }
        }

        @media (min-width: 991px) {
            .hero-banner__content h1 {
                font-size: 50px
            }
        }

        .hero-banner__content p {
            margin-bottom: 10px
        }

        @media (min-width: 767px) {
            .hero-banner__content p {
                margin-bottom: 40px
            }
        }

        .hero-carousel__slide {
            position: relative
        }

        .hero-carousel__slide::after {
            content: "";
            display: block;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            transform: translateY(50px);
            opacity: 0;
            transition: all .4s ease
        }

        .hero-carousel__slideOverlay {
            position: absolute;
            bottom: 50px;
            background: #384aeb;
            padding: 23px 90px 23px 25px;
            transform: translateY(50px);
            opacity: 0;
            z-index: -1;
            transition: all .4s ease-in-out
        }

        .hero-carousel__slideOverlay h3 {
            font-size: 20px;
            font-weight: 400;
            color: #fff
        }

        .hero-carousel__slideOverlay p {
            color: #fff;
            margin: 0
        }

        .hero-carousel__slide:hover::after {
            transform: translateY(0);
            opacity: 1
        }

        .hero-carousel__slide:hover .hero-carousel__slideOverlay {
            transform: translateY(0);
            opacity: 1;
            z-index: 2
        }

        .card-product {
            border: 0;
            margin-bottom: 30px
        }

        .card-product p {
            margin-bottom: 0
        }

        .card-product__img {
            position: relative
        }

        .card-product__imgOverlay {
            background: rgba(255, 255, 255, 0.5);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px 5px;
            transform: translateY(30px);
            opacity: 0;
            z-index: -1;
            transition: all .48s ease
        }

        .card-product__imgOverlay li {
            display: inline-block
        }

        .card-product__imgOverlay li button {
            border: 0;
            border-radius: 0;
            padding: 7px 12px;
            background: #8894ff
        }

        .card-product__imgOverlay li button i, .card-product__imgOverlay li button span {
            font-size: 15px;
            color: #fff;
            vertical-align: middle
        }

        .card-product__imgOverlay li button:hover {
            background: #384aeb
        }

        .card-product__imgOverlay li:not(:last-child) {
            margin-right: 5px
        }

        .card-product__title a {
            color: #222
        }

        .card-product__price {
            font-size: 18px;
            font-weight: 500
        }

        .card-product:hover .card-product__imgOverlay {
            opacity: 1;
            z-index: 1;
            transform: translateY(0)
        }

        .card-product:hover .card-product__title a {
            color: #384aeb
        }

        .offer {
            background: url("../img/home/parallax-bg.png") right center no-repeat;
            background-size: cover
        }

        @media (min-width: 1200px) {
            .offer {
                background-size: 100% 100%
            }
        }

        .offer__content {
            padding: 100px 0 110px 0
        }

        @media (min-width: 1000px) {
            .offer__content {
                padding: 122px 0 135px 0
            }
        }

        .offer__content h3 {
            font-size: 35px;
            font-weight: 400;
            margin-bottom: 20px
        }

        @media (min-width: 650px) {
            .offer__content h3 {
                font-size: 50px;
                margin-bottom: 25px
            }
        }

        .offer__content h4 {
            font-size: 30px
        }

        .offer__content p {
            color: #555555
        }

        #bestSellerCarousel .owl-prev, #bestSellerCarousel .owl-next {
            width: 40px;
            height: 40px;
            background: #f1f6f7
        }

        #bestSellerCarousel .owl-prev i, #bestSellerCarousel .owl-prev span, #bestSellerCarousel .owl-next i, #bestSellerCarousel .owl-next span {
            font-size: 15px;
            color: #384aeb;
            line-height: 40px
        }

        #bestSellerCarousel .owl-prev:hover, #bestSellerCarousel .owl-next:hover {
            background: #384aeb
        }

        #bestSellerCarousel .owl-prev:hover i, #bestSellerCarousel .owl-prev:hover span, #bestSellerCarousel .owl-next:hover i, #bestSellerCarousel .owl-next:hover span {
            color: #fff
        }

        #bestSellerCarousel .owl-prev {
            position: absolute;
            top: 30%;
            transform: translateY(-30%);
            left: -20px
        }

        @media (min-width: 1340px) {
            #bestSellerCarousel .owl-prev {
                left: -105px
            }
        }

        #bestSellerCarousel .owl-next {
            position: absolute;
            top: 30%;
            transform: translateY(-30%);
            right: -20px
        }

        @media (min-width: 1340px) {
            #bestSellerCarousel .owl-next {
                right: -105px
            }
        }

        .card-blog {
            border: 0
        }

        .card-blog .card-body {
            padding: 25px 25px 25px 0
        }

        .card-blog__info {
            margin-bottom: 12px
        }

        .card-blog__info li {
            display: inline-block;
            font-size: 14px;
            color: #999999
        }

        .card-blog__info li a {
            color: #999999
        }

        .card-blog__info li i, .card-blog__info li span {
            margin-right: 5px;
            vertical-align: middle
        }

        .card-blog__info li:not(:last-child) {
            margin-right: 20px
        }

        .card-blog__title {
            font-size: 20px;
            margin-bottom: 20px
        }

        .card-blog__title a {
            color: #222
        }

        .card-blog__link {
            font-weight: 500;
            color: #222
        }

        .card-blog__link i, .card-blog__link span {
            font-size: 13px;
            padding-left: 3px;
            display: inline-block;
            transition: all .5s ease
        }

        .card-blog:hover .card-blog__title a {
            color: #384aeb
        }

        .card-blog:hover .card-blog__link {
            color: #384aeb
        }

        .card-blog:hover .card-blog__link i, .card-blog:hover .card-blog__link span {
            padding-left: 10px
        }

        .subscribe {
            padding: 45px 10px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px -5px 20px 0px rgba(56, 74, 235, 0.1)
        }

        @media (min-width: 1000px) {
            .subscribe {
                padding: 85px 10px
            }
        }

        .subscribe__title {
            font-size: 28px;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 16px
        }

        @media (min-width: 1000px) {
            .subscribe__title {
                font-size: 36px
            }
        }

        .subscribe-form .form-group {
            margin-bottom: 0;
            position: relative
        }

        .subscribe-form .form-group .info {
            position: absolute;
            top: 50px;
            left: 10px;
            color: #384aeb
        }

        .subscribe-form .form-control {
            border-radius: 30px;
            height: 50px;
            border-color: #EEEEEE;
            padding-left: 20px;
            font-size: 14px
        }

        @media (min-width: 800px) {
            .subscribe-form .form-control {
                min-width: 380px
            }
        }

        .subscribe-form .form-control::placeholder {
            color: #999999
        }

        .subscribe-form .form-control:focus {
            outline: 0;
            box-shadow: none
        }

        .subscribe-form button {
            margin-left: 15px
        }

        .subscribe-position {
            margin-bottom: 20px
        }

        @media (min-width: 1000px) {
            .subscribe-position {
                position: relative;
                top: 100px;
                margin-bottom: 0
            }
        }

        .button {
            display: inline-block;
            border: 1px solid #384aeb;
            border-radius: 30px;
            color: #222;
            font-weight: 500;
            padding: 12px 50px;
            background: #384aeb;
            color: #fff;
            transition: all .4s ease
        }

        @media (max-width: 767px) {
            .button {
                padding: 8px 25px !important
            }
        }

        .button-subscribe {
            font-size: 14px;
            padding: 10px 20px
        }

        @media (min-width: 800px) {
            .button-subscribe {
                padding: 12px 35px;
                font-size: 15px
            }
        }

        .button-blog {
            padding: 5px 31px;
            font-size: 14px;
            background: #f9f9ff;
            border-color: #EEEEEE;
            border-radius: 0;
            color: #222
        }

        .button-blog:hover {
            background: #384aeb !important;
            color: #fff !important
        }

        .button-postComment {
            border-radius: 4px;
            font-size: 14px;
            margin-top: 5px
        }

        .button-contact {
            border-radius: 0;
            padding: 12px 26px
        }

        .button-tracking {
            font-size: 14px;
            padding: 8px 42px
        }

        .button-login {
            font-size: 15px;
            padding: 7px 44px
        }

        .button-coupon {
            font-size: 15px;
            padding: 6px 45px
        }

        .button-paypal {
            width: 100%;
            padding: 8px 30px
        }

        .button-account {
            padding: 7px 42px;
            background: transparent;
            border-color: #fff
        }

        .button-account:hover {
            border-color: #fff !important
        }

        .button-header {
            padding: 10px 45px;
            background: transparent;
            color: #222;
            border-color: #EEEEEE
        }

        .button-hero {
            padding: 12px 41px
        }

        .button--active {
            background: #384aeb;
            color: #fff
        }

        .button-contactForm {
            border: 1px solid #384aeb !important;
            border-radius: 0;
            padding: 11px 26px
        }

        .button-review {
            padding: 12px 40px;
            border-radius: 30px
        }

        .button:hover {
            border-color: #384aeb;
            background: transparent;
            color: #222
        }

        .button-register {
            font-size: 14px;
            border: 0;
            border-radius: 0;
            padding: 9px 15px;
            text-transform: uppercase;
            background: #c5322d
        }

        .button-register:hover {
            background: #c5322d;
            opacity: .7;
            color: #fff
        }

        .blog-banner {
            position: relative
        }

        .blog-banner h4, .blog-banner h1, .blog-banner a {
            text-transform: capitalize;
            color: #fff
        }

        .blog-banner h4 {
            font-size: 18px;
            margin-bottom: 15px
        }

        .blog-banner h1 {
            font-size: 30px;
            margin-bottom: 10px;
            color: #222
        }

        @media (min-width: 992px) {
            .blog-banner h1 {
                font-size: 36px
            }
        }

        .blog-banner-area {
            height: 280px;
            position: relative;
            z-index: 1
        }

        @media (min-width: 1000px) {
            .blog-banner-area {
                height: 410px
            }
        }

        .blog-banner-area .blog-banner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            transform: translate(-50%, -50%)
        }

        .blog-banner-area::after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f1f6f7;
            z-index: -1
        }

        .blog-banner-btn {
            border: 2px solid #384aeb;
            padding: 10px 45px
        }

        .blog-banner-btn:hover {
            background: #384aeb;
            color: #fff
        }

        .banner-breadcrumb {
            display: inline-block
        }

        .banner-breadcrumb .breadcrumb {
            background: transparent;
            padding: 0
        }

        .banner-breadcrumb .breadcrumb-item {
            padding: .1rem
        }

        .banner-breadcrumb .breadcrumb-item a {
            text-transform: capitalize;
            color: #777777
        }

        .banner-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
            color: #777777;
            padding-right: .1rem;
            content: "-"
        }

        .banner-breadcrumb .breadcrumb-item.active {
            color: #777777
        }

        .l_blog_item .l_blog_text .date {
            margin-top: 24px;
            margin-bottom: 15px
        }

        .l_blog_item .l_blog_text .date a {
            font-size: 12px
        }

        .l_blog_item .l_blog_text h4 {
            font-size: 18px;
            color: #222;
            border-bottom: 1px solid #eeeeee;
            margin-bottom: 0px;
            padding-bottom: 20px;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .l_blog_item .l_blog_text h4:hover {
            color: #384aeb
        }

        .l_blog_item .l_blog_text p {
            margin-bottom: 0px;
            padding-top: 20px
        }

        .causes_slider .owl-dots {
            text-align: center;
            margin-top: 80px
        }

        .causes_slider .owl-dots .owl-dot {
            height: 14px;
            width: 14px;
            background: #eeeeee;
            display: inline-block;
            margin-right: 7px
        }

        .causes_slider .owl-dots .owl-dot:last-child {
            margin-right: 0px
        }

        .causes_slider .owl-dots .owl-dot.active {
            background: #384aeb
        }

        .causes_item {
            background: #fff
        }

        .causes_item .causes_img {
            position: relative
        }

        .causes_item .causes_img .c_parcent {
            position: absolute;
            bottom: 0px;
            width: 100%;
            left: 0px;
            height: 3px;
            background: rgba(255, 255, 255, 0.5)
        }

        .causes_item .causes_img .c_parcent span {
            width: 70%;
            height: 3px;
            background: #384aeb;
            position: absolute;
            left: 0px;
            bottom: 0px
        }

        .causes_item .causes_img .c_parcent span:before {
            content: "75%";
            position: absolute;
            right: -10px;
            bottom: 0px;
            background: #384aeb;
            color: #fff;
            padding: 0px 5px
        }

        .causes_item .causes_text {
            padding: 30px 35px 40px 30px
        }

        .causes_item .causes_text h4 {
            color: #222;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            cursor: pointer
        }

        .causes_item .causes_text h4:hover {
            color: #384aeb
        }

        .causes_item .causes_text p {
            font-size: 14px;
            line-height: 24px;
            font-weight: 300;
            margin-bottom: 0px
        }

        .causes_item .causes_bottom a {
            width: 50%;
            border: 1px solid #384aeb;
            text-align: center;
            float: left;
            line-height: 50px;
            background: #384aeb;
            color: #fff;
            font-size: 14px;
            font-weight: 500
        }

        .causes_item .causes_bottom a + a {
            border-color: #eeeeee;
            background: #fff;
            font-size: 14px;
            color: #222
        }

        .latest_blog_area {
            background: #f9f9ff
        }

        .single-recent-blog-post {
            margin-bottom: 30px
        }

        .single-recent-blog-post .thumb {
            overflow: hidden
        }

        .single-recent-blog-post .thumb img {
            transition: all 0.7s linear
        }

        .single-recent-blog-post .details {
            padding-top: 30px
        }

        .single-recent-blog-post .details .sec_h4 {
            line-height: 24px;
            padding: 10px 0px 13px;
            transition: all 0.3s linear
        }

        .single-recent-blog-post .date {
            font-size: 14px;
            line-height: 24px;
            font-weight: 400
        }

        .single-recent-blog-post:hover img {
            transform: scale(1.23) rotate(10deg)
        }

        .tags .tag_btn {
            font-size: 12px;
            font-weight: 500;
            line-height: 20px;
            border: 1px solid #eeeeee;
            display: inline-block;
            padding: 1px 18px;
            text-align: center;
            color: #222
        }

        .tags .tag_btn:before {
            background: #384aeb
        }

        .tags .tag_btn + .tag_btn {
            margin-left: 2px
        }

        .blog_categorie_area {
            padding-top: 30px;
            padding-bottom: 30px
        }

        @media (min-width: 900px) {
            .blog_categorie_area {
                padding-top: 80px;
                padding-bottom: 80px
            }
        }

        @media (min-width: 1100px) {
            .blog_categorie_area {
                padding-top: 120px;
                padding-bottom: 120px
            }
        }

        .categories_post {
            position: relative;
            text-align: center;
            cursor: pointer
        }

        .categories_post img {
            max-width: 100%
        }

        .categories_post .categories_details {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: rgba(34, 34, 34, 0.75);
            color: #fff;
            transition: all 0.3s linear;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .categories_post .categories_details h5 {
            margin-bottom: 0px;
            font-size: 18px;
            line-height: 26px;
            text-transform: uppercase;
            color: #fff;
            position: relative
        }

        .categories_post .categories_details p {
            font-weight: 300;
            font-size: 14px;
            line-height: 26px;
            margin-bottom: 0px
        }

        .categories_post .categories_details .border_line {
            margin: 10px 0px;
            background: #fff;
            width: 100%;
            height: 1px
        }

        .categories_post:hover .categories_details {
            background: rgba(56, 74, 235, 0.85)
        }

        .blog_item {
            margin-bottom: 40px
        }

        .blog_info {
            padding-top: 30px
        }

        .blog_info .post_tag {
            padding-bottom: 20px
        }

        .blog_info .post_tag a {
            color: #222;
            font-size: 14px
        }

        .blog_info .post_tag a.active {
            color: #384aeb
        }

        .blog_info .blog_meta li a {
            color: #777777;
            vertical-align: middle;
            padding-bottom: 10px;
            display: inline-block;
            font-size: 14px
        }

        .blog_info .blog_meta li a i {
            color: #222;
            font-size: 16px;
            font-weight: 600;
            padding-left: 15px;
            line-height: 20px;
            vertical-align: middle
        }

        .blog_info .blog_meta li a:hover {
            color: #384aeb
        }

        .blog_post img {
            max-width: 100%
        }

        .blog_details {
            padding-top: 20px
        }

        .blog_details h2 {
            font-size: 24px;
            line-height: 36px;
            color: #222;
            font-weight: 600;
            transition: all 0.3s linear
        }

        .blog_details h2:hover {
            color: #384aeb
        }

        .blog_details p {
            margin-bottom: 26px
        }

        .view_btn {
            font-size: 14px;
            line-height: 36px;
            display: inline-block;
            color: #222;
            font-weight: 500;
            padding: 0px 30px;
            background: #fff
        }

        .blog_right_sidebar {
            border: 1px solid #eeeeee;
            background: #fafaff;
            padding: 30px
        }

        .blog_right_sidebar .widget_title {
            font-size: 18px;
            line-height: 25px;
            background: #384aeb;
            text-align: center;
            color: #fff;
            padding: 8px 0px;
            margin-bottom: 30px
        }

        .blog_right_sidebar .search_widget .input-group .form-control {
            font-size: 14px;
            line-height: 29px;
            border: 0px;
            width: 100%;
            font-weight: 300;
            color: #fff;
            padding-left: 20px;
            border-radius: 45px;
            z-index: 0;
            background: #384aeb
        }

        .blog_right_sidebar .search_widget .input-group .form-control.placeholder {
            color: #fff
        }

        .blog_right_sidebar .search_widget .input-group .form-control:-moz-placeholder {
            color: #fff
        }

        .blog_right_sidebar .search_widget .input-group .form-control::-moz-placeholder {
            color: #fff
        }

        .blog_right_sidebar .search_widget .input-group .form-control::-webkit-input-placeholder {
            color: #fff
        }

        .blog_right_sidebar .search_widget .input-group .form-control:focus {
            box-shadow: none
        }

        .blog_right_sidebar .search_widget .input-group .btn-default {
            position: absolute;
            right: 20px;
            background: transparent;
            border: 0px;
            box-shadow: none;
            font-size: 14px;
            color: #fff;
            padding: 0px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1
        }

        .blog_right_sidebar .author_widget {
            text-align: center
        }

        .blog_right_sidebar .author_widget h4 {
            font-size: 18px;
            line-height: 20px;
            color: #222;
            margin-bottom: 5px;
            margin-top: 30px
        }

        .blog_right_sidebar .author_widget p {
            margin-bottom: 0px
        }

        .blog_right_sidebar .author_widget .social_icon {
            padding: 7px 0px 15px
        }

        .blog_right_sidebar .author_widget .social_icon a {
            font-size: 14px;
            color: #222;
            transition: all 0.2s linear
        }

        .blog_right_sidebar .author_widget .social_icon a + a {
            margin-left: 20px
        }

        .blog_right_sidebar .author_widget .social_icon a:hover {
            color: #384aeb
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body {
            justify-content: center;
            align-self: center;
            padding-left: 20px
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
            font-size: 14px;
            line-height: 20px;
            color: #222;
            margin-bottom: 4px;
            transition: all 0.3s linear
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body h3:hover {
            color: #384aeb
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body p {
            font-size: 12px;
            line-height: 21px;
            margin-bottom: 0px
        }

        .blog_right_sidebar .popular_post_widget .post_item + .post_item {
            margin-top: 20px
        }

        .blog_right_sidebar .post_category_widget .cat-list li {
            border-bottom: 2px dotted #eee;
            transition: all 0.3s ease 0s;
            padding-bottom: 12px
        }

        .blog_right_sidebar .post_category_widget .cat-list li a {
            font-size: 14px;
            line-height: 20px;
            color: #777
        }

        .blog_right_sidebar .post_category_widget .cat-list li a p {
            margin-bottom: 0px
        }

        .blog_right_sidebar .post_category_widget .cat-list li + li {
            padding-top: 15px
        }

        .blog_right_sidebar .post_category_widget .cat-list li:hover {
            border-color: #384aeb
        }

        .blog_right_sidebar .post_category_widget .cat-list li:hover a {
            color: #384aeb
        }

        .blog_right_sidebar .newsletter_widget {
            text-align: center
        }

        .blog_right_sidebar .newsletter_widget .form-group {
            margin-bottom: 8px
        }

        .blog_right_sidebar .newsletter_widget .input-group-prepend {
            margin-right: -1px
        }

        .blog_right_sidebar .newsletter_widget .input-group-text {
            background: #fff;
            border-radius: 0px;
            vertical-align: top;
            font-size: 12px;
            line-height: 36px;
            padding: 0px 0px 0px 15px;
            border: 1px solid #eeeeee;
            border-right: 0px
        }

        .blog_right_sidebar .newsletter_widget .input-group-text i {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control {
            font-size: 12px;
            line-height: 24px;
            color: #cccccc;
            border: 1px solid #eeeeee;
            border-left: 0px;
            border-radius: 0px
        }

        .blog_right_sidebar .newsletter_widget .form-control.placeholder {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control:-moz-placeholder {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control::-moz-placeholder {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control::-webkit-input-placeholder {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control:focus {
            outline: none;
            box-shadow: none
        }

        .blog_right_sidebar .newsletter_widget .bbtns {
            background: #384aeb;
            color: #fff;
            font-size: 12px;
            line-height: 38px;
            display: inline-block;
            font-weight: 500;
            padding: 0px 24px 0px 24px;
            border-radius: 0
        }

        .blog_right_sidebar .newsletter_widget .text-bottom {
            font-size: 12px
        }

        .blog_right_sidebar .tag_cloud_widget ul li {
            display: inline-block
        }

        .blog_right_sidebar .tag_cloud_widget ul li a {
            display: inline-block;
            border: 1px solid #eee;
            background: #fff;
            padding: 0px 13px;
            margin-bottom: 8px;
            transition: all 0.3s ease 0s;
            color: #222;
            font-size: 12px
        }

        .blog_right_sidebar .tag_cloud_widget ul li a:hover {
            background: #384aeb;
            color: #fff
        }

        .blog_right_sidebar .br {
            width: 100%;
            height: 1px;
            background: #eee;
            margin: 30px 0px
        }

        .blog-pagination {
            padding-top: 25px;
            padding-bottom: 95px
        }

        .blog-pagination .page-link {
            border-radius: 0
        }

        .blog-pagination .page-item {
            border: none
        }

        .page-link {
            background: transparent;
            font-weight: 400
        }

        .blog-pagination .page-item.active .page-link {
            background-color: #384aeb;
            border-color: transparent;
            color: #fff
        }

        .blog-pagination .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #8a8a8a;
            border: none
        }

        .blog-pagination .page-link .lnr {
            font-weight: 600
        }

        .blog-pagination .page-item:last-child .page-link, .blog-pagination .page-item:first-child .page-link {
            border-radius: 0
        }

        .blog-pagination .page-link:hover {
            color: #fff;
            text-decoration: none;
            background-color: #384aeb;
            border-color: #eee
        }

        .single-post-area .social-links {
            padding-top: 10px
        }

        .single-post-area .social-links li {
            display: inline-block;
            margin-bottom: 10px
        }

        .single-post-area .social-links li a {
            color: #cccccc;
            padding: 7px;
            font-size: 14px;
            transition: all 0.2s linear
        }

        .single-post-area .social-links li a:hover {
            color: #222
        }

        .single-post-area .blog_details {
            padding-top: 26px
        }

        .single-post-area .blog_details p {
            margin-bottom: 10px
        }

        .single-post-area .quotes {
            margin-top: 20px;
            margin-bottom: 30px;
            padding: 24px 35px 24px 30px;
            background-color: #fff;
            box-shadow: -20.84px 21.58px 30px 0px rgba(176, 176, 176, 0.1);
            font-size: 14px;
            line-height: 24px;
            color: #777;
            font-style: italic
        }

        .single-post-area .arrow {
            position: absolute
        }

        .single-post-area .arrow .lnr {
            font-size: 20px;
            font-weight: 600
        }

        .single-post-area .thumb .overlay-bg {
            background: rgba(0, 0, 0, 0.8)
        }

        .single-post-area .navigation-area {
            border-top: 1px solid #eee;
            padding-top: 30px;
            margin-top: 60px
        }

        .single-post-area .navigation-area p {
            margin-bottom: 0px
        }

        .single-post-area .navigation-area h4 {
            font-size: 18px;
            line-height: 25px;
            color: #222
        }

        .single-post-area .navigation-area .nav-left {
            text-align: left
        }

        .single-post-area .navigation-area .nav-left .thumb {
            margin-right: 20px;
            background: #000
        }

        .single-post-area .navigation-area .nav-left .thumb img {
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .single-post-area .navigation-area .nav-left .lnr {
            margin-left: 20px;
            opacity: 0;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .single-post-area .navigation-area .nav-left:hover .lnr {
            opacity: 1
        }

        .single-post-area .navigation-area .nav-left:hover .thumb img {
            opacity: .5
        }

        @media (max-width: 767px) {
            .single-post-area .navigation-area .nav-left {
                margin-bottom: 30px
            }
        }

        .single-post-area .navigation-area .nav-right {
            text-align: right
        }

        .single-post-area .navigation-area .nav-right .thumb {
            margin-left: 20px;
            background: #000
        }

        .single-post-area .navigation-area .nav-right .thumb img {
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .single-post-area .navigation-area .nav-right .lnr {
            margin-right: 20px;
            opacity: 0;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .single-post-area .navigation-area .nav-right:hover .lnr {
            opacity: 1
        }

        .single-post-area .navigation-area .nav-right:hover .thumb img {
            opacity: .5
        }

        @media (max-width: 991px) {
            .single-post-area .sidebar-widgets {
                padding-bottom: 0px
            }
        }

        .comments-area {
            background: #fafaff;
            border: 1px solid #eee;
            padding: 50px 30px;
            margin-top: 50px
        }

        @media (max-width: 414px) {
            .comments-area {
                padding: 50px 8px
            }
        }

        .comments-area h4 {
            text-align: center;
            margin-bottom: 50px;
            color: #222;
            font-size: 18px
        }

        .comments-area h5 {
            font-size: 16px;
            margin-bottom: 0px
        }

        .comments-area a {
            color: #222
        }

        .comments-area .comment-list {
            padding-bottom: 48px
        }

        .comments-area .comment-list:last-child {
            padding-bottom: 0px
        }

        .comments-area .comment-list.left-padding {
            padding-left: 25px
        }

        @media (max-width: 413px) {
            .comments-area .comment-list .single-comment h5 {
                font-size: 12px
            }

            .comments-area .comment-list .single-comment .date {
                font-size: 11px
            }

            .comments-area .comment-list .single-comment .comment {
                font-size: 10px
            }
        }

        .comments-area .thumb {
            margin-right: 20px
        }

        .comments-area .date {
            font-size: 13px;
            color: #cccccc;
            margin-bottom: 13px
        }

        .comments-area .comment {
            color: #777777;
            margin-bottom: 0px
        }

        .comments-area .btn-reply {
            background-color: #fff;
            color: #222;
            padding: 5px 18px;
            font-size: 12px;
            display: block;
            font-weight: 400;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .comments-area .btn-reply:hover {
            background-color: #384aeb;
            color: #fff;
            font-weight: 700
        }

        .comment-form {
            background: #fafaff;
            text-align: center;
            border: 1px solid #eee;
            padding: 47px 30px 43px;
            margin-top: 50px;
            margin-bottom: 20px
        }

        .comment-form h4 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 18px;
            line-height: 22px;
            color: #222
        }

        .comment-form .name {
            padding-left: 0px
        }

        @media (max-width: 767px) {
            .comment-form .name {
                padding-right: 0px;
                margin-bottom: 1rem
            }
        }

        .comment-form .email {
            padding-right: 0px
        }

        @media (max-width: 991px) {
            .comment-form .email {
                padding-left: 0px
            }
        }

        .comment-form .form-control {
            padding: 8px 20px;
            background: #fff;
            border: none;
            border-radius: 0px;
            width: 100%;
            font-size: 14px;
            color: #777777;
            border: 1px solid transparent
        }

        .comment-form .form-control:focus {
            box-shadow: none;
            border: 1px solid #eee
        }

        .comment-form .form-control::placeholder {
            color: #777777
        }

        .comment-form textarea.form-control {
            height: 140px;
            resize: none
        }

        .comment-form ::-webkit-input-placeholder {
            font-size: 13px;
            color: #777
        }

        .comment-form ::-moz-placeholder {
            font-size: 13px;
            color: #777
        }

        .comment-form :-ms-input-placeholder {
            font-size: 13px;
            color: #777
        }

        .comment-form :-moz-placeholder {
            font-size: 13px;
            color: #777
        }

        .contact-banner {
            position: relative
        }

        .contact-banner h4, .contact-banner h1, .contact-banner a {
            text-transform: uppercase;
            color: #fff
        }

        .contact-banner h4 {
            font-size: 18px;
            margin-bottom: 15px
        }

        .contact-banner h1 {
            font-size: 37px;
            margin-bottom: 5px
        }

        @media (min-width: 992px) {
            .contact-banner h1 {
                font-size: 48px
            }
        }

        .contact-banner-area {
            height: 280px;
            background: url("../../assets/images/contact-bg.png") center center no-repeat;
            background-size: cover;
            position: relative;
            z-index: 1
        }

        @media (min-width: 991px) {
            .contact-banner-area {
                height: 450px
            }
        }

        .contact-banner-area .contact-banner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            transform: translate(-50%, -50%)
        }

        .contact-banner-area::after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(1, 2, 11, 0.7);
            z-index: -1
        }

        .contact-banner-btn {
            border: 2px solid #384aeb;
            padding: 10px 45px
        }

        .contact-banner-btn:hover {
            background: #384aeb;
            color: #fff
        }

        .contact-info__icon {
            margin-right: 20px
        }

        .contact-info__icon i, .contact-info__icon span {
            color: #384aeb;
            font-size: 20px
        }

        .contact-info .media-body h3 {
            font-size: 16px;
            margin-bottom: 0
        }

        .contact-info .media-body h3 a {
            color: #222
        }

        .contact-info .media-body p {
            color: #999999
        }

        .form-contact .form-group {
            margin-bottom: 10px
        }

        .form-contact .form-control {
            border-radius: 0;
            height: 40px;
            padding-left: 18px;
            border-color: transparent;
            background: rgba(130, 139, 178, 0.1)
        }

        .form-contact .form-control:focus {
            outline: 0;
            box-shadow: none
        }

        .form-contact .form-control::placeholder {
            font-size: 14px;
            color: #999999
        }

        .form-contact .different-control {
            height: 100% !important
        }

        .form-contact button {
            border: 0
        }

        .filter-bar {
            padding: 0px 20px 10px 20px;
            background: #f1f6f7;
            margin-bottom: 30px
        }

        .filter-bar a, .filter-bar i {
            color: #000
        }

        .filter-bar-search {
            margin-top: 10px
        }

        .filter-bar-search input {
            border: 1px solid #eee;
            font-size: 14px;
            color: #999999;
            height: 38px;
            padding-left: 15px
        }

        .filter-bar-search input:focus {
            outline: 0;
            box-shadow: none
        }

        .filter-bar-search input::placeholder {
            color: #999999
        }

        .filter-bar-search button {
            background: transparent;
            border: 1px solid #eee;
            background: #fff;
            border-left: 0;
            padding-right: 15px
        }

        .filter-bar-search button i, .filter-bar-search button span {
            font-size: 14px;
            color: #999999
        }

        .sorting {
            margin-top: 10px;
            margin-right: 10px
        }

        .sorting .nice-select {
            border-radius: 0px;
            border: 1px solid #eee;
            padding-right: 50px;
            height: 38px;
            color: #999999
        }

        .sorting .nice-select:after {
            right: 18px
        }

        .sorting .nice-select .list {
            border-radius: 0px
        }

        .sidebar-categories .head {
            font-family: 'Oswald', sans-serif;
            line-height: 50px;
            background: #384aeb;
            padding: 0 30px;
            font-size: 18px;
            font-weight: 400;
            color: #fff
        }

        .sidebar-categories .main-categories {
            padding: 20px 28px;
            background: #f1f6f7
        }

        .sidebar-categories .main-categories .pixel-radio {
            background: transparent !important
        }

        .sidebar-categories .main-nav-list a {
            font-size: 14px;
            display: block;
            line-height: 50px;
            padding-left: 10px;
            border-bottom: 1px solid #eee
        }

        .sidebar-categories .main-nav-list a:hover {
            color: #384aeb
        }

        .sidebar-categories .main-nav-list a .number {
            color: #cccccc;
            margin-left: 10px
        }

        .sidebar-categories .main-nav-list a .lnr {
            margin-right: 10px;
            display: none
        }

        .sidebar-categories .main-nav-list.child a {
            padding-left: 32px
        }

        .sidebar-filter {
            margin-top: 30px
        }

        .sidebar-filter .top-filter-head {
            font-family: 'Oswald', sans-serif;
            line-height: 50px;
            background: #384aeb;
            padding: 0 30px;
            font-size: 18px;
            font-weight: 400;
            color: #fff
        }

        .sidebar-filter .head {
            line-height: 60px;
            padding: 0 30px;
            font-size: 15px;
            font-weight: 400;
            color: #222;
            text-transform: capitalize
        }

        .sidebar-filter .common-filter {
            background: #f1f6f7;
            border-bottom: 1px solid #eee;
            padding-bottom: 25px
        }

        .sidebar-filter .common-filter .filter-list {
            position: relative;
            padding-left: 28px
        }

        .sidebar-filter .common-filter:last-child {
            border-bottom: 0
        }

        .filter-list {
            line-height: 32px
        }

        .filter-list i {
            margin-right: 10px;
            cursor: pointer
        }

        .filter-list .number {
            color: #ccc
        }

        .filter-list label {
            margin-bottom: 3px;
            cursor: pointer
        }

        @-webkit-keyframes click-wave {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.35;
                position: absolute;
                top: 50%;
                left: 50%
            }
            100% {
                transform: translate(-50%, -50%) scale(3);
                opacity: 0;
                top: 50%;
                left: 50%;
                position: absolute
            }
        }

        @-moz-keyframes click-wave {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.35;
                position: absolute;
                top: 50%;
                left: 50%
            }
            100% {
                transform: translate(-50%, -50%) scale(3);
                opacity: 0;
                top: 50%;
                left: 50%;
                position: absolute
            }
        }

        @keyframes click-wave {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.35;
                position: absolute;
                top: 50%;
                left: 50%
            }
            100% {
                transform: translate(-50%, -50%) scale(3);
                opacity: 0;
                top: 50%;
                left: 50%;
                position: absolute
            }
        }

        .pixel-radio {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            right: 0;
            bottom: 0;
            left: 0;
            height: 15px;
            width: 15px;
            -webkit-transition: all 0.15s ease-out 0s;
            -moz-transition: all 0.15s ease-out 0s;
            transition: all 0.15s ease-out 0s;
            background: #fff;
            border: 1px solid #999999;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            margin-right: 10px;
            outline: none;
            position: relative;
            z-index: 1
        }

        .pixel-radio:checked {
            border: 8px solid #384aeb
        }

        .pixel-radio:checked::after {
            -webkit-animation: click-wave 0.65s;
            -moz-animation: click-wave 0.65s;
            animation: click-wave 0.65s;
            background: #384aeb;
            content: '';
            display: block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            position: relative;
            z-index: 2;
            opacity: 0
        }

        .pixel-radio {
            border-radius: 50%;
            top: 2px
        }

        .pixel-radio::after {
            border-radius: 50%
        }

        .price-range-area {
            padding: 15px 30px 0 30px
        }

        .price-range-area .noUi-target {
            background: #eee;
            border-radius: 0px;
            border: 0px;
            box-shadow: none
        }

        .price-range-area .noUi-base {
            background: #e8f0f2
        }

        .price-range-area .noUi-horizontal {
            height: 6px
        }

        .price-range-area .noUi-connect {
            background: #e8f0f2;
            border-radius: 0px;
            box-shadow: none
        }

        .price-range-area .noUi-horizontal .noUi-handle {
            width: 16px;
            height: 16px;
            left: -8px;
            top: -5px;
            border-radius: 50%;
            border: 0px;
            background: #384aeb;
            box-shadow: none;
            cursor: pointer;
            -webkit-transition: ease 0.1s;
            -moz-transition: ease 0.1s;
            -o-transition: ease 0.1s;
            transition: ease 0.1s
        }

        .price-range-area .noUi-horizontal .noUi-handle:focus {
            outline: none
        }

        .price-range-area .noUi-horizontal .noUi-handle:hover {
            border: 3px solid #384aeb;
            background: #fff
        }

        .price-range-area .noUi-handle::after, .price-range-area .noUi-handle::before {
            display: none
        }

        .price-range-area .value-wrapper {
            margin-top: 15px;
            color: #777777
        }

        .price-range-area .value-wrapper .to {
            margin: 0 5px
        }

        .price-range-area .price {
            margin-right: 5px;
            color: #777
        }

        .single-search-product {
            padding: 10px 0
        }

        @media (min-width: 1000px) {
            .single-search-product {
                padding: 20px 0
            }
        }

        .single-search-product-wrapper {
            padding: 12px 20px 10px 30px;
            border: 1px solid #EEEEEE
        }

        .single-search-product img {
            max-width: 70px;
            height: auto
        }

        .single-search-product .desc {
            margin-left: 15px;
            margin-top: 5px
        }

        .single-search-product .desc .title {
            font-family: 'Oswald', sans-serif;
            color: #222;
            margin-bottom: 0;
            display: inline-block
        }

        .single-search-product .desc .price {
            font-size: 16px;
            font-weight: 500;
            color: #777777
        }

        .single-search-product .desc .price span {
            font-weight: 700
        }

        .single-search-product .desc .price del {
            font-size: 12px;
            color: #cccccc;
            font-weight: 400
        }

        .single-search-product:hover .title {
            color: #384aeb
        }

        .order-wrapper {
            background: #f1f6f7;
            padding: 25px
        }

        .order-wrapper .list-row {
            border-bottom: 1px solid #eee;
            padding: 10px 0
        }

        .order-wrapper .list-row h6 {
            text-transform: uppercase
        }

        .order-wrapper .list-row .total {
            font-weight: 500;
            color: #222
        }

        .order-wrapper .bold-lable {
            font-weight: 700;
            text-transform: uppercase;
            color: #222
        }

        .order-wrapper .payment-info {
            margin-top: 20px;
            background: #f5f5f5;
            border-top: 1px solid #eee;
            padding: 15px
        }

        .order-wrapper .terms-link {
            color: #43b253
        }

        .order-wrapper .pixel-checkbox {
            margin-top: 5px
        }

        .billing-title {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.3em;
            margin-bottom: 15px;
            border-color: #DDDDDD
        }

        .billing-alert {
            font-size: 18px;
            color: #384aeb;
            margin-bottom: 30px
        }

        .confirmation-card {
            padding: 38px;
            background: #f1f6f7
        }

        .confirmation-card tr td:last-child {
            color: #222;
            padding-left: 25px
        }

        .order_details_table {
            background: #f1f6f7;
            padding: 30px;
            margin-top: 75px
        }

        @media (min-width: 767px) {
            .order_details_table {
                margin-top: 45px
            }
        }

        .order_details_table h2 {
            color: #222;
            font-size: 18px;
            padding-bottom: 15px
        }

        .order_details_table .table {
            margin-bottom: 0px
        }

        .order_details_table .table thead tr th {
            border-bottom: 1px solid #ddd;
            font-size: 16px;
            font-family: "Oswald", sans-serif;
            font-weight: normal;
            color: #222
        }

        @media (max-width: 1000px) {
            .order_details_table .table tbody tr:last-child {
                height: 50px
            }
        }

        .order_details_table .table tbody tr td {
            border: 0;
            color: #777777
        }

        .order_details_table .table tbody tr td p {
            margin-bottom: 0px
        }

        .order_details_table .table tbody tr td h5 {
            font-family: "Roboto", sans-serif;
            color: #222;
            margin-bottom: 0px;
            font-size: 15px;
            text-transform: capitalize;
            font-weight: 500
        }

        .order_details_table .table tbody tr td h4 {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            margin-bottom: 0px;
            color: #222;
            font-size: 15px;
            text-transform: capitalize;
            font-weight: 500
        }

        .order_details_table .table tbody tr:last-child td {
            border-top: 1px solid #ddd;
            padding-bottom: 0
        }

        .order_details_table .table tbody tr:last-child td p {
            color: #222
        }

        .tracking_box_area .tracking_box_inner p {
            max-width: 870px;
            color: #555555;
            margin-bottom: 25px
        }

        .tracking_box_area .tracking_box_inner .tracking_form {
            max-width: 645px
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group {
            margin-bottom: 1.2rem
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input {
            height: 40px;
            border: 1px solid #eee;
            padding: 0px 15px;
            outline: none;
            box-shadow: none;
            border-radius: 0px;
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input.placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input:-moz-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input::-moz-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input::-webkit-input-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group:last-child {
            margin-bottom: 0px
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group .submit_btn {
            text-transform: uppercase
        }

        .check_title h2 {
            font-size: 15px;
            font-weight: normal;
            font-family: "Roboto", sans-serif;
            background: #f1f6f7;
            line-height: 40px !important;
            padding-left: 30px;
            margin-bottom: 0px
        }

        .check_title h2 a {
            color: #384aeb;
            text-decoration: underline
        }

        .returning_customer p {
            margin-top: 15px;
            padding-left: 30px;
            margin-bottom: 25px
        }

        .returning_customer .contact_form {
            max-width: 710px;
            margin-left: 15px
        }

        .returning_customer .contact_form .form-group {
            margin-bottom: 20px
        }

        .returning_customer .contact_form .form-group input {
            border: 1px solid #eeeeee;
            height: 40px;
            border-radius: 3px;
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group input.placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group input:-moz-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group input::-moz-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group input::-webkit-input-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group .primary-btn {
            line-height: 38px;
            padding: 0px 38px;
            text-transform: uppercase;
            margin-right: 10px;
            border-radius: 2px;
            border: none
        }

        .returning_customer .contact_form .form-group .creat_account {
            display: inline-block;
            margin-left: 15px
        }

        .returning_customer .contact_form .form-group .creat_account input {
            height: auto;
            margin-right: 10px
        }

        .returning_customer .contact_form .form-group .lost_pass {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
            font-weight: normal
        }

        .cupon_area {
            margin-bottom: 40px
        }

        .cupon_area input {
            margin-left: 30px;
            max-width: 730px;
            width: 100%;
            display: block;
            height: 40px;
            border-radius: 3px;
            padding: 0px 15px;
            border: 1px solid #eeeeee;
            outline: none;
            box-shadow: none;
            margin-top: 20px;
            margin-bottom: 20px
        }

        .cupon_area .tp_btn {
            margin-left: 30px
        }

        .tp_btn {
            border: 1px solid #eeeeee;
            display: inline-block;
            line-height: 38px;
            padding: 0px 40px;
            color: #222;
            text-transform: uppercase;
            font-weight: 500;
            border-radius: 3px
        }

        .tp_btn:hover {
            background: #384aeb;
            color: #fff;
            border-color: #384aeb
        }

        .billing_details h3 {
            font-size: 18px;
            color: #222;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 30px
        }

        .billing_details .contact_form .form-group {
            margin-bottom: 20px
        }

        .billing_details .contact_form .form-group .placeholder::before {
            font-size: 14px;
            color: #999999
        }

        .billing_details .contact_form .form-group input {
            font-size: 14px;
            border-radius: 3px;
            color: #999999;
            border-color: #EEEEEE
        }

        .billing_details .contact_form .form-group input.placeholder {
            color: #999999;
            font-size: 14px
        }

        .billing_details .contact_form .form-group input:-moz-placeholder {
            color: #999999;
            font-size: 14px
        }

        .billing_details .contact_form .form-group input::-moz-placeholder {
            color: #999999;
            font-size: 14px
        }

        .billing_details .contact_form .form-group input::-webkit-input-placeholder {
            color: #999999;
            font-size: 14px
        }

        .billing_details .contact_form .form-group .form-control {
            border-color: #EEEEEE;
            font-size: 14px;
            color: #777777
        }

        .billing_details .contact_form .form-group .form-control::placeholder {
            color: #777777
        }

        .billing_details .contact_form .form-group label {
            color: #999999
        }

        .billing_details .contact_form .form-group textarea {
            height: 150px;
            border-radius: 3px;
            margin-top: 15px
        }

        .billing_details .contact_form .form-group .country_select {
            width: 100%;
            height: 40px;
            border-color: #EEEEEE
        }

        .billing_details .contact_form .form-group .country_select .current {
            color: #999999
        }

        .billing_details .contact_form .form-group .country_select span {
            color: #777
        }

        .billing_details .contact_form .form-group .country_select .list {
            width: 100%;
            border-radius: 0px
        }

        .billing_details .contact_form .form-group .country_select .list li {
            font-size: 14px;
            font-weight: normal
        }

        .billing_details .contact_form .form-group .creat_account #f-option2 {
            margin-right: 5px
        }

        .billing_details .contact_form .form-group .creat_account #f-option3 {
            margin-right: 5px
        }

        .billing_details .contact_form .form-group .creat_account a {
            color: #384aeb
        }

        .order_box {
            background: #e8f0f2;
            padding: 30px
        }

        .order_box h2 {
            border-bottom: 1px solid #dddddd;
            font-size: 18px;
            font-weight: 500;
            color: #222;
            padding-bottom: 15px
        }

        .order_box .list li a {
            font-size: 14px;
            color: #777;
            font-weight: normal;
            border-bottom: 1px solid #eeeeee;
            display: block;
            line-height: 42px
        }

        .order_box .list li a h4 {
            font-family: "Roboto", sans-serif;
            font-size: 15px;
            margin-top: 15px
        }

        .order_box .list li a span {
            float: right
        }

        .order_box .list li a .middle {
            float: none;
            width: 50px;
            text-align: right;
            display: inline-block;
            margin-left: 30px;
            color: #222
        }

        .order_box .list li:nth-child(4) a .middle {
            margin-left: 48px
        }

        .order_box .list_2 li a {
            text-transform: uppercase;
            color: #222;
            font-weight: 500
        }

        .order_box .list_2 li a span {
            color: #777;
            text-transform: capitalize
        }

        .order_box .list_2 li:last-child a span {
            color: #222
        }

        .order_box .payment_item h4 {
            font-size: 14px;
            text-transform: uppercase;
            color: #222;
            font-weight: 500;
            padding-left: 22px;
            position: relative;
            margin-bottom: 15px;
            margin-top: 15px
        }

        .order_box .payment_item h4:before {
            content: "";
            width: 14px;
            height: 14px;
            border-radius: 50%;
            border: 1px solid #cdcdcd;
            background: #fff;
            display: block;
            position: absolute;
            left: 0px;
            top: 50%;
            transform: translateY(-50%)
        }

        .order_box .payment_item h4:after {
            content: "";
            height: 4px;
            width: 4px;
            background: #fff;
            border-radius: 50%;
            display: block;
            position: absolute;
            left: 5px;
            top: 8px
        }

        .order_box .payment_item h4 img {
            padding-left: 60px
        }

        .order_box .payment_item p {
            background: #fff;
            padding: 15px 20px;
            font-size: 12px
        }

        .order_box .payment_item.active h4:before {
            background: #384aeb;
            border-color: #384aeb
        }

        .order_box .creat_account {
            margin-bottom: 15px
        }

        .order_box .creat_account label {
            padding-left: 10px;
            font-size: 12px;
            color: #222
        }

        .order_box .creat_account a {
            color: #c5322d
        }

        .order_box .primary-btn {
            display: block;
            line-height: 38px;
            text-transform: uppercase;
            text-align: center;
            border-radius: 2px
        }

        .order_box .primary-btn:hover:before {
            left: 310px
        }

        .order_details .title_confirmation {
            text-align: center;
            color: #28d500;
            font-size: 18px;
            margin-bottom: 80px
        }

        .order_d_inner .details_item h4 {
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
            font-size: 18px;
            color: #222;
            padding-left: 18px
        }

        .order_d_inner .details_item .list {
            padding-left: 18px
        }

        @media (min-width: 767px) {
            .order_d_inner .details_item .list {
                margin-bottom: 30px
            }
        }

        .order_d_inner .details_item .list li {
            margin-bottom: 8px
        }

        .order_d_inner .details_item .list li:last-child {
            margin-bottom: 0px
        }

        .order_d_inner .details_item .list li a {
            font-size: 14px;
            color: #222
        }

        .order_d_inner .details_item .list li a span {
            width: 145px;
            display: inline-block;
            color: #777
        }

        .order_details_table {
            background: #e5ecee;
            padding: 30px;
            margin-top: 75px
        }

        @media (min-width: 767px) {
            .order_details_table {
                margin-top: 45px
            }
        }

        .order_details_table h2 {
            color: #222;
            font-size: 18px;
            padding-bottom: 15px
        }

        .order_details_table .table {
            margin-bottom: 0px
        }

        .order_details_table .table thead tr th {
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            font-weight: normal
        }

        .order_details_table .table tbody tr td p {
            margin-bottom: 0px
        }

        .order_details_table .table tbody tr td h5 {
            color: #222;
            margin-bottom: 0px
        }

        .order_details_table .table tbody tr td h4 {
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 0px;
            color: #222
        }

        .order_details_table .table tbody tr:last-child td {
            border-top: 1px solid #ddd
        }

        .order_details_table .table tbody tr:last-child td p {
            color: #222
        }

        .radion_btn input[type=radio] {
            position: absolute;
            visibility: hidden
        }

        .radion_btn {
            position: relative;
            margin-top: 10px;
            margin-bottom: 15px
        }

        .radion_btn img {
            position: absolute;
            right: 40px;
            top: 0px
        }

        .radion_btn label {
            display: block;
            position: relative;
            font-weight: 300;
            font-size: 1.35em;
            padding: 0px 25px 21px 25px;
            height: 14px;
            z-index: 9;
            cursor: pointer;
            -webkit-transition: all 0.25s linear;
            font-weight: 500;
            color: #222;
            font-size: 15px;
            letter-spacing: .25px;
            text-transform: capitalize
        }

        .radion_btn .check {
            display: block;
            position: absolute;
            border: 1px solid #cdcdcd;
            border-radius: 100%;
            height: 14px;
            width: 14px;
            top: 5px;
            left: 0px;
            background: #fff;
            z-index: 5;
            transition: border .25s linear;
            -webkit-transition: border .25s linear
        }

        .radion_btn .check::before {
            display: block;
            position: absolute;
            content: '';
            border-radius: 100%;
            height: 4px;
            width: 4px;
            top: 4px;
            left: 4px;
            margin: auto;
            transition: background 0.25s linear;
            -webkit-transition: background 0.25s linear
        }

        .radion_btn input[type=radio]:checked ~ .check {
            border: 1px solid #C5322D;
            background: #C5322D
        }

        .radion_btn input[type=radio]:checked ~ .check::before {
            background: #fff
        }

        .radion_btn input[type=radio]:checked ~ label {
            color: #000
        }

        .order_box .creat_account a {
            font-size: 12px;
            color: #384aeb
        }

        .login_box_area .login_box_img {
            height: 350px;
            position: relative
        }

        @media (min-width: 1000px) {
            .login_box_area .login_box_img {
                height: 610px
            }
        }

        @media (min-width: 991px) {
            .login_box_area .login_box_img {
                margin-right: -30px
            }
        }

        .login_box_area .login_box_img img {
            width: 100%
        }

        .login_box_area .login_box_img:before {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            content: "";
            background: #384aeb;
            opacity: .9
        }

        .login_box_area .login_box_img .hover {
            position: absolute;
            top: 50%;
            left: 0px;
            text-align: center;
            width: 100%;
            transform: translateY(-50%)
        }

        .login_box_area .login_box_img .hover h4 {
            font-size: 24px;
            color: #fff;
            font-weight: 500;
            margin-bottom: 15px
        }

        .login_box_area .login_box_img .hover p {
            max-width: 390px;
            margin: 0px auto 28px;
            color: #fff
        }

        .login_box_area .login_box_img .hover .primary-btn {
            border-radius: 0px;
            line-height: 38px;
            text-transform: uppercase
        }

        .login_box_area .login_box_img .hover .primary-btn:hover:before {
            left: 260px
        }

        .login_box_area .login_box_img .button:hover {
            background: #c5322d !important;
            color: #fff !important;
            border-color: #c5322d !important
        }

        .login_form_inner {
            box-shadow: 0px 10px 40px 0px rgba(56, 74, 235, 0.1);
            height: 100%;
            text-align: center;
            padding: 30px 0
        }

        @media (min-width: 1000px) {
            .login_form_inner {
                padding-top: 115px;
                padding-bottom: 0
            }
        }

        .login_form_inner h3 {
            color: #222;
            text-transform: uppercase;
            font-size: 18px;
            margin-bottom: 75px
        }

        .login_form_inner .login_form {
            max-width: 385px;
            margin: auto
        }

        .login_form_inner.reg_form {
            padding-top: 60px
        }

        .login_form_inner.reg_form h3 {
            margin-bottom: 70px
        }

        .login_form .form-group {
            margin-bottom: 22px
        }

        .login_form .form-group input {
            height: 40px;
            border: none;
            border-bottom: 1px solid #cccccc;
            border-radius: 0px;
            outline: none;
            box-shadow: none;
            font-size: 14px;
            color: #999999
        }

        .login_form .form-group input.placeholder {
            color: #999999
        }

        .login_form .form-group input:-moz-placeholder {
            color: #999999
        }

        .login_form .form-group input::-moz-placeholder {
            color: #999999
        }

        .login_form .form-group input::-webkit-input-placeholder {
            color: #999999
        }

        .login_form .form-group .creat_account {
            margin-top: 10px;
            font-size: 14px;
            text-align: left
        }

        .login_form .form-group .creat_account input {
            height: auto;
            margin-right: 10px;
            position: relative;
            top: 2px
        }

        .login_form .form-group .primary-btn {
            display: block;
            border-radius: 0px;
            line-height: 38px;
            width: 100%;
            text-transform: uppercase;
            border: none
        }

        .login_form .form-group .primary-btn:hover:before {
            left: 370px
        }

        .login_form .form-group a {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
            display: block
        }

        .instagram_area {
            position: relative
        }

        .instagram_area .container {
            max-width: 1625px
        }

        .instagram_area .insta_btn {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            z-index: 2
        }

        .instagram_area .insta_btn .theme_btn {
            background: #fff;
            border-radius: 5px;
            padding: 0px 45px;
            line-height: 50px;
            color: #222;
            font-size: 13px;
            font-weight: 500;
            box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.1)
        }

        .instagram_area.top_pad {
            padding-top: 120px
        }

        .instagram_image {
            margin-bottom: -120px !important
        }

        .instagram_image a {
            flex: 0 0 16.667%;
            max-width: 16.667%;
            display: block;
            overflow: hidden
        }

        .instagram_image a img {
            width: 100%;
            transition: all 300ms ease
        }

        .instagram_image a:hover img {
            transform: scale(1.05)
        }

        @media (max-width: 991px) {
            .instagram_image {
                margin-bottom: 120px !important
            }
        }

        @media (max-width: 767px) {
            .instagram_image a {
                flex: 0 0 33.33%;
                max-width: 33.33%
            }
        }

        @media (max-width: 575px) {
            .instagram_image {
                margin-bottom: 70px !important
            }

            .instagram_image a {
                flex: 0 0 50%;
                max-width: 50%
            }
        }

        .cart_area {
            padding-top: 90px;
            padding-bottom: 55px
        }

        .cart_inner .table th, .cart_inner .table td {
            padding: .75rem 1.5rem;
            border-color: #EEEEEE
        }

        .cart_inner .table thead tr th {
            border-top: 0px;
            font-size: 16px;
            font-weight: 500;
            font-family: "Oswald", sans-serif;
            color: #222;
            border-bottom: 0px !important
        }

        .cart_inner .table tbody tr td {
            padding-top: 30px;
            padding-bottom: 30px;
            vertical-align: middle;
            align-self: center
        }

        .cart_inner .table tbody tr td .media .d-flex {
            padding-right: 30px
        }

        .cart_inner .table tbody tr td .media .d-flex img {
            border-radius: 3px
        }

        @media (max-width: 600px) {
            .cart_inner .table tbody tr td .media .d-flex img {
                max-width: 100px;
                height: 80px
            }
        }

        .cart_inner .table tbody tr td .media .media-body {
            vertical-align: middle;
            align-self: center
        }

        .cart_inner .table tbody tr td .media .media-body p {
            margin-bottom: 0px
        }

        .cart_inner .table tbody tr td h5 {
            font-size: 15px;
            color: #222;
            font-family: "Roboto", sans-serif;
            margin-bottom: 0px
        }

        .cart_inner .table tbody tr td .product_count {
            margin-bottom: 0px
        }

        .cart_inner .table tbody tr td .product_count input {
            width: 100px;
            padding-left: 30px;
            height: 40px;
            outline: none;
            box-shadow: none
        }

        .cart_inner .table tbody tr td .product_count .increase {
            top: -2px
        }

        .cart_inner .table tbody tr td .product_count .increase:before {
            content: "";
            height: 40px;
            width: 1px;
            position: absolute;
            left: -3px;
            top: 0px;
            background: #eeeeee
        }

        .cart_inner .table tbody tr td .product_count .increase:after {
            content: "";
            height: 1px;
            width: 30px;
            position: absolute;
            left: -3px;
            top: 22px;
            background: #eeeeee
        }

        .cart_inner .table tbody tr td .product_count .reduced {
            bottom: -6px
        }

        .cart_inner .table tbody tr.bottom_button .button {
            font-size: 15px;
            padding: 7px 18px;
            background: #f9f9ff;
            border-color: #EEEEEE;
            color: #222
        }

        @media (min-width: 1000px) {
            .cart_inner .table tbody tr.bottom_button .button {
                padding: 7px 45px
            }
        }

        .cart_inner .table tbody tr.bottom_button td:last-child {
            width: 60px
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text {
            margin-left: -429px
        }

        @media (min-width: 991px) {
            .cart_inner .table tbody tr.bottom_button td .cupon_text {
                margin-left: -465px
            }
        }

        @media (max-width: 600px) {
            .cart_inner .table tbody tr.bottom_button td .cupon_text {
                margin-left: -380px
            }
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input {
            width: 200px;
            padding: 0px 10px 0 18px;
            border-radius: 30px;
            border: 1px solid #eeeeee;
            height: 40px;
            font-size: 14px;
            color: #cccccc;
            font-weight: normal;
            margin-right: -3px;
            outline: none;
            box-shadow: none
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input.placeholder {
            font-size: 14px;
            color: #cccccc;
            font-weight: normal
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input:-moz-placeholder {
            font-size: 14px;
            color: #cccccc;
            font-weight: normal
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input::-moz-placeholder {
            font-size: 14px;
            color: #cccccc;
            font-weight: normal
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input::-webkit-input-placeholder {
            font-size: 14px;
            color: #cccccc;
            font-weight: normal
        }

        @media (max-width: 600px) {
            .cart_inner .table tbody tr.bottom_button td .cupon_text input {
                width: 120px
            }
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text .primary-btn {
            height: 40px;
            line-height: 38px;
            text-transform: uppercase;
            background: #384aeb;
            padding: 0px 38px;
            margin-right: 5px;
            margin-left: 10px;
            border-radius: 30px;
            text-transform: capitalize;
            font-weight: 500;
            color: #fff
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text .gray_btn {
            padding: 0px 40px
        }

        .cart_inner .table tbody tr.shipping_area td:nth-child(3) {
            vertical-align: top
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box {
            margin-left: -250px;
            text-align: right
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li {
            margin-bottom: 12px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li:last-child {
            margin-bottom: 0px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li a {
            padding-right: 30px;
            font-size: 15px;
            color: #777;
            position: relative
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li a:before {
            content: "";
            height: 16px;
            width: 16px;
            border: 1px solid #cdcdcd;
            display: inline-block;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translateY(-50%)
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li a:after {
            content: "";
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background: #384aeb;
            display: inline-block;
            position: absolute;
            right: 3px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li.active a:after {
            opacity: 1
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box h6 {
            font-size: 14px;
            font-weight: normal;
            color: #222;
            font-size: 16px;
            margin-top: 20px;
            margin-bottom: 20px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box h6 i {
            color: #222;
            padding-left: 5px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select {
            display: block;
            width: 100%;
            background: #f1f6f7;
            border: 1px solid #eeeeee;
            height: 40px;
            color: #999999;
            margin-bottom: 20px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select:after {
            right: 20px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select .list {
            width: 100%;
            border-radius: 0px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select .list li {
            font-size: 14px;
            font-weight: normal;
            color: #777
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box input {
            height: 40px;
            outline: none;
            background: #f1f6f7;
            border: 1px solid #eeeeee;
            width: 100%;
            font-size: 14px;
            color: #999999;
            padding: 0px 15px;
            margin-bottom: 20px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box input::placeholder {
            color: #999999
        }

        .cart_inner .table tbody tr.out_button_area .checkout_btn_inner {
            margin-left: -395px
        }

        .cart_inner .table tbody tr.out_button_area .checkout_btn_inner .primary-btn {
            height: 40px;
            padding: 0px 44px;
            line-height: 38px;
            text-transform: capitalize;
            background: #384aeb;
            border-radius: 30px;
            color: #fff;
            font-weight: 500
        }

        .cart_inner .table tbody tr.out_button_area .checkout_btn_inner .primary-btn:hover:before {
            left: 240px
        }

        .gray_btn {
            line-height: 38px;
            background: #f1f6f7;
            border: 1px solid #eeeeee;
            border-radius: 30px;
            padding: 0px 44px;
            display: inline-block;
            color: #222;
            text-transform: capitalize;
            font-weight: 500
        }

        .product_image_area {
            padding-top: 50px
        }

        @media (min-width: 1000px) {
            .product_image_area {
                padding-top: 100px
            }
        }

        .s_Product_carousel .owl-dots {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%)
        }

        .s_Product_carousel .owl-dots div {
            height: 5px;
            width: 20px;
            background: #dddddd;
            margin: 5px;
            display: block;
            content: "";
            border-radius: 50px
        }

        .s_Product_carousel .owl-dots div.active {
            width: 30px
        }

        .s_product_text {
            margin-left: -15px;
            margin-top: 65px
        }

        @media (max-width: 575px) {
            .s_product_text {
                margin-left: 0px
            }
        }

        .s_product_text h3 {
            font-size: 24px;
            font-weight: 500;
            color: #222;
            margin-bottom: 20px
        }

        .s_product_text h2 {
            font-family: "Roboto", sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #384aeb;
            margin-bottom: 10px
        }

        .s_product_text .list li {
            margin-bottom: 5px
        }

        .s_product_text .list li a {
            font-size: 15px;
            font-weight: normal;
            color: #777777
        }

        .s_product_text .list li a span {
            width: 110px;
            display: inline-block;
            color: #555555
        }

        .s_product_text .list li a span:hover {
            color: #555
        }

        .s_product_text .list li a.active span {
            color: #555;
            -webkit-text-fill-color: #555
        }

        .s_product_text .list li:last-child {
            margin-bottom: 0px
        }

        .s_product_text p {
            padding-top: 20px;
            border-top: 1px dotted #eeeeee;
            border-bottom: 1px dotted #eeeeee;
            margin-top: 20px;
            padding-bottom: 26px;
            margin-bottom: 0
        }

        .s_product_text .card_area {
            margin-top: 25px
        }

        .s_product_text .card_area .primary-btn {
            line-height: 38px;
            padding: 0px 38px;
            text-transform: uppercase;
            margin-right: 10px;
            border-radius: 5px
        }

        .s_product_text .card_area .icon_btn {
            position: relative;
            height: 40px;
            width: 40px;
            text-align: center;
            background: #e8f0f2;
            border-radius: 3px;
            display: inline-block;
            color: #222;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            margin-right: 10px;
            z-index: 1
        }

        .s_product_text .card_area .icon_btn i, .s_product_text .card_area .icon_btn span {
            line-height: 40px
        }

        .s_product_text .card_area .icon_btn:after {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            content: "";
            border-radius: 50%;
            opacity: 0;
            visibility: hidden;
            z-index: -1
        }

        .s_product_text .card_area .icon_btn:hover {
            background: #fff;
            box-shadow: 0px 10px 20px 0px rgba(153, 153, 153, 0.3)
        }

        .s_product_text .card_area .icon_btn:hover:after {
            opacity: 1;
            visibility: visible
        }

        .product_count {
            display: inline-block;
            position: relative;
            margin-bottom: 24px
        }

        .product_count label {
            font-size: 14px;
            color: #777;
            font-weight: normal;
            padding-right: 10px
        }

        .product_count input {
            width: 76px;
            border: 1px solid #eeeeee;
            border-radius: 3px;
            padding-left: 10px
        }

        .product_count button {
            display: block;
            border: none;
            background: transparent;
            box-shadow: none;
            cursor: pointer;
            position: absolute;
            right: 0px;
            font-size: 14px;
            color: #cccccc;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .product_count button:hover {
            color: #222
        }

        .product_count .increase {
            top: -4px
        }

        .product_count .reduced {
            bottom: -8px
        }

        .product_description_area {
            padding-bottom: 100px;
            margin-top: 60px
        }

        .product_description_area .nav.nav-tabs {
            background: #f1f6f7;
            text-align: center;
            display: block;
            border: none;
            padding: 10px 0px
        }

        .product_description_area .nav.nav-tabs li {
            display: inline-block;
            margin-right: 7px
        }

        .product_description_area .nav.nav-tabs li:last-child {
            margin-right: 0px
        }

        @media (max-width: 441px) {
            .product_description_area .nav.nav-tabs li:last-child {
                margin-top: 15px
            }
        }

        .product_description_area .nav.nav-tabs li a {
            padding: 0px;
            border: none;
            line-height: 38px;
            background: #fff;
            border: 1px solid #eeeeee;
            border-radius: 30px;
            padding: 0px 30px;
            color: #222;
            font-size: 14px;
            font-weight: normal
        }

        @media (max-width: 570px) {
            .product_description_area .nav.nav-tabs li a {
                padding: 0 15px
            }
        }

        .product_description_area .nav.nav-tabs li a.active {
            color: #fff;
            background: #384aeb;
            border-color: #384aeb
        }

        .product_description_area .tab-content {
            border-left: 1px solid #eee;
            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 30px 30px 15px 30px
        }

        .product_description_area .tab-content .total_rate .box_total {
            background: #f1f6f7;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px
        }

        .product_description_area .tab-content .total_rate .box_total h4 {
            font-size: 48px;
            font-weight: bold;
            color: #384aeb
        }

        .product_description_area .tab-content .total_rate .box_total h5 {
            color: #333333;
            margin-bottom: 0px;
            font-size: 24px
        }

        .product_description_area .tab-content .total_rate .box_total h6 {
            font-family: "Roboto", sans-serif;
            margin-bottom: 0px;
            font-size: 14px;
            color: #555555;
            font-weight: normal
        }

        .product_description_area .tab-content .total_rate .rating_list {
            margin-bottom: 30px
        }

        .product_description_area .tab-content .total_rate .rating_list h3 {
            font-size: 18px;
            color: #222;
            font-weight: 500;
            margin-bottom: 10px
        }

        .product_description_area .tab-content .total_rate .rating_list .list li a {
            font-size: 15px;
            color: #555555
        }

        .product_description_area .tab-content .total_rate .rating_list .list li a i {
            color: #fbd600
        }

        .product_description_area .tab-content .total_rate .rating_list .list li a i:first-child {
            margin-left: 15px
        }

        .product_description_area .tab-content .total_rate .rating_list .list li a i:last-child {
            margin-right: 15px
        }

        .product_description_area .tab-content .total_rate .rating_list .list li:nth-child a i:last-child {
            color: #eeeeee
        }

        .product_description_area .tab-content .table {
            margin-bottom: 0px
        }

        .product_description_area .tab-content .table tbody tr td {
            padding-left: 65px;
            padding-right: 65px;
            padding-top: 14px;
            padding-bottom: 14px
        }

        .product_description_area .tab-content .table tbody tr td h5 {
            font-size: 14px;
            font-weight: normal;
            color: #777;
            margin-bottom: 0px;
            white-space: nowrap
        }

        .product_description_area .tab-content .table tbody tr:first-child td {
            border-top: 0px
        }

        .review_item {
            margin-bottom: 10px
        }

        .review_item:last-child {
            margin-bottom: 0px
        }

        .review_item .media {
            position: relative
        }

        .review_item .media .d-flex {
            padding-right: 15px
        }

        .review_item .media .media-body {
            vertical-align: middle;
            align-self: center
        }

        .review_item .media .media-body h4 {
            font-size: 16px;
            color: #222;
            margin-bottom: 4px
        }

        .review_item .media .media-body i {
            color: #fbd600
        }

        .review_item .media .media-body h5 {
            font-size: 13px;
            font-weight: normal;
            color: #777
        }

        .review_item .media .media-body .reply_btn {
            border: 1px solid #e0e0e0;
            padding: 0px 28px;
            display: inline-block;
            line-height: 32px;
            border-radius: 16px;
            font-size: 14px;
            color: #222;
            position: absolute;
            right: 0px;
            top: 14px;
            @icnlude transition
        }

        .review_item .media .media-body .reply_btn:hover {
            background: #384aeb;
            border-color: #384aeb;
            color: #fff
        }

        .review_item p {
            padding-top: 10px;
            margin-bottom: 0px
        }

        .review_item.reply {
            padding-left: 28px
        }

        .review_box h4 {
            font-size: 20px;
            color: #222;
            margin-bottom: 20px
        }

        .review_box p {
            margin-bottom: 0px;
            color: #555555;
            display: inline-block
        }

        .review_box .list {
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px
        }

        .review_box .list li {
            display: inline-block
        }

        .review_box .list li a {
            display: inline-block;
            color: #fbd600
        }

        .review_box .contact_form {
            margin-top: 15px
        }

        .review_box .primary-btn {
            line-height: 38px !important;
            padding: 0px 38px;
            text-transform: uppercase;
            margin-right: 10px;
            border-radius: 5px;
            border: none
        }

        .form-review .form-control {
            height: 46px;
            background: transparent;
            border: 1px solid #EEEEEE;
            font-size: 14px;
            color: #999999
        }

        .footer-area {
            background: #002347;
            padding: 50px 0px 50px
        }

        @media (min-width: 1000px) {
            .footer-area {
                padding: 195px 0px 120px
            }
        }

        .single-footer-widget p {
            margin-bottom: 15px
        }

        .single-footer-widget p:last-child {
            margin-bottom: 0
        }

        .single-footer-widget .instafeed {
            margin-left: -5px;
            margin-right: -5px
        }

        .single-footer-widget .instafeed li {
            margin: 5px
        }

        @media (max-width: 1199px) and (min-width: 992px) {
            .single-footer-widget .instafeed li:nth-child(4), .single-footer-widget .instafeed li:nth-child(5), .single-footer-widget .instafeed li:nth-child(6) {
                display: none
            }
        }

        .single-footer-widget .sm-head {
            color: #fff;
            margin-bottom: 0px
        }

        .single-footer-widget .sm-head span {
            position: relative;
            margin-left: -40px;
            margin-right: 10px;
            display: inline-block;
            width: 28px;
            height: 28px;
            line-height: 28px;
            text-align: center;
            background: #384aeb;
            color: #ffffff;
            border-radius: 20px
        }

        .tp_widgets .list li {
            margin-bottom: 12px
        }

        .tp_widgets .list li a {
            color: #7b838a;
            font-family: "Roboto", sans-serif
        }

        .tp_widgets .list li a:hover {
            color: #384aeb
        }

        .tp_widgets .list li:last-child {
            margin-bottom: 0px
        }

        .tp_widgets p {
            color: #7b838a
        }

        .footer_title {
            font-size: 18px;
            line-height: 24px;
            font-weight: 500;
            font-family: "Oswald", sans-serif;
            text-transform: capitalize;
            color: #fff;
            margin-bottom: 28px
        }

        @media (max-width: 991px) {
            .footer_title {
                margin-bottom: 10px
            }
        }

        .footer_title.large_title {
            font-size: 36px;
            font-weight: 600
        }

        @media (max-width: 1199px) {
            .footer_title.large_title {
                font-size: 18px
            }
        }

        .footer-bottom {
            background: rgba(0, 35, 71, 0.980392);
            padding: 32px
        }

        .footer-bottom .footer-text {
            color: #fff;
            margin-bottom: 0
        }

        .footer-bottom .footer-text a {
            color: #384aeb;
            opacity: 1
        }

        .footer-only {
            padding-top: 60px !important;
            padding-bottom: 60px !important
        }

        @media (min-width: 1000px) {
            .footer-only {
                padding-top: 115px !important;
                padding-bottom: 115px !important
            }
        }
        @import url("https://fonts.googleapis.com/css?family=Oswald:400,500,600");
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,500");

        body {
            color: #777;
            font-family: "Roboto", sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.667
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        a:hover {
            text-decoration: none
        }

        button {
            cursor: pointer
        }

        button:focus {
            outline: 0;
            box-shadow: none
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "Oswald", sans-serif;
            color: #222;
            line-height: 1.1
        }

        h1, .h1 {
            font-size: 50px;
            font-weight: 700
        }

        h2, .h2 {
            font-size: 36px;
            font-weight: 600
        }

        h3, .h3 {
            font-size: 26px;
            font-weight: 600
        }

        @media (min-width: 600px) {
            h3, .h3 {
                font-size: 36px
            }
        }

        h4, .h4 {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.3
        }

        a {
            display: inline-block
        }

        .fixed {
            background: #fff;
            position: fixed !important;
            top: 0;
            left: 0;
            width: 100% !important
        }

        .owl-carousel .owl-stage {
            display: flex
        }

        .section-margin {
            margin: 45px 0
        }

        @media (min-width: 980px) {
            .section-margin {
                margin: 70px 0
            }
        }

        @media (min-width: 1100px) {
            .section-margin {
                margin: 120px 0
            }

            .section-margin.calc-60px {
                margin: 120px 0 70px 0
            }
        }

        .section-margin--small {
            margin: 35px 0
        }

        @media (min-width: 1000px) {
            .section-margin--small {
                margin: 98px 0
            }
        }

        .section-padding {
            padding: 60px 0
        }

        @media (min-width: 1000px) {
            .section-padding {
                padding: 130px 0
            }
        }

        .pb-60px {
            padding-bottom: 60px
        }

        .pt-60px {
            padding-top: 60px
        }

        .ml-40 {
            margin-left: 40px
        }

        .header_area {
            position: relative;
            width: 100%;
            z-index: 9999;
            transition: background 0.4s, all 0.3s linear;
            box-shadow: 0px 10px 27px 3px rgba(221, 221, 221, 0.3)
        }

        .header_area .navbar {
            background: transparent;
            padding: 0px;
            border: 0px;
            border-radius: 0px
        }

        .header_area .navbar .nav .nav-item {
            margin-right: 45px
        }

        .header_area .navbar .nav .nav-item .nav-link {
            text-transform: capitalize;
            color: #222;
            display: inline-block
        }

        @media (min-width: 991px) {
            .header_area .navbar .nav .nav-item .nav-link {
                padding: 32px 0px
            }
        }

        .header_area .navbar .nav .nav-item .nav-link:after {
            display: none
        }

        .header_area .navbar .nav .nav-item:hover .nav-link, .header_area .navbar .nav .nav-item.active .nav-link {
            color: #384aeb
        }

        .header_area .navbar .nav .nav-item.submenu {
            position: relative
        }

        .header_area .navbar .nav .nav-item.submenu ul {
            border: none;
            padding: 0px;
            border-radius: 0px;
            box-shadow: none;
            margin: 0px;
            background: #fff
        }

        @media (min-width: 992px) {
            .header_area .navbar .nav .nav-item.submenu ul {
                position: absolute;
                top: 120%;
                left: 0px;
                min-width: 200px;
                text-align: left;
                opacity: 0;
                transition: all 300ms ease-in;
                visibility: hidden;
                display: block;
                border: none;
                padding: 0px;
                border-radius: 0px
            }
        }

        .header_area .navbar .nav .nav-item.submenu ul:before {
            content: "";
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px 10px 0 10px;
            border-color: #eeeeee transparent transparent transparent;
            position: absolute;
            right: 24px;
            top: 45px;
            z-index: 3;
            opacity: 0;
            transition: all 400ms linear
        }

        .header_area .navbar .nav .nav-item.submenu ul .nav-item {
            display: block;
            float: none;
            margin-right: 0px;
            border-bottom: 1px solid #ededed;
            margin-left: 0px;
            transition: all 0.4s linear
        }

        .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
            line-height: 45px;
            color: #222;
            padding: 0px 30px;
            transition: all 150ms linear;
            display: block;
            margin-right: 0px
        }

        .header_area .navbar .nav .nav-item.submenu ul .nav-item:last-child {
            border-bottom: none
        }

        .header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {
            background: #384aeb;
            color: #fff
        }

        @media (min-width: 992px) {
            .header_area .navbar .nav .nav-item.submenu:hover ul {
                visibility: visible;
                opacity: 1;
                top: 100%
            }
        }

        .header_area .navbar .nav .nav-item.submenu:hover ul .nav-item {
            margin-top: 0px
        }

        .header_area .navbar .nav .nav-item:last-child {
            margin-right: 0px
        }

        .header_area .navbar .search {
            font-size: 12px;
            line-height: 60px;
            display: inline-block;
            color: #222
        }

        .header_area .navbar .search i {
            font-weight: 600
        }

        .header_area.navbar_fixed .main_menu {
            position: fixed;
            width: 100%;
            top: -70px;
            left: 0;
            right: 0;
            background: #ffffff;
            -webkit-transform: translateY(70px);
            -moz-transform: translateY(70px);
            -ms-transform: translateY(70px);
            -o-transform: translateY(70px);
            transform: translateY(70px);
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1)
        }

        .header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
            line-height: 70px
        }

        #search_input_box {
            text-align: center;
            padding: 5px 20px
        }

        #search_input_box .form-control {
            padding-left: 0;
            background: transparent;
            border: 0;
            color: #ffffff;
            font-weight: 600;
            font-size: 18px
        }

        #search_input_box .form-control:focus {
            box-shadow: none;
            outline: none
        }

        #search_input_box input.placeholder {
            color: #ffffff;
            font-size: 16px
        }

        #search_input_box input:-moz-placeholder {
            color: #ffffff;
            font-size: 16px
        }

        #search_input_box input::-moz-placeholder {
            color: #ffffff;
            font-size: 16px
        }

        #search_input_box input::-webkit-input-placeholder {
            color: #ffffff;
            font-size: 16px
        }

        #search_input_box .btn {
            width: 0;
            height: 0;
            padding: 0;
            border: 0
        }

        #search_input_box .lnr-cross {
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 0
        }

        .header-top {
            background: #000000
        }

        @media (max-width: 991px) {
            .header-top {
                display: none
            }
        }

        .header-top a {
            color: #fff
        }

        .header-top ul li {
            display: inline-block;
            margin-left: 15px
        }

        .header-top .header-top-left a {
            margin-right: 60px;
            font-weight: 600
        }

        .header-top .header-top-left a .text {
            margin-top: -2px
        }

        .header-top .header-top-left a .text span {
            font-size: 14px;
            color: #ffffff
        }

        .header-top .header-top-left a .lnr {
            color: #ffffff;
            margin-right: 8px
        }

        @media (max-width: 767px) {
            .header-top .header-top-left .text {
                display: none
            }
        }

        .header-top .header-top-right {
            text-align: right
        }

        .header-top .header-top-right a {
            padding: 0 20px;
            height: 40px;
            display: inline-block;
            line-height: 40px;
            font-size: 14px;
            font-weight: 600;
            font-family: "Oswald", sans-serif;
            background: transparent;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .nav-shop li {
            display: inline-block;
            margin-right: 15px
        }

        .nav-shop li i, .nav-shop li span {
            font-size: 16px;
            color: #222
        }

        .nav-shop li button {
            padding: 0;
            border: 0;
            background: transparent;
            position: relative
        }

        .nav-shop li button .nav-shop__circle {
            font-size: 9px;
            display: inline-block;
            background: #384aeb;
            color: #fff;
            padding: 0px 5px;
            border-radius: 50%;
            position: absolute;
            top: -8px;
            right: -12px
        }

        .nav-shop li:last-child {
            margin-left: 40px
        }

        @media (max-width: 1619px) {
            .header_area .navbar .search {
                margin-left: 40px
            }
        }

        @media (max-width: 1199px) {
            .header_area .navbar .nav .nav-item {
                margin-right: 28px
            }

            .home_banner_area .banner_inner {
                padding: 100px 0px
            }

            .header_area .navbar .tickets_btn {
                margin-left: 40px
            }
        }

        @media (max-width: 991px) {
            .navbar-toggler {
                border: none;
                border-radius: 0px;
                padding: 0px;
                cursor: pointer;
                margin-top: 27px;
                margin-bottom: 23px
            }

            .header_area .navbar {
                background: #ffffff
            }

            .navbar-toggler[aria-expanded="false"] span:nth-child(2) {
                opacity: 1
            }

            .navbar-toggler[aria-expanded="true"] span:nth-child(2) {
                opacity: 0
            }

            .navbar-toggler[aria-expanded="true"] span:first-child {
                transform: rotate(-45deg);
                position: relative;
                top: 7.5px
            }

            .navbar-toggler[aria-expanded="true"] span:last-child {
                transform: rotate(45deg);
                bottom: 6px;
                position: relative
            }

            .navbar-toggler span {
                display: block;
                width: 25px;
                height: 3px;
                background: #384aeb;
                margin: auto;
                margin-bottom: 4px;
                transition: all 400ms linear;
                cursor: pointer
            }

            .navbar .container {
                padding-left: 15px;
                padding-right: 15px
            }

            .nav {
                padding: 0px 0px
            }

            .header_area + section, .header_area + row, .header_area + div {
                margin-top: 117px
            }

            .header_top .nav {
                padding: 0px
            }

            .header_area .navbar .nav .nav-item .nav-link {
                line-height: 30px;
                margin-right: 0px;
                display: block;
                border-bottom: 1px solid #ededed33;
                border-radius: 0px
            }

            .header_area .navbar .nav-shop {
                padding-bottom: 40px
            }

            .header_area .navbar .search {
                margin-left: 0px
            }

            .header_area .navbar-collapse {
                max-height: 340px;
                overflow-y: scroll
            }

            .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
                padding: 0px 15px
            }

            .header_area .navbar .nav .nav-item {
                margin-right: 0px
            }

            .header_area + section, .header_area + row, .header_area + div {
                margin-top: 0px;
                padding-top: 71px
            }

            .header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
                line-height: 40px
            }

            .categories_post img {
                width: 100%
            }

            .categories_post {
                max-width: 360px;
                margin: 0 auto
            }

            .blog_categorie_area .col-lg-4 {
                margin-top: 30px
            }

            .blog_area {
                padding-bottom: 80px
            }

            .single-post-area .blog_right_sidebar {
                margin-top: 30px
            }

            .contact_info {
                margin-bottom: 50px
            }

            .home_banner_area .donation_inner {
                margin-bottom: -30px
            }

            .home_banner_area .dontation_item {
                max-width: 350px;
                margin: auto
            }

            .footer-area .col-sm-6 {
                margin-bottom: 30px
            }

            .header_area .navbar .tickets_btn {
                margin-left: 0px
            }

            .home_banner_area {
                min-height: 700px
            }
        }

        @media (max-width: 767px) {
            .home_banner_area {
                min-height: 500px
            }

            .home_banner_area .banner_inner {
                min-height: 500px
            }

            .home_banner_area .banner_inner .banner_content {
                margin-top: 0px
            }

            .blog_banner .banner_inner .blog_b_text h2 {
                font-size: 40px;
                line-height: 50px
            }

            .blog_info.text-right {
                text-align: left !important;
                margin-bottom: 10px
            }

            .home_banner_area .banner_inner .banner_content h3 {
                font-size: 30px
            }

            .home_banner_area .banner_inner .banner_content p br {
                display: none
            }

            .home_banner_area .banner_inner .banner_content h3 span {
                line-height: 45px;
                padding-bottom: 0px;
                padding-top: 0px
            }

            .footer-bottom {
                text-align: center
            }

            .footer-bottom .footer-social {
                text-align: center;
                margin-top: 15px
            }
        }

        @media (max-width: 575px) {
            .top_menu {
                display: none
            }

            .header_area + section, .header_area + row, .header_area + div {
                margin-top: 0px;
                padding-top: 71px
            }

            .home_banner_area .banner_inner .banner_content h2 {
                font-size: 40px;
                line-height: 44px
            }

            .home_banner_area {
                min-height: 500px
            }

            .home_banner_area .banner_inner {
                min-height: 500px
            }

            .blog_banner .banner_inner .blog_b_text {
                margin-top: 0px
            }

            .home_banner_area .banner_inner .banner_content img {
                display: none
            }

            .home_banner_area .banner_inner .banner_content h5 {
                margin-top: 0px
            }

            .sample-text-area {
                padding: 70px 0 70px 0
            }

            .generic-blockquote {
                padding: 30px 15px 30px 30px
            }

            .blog_details h2 {
                font-size: 20px;
                line-height: 30px
            }

            .blog_banner .banner_inner .blog_b_text h2 {
                font-size: 28px;
                line-height: 38px
            }

            .footer-area {
                padding: 70px 0px
            }

            .single-footer-widget .sub-btn {
                right: 0px
            }
        }

        @media (max-width: 480px) {
            .header_area .navbar-collapse {
                max-height: 250px
            }

            .home_banner_area .banner_inner .banner_content {
                margin-top: 0px
            }

            .home_banner_area .banner_inner .banner_content h3 {
                font-size: 24px
            }

            .banner_area .banner_inner .banner_content h2 {
                font-size: 32px
            }

            .comments-area .thumb {
                margin-right: 10px
            }
        }

        .section-intro p {
            margin-bottom: 3px
        }

        .section-intro__style {
            border-bottom: 2px solid #384aeb;
            padding-bottom: 8px
        }

        .hero-banner {
            background: #F1F6F7;
            position: relative;
            margin-bottom: 10px
        }

        @media (min-width: 991px) {
            .hero-banner {
                z-index: 111
            }
        }

        .hero-banner::before {
            content: "";
            display: block;
            width: 5%;
            height: 100%;
            background: #384aeb;
            position: absolute;
            top: 0;
            left: 0
        }

        @media (min-width: 575px) {
            .hero-banner::before {
                width: 20%
            }
        }

        @media (min-width: 991px) {
            .hero-banner::before {
                width: 35%
            }
        }

        .hero-banner__img {
            position: relative;
            top: 1px
        }

        @media (max-width: 575px) {
            .hero-banner__content {
                padding-bottom: 50px
            }
        }

        @media (min-width: 1000px) {
            .hero-banner__content {
                max-width: 495px
            }
        }

        .hero-banner__content h4 {
            font-size: 30px;
            font-family: "Roboto", sans-serif;
            color: #555555;
            margin-bottom: 12px
        }

        .hero-banner__content h1 {
            font-family: "Roboto", sans-serif;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 10px
        }

        @media (min-width: 767px) {
            .hero-banner__content h1 {
                font-size: 30px;
                margin-bottom: 25px
            }
        }

        @media (min-width: 991px) {
            .hero-banner__content h1 {
                font-size: 50px
            }
        }

        .hero-banner__content p {
            margin-bottom: 10px
        }

        @media (min-width: 767px) {
            .hero-banner__content p {
                margin-bottom: 40px
            }
        }

        .hero-carousel__slide {
            position: relative
        }

        .hero-carousel__slide::after {
            content: "";
            display: block;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            transform: translateY(50px);
            opacity: 0;
            transition: all .4s ease
        }

        .hero-carousel__slideOverlay {
            position: absolute;
            bottom: 50px;
            background: #384aeb;
            padding: 23px 90px 23px 25px;
            transform: translateY(50px);
            opacity: 0;
            z-index: -1;
            transition: all .4s ease-in-out
        }

        .hero-carousel__slideOverlay h3 {
            font-size: 20px;
            font-weight: 400;
            color: #fff
        }

        .hero-carousel__slideOverlay p {
            color: #fff;
            margin: 0
        }

        .hero-carousel__slide:hover::after {
            transform: translateY(0);
            opacity: 1
        }

        .hero-carousel__slide:hover .hero-carousel__slideOverlay {
            transform: translateY(0);
            opacity: 1;
            z-index: 2
        }

        .card-product {
            border: 0;
            margin-bottom: 30px
        }

        .card-product p {
            margin-bottom: 0
        }

        .card-product__img {
            position: relative
        }

        .card-product__imgOverlay {
            background: rgba(255, 255, 255, 0.5);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px 5px;
            transform: translateY(30px);
            opacity: 0;
            z-index: -1;
            transition: all .48s ease
        }

        .card-product__imgOverlay li {
            display: inline-block
        }

        .card-product__imgOverlay li button {
            border: 0;
            border-radius: 0;
            padding: 7px 12px;
            background: #8894ff
        }

        .card-product__imgOverlay li button i, .card-product__imgOverlay li button span {
            font-size: 15px;
            color: #fff;
            vertical-align: middle
        }

        .card-product__imgOverlay li button:hover {
            background: #384aeb
        }

        .card-product__imgOverlay li:not(:last-child) {
            margin-right: 5px
        }

        .card-product__title a {
            color: #222
        }

        .card-product__price {
            font-size: 18px;
            font-weight: 500
        }

        .card-product:hover .card-product__imgOverlay {
            opacity: 1;
            z-index: 1;
            transform: translateY(0)
        }

        .card-product:hover .card-product__title a {
            color: #384aeb
        }

        .offer {
            background: url("../img/home/parallax-bg.png") right center no-repeat;
            background-size: cover
        }

        @media (min-width: 1200px) {
            .offer {
                background-size: 100% 100%
            }
        }

        .offer__content {
            padding: 100px 0 110px 0
        }

        @media (min-width: 1000px) {
            .offer__content {
                padding: 122px 0 135px 0
            }
        }

        .offer__content h3 {
            font-size: 35px;
            font-weight: 400;
            margin-bottom: 20px
        }

        @media (min-width: 650px) {
            .offer__content h3 {
                font-size: 50px;
                margin-bottom: 25px
            }
        }

        .offer__content h4 {
            font-size: 30px
        }

        .offer__content p {
            color: #555555
        }

        #bestSellerCarousel .owl-prev, #bestSellerCarousel .owl-next {
            width: 40px;
            height: 40px;
            background: #f1f6f7
        }

        #bestSellerCarousel .owl-prev i, #bestSellerCarousel .owl-prev span, #bestSellerCarousel .owl-next i, #bestSellerCarousel .owl-next span {
            font-size: 15px;
            color: #384aeb;
            line-height: 40px
        }

        #bestSellerCarousel .owl-prev:hover, #bestSellerCarousel .owl-next:hover {
            background: #384aeb
        }

        #bestSellerCarousel .owl-prev:hover i, #bestSellerCarousel .owl-prev:hover span, #bestSellerCarousel .owl-next:hover i, #bestSellerCarousel .owl-next:hover span {
            color: #fff
        }

        #bestSellerCarousel .owl-prev {
            position: absolute;
            top: 30%;
            transform: translateY(-30%);
            left: -20px
        }

        @media (min-width: 1340px) {
            #bestSellerCarousel .owl-prev {
                left: -105px
            }
        }

        #bestSellerCarousel .owl-next {
            position: absolute;
            top: 30%;
            transform: translateY(-30%);
            right: -20px
        }

        @media (min-width: 1340px) {
            #bestSellerCarousel .owl-next {
                right: -105px
            }
        }

        .card-blog {
            border: 0
        }

        .card-blog .card-body {
            padding: 25px 25px 25px 0
        }

        .card-blog__info {
            margin-bottom: 12px
        }

        .card-blog__info li {
            display: inline-block;
            font-size: 14px;
            color: #999999
        }

        .card-blog__info li a {
            color: #999999
        }

        .card-blog__info li i, .card-blog__info li span {
            margin-right: 5px;
            vertical-align: middle
        }

        .card-blog__info li:not(:last-child) {
            margin-right: 20px
        }

        .card-blog__title {
            font-size: 20px;
            margin-bottom: 20px
        }

        .card-blog__title a {
            color: #222
        }

        .card-blog__link {
            font-weight: 500;
            color: #222
        }

        .card-blog__link i, .card-blog__link span {
            font-size: 13px;
            padding-left: 3px;
            display: inline-block;
            transition: all .5s ease
        }

        .card-blog:hover .card-blog__title a {
            color: #384aeb
        }

        .card-blog:hover .card-blog__link {
            color: #384aeb
        }

        .card-blog:hover .card-blog__link i, .card-blog:hover .card-blog__link span {
            padding-left: 10px
        }

        .subscribe {
            padding: 45px 10px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px -5px 20px 0px rgba(56, 74, 235, 0.1)
        }

        @media (min-width: 1000px) {
            .subscribe {
                padding: 85px 10px
            }
        }

        .subscribe__title {
            font-size: 28px;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 16px
        }

        @media (min-width: 1000px) {
            .subscribe__title {
                font-size: 36px
            }
        }

        .subscribe-form .form-group {
            margin-bottom: 0;
            position: relative
        }

        .subscribe-form .form-group .info {
            position: absolute;
            top: 50px;
            left: 10px;
            color: #384aeb
        }

        .subscribe-form .form-control {
            border-radius: 30px;
            height: 50px;
            border-color: #EEEEEE;
            padding-left: 20px;
            font-size: 14px
        }

        @media (min-width: 800px) {
            .subscribe-form .form-control {
                min-width: 380px
            }
        }

        .subscribe-form .form-control::placeholder {
            color: #999999
        }

        .subscribe-form .form-control:focus {
            outline: 0;
            box-shadow: none
        }

        .subscribe-form button {
            margin-left: 15px
        }

        .subscribe-position {
            margin-bottom: 20px
        }

        @media (min-width: 1000px) {
            .subscribe-position {
                position: relative;
                top: 100px;
                margin-bottom: 0
            }
        }

        .button {
            display: inline-block;
            border: 1px solid #384aeb;
            border-radius: 30px;
            color: #222;
            font-weight: 500;
            padding: 12px 50px;
            background: #384aeb;
            color: #fff;
            transition: all .4s ease
        }

        @media (max-width: 767px) {
            .button {
                padding: 8px 25px !important
            }
        }

        .button-subscribe {
            font-size: 14px;
            padding: 10px 20px
        }

        @media (min-width: 800px) {
            .button-subscribe {
                padding: 12px 35px;
                font-size: 15px
            }
        }

        .button-blog {
            padding: 5px 31px;
            font-size: 14px;
            background: #f9f9ff;
            border-color: #EEEEEE;
            border-radius: 0;
            color: #222
        }

        .button-blog:hover {
            background: #384aeb !important;
            color: #fff !important
        }

        .button-postComment {
            border-radius: 4px;
            font-size: 14px;
            margin-top: 5px
        }

        .button-contact {
            border-radius: 0;
            padding: 12px 26px
        }

        .button-tracking {
            font-size: 14px;
            padding: 8px 42px
        }

        .button-login {
            font-size: 15px;
            padding: 7px 44px
        }

        .button-coupon {
            font-size: 15px;
            padding: 6px 45px
        }

        .button-paypal {
            width: 100%;
            padding: 8px 30px
        }

        .button-account {
            padding: 7px 42px;
            background: transparent;
            border-color: #fff
        }

        .button-account:hover {
            border-color: #fff !important
        }

        .button-header {
            padding: 10px 45px;
            background: transparent;
            color: #222;
            border-color: #EEEEEE
        }

        .button-hero {
            padding: 12px 41px
        }

        .button--active {
            background: #384aeb;
            color: #fff
        }

        .button-contactForm {
            border: 1px solid #384aeb !important;
            border-radius: 0;
            padding: 11px 26px
        }

        .button-review {
            padding: 12px 40px;
            border-radius: 30px
        }

        .button:hover {
            border-color: #384aeb;
            background: transparent;
            color: #222
        }

        .button-register {
            font-size: 14px;
            border: 0;
            border-radius: 0;
            padding: 9px 15px;
            text-transform: uppercase;
            background: #c5322d
        }

        .button-register:hover {
            background: #c5322d;
            opacity: .7;
            color: #fff
        }

        .blog-banner {
            position: relative
        }

        .blog-banner h4, .blog-banner h1, .blog-banner a {
            text-transform: capitalize;
            color: #fff
        }

        .blog-banner h4 {
            font-size: 18px;
            margin-bottom: 15px
        }

        .blog-banner h1 {
            font-size: 30px;
            margin-bottom: 10px;
            color: #222
        }

        @media (min-width: 992px) {
            .blog-banner h1 {
                font-size: 36px
            }
        }

        .blog-banner-area {
            height: 280px;
            position: relative;
            z-index: 1
        }

        @media (min-width: 1000px) {
            .blog-banner-area {
                height: 410px
            }
        }

        .blog-banner-area .blog-banner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            transform: translate(-50%, -50%)
        }

        .blog-banner-area::after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f1f6f7;
            z-index: -1
        }

        .blog-banner-btn {
            border: 2px solid #384aeb;
            padding: 10px 45px
        }

        .blog-banner-btn:hover {
            background: #384aeb;
            color: #fff
        }

        .banner-breadcrumb {
            display: inline-block
        }

        .banner-breadcrumb .breadcrumb {
            background: transparent;
            padding: 0
        }

        .banner-breadcrumb .breadcrumb-item {
            padding: .1rem
        }

        .banner-breadcrumb .breadcrumb-item a {
            text-transform: capitalize;
            color: #777777
        }

        .banner-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
            color: #777777;
            padding-right: .1rem;
            content: "-"
        }

        .banner-breadcrumb .breadcrumb-item.active {
            color: #777777
        }

        .l_blog_item .l_blog_text .date {
            margin-top: 24px;
            margin-bottom: 15px
        }

        .l_blog_item .l_blog_text .date a {
            font-size: 12px
        }

        .l_blog_item .l_blog_text h4 {
            font-size: 18px;
            color: #222;
            border-bottom: 1px solid #eeeeee;
            margin-bottom: 0px;
            padding-bottom: 20px;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .l_blog_item .l_blog_text h4:hover {
            color: #384aeb
        }

        .l_blog_item .l_blog_text p {
            margin-bottom: 0px;
            padding-top: 20px
        }

        .causes_slider .owl-dots {
            text-align: center;
            margin-top: 80px
        }

        .causes_slider .owl-dots .owl-dot {
            height: 14px;
            width: 14px;
            background: #eeeeee;
            display: inline-block;
            margin-right: 7px
        }

        .causes_slider .owl-dots .owl-dot:last-child {
            margin-right: 0px
        }

        .causes_slider .owl-dots .owl-dot.active {
            background: #384aeb
        }

        .causes_item {
            background: #fff
        }

        .causes_item .causes_img {
            position: relative
        }

        .causes_item .causes_img .c_parcent {
            position: absolute;
            bottom: 0px;
            width: 100%;
            left: 0px;
            height: 3px;
            background: rgba(255, 255, 255, 0.5)
        }

        .causes_item .causes_img .c_parcent span {
            width: 70%;
            height: 3px;
            background: #384aeb;
            position: absolute;
            left: 0px;
            bottom: 0px
        }

        .causes_item .causes_img .c_parcent span:before {
            content: "75%";
            position: absolute;
            right: -10px;
            bottom: 0px;
            background: #384aeb;
            color: #fff;
            padding: 0px 5px
        }

        .causes_item .causes_text {
            padding: 30px 35px 40px 30px
        }

        .causes_item .causes_text h4 {
            color: #222;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            cursor: pointer
        }

        .causes_item .causes_text h4:hover {
            color: #384aeb
        }

        .causes_item .causes_text p {
            font-size: 14px;
            line-height: 24px;
            font-weight: 300;
            margin-bottom: 0px
        }

        .causes_item .causes_bottom a {
            width: 50%;
            border: 1px solid #384aeb;
            text-align: center;
            float: left;
            line-height: 50px;
            background: #384aeb;
            color: #fff;
            font-size: 14px;
            font-weight: 500
        }

        .causes_item .causes_bottom a + a {
            border-color: #eeeeee;
            background: #fff;
            font-size: 14px;
            color: #222
        }

        .latest_blog_area {
            background: #f9f9ff
        }

        .single-recent-blog-post {
            margin-bottom: 30px
        }

        .single-recent-blog-post .thumb {
            overflow: hidden
        }

        .single-recent-blog-post .thumb img {
            transition: all 0.7s linear
        }

        .single-recent-blog-post .details {
            padding-top: 30px
        }

        .single-recent-blog-post .details .sec_h4 {
            line-height: 24px;
            padding: 10px 0px 13px;
            transition: all 0.3s linear
        }

        .single-recent-blog-post .date {
            font-size: 14px;
            line-height: 24px;
            font-weight: 400
        }

        .single-recent-blog-post:hover img {
            transform: scale(1.23) rotate(10deg)
        }

        .tags .tag_btn {
            font-size: 12px;
            font-weight: 500;
            line-height: 20px;
            border: 1px solid #eeeeee;
            display: inline-block;
            padding: 1px 18px;
            text-align: center;
            color: #222
        }

        .tags .tag_btn:before {
            background: #384aeb
        }

        .tags .tag_btn + .tag_btn {
            margin-left: 2px
        }

        .blog_categorie_area {
            padding-top: 30px;
            padding-bottom: 30px
        }

        @media (min-width: 900px) {
            .blog_categorie_area {
                padding-top: 80px;
                padding-bottom: 80px
            }
        }

        @media (min-width: 1100px) {
            .blog_categorie_area {
                padding-top: 120px;
                padding-bottom: 120px
            }
        }

        .categories_post {
            position: relative;
            text-align: center;
            cursor: pointer
        }

        .categories_post img {
            max-width: 100%
        }

        .categories_post .categories_details {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: rgba(34, 34, 34, 0.75);
            color: #fff;
            transition: all 0.3s linear;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .categories_post .categories_details h5 {
            margin-bottom: 0px;
            font-size: 18px;
            line-height: 26px;
            text-transform: uppercase;
            color: #fff;
            position: relative
        }

        .categories_post .categories_details p {
            font-weight: 300;
            font-size: 14px;
            line-height: 26px;
            margin-bottom: 0px
        }

        .categories_post .categories_details .border_line {
            margin: 10px 0px;
            background: #fff;
            width: 100%;
            height: 1px
        }

        .categories_post:hover .categories_details {
            background: rgba(56, 74, 235, 0.85)
        }

        .blog_item {
            margin-bottom: 40px
        }

        .blog_info {
            padding-top: 30px
        }

        .blog_info .post_tag {
            padding-bottom: 20px
        }

        .blog_info .post_tag a {
            color: #222;
            font-size: 14px
        }

        .blog_info .post_tag a.active {
            color: #384aeb
        }

        .blog_info .blog_meta li a {
            color: #777777;
            vertical-align: middle;
            padding-bottom: 10px;
            display: inline-block;
            font-size: 14px
        }

        .blog_info .blog_meta li a i {
            color: #222;
            font-size: 16px;
            font-weight: 600;
            padding-left: 15px;
            line-height: 20px;
            vertical-align: middle
        }

        .blog_info .blog_meta li a:hover {
            color: #384aeb
        }

        .blog_post img {
            max-width: 100%
        }

        .blog_details {
            padding-top: 20px
        }

        .blog_details h2 {
            font-size: 24px;
            line-height: 36px;
            color: #222;
            font-weight: 600;
            transition: all 0.3s linear
        }

        .blog_details h2:hover {
            color: #384aeb
        }

        .blog_details p {
            margin-bottom: 26px
        }

        .view_btn {
            font-size: 14px;
            line-height: 36px;
            display: inline-block;
            color: #222;
            font-weight: 500;
            padding: 0px 30px;
            background: #fff
        }

        .blog_right_sidebar {
            border: 1px solid #eeeeee;
            background: #fafaff;
            padding: 30px
        }

        .blog_right_sidebar .widget_title {
            font-size: 18px;
            line-height: 25px;
            background: #384aeb;
            text-align: center;
            color: #fff;
            padding: 8px 0px;
            margin-bottom: 30px
        }

        .blog_right_sidebar .search_widget .input-group .form-control {
            font-size: 14px;
            line-height: 29px;
            border: 0px;
            width: 100%;
            font-weight: 300;
            color: #fff;
            padding-left: 20px;
            border-radius: 45px;
            z-index: 0;
            background: #384aeb
        }

        .blog_right_sidebar .search_widget .input-group .form-control.placeholder {
            color: #fff
        }

        .blog_right_sidebar .search_widget .input-group .form-control:-moz-placeholder {
            color: #fff
        }

        .blog_right_sidebar .search_widget .input-group .form-control::-moz-placeholder {
            color: #fff
        }

        .blog_right_sidebar .search_widget .input-group .form-control::-webkit-input-placeholder {
            color: #fff
        }

        .blog_right_sidebar .search_widget .input-group .form-control:focus {
            box-shadow: none
        }

        .blog_right_sidebar .search_widget .input-group .btn-default {
            position: absolute;
            right: 20px;
            background: transparent;
            border: 0px;
            box-shadow: none;
            font-size: 14px;
            color: #fff;
            padding: 0px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1
        }

        .blog_right_sidebar .author_widget {
            text-align: center
        }

        .blog_right_sidebar .author_widget h4 {
            font-size: 18px;
            line-height: 20px;
            color: #222;
            margin-bottom: 5px;
            margin-top: 30px
        }

        .blog_right_sidebar .author_widget p {
            margin-bottom: 0px
        }

        .blog_right_sidebar .author_widget .social_icon {
            padding: 7px 0px 15px
        }

        .blog_right_sidebar .author_widget .social_icon a {
            font-size: 14px;
            color: #222;
            transition: all 0.2s linear
        }

        .blog_right_sidebar .author_widget .social_icon a + a {
            margin-left: 20px
        }

        .blog_right_sidebar .author_widget .social_icon a:hover {
            color: #384aeb
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body {
            justify-content: center;
            align-self: center;
            padding-left: 20px
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
            font-size: 14px;
            line-height: 20px;
            color: #222;
            margin-bottom: 4px;
            transition: all 0.3s linear
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body h3:hover {
            color: #384aeb
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body p {
            font-size: 12px;
            line-height: 21px;
            margin-bottom: 0px
        }

        .blog_right_sidebar .popular_post_widget .post_item + .post_item {
            margin-top: 20px
        }

        .blog_right_sidebar .post_category_widget .cat-list li {
            border-bottom: 2px dotted #eee;
            transition: all 0.3s ease 0s;
            padding-bottom: 12px
        }

        .blog_right_sidebar .post_category_widget .cat-list li a {
            font-size: 14px;
            line-height: 20px;
            color: #777
        }

        .blog_right_sidebar .post_category_widget .cat-list li a p {
            margin-bottom: 0px
        }

        .blog_right_sidebar .post_category_widget .cat-list li + li {
            padding-top: 15px
        }

        .blog_right_sidebar .post_category_widget .cat-list li:hover {
            border-color: #384aeb
        }

        .blog_right_sidebar .post_category_widget .cat-list li:hover a {
            color: #384aeb
        }

        .blog_right_sidebar .newsletter_widget {
            text-align: center
        }

        .blog_right_sidebar .newsletter_widget .form-group {
            margin-bottom: 8px
        }

        .blog_right_sidebar .newsletter_widget .input-group-prepend {
            margin-right: -1px
        }

        .blog_right_sidebar .newsletter_widget .input-group-text {
            background: #fff;
            border-radius: 0px;
            vertical-align: top;
            font-size: 12px;
            line-height: 36px;
            padding: 0px 0px 0px 15px;
            border: 1px solid #eeeeee;
            border-right: 0px
        }

        .blog_right_sidebar .newsletter_widget .input-group-text i {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control {
            font-size: 12px;
            line-height: 24px;
            color: #cccccc;
            border: 1px solid #eeeeee;
            border-left: 0px;
            border-radius: 0px
        }

        .blog_right_sidebar .newsletter_widget .form-control.placeholder {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control:-moz-placeholder {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control::-moz-placeholder {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control::-webkit-input-placeholder {
            color: #cccccc
        }

        .blog_right_sidebar .newsletter_widget .form-control:focus {
            outline: none;
            box-shadow: none
        }

        .blog_right_sidebar .newsletter_widget .bbtns {
            background: #384aeb;
            color: #fff;
            font-size: 12px;
            line-height: 38px;
            display: inline-block;
            font-weight: 500;
            padding: 0px 24px 0px 24px;
            border-radius: 0
        }

        .blog_right_sidebar .newsletter_widget .text-bottom {
            font-size: 12px
        }

        .blog_right_sidebar .tag_cloud_widget ul li {
            display: inline-block
        }

        .blog_right_sidebar .tag_cloud_widget ul li a {
            display: inline-block;
            border: 1px solid #eee;
            background: #fff;
            padding: 0px 13px;
            margin-bottom: 8px;
            transition: all 0.3s ease 0s;
            color: #222;
            font-size: 12px
        }

        .blog_right_sidebar .tag_cloud_widget ul li a:hover {
            background: #384aeb;
            color: #fff
        }

        .blog_right_sidebar .br {
            width: 100%;
            height: 1px;
            background: #eee;
            margin: 30px 0px
        }

        .blog-pagination {
            padding-top: 25px;
            padding-bottom: 95px
        }

        .blog-pagination .page-link {
            border-radius: 0
        }

        .blog-pagination .page-item {
            border: none
        }

        .page-link {
            background: transparent;
            font-weight: 400
        }

        .blog-pagination .page-item.active .page-link {
            background-color: #384aeb;
            border-color: transparent;
            color: #fff
        }

        .blog-pagination .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #8a8a8a;
            border: none
        }

        .blog-pagination .page-link .lnr {
            font-weight: 600
        }

        .blog-pagination .page-item:last-child .page-link, .blog-pagination .page-item:first-child .page-link {
            border-radius: 0
        }

        .blog-pagination .page-link:hover {
            color: #fff;
            text-decoration: none;
            background-color: #384aeb;
            border-color: #eee
        }

        .single-post-area .social-links {
            padding-top: 10px
        }

        .single-post-area .social-links li {
            display: inline-block;
            margin-bottom: 10px
        }

        .single-post-area .social-links li a {
            color: #cccccc;
            padding: 7px;
            font-size: 14px;
            transition: all 0.2s linear
        }

        .single-post-area .social-links li a:hover {
            color: #222
        }

        .single-post-area .blog_details {
            padding-top: 26px
        }

        .single-post-area .blog_details p {
            margin-bottom: 10px
        }

        .single-post-area .quotes {
            margin-top: 20px;
            margin-bottom: 30px;
            padding: 24px 35px 24px 30px;
            background-color: #fff;
            box-shadow: -20.84px 21.58px 30px 0px rgba(176, 176, 176, 0.1);
            font-size: 14px;
            line-height: 24px;
            color: #777;
            font-style: italic
        }

        .single-post-area .arrow {
            position: absolute
        }

        .single-post-area .arrow .lnr {
            font-size: 20px;
            font-weight: 600
        }

        .single-post-area .thumb .overlay-bg {
            background: rgba(0, 0, 0, 0.8)
        }

        .single-post-area .navigation-area {
            border-top: 1px solid #eee;
            padding-top: 30px;
            margin-top: 60px
        }

        .single-post-area .navigation-area p {
            margin-bottom: 0px
        }

        .single-post-area .navigation-area h4 {
            font-size: 18px;
            line-height: 25px;
            color: #222
        }

        .single-post-area .navigation-area .nav-left {
            text-align: left
        }

        .single-post-area .navigation-area .nav-left .thumb {
            margin-right: 20px;
            background: #000
        }

        .single-post-area .navigation-area .nav-left .thumb img {
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .single-post-area .navigation-area .nav-left .lnr {
            margin-left: 20px;
            opacity: 0;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .single-post-area .navigation-area .nav-left:hover .lnr {
            opacity: 1
        }

        .single-post-area .navigation-area .nav-left:hover .thumb img {
            opacity: .5
        }

        @media (max-width: 767px) {
            .single-post-area .navigation-area .nav-left {
                margin-bottom: 30px
            }
        }

        .single-post-area .navigation-area .nav-right {
            text-align: right
        }

        .single-post-area .navigation-area .nav-right .thumb {
            margin-left: 20px;
            background: #000
        }

        .single-post-area .navigation-area .nav-right .thumb img {
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .single-post-area .navigation-area .nav-right .lnr {
            margin-right: 20px;
            opacity: 0;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .single-post-area .navigation-area .nav-right:hover .lnr {
            opacity: 1
        }

        .single-post-area .navigation-area .nav-right:hover .thumb img {
            opacity: .5
        }

        @media (max-width: 991px) {
            .single-post-area .sidebar-widgets {
                padding-bottom: 0px
            }
        }

        .comments-area {
            background: #fafaff;
            border: 1px solid #eee;
            padding: 50px 30px;
            margin-top: 50px
        }

        @media (max-width: 414px) {
            .comments-area {
                padding: 50px 8px
            }
        }

        .comments-area h4 {
            text-align: center;
            margin-bottom: 50px;
            color: #222;
            font-size: 18px
        }

        .comments-area h5 {
            font-size: 16px;
            margin-bottom: 0px
        }

        .comments-area a {
            color: #222
        }

        .comments-area .comment-list {
            padding-bottom: 48px
        }

        .comments-area .comment-list:last-child {
            padding-bottom: 0px
        }

        .comments-area .comment-list.left-padding {
            padding-left: 25px
        }

        @media (max-width: 413px) {
            .comments-area .comment-list .single-comment h5 {
                font-size: 12px
            }

            .comments-area .comment-list .single-comment .date {
                font-size: 11px
            }

            .comments-area .comment-list .single-comment .comment {
                font-size: 10px
            }
        }

        .comments-area .thumb {
            margin-right: 20px
        }

        .comments-area .date {
            font-size: 13px;
            color: #cccccc;
            margin-bottom: 13px
        }

        .comments-area .comment {
            color: #777777;
            margin-bottom: 0px
        }

        .comments-area .btn-reply {
            background-color: #fff;
            color: #222;
            padding: 5px 18px;
            font-size: 12px;
            display: block;
            font-weight: 400;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .comments-area .btn-reply:hover {
            background-color: #384aeb;
            color: #fff;
            font-weight: 700
        }

        .comment-form {
            background: #fafaff;
            text-align: center;
            border: 1px solid #eee;
            padding: 47px 30px 43px;
            margin-top: 50px;
            margin-bottom: 20px
        }

        .comment-form h4 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 18px;
            line-height: 22px;
            color: #222
        }

        .comment-form .name {
            padding-left: 0px
        }

        @media (max-width: 767px) {
            .comment-form .name {
                padding-right: 0px;
                margin-bottom: 1rem
            }
        }

        .comment-form .email {
            padding-right: 0px
        }

        @media (max-width: 991px) {
            .comment-form .email {
                padding-left: 0px
            }
        }

        .comment-form .form-control {
            padding: 8px 20px;
            background: #fff;
            border: none;
            border-radius: 0px;
            width: 100%;
            font-size: 14px;
            color: #777777;
            border: 1px solid transparent
        }

        .comment-form .form-control:focus {
            box-shadow: none;
            border: 1px solid #eee
        }

        .comment-form .form-control::placeholder {
            color: #777777
        }

        .comment-form textarea.form-control {
            height: 140px;
            resize: none
        }

        .comment-form ::-webkit-input-placeholder {
            font-size: 13px;
            color: #777
        }

        .comment-form ::-moz-placeholder {
            font-size: 13px;
            color: #777
        }

        .comment-form :-ms-input-placeholder {
            font-size: 13px;
            color: #777
        }

        .comment-form :-moz-placeholder {
            font-size: 13px;
            color: #777
        }

        .contact-banner {
            position: relative
        }

        .contact-banner h4, .contact-banner h1, .contact-banner a {
            text-transform: uppercase;
            color: #fff
        }

        .contact-banner h4 {
            font-size: 18px;
            margin-bottom: 15px
        }

        .contact-banner h1 {
            font-size: 37px;
            margin-bottom: 5px
        }

        @media (min-width: 992px) {
            .contact-banner h1 {
                font-size: 48px
            }
        }

        .contact-banner-area {
            height: 280px;
            background: url("../../assets/images/contact-bg.png") center center no-repeat;
            background-size: cover;
            position: relative;
            z-index: 1
        }

        @media (min-width: 991px) {
            .contact-banner-area {
                height: 450px
            }
        }

        .contact-banner-area .contact-banner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            transform: translate(-50%, -50%)
        }

        .contact-banner-area::after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(1, 2, 11, 0.7);
            z-index: -1
        }

        .contact-banner-btn {
            border: 2px solid #384aeb;
            padding: 10px 45px
        }

        .contact-banner-btn:hover {
            background: #384aeb;
            color: #fff
        }

        .contact-info__icon {
            margin-right: 20px
        }

        .contact-info__icon i, .contact-info__icon span {
            color: #384aeb;
            font-size: 20px
        }

        .contact-info .media-body h3 {
            font-size: 16px;
            margin-bottom: 0
        }

        .contact-info .media-body h3 a {
            color: #222
        }

        .contact-info .media-body p {
            color: #999999
        }

        .form-contact .form-group {
            margin-bottom: 10px
        }

        .form-contact .form-control {
            border-radius: 0;
            height: 40px;
            padding-left: 18px;
            border-color: transparent;
            background: rgba(130, 139, 178, 0.1)
        }

        .form-contact .form-control:focus {
            outline: 0;
            box-shadow: none
        }

        .form-contact .form-control::placeholder {
            font-size: 14px;
            color: #999999
        }

        .form-contact .different-control {
            height: 100% !important
        }

        .form-contact button {
            border: 0
        }

        .filter-bar {
            padding: 0px 20px 10px 20px;
            background: #f1f6f7;
            margin-bottom: 30px
        }

        .filter-bar a, .filter-bar i {
            color: #000
        }

        .filter-bar-search {
            margin-top: 10px
        }

        .filter-bar-search input {
            border: 1px solid #eee;
            font-size: 14px;
            color: #999999;
            height: 38px;
            padding-left: 15px
        }

        .filter-bar-search input:focus {
            outline: 0;
            box-shadow: none
        }

        .filter-bar-search input::placeholder {
            color: #999999
        }

        .filter-bar-search button {
            background: transparent;
            border: 1px solid #eee;
            background: #fff;
            border-left: 0;
            padding-right: 15px
        }

        .filter-bar-search button i, .filter-bar-search button span {
            font-size: 14px;
            color: #999999
        }

        .sorting {
            margin-top: 10px;
            margin-right: 10px
        }

        .sorting .nice-select {
            border-radius: 0px;
            border: 1px solid #eee;
            padding-right: 50px;
            height: 38px;
            color: #999999
        }

        .sorting .nice-select:after {
            right: 18px
        }

        .sorting .nice-select .list {
            border-radius: 0px
        }

        .sidebar-categories .head {
            font-family: 'Oswald', sans-serif;
            line-height: 50px;
            background: #384aeb;
            padding: 0 30px;
            font-size: 18px;
            font-weight: 400;
            color: #fff
        }

        .sidebar-categories .main-categories {
            padding: 20px 28px;
            background: #f1f6f7
        }

        .sidebar-categories .main-categories .pixel-radio {
            background: transparent !important
        }

        .sidebar-categories .main-nav-list a {
            font-size: 14px;
            display: block;
            line-height: 50px;
            padding-left: 10px;
            border-bottom: 1px solid #eee
        }

        .sidebar-categories .main-nav-list a:hover {
            color: #384aeb
        }

        .sidebar-categories .main-nav-list a .number {
            color: #cccccc;
            margin-left: 10px
        }

        .sidebar-categories .main-nav-list a .lnr {
            margin-right: 10px;
            display: none
        }

        .sidebar-categories .main-nav-list.child a {
            padding-left: 32px
        }

        .sidebar-filter {
            margin-top: 30px
        }

        .sidebar-filter .top-filter-head {
            font-family: 'Oswald', sans-serif;
            line-height: 50px;
            background: #384aeb;
            padding: 0 30px;
            font-size: 18px;
            font-weight: 400;
            color: #fff
        }

        .sidebar-filter .head {
            line-height: 60px;
            padding: 0 30px;
            font-size: 15px;
            font-weight: 400;
            color: #222;
            text-transform: capitalize
        }

        .sidebar-filter .common-filter {
            background: #f1f6f7;
            border-bottom: 1px solid #eee;
            padding-bottom: 25px
        }

        .sidebar-filter .common-filter .filter-list {
            position: relative;
            padding-left: 28px
        }

        .sidebar-filter .common-filter:last-child {
            border-bottom: 0
        }

        .filter-list {
            line-height: 32px
        }

        .filter-list i {
            margin-right: 10px;
            cursor: pointer
        }

        .filter-list .number {
            color: #ccc
        }

        .filter-list label {
            margin-bottom: 3px;
            cursor: pointer
        }

        @-webkit-keyframes click-wave {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.35;
                position: absolute;
                top: 50%;
                left: 50%
            }
            100% {
                transform: translate(-50%, -50%) scale(3);
                opacity: 0;
                top: 50%;
                left: 50%;
                position: absolute
            }
        }

        @-moz-keyframes click-wave {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.35;
                position: absolute;
                top: 50%;
                left: 50%
            }
            100% {
                transform: translate(-50%, -50%) scale(3);
                opacity: 0;
                top: 50%;
                left: 50%;
                position: absolute
            }
        }

        @keyframes click-wave {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.35;
                position: absolute;
                top: 50%;
                left: 50%
            }
            100% {
                transform: translate(-50%, -50%) scale(3);
                opacity: 0;
                top: 50%;
                left: 50%;
                position: absolute
            }
        }

        .pixel-radio {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            right: 0;
            bottom: 0;
            left: 0;
            height: 15px;
            width: 15px;
            -webkit-transition: all 0.15s ease-out 0s;
            -moz-transition: all 0.15s ease-out 0s;
            transition: all 0.15s ease-out 0s;
            background: #fff;
            border: 1px solid #999999;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            margin-right: 10px;
            outline: none;
            position: relative;
            z-index: 1
        }

        .pixel-radio:checked {
            border: 8px solid #384aeb
        }

        .pixel-radio:checked::after {
            -webkit-animation: click-wave 0.65s;
            -moz-animation: click-wave 0.65s;
            animation: click-wave 0.65s;
            background: #384aeb;
            content: '';
            display: block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            position: relative;
            z-index: 2;
            opacity: 0
        }

        .pixel-radio {
            border-radius: 50%;
            top: 2px
        }

        .pixel-radio::after {
            border-radius: 50%
        }

        .price-range-area {
            padding: 15px 30px 0 30px
        }

        .price-range-area .noUi-target {
            background: #eee;
            border-radius: 0px;
            border: 0px;
            box-shadow: none
        }

        .price-range-area .noUi-base {
            background: #e8f0f2
        }

        .price-range-area .noUi-horizontal {
            height: 6px
        }

        .price-range-area .noUi-connect {
            background: #e8f0f2;
            border-radius: 0px;
            box-shadow: none
        }

        .price-range-area .noUi-horizontal .noUi-handle {
            width: 16px;
            height: 16px;
            left: -8px;
            top: -5px;
            border-radius: 50%;
            border: 0px;
            background: #384aeb;
            box-shadow: none;
            cursor: pointer;
            -webkit-transition: ease 0.1s;
            -moz-transition: ease 0.1s;
            -o-transition: ease 0.1s;
            transition: ease 0.1s
        }

        .price-range-area .noUi-horizontal .noUi-handle:focus {
            outline: none
        }

        .price-range-area .noUi-horizontal .noUi-handle:hover {
            border: 3px solid #384aeb;
            background: #fff
        }

        .price-range-area .noUi-handle::after, .price-range-area .noUi-handle::before {
            display: none
        }

        .price-range-area .value-wrapper {
            margin-top: 15px;
            color: #777777
        }

        .price-range-area .value-wrapper .to {
            margin: 0 5px
        }

        .price-range-area .price {
            margin-right: 5px;
            color: #777
        }

        .single-search-product {
            padding: 10px 0
        }

        @media (min-width: 1000px) {
            .single-search-product {
                padding: 20px 0
            }
        }

        .single-search-product-wrapper {
            padding: 12px 20px 10px 30px;
            border: 1px solid #EEEEEE
        }

        .single-search-product img {
            max-width: 70px;
            height: auto
        }

        .single-search-product .desc {
            margin-left: 15px;
            margin-top: 5px
        }

        .single-search-product .desc .title {
            font-family: 'Oswald', sans-serif;
            color: #222;
            margin-bottom: 0;
            display: inline-block
        }

        .single-search-product .desc .price {
            font-size: 16px;
            font-weight: 500;
            color: #777777
        }

        .single-search-product .desc .price span {
            font-weight: 700
        }

        .single-search-product .desc .price del {
            font-size: 12px;
            color: #cccccc;
            font-weight: 400
        }

        .single-search-product:hover .title {
            color: #384aeb
        }

        .order-wrapper {
            background: #f1f6f7;
            padding: 25px
        }

        .order-wrapper .list-row {
            border-bottom: 1px solid #eee;
            padding: 10px 0
        }

        .order-wrapper .list-row h6 {
            text-transform: uppercase
        }

        .order-wrapper .list-row .total {
            font-weight: 500;
            color: #222
        }

        .order-wrapper .bold-lable {
            font-weight: 700;
            text-transform: uppercase;
            color: #222
        }

        .order-wrapper .payment-info {
            margin-top: 20px;
            background: #f5f5f5;
            border-top: 1px solid #eee;
            padding: 15px
        }

        .order-wrapper .terms-link {
            color: #43b253
        }

        .order-wrapper .pixel-checkbox {
            margin-top: 5px
        }

        .billing-title {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.3em;
            margin-bottom: 15px;
            border-color: #DDDDDD
        }

        .billing-alert {
            font-size: 18px;
            color: #384aeb;
            margin-bottom: 30px
        }

        .confirmation-card {
            padding: 38px;
            background: #f1f6f7
        }

        .confirmation-card tr td:last-child {
            color: #222;
            padding-left: 25px
        }

        .order_details_table {
            background: #f1f6f7;
            padding: 30px;
            margin-top: 75px
        }

        @media (min-width: 767px) {
            .order_details_table {
                margin-top: 45px
            }
        }

        .order_details_table h2 {
            color: #222;
            font-size: 18px;
            padding-bottom: 15px
        }

        .order_details_table .table {
            margin-bottom: 0px
        }

        .order_details_table .table thead tr th {
            border-bottom: 1px solid #ddd;
            font-size: 16px;
            font-family: "Oswald", sans-serif;
            font-weight: normal;
            color: #222
        }

        @media (max-width: 1000px) {
            .order_details_table .table tbody tr:last-child {
                height: 50px
            }
        }

        .order_details_table .table tbody tr td {
            border: 0;
            color: #777777
        }

        .order_details_table .table tbody tr td p {
            margin-bottom: 0px
        }

        .order_details_table .table tbody tr td h5 {
            font-family: "Roboto", sans-serif;
            color: #222;
            margin-bottom: 0px;
            font-size: 15px;
            text-transform: capitalize;
            font-weight: 500
        }

        .order_details_table .table tbody tr td h4 {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            margin-bottom: 0px;
            color: #222;
            font-size: 15px;
            text-transform: capitalize;
            font-weight: 500
        }

        .order_details_table .table tbody tr:last-child td {
            border-top: 1px solid #ddd;
            padding-bottom: 0
        }

        .order_details_table .table tbody tr:last-child td p {
            color: #222
        }

        .tracking_box_area .tracking_box_inner p {
            max-width: 870px;
            color: #555555;
            margin-bottom: 25px
        }

        .tracking_box_area .tracking_box_inner .tracking_form {
            max-width: 645px
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group {
            margin-bottom: 1.2rem
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input {
            height: 40px;
            border: 1px solid #eee;
            padding: 0px 15px;
            outline: none;
            box-shadow: none;
            border-radius: 0px;
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input.placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input:-moz-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input::-moz-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group input::-webkit-input-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group:last-child {
            margin-bottom: 0px
        }

        .tracking_box_area .tracking_box_inner .tracking_form .form-group .submit_btn {
            text-transform: uppercase
        }

        .check_title h2 {
            font-size: 15px;
            font-weight: normal;
            font-family: "Roboto", sans-serif;
            background: #f1f6f7;
            line-height: 40px !important;
            padding-left: 30px;
            margin-bottom: 0px
        }

        .check_title h2 a {
            color: #384aeb;
            text-decoration: underline
        }

        .returning_customer p {
            margin-top: 15px;
            padding-left: 30px;
            margin-bottom: 25px
        }

        .returning_customer .contact_form {
            max-width: 710px;
            margin-left: 15px
        }

        .returning_customer .contact_form .form-group {
            margin-bottom: 20px
        }

        .returning_customer .contact_form .form-group input {
            border: 1px solid #eeeeee;
            height: 40px;
            border-radius: 3px;
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group input.placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group input:-moz-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group input::-moz-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group input::-webkit-input-placeholder {
            font-size: 14px;
            color: #999999;
            font-weight: normal
        }

        .returning_customer .contact_form .form-group .primary-btn {
            line-height: 38px;
            padding: 0px 38px;
            text-transform: uppercase;
            margin-right: 10px;
            border-radius: 2px;
            border: none
        }

        .returning_customer .contact_form .form-group .creat_account {
            display: inline-block;
            margin-left: 15px
        }

        .returning_customer .contact_form .form-group .creat_account input {
            height: auto;
            margin-right: 10px
        }

        .returning_customer .contact_form .form-group .lost_pass {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
            font-weight: normal
        }

        .cupon_area {
            margin-bottom: 40px
        }

        .cupon_area input {
            margin-left: 30px;
            max-width: 730px;
            width: 100%;
            display: block;
            height: 40px;
            border-radius: 3px;
            padding: 0px 15px;
            border: 1px solid #eeeeee;
            outline: none;
            box-shadow: none;
            margin-top: 20px;
            margin-bottom: 20px
        }

        .cupon_area .tp_btn {
            margin-left: 30px
        }

        .tp_btn {
            border: 1px solid #eeeeee;
            display: inline-block;
            line-height: 38px;
            padding: 0px 40px;
            color: #222;
            text-transform: uppercase;
            font-weight: 500;
            border-radius: 3px
        }

        .tp_btn:hover {
            background: #384aeb;
            color: #fff;
            border-color: #384aeb
        }

        .billing_details h3 {
            font-size: 18px;
            color: #222;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 30px
        }

        .billing_details .contact_form .form-group {
            margin-bottom: 20px
        }

        .billing_details .contact_form .form-group .placeholder::before {
            font-size: 14px;
            color: #999999
        }

        .billing_details .contact_form .form-group input {
            font-size: 14px;
            border-radius: 3px;
            color: #999999;
            border-color: #EEEEEE
        }

        .billing_details .contact_form .form-group input.placeholder {
            color: #999999;
            font-size: 14px
        }

        .billing_details .contact_form .form-group input:-moz-placeholder {
            color: #999999;
            font-size: 14px
        }

        .billing_details .contact_form .form-group input::-moz-placeholder {
            color: #999999;
            font-size: 14px
        }

        .billing_details .contact_form .form-group input::-webkit-input-placeholder {
            color: #999999;
            font-size: 14px
        }

        .billing_details .contact_form .form-group .form-control {
            border-color: #EEEEEE;
            font-size: 14px;
            color: #777777
        }

        .billing_details .contact_form .form-group .form-control::placeholder {
            color: #777777
        }

        .billing_details .contact_form .form-group label {
            color: #999999
        }

        .billing_details .contact_form .form-group textarea {
            height: 150px;
            border-radius: 3px;
            margin-top: 15px
        }

        .billing_details .contact_form .form-group .country_select {
            width: 100%;
            height: 40px;
            border-color: #EEEEEE
        }

        .billing_details .contact_form .form-group .country_select .current {
            color: #999999
        }

        .billing_details .contact_form .form-group .country_select span {
            color: #777
        }

        .billing_details .contact_form .form-group .country_select .list {
            width: 100%;
            border-radius: 0px
        }

        .billing_details .contact_form .form-group .country_select .list li {
            font-size: 14px;
            font-weight: normal
        }

        .billing_details .contact_form .form-group .creat_account #f-option2 {
            margin-right: 5px
        }

        .billing_details .contact_form .form-group .creat_account #f-option3 {
            margin-right: 5px
        }

        .billing_details .contact_form .form-group .creat_account a {
            color: #384aeb
        }

        .order_box {
            background: #e8f0f2;
            padding: 30px
        }

        .order_box h2 {
            border-bottom: 1px solid #dddddd;
            font-size: 18px;
            font-weight: 500;
            color: #222;
            padding-bottom: 15px
        }

        .order_box .list li a {
            font-size: 14px;
            color: #777;
            font-weight: normal;
            border-bottom: 1px solid #eeeeee;
            display: block;
            line-height: 42px
        }

        .order_box .list li a h4 {
            font-family: "Roboto", sans-serif;
            font-size: 15px;
            margin-top: 15px
        }

        .order_box .list li a span {
            float: right
        }

        .order_box .list li a .middle {
            float: none;
            width: 50px;
            text-align: right;
            display: inline-block;
            margin-left: 30px;
            color: #222
        }

        .order_box .list li:nth-child(4) a .middle {
            margin-left: 48px
        }

        .order_box .list_2 li a {
            text-transform: uppercase;
            color: #222;
            font-weight: 500
        }

        .order_box .list_2 li a span {
            color: #777;
            text-transform: capitalize
        }

        .order_box .list_2 li:last-child a span {
            color: #222
        }

        .order_box .payment_item h4 {
            font-size: 14px;
            text-transform: uppercase;
            color: #222;
            font-weight: 500;
            padding-left: 22px;
            position: relative;
            margin-bottom: 15px;
            margin-top: 15px
        }

        .order_box .payment_item h4:before {
            content: "";
            width: 14px;
            height: 14px;
            border-radius: 50%;
            border: 1px solid #cdcdcd;
            background: #fff;
            display: block;
            position: absolute;
            left: 0px;
            top: 50%;
            transform: translateY(-50%)
        }

        .order_box .payment_item h4:after {
            content: "";
            height: 4px;
            width: 4px;
            background: #fff;
            border-radius: 50%;
            display: block;
            position: absolute;
            left: 5px;
            top: 8px
        }

        .order_box .payment_item h4 img {
            padding-left: 60px
        }

        .order_box .payment_item p {
            background: #fff;
            padding: 15px 20px;
            font-size: 12px
        }

        .order_box .payment_item.active h4:before {
            background: #384aeb;
            border-color: #384aeb
        }

        .order_box .creat_account {
            margin-bottom: 15px
        }

        .order_box .creat_account label {
            padding-left: 10px;
            font-size: 12px;
            color: #222
        }

        .order_box .creat_account a {
            color: #c5322d
        }

        .order_box .primary-btn {
            display: block;
            line-height: 38px;
            text-transform: uppercase;
            text-align: center;
            border-radius: 2px
        }

        .order_box .primary-btn:hover:before {
            left: 310px
        }

        .order_details .title_confirmation {
            text-align: center;
            color: #28d500;
            font-size: 18px;
            margin-bottom: 80px
        }

        .order_d_inner .details_item h4 {
            border-bottom: 1px solid #eee;
            padding-bottom: 12px;
            font-size: 18px;
            color: #222;
            padding-left: 18px
        }

        .order_d_inner .details_item .list {
            padding-left: 18px
        }

        @media (min-width: 767px) {
            .order_d_inner .details_item .list {
                margin-bottom: 30px
            }
        }

        .order_d_inner .details_item .list li {
            margin-bottom: 8px
        }

        .order_d_inner .details_item .list li:last-child {
            margin-bottom: 0px
        }

        .order_d_inner .details_item .list li a {
            font-size: 14px;
            color: #222
        }

        .order_d_inner .details_item .list li a span {
            width: 145px;
            display: inline-block;
            color: #777
        }

        .order_details_table {
            background: #e5ecee;
            padding: 30px;
            margin-top: 75px
        }

        @media (min-width: 767px) {
            .order_details_table {
                margin-top: 45px
            }
        }

        .order_details_table h2 {
            color: #222;
            font-size: 18px;
            padding-bottom: 15px
        }

        .order_details_table .table {
            margin-bottom: 0px
        }

        .order_details_table .table thead tr th {
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            font-weight: normal
        }

        .order_details_table .table tbody tr td p {
            margin-bottom: 0px
        }

        .order_details_table .table tbody tr td h5 {
            color: #222;
            margin-bottom: 0px
        }

        .order_details_table .table tbody tr td h4 {
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 0px;
            color: #222
        }

        .order_details_table .table tbody tr:last-child td {
            border-top: 1px solid #ddd
        }

        .order_details_table .table tbody tr:last-child td p {
            color: #222
        }

        .radion_btn input[type=radio] {
            position: absolute;
            visibility: hidden
        }

        .radion_btn {
            position: relative;
            margin-top: 10px;
            margin-bottom: 15px
        }

        .radion_btn img {
            position: absolute;
            right: 40px;
            top: 0px
        }

        .radion_btn label {
            display: block;
            position: relative;
            font-weight: 300;
            font-size: 1.35em;
            padding: 0px 25px 21px 25px;
            height: 14px;
            z-index: 9;
            cursor: pointer;
            -webkit-transition: all 0.25s linear;
            font-weight: 500;
            color: #222;
            font-size: 15px;
            letter-spacing: .25px;
            text-transform: capitalize
        }

        .radion_btn .check {
            display: block;
            position: absolute;
            border: 1px solid #cdcdcd;
            border-radius: 100%;
            height: 14px;
            width: 14px;
            top: 5px;
            left: 0px;
            background: #fff;
            z-index: 5;
            transition: border .25s linear;
            -webkit-transition: border .25s linear
        }

        .radion_btn .check::before {
            display: block;
            position: absolute;
            content: '';
            border-radius: 100%;
            height: 4px;
            width: 4px;
            top: 4px;
            left: 4px;
            margin: auto;
            transition: background 0.25s linear;
            -webkit-transition: background 0.25s linear
        }

        .radion_btn input[type=radio]:checked ~ .check {
            border: 1px solid #C5322D;
            background: #C5322D
        }

        .radion_btn input[type=radio]:checked ~ .check::before {
            background: #fff
        }

        .radion_btn input[type=radio]:checked ~ label {
            color: #000
        }

        .order_box .creat_account a {
            font-size: 12px;
            color: #384aeb
        }

        .login_box_area .login_box_img {
            height: 350px;
            position: relative
        }

        @media (min-width: 1000px) {
            .login_box_area .login_box_img {
                height: 610px
            }
        }

        @media (min-width: 991px) {
            .login_box_area .login_box_img {
                margin-right: -30px
            }
        }

        .login_box_area .login_box_img img {
            width: 100%
        }

        .login_box_area .login_box_img:before {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            content: "";
            background: #384aeb;
            opacity: .9
        }

        .login_box_area .login_box_img .hover {
            position: absolute;
            top: 50%;
            left: 0px;
            text-align: center;
            width: 100%;
            transform: translateY(-50%)
        }

        .login_box_area .login_box_img .hover h4 {
            font-size: 24px;
            color: #fff;
            font-weight: 500;
            margin-bottom: 15px
        }

        .login_box_area .login_box_img .hover p {
            max-width: 390px;
            margin: 0px auto 28px;
            color: #fff
        }

        .login_box_area .login_box_img .hover .primary-btn {
            border-radius: 0px;
            line-height: 38px;
            text-transform: uppercase
        }

        .login_box_area .login_box_img .hover .primary-btn:hover:before {
            left: 260px
        }

        .login_box_area .login_box_img .button:hover {
            background: #c5322d !important;
            color: #fff !important;
            border-color: #c5322d !important
        }

        .login_form_inner {
            box-shadow: 0px 10px 40px 0px rgba(56, 74, 235, 0.1);
            height: 100%;
            text-align: center;
            padding: 30px 0
        }

        @media (min-width: 1000px) {
            .login_form_inner {
                padding-top: 115px;
                padding-bottom: 0
            }
        }

        .login_form_inner h3 {
            color: #222;
            text-transform: uppercase;
            font-size: 18px;
            margin-bottom: 75px
        }

        .login_form_inner .login_form {
            max-width: 385px;
            margin: auto
        }

        .login_form_inner.reg_form {
            padding-top: 60px
        }

        .login_form_inner.reg_form h3 {
            margin-bottom: 70px
        }

        .login_form .form-group {
            margin-bottom: 22px
        }

        .login_form .form-group input {
            height: 40px;
            border: none;
            border-bottom: 1px solid #cccccc;
            border-radius: 0px;
            outline: none;
            box-shadow: none;
            font-size: 14px;
            color: #999999
        }

        .login_form .form-group input.placeholder {
            color: #999999
        }

        .login_form .form-group input:-moz-placeholder {
            color: #999999
        }

        .login_form .form-group input::-moz-placeholder {
            color: #999999
        }

        .login_form .form-group input::-webkit-input-placeholder {
            color: #999999
        }

        .login_form .form-group .creat_account {
            margin-top: 10px;
            font-size: 14px;
            text-align: left
        }

        .login_form .form-group .creat_account input {
            height: auto;
            margin-right: 10px;
            position: relative;
            top: 2px
        }

        .login_form .form-group .primary-btn {
            display: block;
            border-radius: 0px;
            line-height: 38px;
            width: 100%;
            text-transform: uppercase;
            border: none
        }

        .login_form .form-group .primary-btn:hover:before {
            left: 370px
        }

        .login_form .form-group a {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
            display: block
        }

        .register_form_inner {
            padding-top: 70px
        }

        .instagram_area {
            position: relative
        }

        .instagram_area .container {
            max-width: 1625px
        }

        .instagram_area .insta_btn {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            z-index: 2
        }

        .instagram_area .insta_btn .theme_btn {
            background: #fff;
            border-radius: 5px;
            padding: 0px 45px;
            line-height: 50px;
            color: #222;
            font-size: 13px;
            font-weight: 500;
            box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.1)
        }

        .instagram_area.top_pad {
            padding-top: 120px
        }

        .instagram_image {
            margin-bottom: -120px !important
        }

        .instagram_image a {
            flex: 0 0 16.667%;
            max-width: 16.667%;
            display: block;
            overflow: hidden
        }

        .instagram_image a img {
            width: 100%;
            transition: all 300ms ease
        }

        .instagram_image a:hover img {
            transform: scale(1.05)
        }

        @media (max-width: 991px) {
            .instagram_image {
                margin-bottom: 120px !important
            }
        }

        @media (max-width: 767px) {
            .instagram_image a {
                flex: 0 0 33.33%;
                max-width: 33.33%
            }
        }

        @media (max-width: 575px) {
            .instagram_image {
                margin-bottom: 70px !important
            }

            .instagram_image a {
                flex: 0 0 50%;
                max-width: 50%
            }
        }

        .cart_area {
            padding-top: 90px;
            padding-bottom: 55px
        }

        .cart_inner .table th, .cart_inner .table td {
            padding: .75rem 1.5rem;
            border-color: #EEEEEE
        }

        .cart_inner .table thead tr th {
            border-top: 0px;
            font-size: 16px;
            font-weight: 500;
            font-family: "Oswald", sans-serif;
            color: #222;
            border-bottom: 0px !important
        }

        .cart_inner .table tbody tr td {
            padding-top: 30px;
            padding-bottom: 30px;
            vertical-align: middle;
            align-self: center
        }

        .cart_inner .table tbody tr td .media .d-flex {
            padding-right: 30px
        }

        .cart_inner .table tbody tr td .media .d-flex img {
            border-radius: 3px
        }

        @media (max-width: 600px) {
            .cart_inner .table tbody tr td .media .d-flex img {
                max-width: 100px;
                height: 80px
            }
        }

        .cart_inner .table tbody tr td .media .media-body {
            vertical-align: middle;
            align-self: center
        }

        .cart_inner .table tbody tr td .media .media-body p {
            margin-bottom: 0px
        }

        .cart_inner .table tbody tr td h5 {
            font-size: 15px;
            color: #222;
            font-family: "Roboto", sans-serif;
            margin-bottom: 0px
        }

        .cart_inner .table tbody tr td .product_count {
            margin-bottom: 0px
        }

        .cart_inner .table tbody tr td .product_count input {
            width: 100px;
            padding-left: 30px;
            height: 40px;
            outline: none;
            box-shadow: none
        }

        .cart_inner .table tbody tr td .product_count .increase {
            top: -2px
        }

        .cart_inner .table tbody tr td .product_count .increase:before {
            content: "";
            height: 40px;
            width: 1px;
            position: absolute;
            left: -3px;
            top: 0px;
            background: #eeeeee
        }

        .cart_inner .table tbody tr td .product_count .increase:after {
            content: "";
            height: 1px;
            width: 30px;
            position: absolute;
            left: -3px;
            top: 22px;
            background: #eeeeee
        }

        .cart_inner .table tbody tr td .product_count .reduced {
            bottom: -6px
        }

        .cart_inner .table tbody tr.bottom_button .button {
            font-size: 15px;
            padding: 7px 18px;
            background: #f9f9ff;
            border-color: #EEEEEE;
            color: #222
        }


        .cart_inner .table tbody tr.bottom_button td:last-child {
            width: 60px
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text {
            margin-left: -429px
        }

        @media (min-width: 991px) {
            .cart_inner .table tbody tr.bottom_button td .cupon_text {
                margin-left: -465px
            }
        }

        @media (max-width: 600px) {
            .cart_inner .table tbody tr.bottom_button td .cupon_text {
                margin-left: -380px
            }
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input {
            width: 200px;
            padding: 0px 10px 0 18px;
            border-radius: 30px;
            border: 1px solid #eeeeee;
            height: 40px;
            font-size: 14px;
            color: #cccccc;
            font-weight: normal;
            margin-right: -3px;
            outline: none;
            box-shadow: none
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input.placeholder {
            font-size: 14px;
            color: #cccccc;
            font-weight: normal
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input:-moz-placeholder {
            font-size: 14px;
            color: #cccccc;
            font-weight: normal
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input::-moz-placeholder {
            font-size: 14px;
            color: #cccccc;
            font-weight: normal
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text input::-webkit-input-placeholder {
            font-size: 14px;
            color: #cccccc;
            font-weight: normal
        }

        @media (max-width: 600px) {
            .cart_inner .table tbody tr.bottom_button td .cupon_text input {
                width: 120px
            }
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text .primary-btn {
            height: 40px;
            line-height: 38px;
            text-transform: uppercase;
            background: #384aeb;
            padding: 0px 38px;
            margin-right: 5px;
            margin-left: 10px;
            border-radius: 30px;
            text-transform: capitalize;
            font-weight: 500;
            color: #fff
        }

        .cart_inner .table tbody tr.bottom_button td .cupon_text .gray_btn {
            padding: 0px 40px
        }

        .cart_inner .table tbody tr.shipping_area td:nth-child(3) {
            vertical-align: top
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box {
            margin-left: -250px;
            text-align: right
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li {
            margin-bottom: 12px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li:last-child {
            margin-bottom: 0px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li a {
            padding-right: 30px;
            font-size: 15px;
            color: #777;
            position: relative
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li a:before {
            content: "";
            height: 16px;
            width: 16px;
            border: 1px solid #cdcdcd;
            display: inline-block;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translateY(-50%)
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li a:after {
            content: "";
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background: #384aeb;
            display: inline-block;
            position: absolute;
            right: 3px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .list li.active a:after {
            opacity: 1
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box h6 {
            font-size: 14px;
            font-weight: normal;
            color: #222;
            font-size: 16px;
            margin-top: 20px;
            margin-bottom: 20px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box h6 i {
            color: #222;
            padding-left: 5px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select {
            display: block;
            width: 100%;
            background: #f1f6f7;
            border: 1px solid #eeeeee;
            height: 40px;
            color: #999999;
            margin-bottom: 20px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select:after {
            right: 20px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select .list {
            width: 100%;
            border-radius: 0px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select .list li {
            font-size: 14px;
            font-weight: normal;
            color: #777
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box input {
            height: 40px;
            outline: none;
            background: #f1f6f7;
            border: 1px solid #eeeeee;
            width: 100%;
            font-size: 14px;
            color: #999999;
            padding: 0px 15px;
            margin-bottom: 20px
        }

        .cart_inner .table tbody tr.shipping_area .shipping_box input::placeholder {
            color: #999999
        }

        .cart_inner .table tbody tr.out_button_area .checkout_btn_inner {
            margin-left: -395px
        }

        .cart_inner .table tbody tr.out_button_area .checkout_btn_inner .primary-btn {
            height: 40px;
            padding: 0px 44px;
            line-height: 38px;
            text-transform: capitalize;
            background: #384aeb;
            border-radius: 30px;
            color: #fff;
            font-weight: 500
        }

        .cart_inner .table tbody tr.out_button_area .checkout_btn_inner .primary-btn:hover:before {
            left: 240px
        }

        .gray_btn {
            line-height: 38px;
            background: #f1f6f7;
            border: 1px solid #eeeeee;
            border-radius: 30px;
            padding: 0px 44px;
            display: inline-block;
            color: #222;
            text-transform: capitalize;
            font-weight: 500
        }

        .product_image_area {
            padding-top: 50px
        }

        @media (min-width: 1000px) {
            .product_image_area {
                padding-top: 100px
            }
        }

        .s_Product_carousel .owl-dots {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%)
        }

        .s_Product_carousel .owl-dots div {
            height: 5px;
            width: 20px;
            background: #dddddd;
            margin: 5px;
            display: block;
            content: "";
            border-radius: 50px
        }

        .s_Product_carousel .owl-dots div.active {
            width: 30px
        }

        .s_product_text {
            margin-left: -15px;
            margin-top: 65px
        }

        @media (max-width: 575px) {
            .s_product_text {
                margin-left: 0px
            }
        }

        .s_product_text h3 {
            font-size: 24px;
            font-weight: 500;
            color: #222;
            margin-bottom: 20px
        }

        .s_product_text h2 {
            font-family: "Roboto", sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #384aeb;
            margin-bottom: 10px
        }

        .s_product_text .list li {
            margin-bottom: 5px
        }

        .s_product_text .list li a {
            font-size: 15px;
            font-weight: normal;
            color: #777777
        }

        .s_product_text .list li a span {
            width: 90px;
            display: inline-block;
            color: #555555
        }

        .s_product_text .list li a span:hover {
            color: #555
        }

        .s_product_text .list li a.active span {
            color: #555;
            -webkit-text-fill-color: #555
        }

        .s_product_text .list li:last-child {
            margin-bottom: 0px
        }

        .s_product_text p {
            padding-top: 20px;
            border-top: 1px dotted #eeeeee;
            border-bottom: 1px dotted #eeeeee;
            margin-top: 20px;
            padding-bottom: 26px;
            margin-bottom: 0
        }

        .s_product_text .card_area {
            margin-top: 25px
        }

        .s_product_text .card_area .primary-btn {
            line-height: 38px;
            padding: 0px 38px;
            text-transform: uppercase;
            margin-right: 10px;
            border-radius: 5px
        }

        .s_product_text .card_area .icon_btn {
            position: relative;
            height: 40px;
            width: 40px;
            text-align: center;
            background: #e8f0f2;
            border-radius: 3px;
            display: inline-block;
            color: #222;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            margin-right: 10px;
            z-index: 1
        }

        .s_product_text .card_area .icon_btn i, .s_product_text .card_area .icon_btn span {
            line-height: 40px
        }

        .s_product_text .card_area .icon_btn:after {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            content: "";
            border-radius: 50%;
            opacity: 0;
            visibility: hidden;
            z-index: -1
        }

        .s_product_text .card_area .icon_btn:hover {
            background: #fff;
            box-shadow: 0px 10px 20px 0px rgba(153, 153, 153, 0.3)
        }

        .s_product_text .card_area .icon_btn:hover:after {
            opacity: 1;
            visibility: visible
        }

        .product_count {
            display: inline-block;
            position: relative;
            margin-bottom: 24px
        }

        .product_count label {
            font-size: 14px;
            color: #777;
            font-weight: normal;
            padding-right: 10px
        }

        .product_count input {
            width: 76px;
            border: 1px solid #eeeeee;
            border-radius: 3px;
            padding-left: 10px
        }

        .product_count button {
            display: block;
            border: none;
            background: transparent;
            box-shadow: none;
            cursor: pointer;
            position: absolute;
            right: 0px;
            font-size: 14px;
            color: #cccccc;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .product_count button:hover {
            color: #222
        }

        .product_count .increase {
            top: -4px
        }

        .product_count .reduced {
            bottom: -8px
        }

        .product_description_area {
            padding-bottom: 100px;
            margin-top: 60px
        }

        .product_description_area .nav.nav-tabs {
            background: #f1f6f7;
            text-align: center;
            display: block;
            border: none;
            padding: 10px 0px
        }

        .product_description_area .nav.nav-tabs li {
            display: inline-block;
            margin-right: 7px
        }

        .product_description_area .nav.nav-tabs li:last-child {
            margin-right: 0px
        }

        @media (max-width: 441px) {
            .product_description_area .nav.nav-tabs li:last-child {
                margin-top: 15px
            }
        }

        .product_description_area .nav.nav-tabs li a {
            padding: 0px;
            border: none;
            line-height: 38px;
            background: #fff;
            border: 1px solid #eeeeee;
            border-radius: 30px;
            padding: 0px 30px;
            color: #222;
            font-size: 14px;
            font-weight: normal
        }

        @media (max-width: 570px) {
            .product_description_area .nav.nav-tabs li a {
                padding: 0 15px
            }
        }

        .product_description_area .nav.nav-tabs li a.active {
            color: #fff;
            background: #384aeb;
            border-color: #384aeb
        }

        .product_description_area .tab-content {
            border-left: 1px solid #eee;
            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 30px 30px 15px 30px
        }

        .product_description_area .tab-content .total_rate .box_total {
            background: #f1f6f7;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px
        }

        .product_description_area .tab-content .total_rate .box_total h4 {
            font-size: 48px;
            font-weight: bold;
            color: #384aeb
        }

        .product_description_area .tab-content .total_rate .box_total h5 {
            color: #333333;
            margin-bottom: 0px;
            font-size: 24px
        }

        .product_description_area .tab-content .total_rate .box_total h6 {
            font-family: "Roboto", sans-serif;
            margin-bottom: 0px;
            font-size: 14px;
            color: #555555;
            font-weight: normal
        }

        .product_description_area .tab-content .total_rate .rating_list {
            margin-bottom: 30px
        }

        .product_description_area .tab-content .total_rate .rating_list h3 {
            font-size: 18px;
            color: #222;
            font-weight: 500;
            margin-bottom: 10px
        }

        .product_description_area .tab-content .total_rate .rating_list .list li a {
            font-size: 15px;
            color: #555555
        }

        .product_description_area .tab-content .total_rate .rating_list .list li a i {
            color: #fbd600
        }

        .product_description_area .tab-content .total_rate .rating_list .list li a i:first-child {
            margin-left: 15px
        }

        .product_description_area .tab-content .total_rate .rating_list .list li a i:last-child {
            margin-right: 15px
        }

        .product_description_area .tab-content .total_rate .rating_list .list li:nth-child a i:last-child {
            color: #eeeeee
        }

        .product_description_area .tab-content .table {
            margin-bottom: 0px
        }

        .product_description_area .tab-content .table tbody tr td {
            padding-left: 65px;
            padding-right: 65px;
            padding-top: 14px;
            padding-bottom: 14px
        }

        .product_description_area .tab-content .table tbody tr td h5 {
            font-size: 14px;
            font-weight: normal;
            color: #777;
            margin-bottom: 0px;
            white-space: nowrap
        }

        .product_description_area .tab-content .table tbody tr:first-child td {
            border-top: 0px
        }

        .review_item {
            margin-bottom: 10px
        }

        .review_item:last-child {
            margin-bottom: 0px
        }

        .review_item .media {
            position: relative
        }

        .review_item .media .d-flex {
            padding-right: 15px
        }

        .review_item .media .media-body {
            vertical-align: middle;
            align-self: center
        }

        .review_item .media .media-body h4 {
            font-size: 16px;
            color: #222;
            margin-bottom: 4px
        }

        .review_item .media .media-body i {
            color: #fbd600
        }

        .review_item .media .media-body h5 {
            font-size: 13px;
            font-weight: normal;
            color: #777
        }

        .review_item .media .media-body .reply_btn {
            border: 1px solid #e0e0e0;
            padding: 0px 28px;
            display: inline-block;
            line-height: 32px;
            border-radius: 16px;
            font-size: 14px;
            color: #222;
            position: absolute;
            right: 0px;
            top: 14px;
            @icnlude transition
        }

        .review_item .media .media-body .reply_btn:hover {
            background: #384aeb;
            border-color: #384aeb;
            color: #fff
        }

        .review_item p {
            padding-top: 10px;
            margin-bottom: 0px
        }

        .review_item.reply {
            padding-left: 28px
        }

        .review_box h4 {
            font-size: 20px;
            color: #222;
            margin-bottom: 20px
        }

        .review_box p {
            margin-bottom: 0px;
            color: #555555;
            display: inline-block
        }

        .review_box .list {
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px
        }

        .review_box .list li {
            display: inline-block
        }

        .review_box .list li a {
            display: inline-block;
            color: #fbd600
        }

        .review_box .contact_form {
            margin-top: 15px
        }

        .review_box .primary-btn {
            line-height: 38px !important;
            padding: 0px 38px;
            text-transform: uppercase;
            margin-right: 10px;
            border-radius: 5px;
            border: none
        }

        .form-review .form-control {
            height: 46px;
            background: transparent;
            border: 1px solid #EEEEEE;
            font-size: 14px;
            color: #999999
        }

        .footer-area {
            background: #002347;
            padding: 50px 0px 50px
        }

        @media (min-width: 1000px) {
            .footer-area {
                padding: 195px 0px 120px
            }
        }

        .single-footer-widget p {
            margin-bottom: 15px
        }

        .single-footer-widget p:last-child {
            margin-bottom: 0
        }

        .single-footer-widget .instafeed {
            margin-left: -5px;
            margin-right: -5px
        }

        .single-footer-widget .instafeed li {
            margin: 5px
        }

        @media (max-width: 1199px) and (min-width: 992px) {
            .single-footer-widget .instafeed li:nth-child(4), .single-footer-widget .instafeed li:nth-child(5), .single-footer-widget .instafeed li:nth-child(6) {
                display: none
            }
        }

        .single-footer-widget .sm-head {
            color: #fff;
            margin-bottom: 0px
        }

        .single-footer-widget .sm-head span {
            position: relative;
            margin-left: -40px;
            margin-right: 10px;
            display: inline-block;
            width: 28px;
            height: 28px;
            line-height: 28px;
            text-align: center;
            background: #384aeb;
            color: #ffffff;
            border-radius: 20px
        }

        .tp_widgets .list li {
            margin-bottom: 12px
        }

        .tp_widgets .list li a {
            color: #7b838a;
            font-family: "Roboto", sans-serif
        }

        .tp_widgets .list li a:hover {
            color: #384aeb
        }

        .tp_widgets .list li:last-child {
            margin-bottom: 0px
        }

        .tp_widgets p {
            color: #7b838a
        }

        .footer_title {
            font-size: 18px;
            line-height: 24px;
            font-weight: 500;
            font-family: "Oswald", sans-serif;
            text-transform: capitalize;
            color: #fff;
            margin-bottom: 28px
        }

        @media (max-width: 991px) {
            .footer_title {
                margin-bottom: 10px
            }
        }

        .footer_title.large_title {
            font-size: 36px;
            font-weight: 600
        }

        @media (max-width: 1199px) {
            .footer_title.large_title {
                font-size: 18px
            }
        }

        .footer-bottom {
            background: rgba(0, 35, 71, 0.980392);
            padding: 32px
        }

        .footer-bottom .footer-text {
            color: #fff;
            margin-bottom: 0
        }

        .footer-bottom .footer-text a {
            color: #384aeb;
            opacity: 1
        }

        .footer-only {
            padding-top: 60px !important;
            padding-bottom: 60px !important
        }

        @media (min-width: 1000px) {
            .footer-only {
                padding-top: 115px !important;
                padding-bottom: 115px !important
            }
        }

    </style>
</head>
<body>
<section class="order_details section-margin--small">
    <div class="container">
        <p class="text-center billing-alert">Mulțumesc. Comanda dvs. a fost primită.</p>
        <div class="row mb-5">
            @php $total = 0 @endphp
            @foreach($orders as $order)
                <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                    <div class="confirmation-card">
                        <h3 class="billing-title">Informații despre comandă</h3>
                        <table class="order-rable">
                            <tr>
                                <td>Numărul comenzii</td>
                                <td>: {{$randomId = rand(1000,10000)}}</td>
                            </tr>
                            <tr>
                                <td style="width: 50px;">Data</td>
                                <td>: {{$order->created_at}}</td>
                            </tr>
                            @foreach($order->products as $item)
                                @php $total += $item->price * $item->pivot->quantity @endphp
                            @endforeach
                            <tr>
                                <td>Total</td>
                                <td>: {{$total + 10}} MDL</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                    <div class="confirmation-card">
                        <h3 class="billing-title">Adresa de facturare</h3>
                        <table class="order-rable">
                            <tr>
                                <td>Stradă</td>
                                <td>: {{$order->address}}</td>
                            </tr>
                            <tr>
                                <td>Oraș</td>
                                <td>: {{\App\Models\City::where('id', $order->city_id)->pluck('title')->first()}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                    <div class="confirmation-card">
                        <h3 class="billing-title">Adresa livrarii</h3>
                        <table class="order-rable">
                            <tr>
                                <td>Stradă</td>
                                <td>: {{$order->address}}</td>
                            </tr>
                            <tr>
                                <td>Oraș</td>
                                <td>: {{\App\Models\City::where('id', $order->city_id)->pluck('title')->first()}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
        </div>
        <div class="order_details_table">
            <h2>Detalii comandă</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Cantitate</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($order->products as $item)
                        <tr>
                            <td>
                                <p>{{$item->title}}</p>
                            </td>
                            <td>
                                <h5>x {{$item->pivot->quantity}}</h5>
                            </td>
                            <td>
                                <p>{{ $item->price }} MDL</p>
                            </td>
                        </tr>
                        @php $total += $item->price * $item->pivot->quantity @endphp
                    @endforeach
                    @endforeach




                    <tr>
                        <td>
                            <h4>Subtotal</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <p>{{$total}} MDL</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Livrare</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <p>10 MDL</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Total</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <h4>{{$total + 10}} MDL</h4>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@include('frontend.layouts.script')
</body>
</html>
