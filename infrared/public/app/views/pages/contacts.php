<?php if ($this->lang == 'en'){ ?>

<section class="block page">
	<?php if (!empty($page->genimg)) { ?>
		<div class="page-img">
			<img src="<?php echo $page->genimg; ?>" alt="">
		</div>
	<? } ?>
	<div class="s_aside">
		<div class="i_aside">
            <h2><?php echo $page->h1_en; ?></h2>

            <?php echo $page->description_en; ?>
			<div id="map" data-center="<?php echo $this->settings->coordinates; ?>"></div>
			<div class="inline margin">
				<a href="tel:<?php echo $this->settings->phone; ?>" class="phone icon icon_phone"><?php echo $this->settings->phone; ?></a>
				<a class="icon icon_mail callback-btn feedback-btn orange text-orange">Leave a message</a>
			</div>
			<h3 class="underline light">Address</h3>
			<p><?php echo $this->settings->address_en; ?></p>
		</div>
		<aside class="right">
			<form class="feedback-form" method="post" action="/" data-action="/feedback/">
				<h3 class="underline light">Ask a question</h3>
				<input name="name" type="text" placeholder="Name">
				<input name="phone" type="tel" placeholder="Phone" required="">
				<input name="email" type="text" placeholder="Email" required="">
				<select name="direction">
                    <option value="customer">For customer</option>
					<option value="job">For job seekers</option>
					<option value="press">For the press</option>
				</select>
				<textarea name="message" placeholder="Message"></textarea>
                <label class="checkbox-form">
                    <span>By clicking the “Send” button, you automatically agree with the <a href="/en/privacy/"> privacy policy </a> and give your consent to the processing of personal data.</span>
                </label>
				<button type="submit" class="btn">Send</button>
			</form>
		</aside>
	</div>
</section>

<?php }else{ ?>

<section class="block page">
    <?php if (!empty($page->genimg)) { ?>
        <div class="page-img">
            <img src="<?php echo $page->genimg; ?>" alt="">
        </div>
    <? } ?>
    <div class="s_aside">
        <div class="i_aside">
            <h2><?php echo $page->h1_ru; ?></h2>

            <?php echo $page->description_ru; ?>
            <div id="map" data-center="<?php echo $this->settings->coordinates; ?>"></div>
            <div class="inline margin">
                <a href="tel:<?php echo $this->settings->phone; ?>" class="phone icon icon_phone"><?php echo $this->settings->phone; ?></a>
                <a class="icon icon_mail callback-btn feedback-btn orange text-orange">Оставить сообщение</a>
            </div>
            <h3 class="underline light">Адрес</h3>
            <p><?php echo $this->settings->address_ru; ?></p>
        </div>
        <aside class="right">
            <form class="feedback-form" method="post" action="/" data-action="/feedback/">
                <h3 class="underline light">Задать вопрос</h3>
                <input name="name" type="text" placeholder="Имя">
                <input name="phone" type="tel" placeholder="Телефон" required="">
                <input name="email" type="text" placeholder="Email" required="">
                <select name="direction">
                    <option value="customer">Для клиентов</option>
                    <option value="job">Для соискателей</option>
                    <option value="press">Для прессы</option>
                </select>
                <textarea name="message" placeholder="Сообщение"></textarea>
                <label class="checkbox-form">
                    <span>Нажимая кнопку «Отправить», Вы автоматически соглашаетесь с <a href="/privacy/">политикой конфиденциальности</a> и даёте своё согласие на обработку персональных данных.</span>
                </label>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </aside>
    </div>
</section>

<?php } ?>