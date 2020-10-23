@extends('main')
@section('title', 'Contacts')
@section('content')
<div class="contacts-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">Main</a>
        </li>
        <li class="breadcrumbs-block-item"><span>Contacts</span>
        </li>
        </ul>
    </div>
    <div class="page_title">
        <h1>Contacts</h1>
    </div>
    <div class="contacts">
        <div class="contacts-container">
        <div class="contacts-container-item">
            <div class="contacts-container-item-image">
            <svg class="icon contacts--adress">
                <use xlink:href="img/sprite.svg#contacts--adress"></use>
            </svg>
            </div>
            <div class="contacts-container-item-name">Adress</div>
            <div class="contacts-container-item-descr">Brunnwiesenstraße 9 73760 Ostfildern</div>
        </div>
        <div class="contacts-container-item">
            <div class="contacts-container-item-image">
            <svg class="icon contacts--phone">
                <use xlink:href="img/sprite.svg#contacts--phone"></use>
            </svg>
            </div>
            <div class="contacts-container-item-name">Phone</div>
            <div class="contacts-container-item-descr">+49 30 98196160</div>
        </div>
        <div class="contacts-container-item">
            <div class="contacts-container-item-image">
            <svg class="icon contacts--schedule">
                <use xlink:href="img/sprite.svg#contacts--schedule"></use>
            </svg>
            </div>
            <div class="contacts-container-item-name">Work schedule</div>
            <div class="contacts-container-item-descr">Mo. – So. 06:00 – 20:00</div>
        </div>
        </div>
    </div>
    </div>
    <div class="map">
    <div class="map-block" id="map"></div>
    </div>
    <div class="inner">
    <section class="feedback">
        <div class="section_title">
        <h2>Feedback</h2>
        </div>
        <form class="form" action="#">
        <div class="form-line">
            <div class="item">
            <div class="ui-input">
                <input id="name" type="text"/>
                <label for="name">Name</label>
            </div>
            <div class="item-line">
                <div class="ui-input">
                <input id="mail" required="required" type="email"/>
                <label for="mail">E-mail</label>
                </div>
                <div class="ui-input">
                <input id="phone" required="required" type="tel"/>
                <label for="phone">Phone</label>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="ui-textarea">
                <textarea placeholder="Message" required="required"></textarea>
            </div>
            </div>
        </div>
        <div class="form-line">
            <div class="form-agreement">By submitting an application I agree to the processing of personal data</div>
            <div class="ui-button green">
            <input type="submit" value="send"/>
            </div>
        </div>
        </form>
    </section>
    </div>
</div>
@endsection