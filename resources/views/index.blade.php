@extends('main')
@section('title', 'Main')
@section('header-style', 'absolute')
@section('content')
<div class="main-page">
    <div class="top_banner">
    <div class="top_banner-image">
        <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="assets/img/main/top_banner_img0.jpg" alt="If you need space We have place"></div>
        <div class="swiper-slide"><img src="assets/img/main/top_banner_img1.jpg" alt="If you need space We have place"></div>
        <div class="swiper-slide"><img src="assets/img/main/top_banner_img2.jpg" alt="If you need space We have place"></div>
        </div>
    </div>
    <div class="inner">
        <div class="top_banner-content">
        <div class="top_banner-content-title">Die beste plätze<br>für deine schätze</div>
        <div class="top_banner-content-line">
            <div class="ui-button green"><a>Book now</a></div><a href="#">Special offers</a>
        </div>
        </div>
    </div>
    </div>
    <div class="anchors">
    <div class="anchors-wrap">
        <div class="inner">
        <div class="container"><a class="container-item active" href="#steps">How does self-storage work?</a><a class="container-item" href="#storage">Storage cases</a><a class="container-item" href="#features">Why SmartBox</a>
        </div>
        </div>
    </div>
    </div>
    <div class="inner">
    <section class="steps" id="steps">
        <div class="section_title">
        <h2>How does self-storage work?</h2>
        </div>
        <div class="container">
        <div class="container-item">
            <div class="container-item-counter"></div>
            <div class="container-item-title">Calculator and reserve</div>
            <div class="container-item-descr">You calculate how much space you need and reserve your storage unit at SmartBox either online, by phone or by e-mail</div>
            <div class="container-item-link"><a href="#">Calculation</a></div>
        </div>
        <div class="container-item">
            <div class="container-item-counter"></div>
            <div class="container-item-title">Storage unit</div>
            <div class="container-item-descr">At the SmartBox location a SmartBox employee presents you the storage unit and discusses the rental agreement with you</div>
            <div class="container-item-link"><a href="https://smartbox.dterra.eu/services-shelving.html">More details</a></div>
        </div>
        <div class="container-item">
            <div class="container-item-counter"></div>
            <div class="container-item-title">Free transport</div>
            <div class="container-item-descr">To move in you may use our SmartBox van free of charge and the offered transport aids at the location to store your belongings</div>
            <div class="container-item-link"><a href="https://smartbox.dterra.eu/services-transportation.html">More details</a></div>
        </div>
        </div>
        <div class="ui-button green"><a>Book now</a></div>
    </section>
    <section class="storage" id="storage">
        <div class="section_title">
            <h2>Storage cases</h2>
        </div>
        <div class="swiper-container-thumbs">
            <div class="swiper-wrapper">
                @foreach ($sliderItems as $item)
                <div class="swiper-slide">
                    <div class="swiper-slide-image">
                        <img src="{{$item->img}}" alt="{{$item->title}}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($sliderItems as $item)
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="swiper-slide-text-title">{{$item->header_text}}</div>
                            <div class="swiper-slide-text-descr">{{$item->text}}</div>
                        </div>
                        <div class="swiper-slide-image">
                            <img src="{{$item->img}}" alt="{{$item->title}}">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="features" id="features">
        <div class="section_title">
        <h2>Why SmartBox</h2>
        </div>
        <div class="container">
        <div class="container-item">
            <div class="container-item-image">
            <svg class="icon main--features_img0">
                <use xlink:href="assets/img/sprite.svg#main--features_img0"></use>
            </svg>
            </div>
            <div class="container-item-title">24/7 Units Available</div>
        </div>
        <div class="container-item">
            <div class="container-item-image">
            <svg class="icon main--features_img1">
                <use xlink:href="assets/img/sprite.svg#main--features_img1"></use>
            </svg>
            </div>
            <div class="container-item-title">Dry, clean, security</div>
        </div>
        <div class="container-item">
            <div class="container-item-image">
            <svg class="icon main--features_img2">
                <use xlink:href="assets/img/sprite.svg#main--features_img2"></use>
            </svg>
            </div>
            <div class="container-item-title">Monthly fee</div>
        </div>
        <div class="container-item">
            <div class="container-item-image">
            <svg class="icon main--features_img3">
                <use xlink:href="assets/img/sprite.svg#main--features_img3"></use>
            </svg>
            </div>
            <div class="container-item-title">Safe Lockers</div>
        </div>
        <div class="container-item">
            <div class="container-item-image">
            <svg class="icon main--features_img4">
                <use xlink:href="assets/img/sprite.svg#main--features_img4"></use>
            </svg>
            </div>
            <div class="container-item-title">Storage Tips</div>
        </div>
        <div class="container-item">
            <div class="container-item-image">
            <svg class="icon main--features_img5">
                <use xlink:href="assets/img/sprite.svg#main--features_img5"></use>
            </svg>
            </div>
            <div class="container-item-title">Your Goods Insured</div>
        </div>
        </div>
    </section>
    </div>
    <div class="map">
    <div class="map-block" id="map"></div>
        @include('forms.form_in_main')
    </div>
</div>
@endsection