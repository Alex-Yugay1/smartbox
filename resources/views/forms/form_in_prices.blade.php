<section class="feedback">
        <div class="section_title">
        <h2>Feedback</h2>
        </div>
        <form class="form" action="{{route('store')}}" method="post">
        @csrf
        <div class="form-line">
            <div class="item">
            <div class="ui-input">
                <input name="name" id="name" type="text"/>
                <label for="name">Name</label>
            </div>
            <div class="item-line">
                <div class="ui-input">
                <input name="mail" id="mail" required="required" type="email"/>
                <label for="mail">E-mail</label>
                </div>
                <div class="ui-input">
                <input name="phone" id="phone" required="required" type="tel"/>
                <label for="phone">Phone</label>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="ui-textarea">
                <textarea name="message" placeholder="Message" required="required"></textarea>
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