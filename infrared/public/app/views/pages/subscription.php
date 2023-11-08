<?php if ($this->lang == 'en'){ ?>

    <section>

        <!--<h1> <?php echo $page->h1_en; ?> </h1>-->

        <form class="sub_form default_action" method="post" action="/" data-action="/subscribe/">
            <!--<h2>Subscribe</h2>
            <p>
                If you want to receive news about changes in the legislation with expert comments from our lawyers and
                reviews of current legal issues
                please click the "Subscribe" button.
            </p>
            <p>
                Subscription is free.
            </p>-->
            <?php echo $page->description_en; ?>
            <br>
            <h3 class="underline light">Themes</h3>
            <div class="sub-list">
                <?php if (!empty($themes)){ ?>
                    <?php foreach ($themes as $t_item){ ?>
                        <label class="checkbox-form">
                            <input name="themes[]" type="checkbox" value="<?php echo $t_item->sid; ?>" checked>
                            <span class="custom-checkbox"><?php echo $t_item->h1_en; ?></span>
                        </label>
                    <?php } ?>
                <?php } ?>
            </div>
            <aside class="left">
                <h3 class="underline light">Subscribe</h3>
                <input type="text" name="name" placeholder="First Name" required="">
                <input type="text" name="lastname" placeholder="Last Name" required="">
                <input type="text" name="position" placeholder="Position">
                <input type="text" name="company" placeholder="Company">
                <input type="text" name="email" placeholder="E-mail" required="">
                <label class="checkbox-form">
                    <span>By clicking the “Subscribe” button, you automatically agree with the <a href="/en/privacy/"> privacy policy </a> and give your consent to the processing of personal data.</span>
                </label>
                <button type="submit">Subscribe</button>
            </aside>
        </form>


    </section>

<?php }else{ ?>

    <section>

        <!--<h1> <?php echo $page->h1_ru; ?> </h1>-->

        <form class="sub_form default_action" method="post" action="/" data-action="/subscribe/">
            <!--
            <h2>Подписка</h2>
            <p>
                Если Вы хотите получать новости об изменениях в законодательстве с экспертными комментариями наших юристов и
                обзоры актуальных юридических вопросов в соответствии с теми областями права, которые представляют для Вас
                интерес, пожалуйста, заполните приведенную ниже форму и нажмите кнопку “Подписаться”.
            </p>
            <p>
                Подписка является бесплатной.
            </p>-->
            <?php echo $page->description_ru; ?>
            <br>
            <h3 class="underline light">Темы подписок</h3>
            <div class="sub-list">
                <?php if (!empty($themes)){ ?>
                    <?php foreach ($themes as $t_item){ ?>
                        <label class="checkbox-form">
                            <input name="themes[]" type="checkbox" value="<?php echo $t_item->sid; ?>" checked>
                            <span class="custom-checkbox"><?php echo $t_item->h1_ru; ?></span>
                        </label>
                    <?php } ?>
                <?php } ?>
            </div>
            <aside class="left">
                <h3 class="underline light">Оформить подписку</h3>
                <input type="text" name="name" placeholder="Имя" required="">
                <input type="text" name="lastname" placeholder="Фамилия" required="">
                <input type="text" name="position" placeholder="Должность">
                <input type="text" name="company" placeholder="Компания">
                <input type="text" name="email" placeholder="E-mail" required="">
                <label class="checkbox-form">
                    <span>Нажимая кнопку «Оформить подписку», Вы автоматически соглашаетесь с <a href="/privacy/">политикой конфиденциальности</a> и даёте своё согласие на обработку персональных данных.</span>
                </label>
                <button type="submit">Оформить подписку</button>
            </aside>
        </form>


    </section>

<?php } ?>