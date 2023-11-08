<form class="apply-form default_action" method="post" action="/" data-action="/sendSummary/">
    <h3 class="underline light">Присоединиться к команде </h3>
    <div class="progress"><p>Идет отправка...</p></div>
    <input type="text" name="last_name" placeholder="Фамилия" required>
    <input type="text" name="first_name" placeholder="Имя" required>
    <input type="text" name="middle_name" placeholder="Отчество" required>
    <select name="service">
        <?php foreach($services as $s_item) {?>
            <option value="<?php echo $s_item->h1_en; ?>"><?php echo $s_item->h1_ru; ?></option>
        <?php } ?>
    </select>
    <input type="text" name="salary" placeholder="Ожидаемое вознаграждение" required>
    <label class="custom-file-input">
        <input type="file" name="cv" placeholder="Загрузить CV" accept=".doc,.docx,.rtf,.pdf">
        <span class="file-input icon icon_face orange">Загрузить CV</span>
    </label>
    <label class="checkbox-form">
        <span>Нажимая кнопку «Отправить», Вы автоматически соглашаетесь с <a href="/privacy/">политикой конфиденциальности</a> и даёте своё согласие на обработку персональных данных.</span>
    </label>
    <button type="submit" class="btn">Отправить</button>
</form>