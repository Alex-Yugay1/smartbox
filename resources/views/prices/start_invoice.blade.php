@extends('main')
@section('title', 'Prices 3')
@section('content')
<div class="prices-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">Main</a>
        </li>
        <li class="breadcrumbs-block-item"><span>Prices 3</span>
        </li>
        </ul>
    </div>
    <div class="page_title">
        <h1>Prices 3</h1>
    </div>
                <div class="prices_steps-container">
                    <div class="prices_steps-container-item done">
                    <div class="prices_steps-container-item-anim">
                        <div class="prices_steps-container-item-anim-circle">00</div>
                        <div class="prices_steps-container-item-anim-progress"></div>
                    </div>
                    <div class="prices_steps-container-item-name">Choosing a Unit</div>
                    </div>
                    <div class="prices_steps-container-item done">
                    <div class="prices_steps-container-item-anim">
                        <div class="prices_steps-container-item-anim-circle">01</div>
                        <div class="prices_steps-container-item-anim-progress"></div>
                    </div>
                    <div class="prices_steps-container-item-name">Contact details</div>
                    </div>
                    <div class="prices_steps-container-item active">
                    <div class="prices_steps-container-item-anim">
                        <div class="prices_steps-container-item-anim-circle">02</div>
                        <div class="prices_steps-container-item-anim-progress"></div>
                    </div>
                    <div class="prices_steps-container-item-name">Start / Invoice</div>
                    </div>
                    <div class="prices_steps-container-item">
                    <div class="prices_steps-container-item-anim">
                        <div class="prices_steps-container-item-anim-circle">03</div>
                        <div class="prices_steps-container-item-anim-progress"></div>
                    </div>
                    <div class="prices_steps-container-item-name">Payment</div>
                    </div>
                </div>
    <section class="how_long">
        <div class="how_long-container">
        <div class="how_long-container-item">
            <div class="section_title">
            <h2>How long</h2>
            </div>
            <div class="how_long-container-item-title">Choose duration you would like to stay with us</div>
            <div class="ui-input">
            <input id="range-value" type="text"/>
            <label for="range-value">Weeks</label>
            </div>
            <div class="ui-range" id="slider-range"></div>
        </div>
        <div class="how_long-container-item">
            <div class="how_long-container-item-title">Choose your Start Date</div>
            <div class="ui-input datepicker">
            <input type="text" readonly>
            <svg class="icon prices--icon_calendar">
                <use xlink:href="img/sprite.svg#prices--icon_calendar"></use>
            </svg>
            </div>
        </div>
        <div class="how_long-container-item">
            <div class="section_title">
            <h2>Insurable value</h2>
            </div>
            <div class="how_long-container-item-title">Сhoose the appropriate option</div>
            <div class="ui-select">
            <select>
                <option>till 2500 €</option>
                <option>till 3500 €</option>
                <option>till 4500 €</option>
            </select>
            </div>
        </div>
        </div>
        <div class="ui-checkbox">
        <input id="agreement" type="checkbox" name="agreement"/>
        <label for="agreement">I have read and agree to the <a href="#">data protection notice</a></label>
        </div>
    </section>
    <div class="ui-button green"><a>next</a></div>
    </div>
</div>
@endsection