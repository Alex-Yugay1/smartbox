@extends('main')
@section('title', 'Gallery')
@section('content')
<div class="gallery-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">Main</a>
        </li>
        <li class="breadcrumbs-block-item"><span>Gallery</span>
        </li>
        </ul>
    </div>
    <div class="page_title">
        <h1>Gallery</h1>
    </div>
    <div class="gallery">
        <div class="gallery-container">
            @foreach ($items as $item)
            <a class="gallery-container-item" href="{{$item->img}}" data-fancybox="gallery">
                <div class="gallery-container-item-image"><img src="{{$item->img}}" alt="{{$item->title}}"></div>
                <div class="gallery-container-item-descr">{{$item->title}}</div>
            </a>
            @endforeach
        </div>
        {{ $items->links('paginate.custom') }}
    </div>
    </div>
</div>
@endsection