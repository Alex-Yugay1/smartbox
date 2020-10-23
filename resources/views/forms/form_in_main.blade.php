
<div class="inner">
    <div class="map-contacts">
    <div class="section_title">
        <h2>Contact us</h2>
    </div>
    <div class="map-contacts-line">
        <div class="map-contacts-adress">Brunnwiesenstraße 9<br>73760 Ostfildern</div>
        <div class="map-contacts-phone"><a href="tel:071122062999">0711 22062999</a><span>Mo. – So.: 06:00 – 23:00 Clock</span></div>
    </div>
    <form class="form" action="{{route('store')}}" method="post">
        @csrf
        <div class="form-title">Feedback</div>
        <div class="ui-input">
        <input name="name" id="name" type="text"/>
        <label for="name">Name</label>
        </div>
        <div class="form-line">
        <div class="ui-input">
            <input name="mail" id="mail" required="required" type="email"/>
            <label for="mail">E-mail</label>
        </div>
        <div class="ui-input">
            <input name="phone" id="phone" required="required" type="tel"/>
            <label for="phone">Phone</label>
        </div>
        </div>
        <div class="form-line">
        <div class="ui-button">
            <input type="submit" value="send"/>
        </div>
        <div class="form-agreement">By submitting an application I agree to the processing of personal data</div>
        </div>
    </form>
    </div>
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>