@extends('main')
@section('title', 'Prices')
@section('content')
<div class="prices-page">
    <div class="inner">
    <div class="breadcrumbs">
        <ul class="breadcrumbs-block">
        <li class="breadcrumbs-block-item"><a class="breadcrumbs-block-item-link" href="/">Main</a>
        </li>
        <li class="breadcrumbs-block-item"><span>Prices</span>
        </li>
        </ul>
    </div>
    <div class="page_title">
        <h1>Prices</h1>
    </div>
                <div class="prices_steps-container">
                    <div class="prices_steps-container-item active">
                    <div class="prices_steps-container-item-anim">
                        <div class="prices_steps-container-item-anim-circle">00</div>
                        <div class="prices_steps-container-item-anim-progress"></div>
                    </div>
                    <div class="prices_steps-container-item-name">Choosing a Unit</div>
                    </div>
                    <div class="prices_steps-container-item">
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
    <section class="unit_size">
        <div class="section_title">
            <h2>Which Unit Size</h2>
        </div>
        <div class="unit_size-container">
            <div class="unit_size-container-item active">
                <div class="unit_size-container-item-image">
                <svg class="icon prices--icon_s">
                    <use xlink:href="img/sprite.svg#prices--icon_s"></use>
                </svg>
                </div>
                <div class="unit_size-container-item-content">
                <div class="unit_size-container-item-content-title">s</div>
                <div class="unit_size-container-item-content-descr">1-3 m<sup>2</sup></div>
                </div>
            </div>
            <div class="unit_size-container-item">
                <div class="unit_size-container-item-image">
                <svg class="icon prices--icon_m">
                    <use xlink:href="img/sprite.svg#prices--icon_m"></use>
                </svg>
                </div>
                <div class="unit_size-container-item-content">
                <div class="unit_size-container-item-content-title">m</div>
                <div class="unit_size-container-item-content-descr">4-8,5 m<sup>2</sup></div>
                </div>
            </div>
            <div class="unit_size-container-item">
                <div class="unit_size-container-item-image">
                <svg class="icon prices--icon_l">
                    <use xlink:href="img/sprite.svg#prices--icon_l"></use>
                </svg>
                </div>
                <div class="unit_size-container-item-content">
                <div class="unit_size-container-item-content-title">l</div>
                <div class="unit_size-container-item-content-descr">10-18 m<sup>2</sup></div>
                </div>
            </div>
            <div class="unit_size-container-item">
                <div class="unit_size-container-item-image">
                <svg class="icon prices--icon_xl">
                    <use xlink:href="img/sprite.svg#prices--icon_xl"></use>
                </svg>
                </div>
                <div class="unit_size-container-item-content">
                <div class="unit_size-container-item-content-title">xl</div>
                <div class="unit_size-container-item-content-descr">20-48 m<sup>2</sup></div>
                </div>
            </div>
        </div>
    </section>
    <section class="unit_list">
        <div class="section_title">
        <h2>Select one available units below</h2>
        </div>
        <div class="unit_list-wrap">
            <div class="unit_list-container">
                <div class="unit_list-container-wrap">
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Small</div>
                    <div class="unit_list-container-item-square">Lockers<sup></sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">5.75 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Small</div>
                    <div class="unit_list-container-item-square">1 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">8 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Small</div>
                    <div class="unit_list-container-item-square">2 m<sup>2</sup></div>
                    <div class="unit_list-container-item-special">Special offer</div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">14.75 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Small</div>
                    <div class="unit_list-container-item-square">3 m<sup>2</sup></div>
                    <div class="unit_list-container-item-special">Special offer</div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">20.25 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                </div>
                <div class="unit_list-container-footnote">*Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="unit_list-container">
                <div class="unit_list-container-wrap">
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Medium</div>
                    <div class="unit_list-container-item-square">4 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">26 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Medium</div>
                    <div class="unit_list-container-item-square">4,5 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">29.25 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Medium</div>
                    <div class="unit_list-container-item-square">5 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">31.50 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Medium</div>
                    <div class="unit_list-container-item-square">6 m<sup>2</sup></div>
                    <div class="unit_list-container-item-special">Special offer</div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">30.50 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Medium</div>
                    <div class="unit_list-container-item-square">8 m<sup>2</sup></div>
                    <div class="unit_list-container-item-special">Special offer</div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">38.25 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Medium</div>
                    <div class="unit_list-container-item-square">8,5 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">47.25 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                </div>
                <div class="unit_list-container-footnote">*Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="unit_list-container">
                <div class="unit_list-container-wrap">
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Large</div>
                    <div class="unit_list-container-item-square">10 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">54 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Large</div>
                    <div class="unit_list-container-item-square">12 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">67.50 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Large</div>
                    <div class="unit_list-container-item-square">15 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">87.75 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Large</div>
                    <div class="unit_list-container-item-square">18 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">99 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                </div>
                <div class="unit_list-container-footnote">*Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="unit_list-container">
                <div class="unit_list-container-wrap">
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Extra Large</div>
                    <div class="unit_list-container-item-square">20 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">112.50 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Extra Large</div>
                    <div class="unit_list-container-item-square">22 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">119.25 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Extra Large</div>
                    <div class="unit_list-container-item-square">25 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">129.50 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Extra Large</div>
                    <div class="unit_list-container-item-square">42 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">198 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Extra Large</div>
                    <div class="unit_list-container-item-square">44 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">207 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                <div class="unit_list-container-item">
                    <div class="unit_list-container-item-size">Extra Large</div>
                    <div class="unit_list-container-item-square">48 m<sup>2</sup></div>
                    <div class="unit_list-container-item-price"><span>from</span>
                    <div class="unit_list-container-item-price-val">225 €<sup>*</sup></div><span>per week</span>
                    </div>
                </div>
                </div>
                <div class="unit_list-container-footnote">*Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
        </div>
    </section>
    <div class="ui-button green"><a href="{{route('prices2')}}">next</a></div>
    </div>
</div>
@endsection