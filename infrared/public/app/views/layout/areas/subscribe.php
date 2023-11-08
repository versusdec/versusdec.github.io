<?php if ($this->lang == 'en'){ ?>

<h3 class="underline light" style="margin-top: 0;">Subscribe</h3>
<p>
    Get news about legislative changes with expert comments from our lawyers and reviews of relevant legal
    issues in accordance with the areas of law that are of interest to you.
</p>
<form class="subscribe-form" method="post" action="/" data-action="/subscribe/">
	<input type="text" name="name" placeholder="First Name">
	<input type="text" name="email" placeholder="E-mail" required>
    <label class="checkbox-form">
        <span>By clicking the “Subscribe” button, you automatically agree with the <a href="/en/privacy/"> privacy policy </a> and give your consent to the processing of personal data.</span>
    </label>
	<button type="submit">Subscribe</button>
</form>

<?php }else{ ?>

<h3 class="underline light" style="margin-top: 0;">Оформить подписку</h3>
<p>
    Получайте новости об изменениях в законодательстве с экспертными комментариями наших юристов и обзоры
    актуальных юридических вопросов в соответствии с теми областями права, которые представляют для Вас
    интерес.
</p>
<form class="subscribe-form" method="post" action="/" data-action="/subscribe/">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="email" placeholder="E-mail" required>
    <label class="checkbox-form">
        <span>Нажимая кнопку «Подписаться», Вы автоматически соглашаетесь с <a href="/privacy/">политикой конфиденциальности</a> и даёте своё согласие на обработку персональных данных.</span>
    </label>
    <button type="submit">Подписаться</button>
</form>

<?php } ?>