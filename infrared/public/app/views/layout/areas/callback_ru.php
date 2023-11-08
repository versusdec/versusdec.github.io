<div class="modal callback">
    <div class="modal-inner">
        <div class="modal__close-btn">
            <div></div>
            <div></div>
        </div>
        <form class="callback-form" method="post" action="/" data-action="/feedback/">
            <input name="lawyer_id" type="hidden" value="">
            <input name="name" type="text" placeholder="Имя">
            <input name="phone" type="tel" placeholder="Телефон" required>
            <input name="email" type="text" placeholder="E-mail" required>
            <textarea name="message" placeholder="Сообщение"></textarea>
            <label class="checkbox-form">
                <span>Нажимая кнопку «Отправить», Вы автоматически соглашаетесь с <a href="/privacy/">политикой конфиденциальности</a> и даёте своё согласие на обработку персональных данных.</span>
            </label>
            <button type="submit" class="btn">Отправить</button>
        </form>
    </div>
    <div class="modal-message">
        <div>Спасибо!</div>
        <div>Мы свяжемся с Вами в ближайшее время!</div>
    </div>
</div>