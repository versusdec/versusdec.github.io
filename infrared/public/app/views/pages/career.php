<?php if ($this->lang == 'en'){ ?>

<section class="block page">
	<h2><?php echo $page->h1_en; ?></h2>
	<?php if (!empty($page->genimg)) { ?>
		<div class="page-img">
			<img src="<?php echo $page->genimg; ?>" alt="">
		</div>
	<? } ?>
	<div class="s_aside">
		<div class="i_aside">
			<?php echo $page->description_en; ?>
			<div id="map" data-center="<?php echo $this->settings->coordinates; ?>">
			</div>
			<div class="inline margin">
				<a href="tel:<?php echo $this->settings->phone; ?>" class="phone icon icon_phone"><?php echo $this->settings->phone; ?></a>
				<a class="icon icon_mail callback-btn feedback-btn orange text-orange">Leave a message</a>
			</div>
			<h3 class="underline light">Address</h3>
			<p><?php echo $this->settings->address_en; ?></p>
		</div>
		<aside class="right">
			<form class="apply-form default_action" method="post" action="/" data-action="/sendSummary/">
                <div class="progress"><p>Sending in progress...</p></div>
				<input type="text" name="last_name" placeholder="Last Name" required>
				<input type="text" name="first_name" placeholder="First Name" required>
				<input type="text" name="middle_name" placeholder="Middle Name" required>
                <select name="service">
                    <?php foreach($services as $s_item) {?>
                        <option value="<?php echo $s_item->h1_en; ?>"><?php echo $s_item->h1_en; ?></option>
                    <?php } ?>
                </select>
				<input type="text" name="salary" placeholder="Salary" required>
				<label class="custom-file-input">
					<input type="file" name="cv" placeholder="Upload CV" accept=".doc,.docx,.rtf,.pdf">
					<span class="file-input icon icon_face orange">Upload CV</span>
				</label>
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
    <h2><?php echo $page->h1_ru; ?></h2>
    <?php if (!empty($page->genimg)) { ?>
        <div class="page-img">
            <img src="<?php echo $page->genimg; ?>" alt="">
        </div>
    <? } ?>
    <div class="s_aside">
        <div class="i_aside">
            <?php echo $page->description_ru; ?>
            <div id="map" data-center="<?php echo $this->settings->coordinates; ?>">
            </div>
            <div class="inline margin">
                <a href="tel:<?php echo $this->settings->phone; ?>" class="phone icon icon_phone"><?php echo $this->settings->phone; ?></a>
                <a class="icon icon_mail callback-btn feedback-btn orange text-orange">Оставить сообщение</a>
            </div>
            <h3 class="underline light">Адрес</h3>
            <p><?php echo $this->settings->address_ru; ?></p>
        </div>
        <aside class="right">
            <form class="apply-form default_action" method="post" action="/" data-action="/sendSummary/">
                <div class="progress"><p>Идет отправка...</p></div>
                <input type="text" name="last_name" placeholder="Фамилия" required>
                <input type="text" name="first_name" placeholder="Имя" required>
                <input type="text" name="middle_name" placeholder="Отчество" required>
                <select name="service">
                    <?php foreach($services as $s_item) {?>
                        <option value="<?php echo $s_item->h1_en; ?>"><?php echo $s_item->h1_ru; ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="salary" placeholder="Компенсация" required>
                <label class="custom-file-input">
                    <input type="file" name="cv" placeholder="Загрузить CV" accept=".doc,.docx,.rtf,.pdf">
                    <span class="file-input icon icon_face orange">Загрузить CV</span>
                </label>
                <label class="checkbox-form">
                    <span>Нажимая кнопку «Отправить», Вы автоматически соглашаетесь с <a href="/privacy/">политикой конфиденциальности</a> и даёте своё согласие на обработку персональных данных.</span>
                </label>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </aside>
    </div>
</section>

<?php } ?>