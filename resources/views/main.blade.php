<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google Tag Manager -->
  <script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KFBKPMX');
  </script>
  <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link href="." rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="/smartbox/assets/css/style.min.css">
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFBKPMX"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
      <header class="header @yield('header-style')">
              <div class="inner">
                <div class="header-logo"><a href="/">
                    <svg class="icon icon_logo">
                      <use xlink:href="img/sprite.svg#icon_logo"></use>
                    </svg>
                    <svg class="icon icon_logo_green">
                      <use xlink:href="img/sprite.svg#icon_logo_green"></use>
                    </svg></a></div>
                <div class="header-menu">
                  <div class="header-menu-item">
                    <div class="header-menu-item-title arrow">Services</div>
                    <ul class="header-menu-item-list">
                      <li class="header-menu-item-list-name"><a href="{{route('detail_service', ['id' => 1])}}">Transportation</a></li>
                      <li class="header-menu-item-list-name"><a href="{{route('detail_service', ['id' => 2])}}">Shelving</a></li>
                      <li class="header-menu-item-list-name"><a href="{{route('detail_service', ['id' => 3])}}">Packing materials</a></li>
                      <li class="header-menu-item-list-name"><a href="{{route('detail_service', ['id' => 4])}}">Insurance</a></li>
                      <li class="header-menu-item-list-name"><a href="{{route('detail_service', ['id' => 5])}}">Mailboxes</a></li>
                      <li class="header-menu-item-list-name"><a href="{{route('detail_service', ['id' => 6])}}">Meetings</a></li>
                    </ul>
                  </div>
                  <div class="header-menu-item">
                    <div class="header-menu-item-title"><a href="{{route('prices1')}}">Prices</a></div>
                  </div>
                  <div class="header-menu-item">
                    <div class="header-menu-item-title arrow">About us</div>
                    <ul class="header-menu-item-list">
                      <!-- <li class="header-menu-item-list-name"><a href="smartbox.html">SmartBox</a></li> -->
                      <!-- <li class="header-menu-item-list-name"><a href="team.html">Team</a></li> -->
                      <li class="header-menu-item-list-name"><a href="{{route('news')}}">News</a></li>
                      <li class="header-menu-item-list-name"><a href="{{route('gallery')}}">Gallery</a></li>
                      <li class="header-menu-item-list-name"><a href="{{route('contacts')}}">Contacts</a></li>
                    </ul>
                  </div>
                  <div class="header-menu-item">
                    <div class="header-menu-item-title"><a href="{{route('faq')}}">FAQ</a></div>
                  </div>
                </div>
                <div class="header-info">
                  <div class="header-info-contacts">
                    <div class="header-info-contacts-phone"><a href="tel:071122062999">0711 22062999</a></div>
                    <div class="header-info-contacts-work_time">Mon. - Fri. 8-21h</div>
                  </div>
                  <div class="ui-button green"><a>{{ __('header.button') }}</a></div>
                  <div class="header-info-search">
                    <svg class="icon icon_search">
                      <use xlink:href="img/sprite.svg#icon_search"></use>
                    </svg>
                  </div>
                  <div class="header-info-lang">
                    <div class="ui-select">
                      <select onchange="location.href=this.value">
                        <option @if (App::getLocale() == 'en') selected @endif value="{{ route('locale', ['locale' => 'en']) }}">en</option>
                        <option @if (App::getLocale() == 'de') selected @endif value="{{ route('locale', ['locale' => 'de']) }}">de</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="header-burger">
                  <div class="header-burger-button"><span></span><span></span><span></span></div>
                  <div class="header-burger-wrap">
                    <div class="inner">
                      <div class="header-info-search">
                        <svg class="icon icon_search">
                          <use xlink:href="img/sprite.svg#icon_search"></use>
                        </svg>
                        <div class="ui-input">
                          <input id="hSearch" type="text"/>
                          <label for="hSearch">Поиск</label>
                        </div>
                      </div>
                      <div class="header-menu">
                        <div class="header-menu-item">
                          <div class="header-menu-item-title arrow">Services</div>
                          <ul class="header-menu-item-list">
                            <li class="header-menu-item-list-name"><a href="services-transportation.html">Transportation</a></li>
                            <li class="header-menu-item-list-name"><a href="services-shelving.html">Shelving</a></li>
                            <li class="header-menu-item-list-name"><a href="services-materials.html">Packing materials</a></li>
                            <li class="header-menu-item-list-name"><a href="services-insurance.html">Insurance</a></li>
                            <li class="header-menu-item-list-name"><a href="services-mailboxes.html">Mailboxes</a></li>
                            <li class="header-menu-item-list-name"><a href="services-room.html">Meetings</a></li>
                          </ul>
                        </div>
                        <div class="header-menu-item">
                          <div class="header-menu-item-title"><a href="prices.html">Prices</a></div>
                        </div>
                        <div class="header-menu-item">
                          <div class="header-menu-item-title arrow">About us</div>
                          <ul class="header-menu-item-list">
                            <li class="header-menu-item-list-name"><a href="smartbox.html">SmartBox</a></li>
                            <li class="header-menu-item-list-name"><a href="team.html">Team</a></li>
                            <li class="header-menu-item-list-name"><a href="news.html">News</a></li>
                            <li class="header-menu-item-list-name"><a href="gallery.html">Gallery</a></li>
                            <li class="header-menu-item-list-name"><a href="contacts.html">Contacts</a></li>
                          </ul>
                        </div>
                        <div class="header-menu-item">
                          <div class="header-menu-item-title"><a href="faq.html">FAQ</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </header>
      <main>
        @yield('content')
      </main>
      <footer class="footer">
        <div class="inner">
          <div class="footer-logo"><a href="/">
              <svg class="icon icon_logo_green">
                <use xlink:href="img/sprite.svg#icon_logo_green"></use>
              </svg></a></div>
          <div class="footer-menu">
            <div class="footer-menu-item"><a href="/Impressum_v2.pdf">Impressum</a></div>
            <div class="footer-menu-item"><a href="#">Data Protection</a></div>
            <div class="footer-menu-item"><a href="/AGB_v5.pdf">Conditions</a></div>
          </div>
          <div class="footer-social">
            <div class="footer-social-item"><a href="#">
                <svg class="icon icon_tt">
                  <use xlink:href="img/sprite.svg#icon_tt"></use>
                </svg></a></div>
            <div class="footer-social-item"><a href="#">
                <svg class="icon icon_ig">
                  <use xlink:href="img/sprite.svg#icon_ig"></use>
                </svg></a></div>
            <div class="footer-social-item"><a href="#">
                <svg class="icon icon_fb">
                  <use xlink:href="img/sprite.svg#icon_fb"></use>
                </svg></a></div>
            <div class="footer-social-item"><a href="#">
                <svg class="icon icon_in">
                  <use xlink:href="img/sprite.svg#icon_in"></use>
                </svg></a></div>
          </div>
          <div class="footer-info">
            <div class="footer-made_by">Made in <a href="https://dterra.eu/" target="_blank">D’Terra</a>
            </div>
            <div class="footer-copyright">© Copyright 2020 by</div>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/svg4everybody/2.1.9/svg4everybody.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiCWkRkGVyb5oer2yx7CzmGU0leBKxg-Q&amp;language=de&amp;libraries=&amp;v=weekly" defer></script>
    <script>svg4everybody();</script>
    <script src="assets/js/vendors.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>