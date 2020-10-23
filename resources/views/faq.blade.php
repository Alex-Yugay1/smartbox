@extends('main')
@section('title', 'Faq')
@section('content')
<div class="faq-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">Main</a>
        </li>
        <li class="breadcrumbs-block-item"><span>FAQ</span>
        </li>
        </ul>
    </div>
    <div class="page_title">
        <h1>FAQ</h1>
    </div>
    <div class="faq">
        <div class="faq-container">
            @foreach ($items as $item)
                <div class="faq-container-item">
                    <div class="faq-container-item-title">{{$item->title}}
                    <div class="faq-container-item-title-toggle"></div>
                    </div>
                    <div class="faq-container-item-descr">{{$item->text}}</div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection