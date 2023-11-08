<div class="modal callback">
    <div class="modal-inner">
        <div class="modal__close-btn">
            <div></div>
            <div></div>
        </div>
        <form class="callback-form" method="post" action="/" data-action="/feedback/">
            <input name="lawyer_id" type="hidden" value="">
            <input name="name" type="text" placeholder="First Name">
            <input name="phone" type="tel" placeholder="Phone" required>
            <input name="email" type="text" placeholder="E-mail" required>
            <textarea name="message" placeholder="Message"></textarea>
            <label class="checkbox-form">
                <span>By clicking the “Send” button, you automatically agree with the <a href="/en/privacy/"> privacy policy </a> and give your consent to the processing of personal data.</span>
            </label>
            <button type="submit" class="btn">Send</button>
        </form>
    </div>
    <div class="modal-message">
        <div>Thank you!</div>
        <div>We will call you back within 5 minutes</div>
    </div>
</div>