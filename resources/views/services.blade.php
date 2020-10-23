@extends('main')
@section('title', $item->title)
@section('title', 'Services')
@section('content')
<div class="services-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">Main</a>
        </li>
        <li class="breadcrumbs-block-item"><span>Insurance</span>
        </li>
        </ul>
    </div>
    <section class="services">
        <div class="services-top">
            <div class="section_title">
                <h2>{{$item->title}}</h2>
            </div>
            <div class="services-top-image">
                <img src="{{$item->img}}" alt="{{$item->title}}">
            </div>
        </div>
        <div class="services-content">
            <div class="services-text">
                <div class="services-text-item">
                    <div class="services-text-item-descr">{{$item->text}}</div>
                </div>
                <div class="services-text-item">
                    <div class="services-text-item-title">Insurance Conditions</div>
                    <ul class="services-text-item-list">
                        <li>Our base insurance plan covers 5000 euro. This service costs 4 euro for four weeks and offers full coverage.</li>
                        <li>If you believe that insurance we provide is insufficient, you can increase it. Every additional 1000 euros, cost 1 euro covering four weeks.</li>
                    </ul>
                </div>
            </div>
            <div class="services-list">
                <div class="services-list-title">All services</div>
                <div class="services-list-container">
                    @foreach ($items as $item)
                        <a class="services-list-container-item" href="/smartbox/public/services/{{$item->id}}">
                            <svg class="icon services--icon_transportation">
                                <use xlink:href="{{$item->icon}}"></use>
                            </svg>
                            <div class="name">{{$item->title}}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('forms.form_in_prices')
    </div>
</div>
@endsection