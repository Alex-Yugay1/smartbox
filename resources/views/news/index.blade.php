@extends('main')
@section('title', 'News')
@section('content')

<div class="news-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
            <li class="breadcrumbs-block-item">
                <a class="breadcrumbs-block-item-link" href="/test/public/">Main</a>
            </li>
            <li class="breadcrumbs-block-item">
                <span>News</span>
            </li>
        </ul>
    </div>
    <div class="page_title">
        <h1>News</h1>
    </div>
    <div class="news">
        <div class="news-container">
            @foreach ($items as $k => $item)
                <a class="news-container-item" href="/smartbox/public/news/{{$item->id}}">
                    <div class="news-container-item-image">
                        <img src="/smartbox/public/assets/img/news/news_img0.jpg" alt="{{$item->title}}">
                    </div>
                    <div class="news-container-item-text">
                        <div class="news-container-item-text-date">{{date('d.m.Y', strtotime($item->created_at))}}</div>
                        <div class="news-container-item-text-title">{{$item->title}}</div>
                        <div class="news-container-item-text-descr">{{$item->text}}</div>
                    </div>
                </a>
            @endforeach
        </div>

        {{ $items->links('paginate.custom') }}

    </div>
    </div>
</div>


@endsection