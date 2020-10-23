@extends('main')
@section('title', $item->title)
@section('content')
<div class="news-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">Main</a>
        </li>
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">News</a>
        </li>
        <li class="breadcrumbs-block-item"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</span>
        </li>
        </ul>
    </div>
    <div class="news-inner">
        <div class="news-inner-top">
        <div class="news-inner-top-date">{{date('d.m.Y', strtotime($item->created_at))}}</div>
        <div class="page_title">
            <h1>{{$item->title}}</h1>
        </div>
        </div>
        <div class="news-inner-content">
        <div class="news-inner-content-image"><img src="/smartbox/public/assets/img/news/news_img1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt"></div>
        <div class="news-inner-content-descr">{{$item->detail_text}}</div>
        <div class="news-inner-content-title">{{$item->title}}</div>
        <div class="news-inner-content-descr">{{$item->detail_text}}</div>
        <ul class="news-inner-content-list">
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
        </ul>
        <div class="news-inner-content-social"><span>Share:</span><a href="#">
            <svg class="icon icon_tt">
                <use xlink:href="/smartbox/public/assets/img/sprite.svg#icon_tt"></use>
            </svg></a><a href="#">
            <svg class="icon icon_ig">
                <use xlink:href="/smartbox/public/assets/img/sprite.svg#icon_ig"></use>
            </svg></a><a href="#">
            <svg class="icon icon_fb">
                <use xlink:href="/smartbox/public/assets/img/sprite.svg#icon_fb"></use>
            </svg></a></div>
        </div>
        <div class="news">
            <div class="news-container">
                @foreach ($randItems as $item)
                <a class="news-container-item" href="/smartbox/public/news/{{$item->id}}">
                    <div class="news-container-item-text">
                        <div class="news-container-item-text-date">{{date('d.m.Y', strtotime($item->created_at))}}</div>
                        <div class="news-container-item-text-title">{{$item->title}}</div>
                        <div class="news-container-item-text-descr">{{$item->detail_text}}</div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</div>
@endsection