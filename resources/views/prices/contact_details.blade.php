@extends('main')
@section('title', 'Prices 2')
@section('content')
<div class="prices-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">Main</a>
        </li>
        <li class="breadcrumbs-block-item"><span>Prices 2</span>
        </li>
        </ul>
    </div>
    <div class="page_title">
        <h1>Prices 2</h1>
    </div>
                <div class="prices_steps-container">
                    <div class="prices_steps-container-item done">
                    <div class="prices_steps-container-item-anim">
                        <div class="prices_steps-container-item-anim-circle">00</div>
                        <div class="prices_steps-container-item-anim-progress"></div>
                    </div>
                    <div class="prices_steps-container-item-name">Choosing a Unit</div>
                    </div>
                    <div class="prices_steps-container-item active">
                    <div class="prices_steps-container-item-anim">
                        <div class="prices_steps-container-item-anim-circle">01</div>
                        <div class="prices_steps-container-item-anim-progress"></div>
                    </div>
                    <div class="prices_steps-container-item-name">Contact details</div>
                    </div>
                    <div class="prices_steps-container-item">
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
    <section class="user_info">
        <div class="section_title">
        <h2>User Info</h2>
        </div>
        <form class="form">
        <div class="ui-input">
            <input id="name" type="text"/>
            <label for="name">Forename</label>
        </div>
        <div class="ui-input">
            <input id="surname" type="text"/>
            <label for="surname">Surname</label>
        </div>
        <div class="ui-input">
            <input id="phone" required="required" type="tel"/>
            <label for="phone">Phone</label>
        </div>
        <div class="ui-input">
            <input id="mail" required="required" type="email"/>
            <label for="mail">E-mail</label>
        </div>
        </form>
    </section>
    <section class="pay">
        <div class="section_title">
        <h2>How would you like to pay your subsequent bills?</h2>
        </div>
        <div class="pay-container">
        <div class="pay-container-item active">
            <svg class="icon prices--icon_card">
            <use xlink:href="img/sprite.svg#prices--icon_card"></use>
            </svg>
        </div>
        <div class="pay-container-item">
            <svg class="icon prices--icon_paypal">
            <use xlink:href="img/sprite.svg#prices--icon_paypal"></use>
            </svg>
        </div>
        <div class="pay-container-item">Cash</div>
        </div>
        <div class="ui-checkbox">
        <input id="agreement" type="checkbox" name="agreement"/>
        <label for="agreement">I have read and agree to the <a href="#">data protection notice</a></label>
        </div>
    </section>
    <div class="ui-button green"><a href="{{route('prices3')}}">next</a></div>
    </div>
</div>
@endsection