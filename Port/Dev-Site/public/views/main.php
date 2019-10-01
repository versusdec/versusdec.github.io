<?php if (!empty($banners) && !empty($banners['horizontal'])){?>
    <a href="<?php echo !empty($banners['horizontal']['url'])?$banners['horizontal']['url']:'#'; ?>" class="offer">
        <div class="full-width-offer"><?php echo !empty($banners['horizontal']['sm_description'])?$banners['horizontal']['sm_description']:'' ?></div>
    </a>
<?php } ?>
<section class="companies">
    <div class="block">
        <div class="title">
            <div class="title-text">Компании района Свиблово</div>
            <div class="green-bar"></div>
            <a href="#">
                <div class="button button-lg button-blue">добавить компанию</div>
            </a>
        </div>
        <div class="companies-wrapper">
            <div class="companies-list-wrapper">
                <ul class="companies-list">
                    <!--
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Аптеки</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Все для дома</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Ветеренарные клиники</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Печать документов</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Продукты</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Салоны красоты</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Спортивные магазины</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Зоомагазины</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Аптеки</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Все для дома</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Ветеренарные клиники</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Печать документов</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Продукты</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Салоны красоты</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Спортивные магазины</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Зоомагазины</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Продукты</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Салоны красоты</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Спортивные магазины</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-checkbox-form">
                            <input type="checkbox" checked>
                            <span class="custom-checkbox">Зоомагазины</span>
                        </label>
                    </li>
                    -->
                    <?php if (!empty($companies_categories)){?>
                        <?php foreach ($companies_categories as $category_item){?>
                            <li>
                                <label class="custom-checkbox-form">
                                    <input type="checkbox" checked data-id="<?php echo $category_item['id']; ?>">
                                    <span class="custom-checkbox"><?php echo $category_item['h1'];?></span>
                                </label>
                            </li>
                            <?php if (!empty($category_item['children'])){?>
                                <?php foreach ($category_item['children'] as $child_level_1){?>
                                    <li>
                                        <label class="custom-checkbox-form">
                                            <input type="checkbox" checked data-id="<?php echo $child_level_1['id']; ?>">
                                            <span class="custom-checkbox">&nbsp;&mdash;&nbsp;<?php echo $child_level_1['h1'];?></span>
                                        </label>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php }?>
                </ul>
                <div class="button button-md button-white expand-companies">показать еще <span class="button-arrow"></span></div>
            </div>


            <div id="map" class="map-wrapper">

            </div>
        </div>
        <div class="company-wrapper">
            <!--
            <a href="/company.html" class="company">
                <div class="company-logo flex-center">
                    <img src="/img/SVIBLOVO.RU.png" alt="">
                </div>
                <div class="company-name">Название фирмы</div>
                <div class="company-description">
                    краткое описание компании и чем занимается и прочее
                    что посчитает правильным написать про себя
                </div>
            </a>
            <a href="/company.html" class="company">
                <div class="company-logo flex-center">
                    <img src="/img/SVIBLOVO.RU.png" alt="">
                </div>
                <div class="company-name">Название</div>
                <div class="company-description">
                    краткое описание компании
                </div>
            </a>
            <a href="/company.html" class="company">
                <div class="company-logo flex-center">
                    <img src="/img/SVIBLOVO.RU.png" alt="">
                </div>
                <div class="company-name">Название фирмы</div>
                <div class="company-description">
                    краткое описание компании и чем занимается и прочее
                    что посчитает правильным написать про себя
                </div>
            </a>
            <a href="/company.html" class="company">
                <div class="company-logo flex-center">
                    <img src="/img/SVIBLOVO.RU.png" alt="">
                </div>
                <div class="company-name">Название фирмы</div>
                <div class="company-description">
                    краткое описание компании и чем занимается и прочее
                    что посчитает правильным написать про себя
                </div>
            </a>
            -->
            <?php if (!empty($companies)){ ?>
                <?php foreach ($companies as $company){ ?>
                    <?php include $WIDGETS . 'company_item.php'; ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<section class="news">
    <div class="block">
        <div class="district-news news-block">
            <div class="title">
                <div class="title-text">Новости района</div>
                <div class="green-bar"></div>
                <a href="/news/">
                    <div class="button button-md button-white">посмотреть все <span class="button-arrow"></span></div>
                </a>
            </div>
            <div class="news-wrapper">
                <!--
                <div class="news-item">
                    <div class="news-item__date">
                        11 октября 2018 в 14:57
                    </div>
                    <div class="news-item__title">
                        Более 290 тыс. кв. м недвижимости ввели
                        в эксплуатацию на северо-востоке столицы
                        в январе-сентябре
                    </div>
                    <a href="#" class="news-item__button button button-sm button-green">
                        Читать
                    </a>
                </div>
                <div class="news-item">
                    <div class="news-item__date">
                        11 октября 2018 в 14:57
                    </div>
                    <div class="news-item__title">
                        Более 290 тыс. кв. м недвижимости ввели
                        в эксплуатацию на северо-востоке столицы
                        в январе-сентябре
                    </div>
                    <a href="#" class="news-item__button button button-sm button-green">
                        Читать
                    </a>
                </div>
                <div class="news-item">
                    <div class="news-item__date">
                        11 октября 2018 в 14:57
                    </div>
                    <div class="news-item__title">
                        Более 290 тыс. кв. м недвижимости ввели
                        в эксплуатацию на северо-востоке столицы
                        в январе-сентябре
                    </div>
                    <a href="#" class="news-item__button button button-sm button-green">
                        Читать
                    </a>
                </div>
                <div class="news-item">
                    <div class="news-item__date">
                        11 октября 2018 в 14:57
                    </div>
                    <div class="news-item__title">
                        Более 290 тыс. кв. м недвижимости ввели
                        в эксплуатацию на северо-востоке столицы
                        в январе-сентябре
                    </div>
                    <a href="#" class="news-item__button button button-sm button-green">
                        Читать
                    </a>
                </div>
                -->
                <?php if (!empty($region_news)){?>
                    <?php foreach ($region_news as $news_item){?>
                        <?php include $WIDGETS . 'news_item.php'; ?>
                    <?php } ?>
                <?php }?>

            </div>
        </div>
        <div class="companies-news news-block">
            <div class="title">
                <div class="title-text">Новости компаний</div>
                <div class="green-bar"></div>
                <a href="/news/companies/">
                    <div class="button button-md button-white">посмотреть все <span class="button-arrow"></span></div>
                </a>
            </div>
            <div class="news-wrapper">
                <!--
                <div class="news-item">
                    <div class="news-item__date">
                        11 октября 2018 в 14:57
                    </div>
                    <div class="news-item__title">
                        Более 290 тыс. кв. м недвижимости ввели
                        в эксплуатацию на северо-востоке столицы
                        в январе-сентябре
                    </div>
                    <a href="#" class="news-item__button button button-sm button-green">
                        Читать
                    </a>
                </div>
                <div class="news-item">
                    <div class="news-item__date">
                        11 октября 2018 в 14:57
                    </div>
                    <div class="news-item__title">
                        Более 290 тыс. кв. м недвижимости ввели
                        в эксплуатацию на северо-востоке столицы
                        в январе-сентябре
                    </div>
                    <a href="#" class="news-item__button button button-sm button-green">
                        Читать
                    </a>
                </div>
                <div class="news-item">
                    <div class="news-item__date">
                        11 октября 2018 в 14:57
                    </div>
                    <div class="news-item__title">
                        Более 290 тыс. кв. м недвижимости ввели
                        в эксплуатацию на северо-востоке столицы
                        в январе-сентябре
                    </div>
                    <a href="#" class="news-item__button button button-sm button-green">
                        Читать
                    </a>
                </div>
                <div class="news-item">
                    <div class="news-item__date">
                        11 октября 2018 в 14:57
                    </div>
                    <div class="news-item__title">
                        Более 290 тыс. кв. м недвижимости ввели
                        в эксплуатацию на северо-востоке столицы
                        в январе-сентябре
                    </div>
                    <a href="#" class="news-item__button button button-sm button-green">
                        Читать
                    </a>
                </div>
                -->
                <?php if (!empty($companies_news)){?>
                    <?php foreach ($companies_news as $news_item){?>
                        <?php include $WIDGETS . 'news_item.php'; ?>
                    <?php } ?>
                <?php }?>
            </div>
        </div>
    </div>
</section>
<section class="catalog">
    <div class="block">
        <div class="catalog-block">
            <div class="title">
                <div class="title-text">Новинки каталога</div>
                <div class="green-bar"></div>
                <a href="/products/">
                    <div class="button button-lg button-white">посмотреть все</div>
                </a>
            </div>
            <div class="catalog-wrapper">
                <?php if (!empty($banners) && !empty($banners['vertical'])){?>
                    <a href="<?php echo !empty($banners['vertical']['url'])?$banners['vertical']['url']:'#'; ?>" class="offer">
                        <div class="vertical-offer"><?php echo !empty($banners['vertical']['sm_description'])?$banners['vertical']['sm_description']:'' ?></div>
                    </a>
                <?php } ?>
                <div class="catalog-list">
                    <!--
                    <a href="#" class="catalog-item">
                        <div class="catalog-item__image">
                            <img src="/img/bg-city.png" alt="">
                        </div>
                        <div class="catalog-item__desc">
                            <div class="catalog-item__name">Название услуги</div>
                            <div class="catalog-item__short-desc">
                                некоторое краткое описание
                                товара или услуги
                            </div>
                            <div class="catalog-item__price">
                                от 500 руб.
                            </div>
                        </div>

                    </a>
                    <a href="#" class="catalog-item">
                        <div class="catalog-item__image">
                            <img src="/img/bg-city.png" alt="">
                        </div>
                        <div class="catalog-item__desc">
                            <div class="catalog-item__name">Услуга</div>
                            <div class="catalog-item__short-desc">
                                краткое описание
                            </div>
                            <div class="catalog-item__price">
                                от 500 руб.
                            </div>
                        </div>

                    </a>
                    <a href="#" class="catalog-item">
                        <div class="catalog-item__image">
                            <img src="/img/bg-city.png" alt="">
                        </div>
                        <div class="catalog-item__desc">
                            <div class="catalog-item__name">Название услуги</div>
                            <div class="catalog-item__short-desc">
                                некоторое краткое описание
                                товара или услуги
                            </div>
                            <div class="catalog-item__price">
                                от 500 руб.
                            </div>
                        </div>

                    </a>
                    <a href="#" class="catalog-item">
                        <div class="catalog-item__image">
                            <img src="/img/bg-city.png" alt="">
                        </div>
                        <div class="catalog-item__desc">
                            <div class="catalog-item__name">Название услуги</div>
                            <div class="catalog-item__short-desc">
                                некоторое краткое описание
                                товара или услуги
                            </div>
                            <div class="catalog-item__price">
                                от 500 руб.
                            </div>
                        </div>

                    </a>
                    <a href="#" class="catalog-item">
                        <div class="catalog-item__image">
                            <img src="/img/bg-city.png" alt="">
                        </div>
                        <div class="catalog-item__desc">
                            <div class="catalog-item__name">Название услуги</div>
                            <div class="catalog-item__short-desc">
                                некоторое краткое описание
                                товара или услуги
                            </div>
                            <div class="catalog-item__price">
                                от 500 руб.
                            </div>
                        </div>

                    </a>
                    <a href="#" class="catalog-item">
                        <div class="catalog-item__image">
                            <img src="/img/bg-city.png" alt="">
                        </div>
                        <div class="catalog-item__desc">
                            <div class="catalog-item__name">Название услуги</div>
                            <div class="catalog-item__short-desc">
                                некоторое краткое описание
                                товара или услуги
                            </div>
                            <div class="catalog-item__price">
                                от 500 руб.
                            </div>
                        </div>

                    </a>
                    -->
                    <?php if (!empty($products)){?>
                        <?php foreach ($products as $product_item){?>
                            <?php include $WIDGETS . 'product_item.php'; ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="special-offers">
    <div class="block">
        <div class="title">
            <div class="title-text">Акции</div>
            <div class="green-bar"></div>
            <a href="/actions/">
                <div class="button button-lg button-white">посмотреть все</div>
            </a>
        </div>
        <div class="discounts-wrapper">
            <!--
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            -->
            <?php if (!empty($actions)){?>
                <?php foreach ($actions as $action_item){?>
                    <?php include $WIDGETS . 'action_item.php'; ?>
                <?php } ?>
            <?php } ?>
        </div>
        <?php if (!empty($banners)){?>
            <div class="offer">
                <?php if (!empty($banners['horizontal-sm-1'])){ ?>
                    <a href="<?php echo !empty($banners['horizontal-sm-1']['url'])?$banners['horizontal-sm-1']['url']:'#'; ?>" class="horizontal-offer"></a>
                <?php }elseif (!empty($banners['horizontal-sm-2'])){ ?>
                    <a href="<?php echo !empty($banners['horizontal-sm-2']['url'])?$banners['horizontal-sm-2']['url']:'#'; ?>" class="horizontal-offer"></a>
                <?php }elseif (!empty($banners['horizontal-sm-3'])){ ?>
                    <a href="<?php echo !empty($banners['horizontal-sm-3']['url'])?$banners['horizontal-sm-3']['url']:'#'; ?>" class="horizontal-offer"></a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
<section class="jobs">
    <div class="jobs-background"></div>
    <div class="block">
        <div class="title">
            <div class="title-text">Вакансии</div>
            <div class="green-bar"></div>
            <a href="/vacancies/">
                <div class="button button-lg button-white">посмотреть все</div>
            </a>
        </div>
        <div class="jobs-wrapper">
            <!--
            <div class="jobs-item">
                <div class="jobs-item__desc">
                    <div class="jobs-item__title">Руководитель IT-проекта</div>
                    <div class="jobs-item__company">
                        <span class="jobs-item__company-name">Marketcall</span>
                        <span class="jobs-item__company-location">Москва</span>
                    </div>
                    <div class="jobs-item__short-desc">
                        Подбор команды для проекта (back, front, pm, qa, ui/ux, ai). Самостоятельное распределение
                        ролей, нагрузки
                        в команде. Постановка ТЗ разработчика...
                    </div>
                    <a href="#" class="button button-lg button-blue">откликнуться</a>
                </div>
                <div class="jobs-item__info">
                    <div class="jobs-item__salary">
                        до 350 000 руб.
                    </div>
                    <div class="jobs-item__image">
                        <a href="#">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </a>
                    </div>
                    <div class="favorite">В избранное</div>
                </div>
            </div>
            <div class="jobs-item">
                <div class="jobs-item__desc">
                    <div class="jobs-item__title">Руководитель IT-проекта</div>
                    <div class="jobs-item__company">
                        <span class="jobs-item__company-name">Marketcall</span>
                        <span class="jobs-item__company-location">Москва</span>
                    </div>
                    <div class="jobs-item__short-desc">
                        Подбор команды для проекта (back, front, pm, qa, ui/ux, ai). Самостоятельное распределение
                        ролей, нагрузки
                        в команде. Постановка ТЗ разработчика...
                    </div>
                    <a href="#" class="button button-lg button-blue">откликнуться</a>
                </div>
                <div class="jobs-item__info">
                    <div class="jobs-item__salary">
                        до 350 000 руб.
                    </div>
                    <div class="jobs-item__image">
                        <a href="#">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </a>
                    </div>
                    <div class="favorite">В избранное</div>
                </div>
            </div>
            <div class="jobs-item">
                <div class="jobs-item__desc">
                    <div class="jobs-item__title">Руководитель IT-проекта</div>
                    <div class="jobs-item__company">
                        <span class="jobs-item__company-name">Marketcall</span>
                        <span class="jobs-item__company-location">Москва</span>
                    </div>
                    <div class="jobs-item__short-desc">
                        Подбор команды для проекта (back, front, pm, qa, ui/ux, ai). Самостоятельное распределение
                        ролей, нагрузки
                        в команде. Постановка ТЗ разработчика...
                    </div>
                    <a href="#" class="button button-lg button-blue">откликнуться</a>
                </div>
                <div class="jobs-item__info">
                    <div class="jobs-item__salary">
                        до 350 000 руб.
                    </div>
                    <div class="jobs-item__image">
                        <a href="#">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </a>
                    </div>
                    <div class="favorite">В избранное</div>
                </div>
            </div>
            <div class="jobs-item">
                <div class="jobs-item__desc">
                    <div class="jobs-item__title">Руководитель IT-проекта</div>
                    <div class="jobs-item__company">
                        <span class="jobs-item__company-name">Marketcall</span>
                        <span class="jobs-item__company-location">Москва</span>
                    </div>
                    <div class="jobs-item__short-desc">
                        Подбор команды для проекта (back, front, pm, qa, ui/ux, ai). Самостоятельное распределение
                        ролей, нагрузки
                        в команде. Постановка ТЗ разработчика...
                    </div>
                    <a href="#" class="button button-lg button-blue">откликнуться</a>
                </div>
                <div class="jobs-item__info">
                    <div class="jobs-item__salary">
                        до 350 000 руб.
                    </div>
                    <div class="jobs-item__image">
                        <a href="#">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </a>
                    </div>
                    <div class="favorite">В избранное</div>
                </div>
            </div>
            <div class="jobs-item">
                <div class="jobs-item__desc">
                    <div class="jobs-item__title">Руководитель IT-проекта</div>
                    <div class="jobs-item__company">
                        <span class="jobs-item__company-name">Marketcall</span>
                        <span class="jobs-item__company-location">Москва</span>
                    </div>
                    <div class="jobs-item__short-desc">
                        Подбор команды для проекта (back, front, pm, qa, ui/ux, ai). Самостоятельное распределение
                        ролей, нагрузки
                        в команде. Постановка ТЗ разработчика...
                    </div>
                    <a href="#" class="button button-lg button-blue">откликнуться</a>
                </div>
                <div class="jobs-item__info">
                    <div class="jobs-item__salary">
                        до 350 000 руб.
                    </div>
                    <div class="jobs-item__image">
                        <a href="#">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </a>
                    </div>
                    <div class="favorite">В избранное</div>
                </div>
            </div>
            -->
            <?php if (!empty($vacancies)){?>
                <?php foreach ($vacancies as $vacancy_item){?>
                    <?php include $WIDGETS . 'vacancy_item.php'; ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<section class="mainpage-forum">
    <div class="block">
        <div class="title no-button">
            <div class="title-text">Последние сообщения форума</div>
            <div class="green-bar"></div>
        </div>
        <div class="mainpage-forum-wrapper">
            <div class="forum-item">
                <div class="forum-category-wrapper">
                    <div class="forum-category">
                        <div class="forum-category__title">
                            Спорт и здоровый образ жизни
                        </div>
                        <div class="forum-category__title-desc">
                            Где заняться спортом, спортивные комплексы, фитнес, футбол, плавание, волейбол, дзюдо и др.
                        </div>
                    </div>
                    <a href="#">
                        <span class="button button-lg button-white">
                            перейти в ветку <span class="button-arrow"></span>
                        </span>
                    </a>
                </div>
                <div class="forum-topic-wrapper">
                    <span class="forum-topic">Тема:</span>
                    <span class="forum-topic-title">Как расслабиться после долгого сидения за компьютером</span>
                </div>
                <div class="forum-message-wrapper">
                    <div class="forum-message-author">
                        <div class="forum-message-author__image">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </div>
                        <div class="forum-message-author__info">
                            <div class="forum-message-author__name">
                                KlimOff79
                            </div>
                            <div class="forum-message-author__rank">
                                Новичок
                            </div>
                            <div class="forum-message-author__date">
                                Вт, 1 Апр 2008 16:34:27
                            </div>
                        </div>
                    </div>
                    <div class="forum-message">
                        <div class="forum-message__short-desc">
                            Замечательная идея!! От такого даже настроение будет подниматься, наверняка еще и
                            производительность. А об усталости рук и всего другого организма забудете в момент! L
                            Одно плохо: у нас в офисе такие кадры..что для секса придется девах с улицы вести ))
                        </div>
                        <div class="forum-message__handlers">
                            <a href="#">
                                <span class="button button-blue button-sm">Ответить</span>
                            </a>
                            <div class="share">поделиться</div>
                            <div class="forum-message__info">
                                <div class="views">
                                    Просмотров: 28
                                </div>
                                <div class="shared-count">
                                    Поделилось: 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-item">
                <div class="forum-category-wrapper">
                    <div class="forum-category">
                        <div class="forum-category__title">
                            Спорт и здоровый образ жизни
                        </div>
                        <div class="forum-category__title-desc">
                            Где заняться спортом, спортивные комплексы, фитнес, футбол, плавание, волейбол, дзюдо и др.
                        </div>
                    </div>
                    <a href="#">
                        <span class="button button-lg button-white">
                            перейти в ветку <span class="button-arrow"></span>
                        </span>
                    </a>
                </div>
                <div class="forum-topic-wrapper">
                    <span class="forum-topic">Тема:</span>
                    <span class="forum-topic-title">Как расслабиться после долгого сидения за компьютером</span>
                </div>
                <div class="forum-message-wrapper">
                    <div class="forum-message-author">
                        <div class="forum-message-author__image">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </div>
                        <div class="forum-message-author__info">
                            <div class="forum-message-author__name">
                                KlimOff79
                            </div>
                            <div class="forum-message-author__rank">
                                Новичок
                            </div>
                            <div class="forum-message-author__date">
                                Вт, 1 Апр 2008 16:34:27
                            </div>
                        </div>
                    </div>
                    <div class="forum-message">
                        <div class="forum-message__short-desc">
                            Замечательная идея!! От такого даже настроение будет подниматься, наверняка еще и
                            производительность. А об усталости рук и всего другого организма забудете в момент! L
                            Одно плохо: у нас в офисе такие кадры..что для секса придется девах с улицы вести ))
                        </div>
                        <div class="forum-message__handlers">
                            <a href="#">
                                <span class="button button-blue button-sm">Ответить</span>
                            </a>
                            <div class="share">поделиться</div>
                            <div class="forum-message__info">
                                <div class="views">
                                    Просмотров: 28
                                </div>
                                <div class="shared-count">
                                    Поделилось: 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-item">
                <div class="forum-category-wrapper">
                    <div class="forum-category">
                        <div class="forum-category__title">
                            Спорт и здоровый образ жизни
                        </div>
                        <div class="forum-category__title-desc">
                            Где заняться спортом, спортивные комплексы, фитнес, футбол, плавание, волейбол, дзюдо и др.
                        </div>
                    </div>
                    <a href="#">
                        <span class="button button-lg button-white">
                            перейти в ветку <span class="button-arrow"></span>
                        </span>
                    </a>
                </div>
                <div class="forum-topic-wrapper">
                    <span class="forum-topic">Тема:</span>
                    <span class="forum-topic-title">Как расслабиться после долгого сидения за компьютером</span>
                </div>
                <div class="forum-message-wrapper">
                    <div class="forum-message-author">
                        <div class="forum-message-author__image">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </div>
                        <div class="forum-message-author__info">
                            <div class="forum-message-author__name">
                                KlimOff79
                            </div>
                            <div class="forum-message-author__rank">
                                Новичок
                            </div>
                            <div class="forum-message-author__date">
                                Вт, 1 Апр 2008 16:34:27
                            </div>
                        </div>
                    </div>
                    <div class="forum-message">
                        <div class="forum-message__short-desc">
                            Замечательная идея!! От такого даже настроение будет подниматься, наверняка еще и
                            производительность. А об усталости рук и всего другого организма забудете в момент! L
                            Одно плохо: у нас в офисе такие кадры..что для секса придется девах с улицы вести ))
                        </div>
                        <div class="forum-message__handlers">
                            <a href="#">
                                <span class="button button-blue button-sm">Ответить</span>
                            </a>
                            <div class="share">поделиться</div>
                            <div class="forum-message__info">
                                <div class="views">
                                    Просмотров: 28
                                </div>
                                <div class="shared-count">
                                    Поделилось: 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-item">
                <div class="forum-category-wrapper">
                    <div class="forum-category">
                        <div class="forum-category__title">
                            Спорт и здоровый образ жизни
                        </div>
                        <div class="forum-category__title-desc">
                            Где заняться спортом, спортивные комплексы, фитнес, футбол, плавание, волейбол, дзюдо и др.
                        </div>
                    </div>
                    <a href="#">
                        <span class="button button-lg button-white">
                            перейти в ветку <span class="button-arrow"></span>
                        </span>
                    </a>
                </div>
                <div class="forum-topic-wrapper">
                    <span class="forum-topic">Тема:</span>
                    <span class="forum-topic-title">Как расслабиться после долгого сидения за компьютером</span>
                </div>
                <div class="forum-message-wrapper">
                    <div class="forum-message-author">
                        <div class="forum-message-author__image">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </div>
                        <div class="forum-message-author__info">
                            <div class="forum-message-author__name">
                                KlimOff79
                            </div>
                            <div class="forum-message-author__rank">
                                Новичок
                            </div>
                            <div class="forum-message-author__date">
                                Вт, 1 Апр 2008 16:34:27
                            </div>
                        </div>
                    </div>
                    <div class="forum-message">
                        <div class="forum-message__short-desc">
                            Замечательная идея!! От такого даже настроение будет подниматься, наверняка еще и
                            производительность. А об усталости рук и всего другого организма забудете в момент! L
                            Одно плохо: у нас в офисе такие кадры..что для секса придется девах с улицы вести ))
                        </div>
                        <div class="forum-message__handlers">
                            <a href="#">
                                <span class="button button-blue button-sm">Ответить</span>
                            </a>
                            <div class="share">поделиться</div>
                            <div class="forum-message__info">
                                <div class="views">
                                    Просмотров: 28
                                </div>
                                <div class="shared-count">
                                    Поделилось: 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-item">
                <div class="forum-category-wrapper">
                    <div class="forum-category">
                        <div class="forum-category__title">
                            Спорт и здоровый образ жизни
                        </div>
                        <div class="forum-category__title-desc">
                            Где заняться спортом, спортивные комплексы, фитнес, футбол, плавание, волейбол, дзюдо и др.
                        </div>
                    </div>
                    <a href="#">
                        <span class="button button-lg button-white">
                            перейти в ветку <span class="button-arrow"></span>
                        </span>
                    </a>
                </div>
                <div class="forum-topic-wrapper">
                    <span class="forum-topic">Тема:</span>
                    <span class="forum-topic-title">Как расслабиться после долгого сидения за компьютером</span>
                </div>
                <div class="forum-message-wrapper">
                    <div class="forum-message-author">
                        <div class="forum-message-author__image">
                            <img src="/img/SVIBLOVO.RU.png" alt="">
                        </div>
                        <div class="forum-message-author__info">
                            <div class="forum-message-author__name">
                                KlimOff79
                            </div>
                            <div class="forum-message-author__rank">
                                Новичок
                            </div>
                            <div class="forum-message-author__date">
                                Вт, 1 Апр 2008 16:34:27
                            </div>
                        </div>
                    </div>
                    <div class="forum-message">
                        <div class="forum-message__short-desc">
                            Замечательная идея!! От такого даже настроение будет подниматься, наверняка еще и
                            производительность. А об усталости рук и всего другого организма забудете в момент! L
                            Одно плохо: у нас в офисе такие кадры..что для секса придется девах с улицы вести ))
                        </div>
                        <div class="forum-message__handlers">
                            <a href="#">
                                <span class="button button-blue button-sm">Ответить</span>
                            </a>
                            <div class="share">поделиться</div>
                            <div class="forum-message__info">
                                <div class="views">
                                    Просмотров: 28
                                </div>
                                <div class="shared-count">
                                    Поделилось: 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>