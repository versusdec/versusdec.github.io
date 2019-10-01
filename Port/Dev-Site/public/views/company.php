<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <li><a href="/companies/">Каталог компаний</a></li>
    <?php if (!empty($category)){ ?>
        <li>
            <a href="<?php echo $category['meta']['url']; ?>">
                <?php echo !empty($category['meta']['breadcrumbs'])?$category['meta']['breadcrumbs']:$category['h1']; ?>
            </a>
        </li>
    <?php } ?>
    <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$company['h1']; ?></a></li>
</ul>

<section class="company-land-wrapper">
    <div class="company-land__image"><img src="/img/bg-city.png" alt=""></div>
    <div class="block">
        <div class="company-land-inner-wrapper">
            <div class="button button-blue button-xxl"></div>
            <div class="company-name"><?php echo $company['h1']; ?></div>
            <div class="buttons-wrapper">
                <div class="button button-xl button-blue sign-up-for-updates">Подписаться на обновления</div>
                <div class="button button-white button-xl bordered">Написать сообщение</div>
            </div>
        </div>
    </div>
</section>
<section class="company-menu">
    <div class="block">
        <ul class="menu">
            <li><a href="#about">О компании</a></li>
            <li><a href="#catalog">Товары и услуги</a></li>
            <li><a href="#discounts">Акции</a></li>
            <li><a href="#jobs">Вакансии</a></li>
            <li><a href="#blog">Блог</a></li>
            <li><a href="#contacts">Контакты</a></li>
        </ul>
    </div>
</section>
<div class="page-content side-menu-page">
    <div  class="block side-menu-block">
        <i class="fas fa-caret-square-down side-menu-button"></i>
        <ul  class="side-menu">
            <li><a href="#about">О компании</a></li>
            <li><a href="#contacts">Контакты</a></li>
            <li>
                <a href="#catalog">Товары и услуги</a>
                <ul class="sub-menu">
                    <li>Категории:</li>
                    <li><a href="#">Телефоны
                            и аксессуары</a></li>
                    <li><a href="#">Компьютеры
                            и оргтехника</a></li>
                    <li><a href="#">Электроника</a></li>
                    <li><a href="#">Бытовая техника</a></li>
                    <li><a href="#">Одежда д/женщин</a></li>
                    <li><a href="#">Одежда д/мужчин</a></li>
                    <li><a href="#">Всё для детей</a></li>
                    <li><a href="#">Бижутерия и часы</a></li>
                    <li><a href="#">Сумки и обувь</a></li>
                    <li><a href="#">Для дома и сада</a></li>
                    <li><a href="#">Автотовары</a></li>
                    <li><a href="#">Красота и здоровье</a></li>
                    <li><a href="#">Спорт и развлечения</a></li>
                </ul>
            </li>
            <li><a href="#gallery">Галерея</a></li>
            <li><a href="#discounts">Акции</a></li>
            <li><a href="#jobs">Вакансии</a></li>
            <li><a href="#blog">Блог</a></li>
        </ul>
    </div>
    <section class="tabs-section" id="about">
        <div class="block">
            <div class="tabs-wrapper">
                <ul class="tabs">
                    <li class="tab active-tab">О компании</li>
                    <li class="tab">Наша миссия</li>
                    <li class="tab">Карьера</li>
                </ul>
                <div class="tab-content active-tab-content">
                    <?php echo $company['sm_description']; ?>
                </div>
                <div class="tab-content">
                    <?php echo $company['description']; ?>
                </div>
                <div class="tab-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet
                    architecto consequatur debitis deserunt et fugiat, maiores, molestiae nisi quod ratione
                    suscipit, temporibus? Accusamus commodi ex numquam tempora tempore ullam!
                </div>
            </div>
        </div>
    </section>
    <section id="contacts">
        <div class="block">
            <div class="title no-button">
                <div class="title-text">Контакты</div>
                <div class="green-bar"></div>
            </div>
            <div class="company-contacts-wrapper">
                <div id="map" class="company-map"<?php if (!empty($company['coordinates'])){echo ' data-placemark="'.$company['coordinates'].'"';} ?>></div>
                <div class="company-contacts">
                    <div class="company-contacts__item phone">
                        <span class="company-contacts__item-name">Телефон:</span>
                        <span class="company-contacts__item-value">
                            <a href="tel:<?php echo $helper::stripPhoneNumber($company['phone']); ?>"><?php echo $company['phone']; ?></a>
                        </span>
                    </div>
                    <div class="company-contacts__item mail">
                        <span class="company-contacts__item-name">Email:</span>
                        <span class="company-contacts__item-value">
                            <a href="mailto:<?php echo $company['email']; ?>"><?php echo $company['email']; ?></a></span>
                    </div>
                    <div class="company-contacts__item website">
                        <span class="company-contacts__item-name">Сайт:</span>
                        <span class="company-contacts__item-value">
                            <a href="<?php echo $helper::absoluteURL($company['website']); ?>"><?php echo $company['website']; ?></a>
                        </span>
                    </div>
                    <div class="company-contacts__item hours">
                        <div class="company-contacts__item-name">Время работы:</div>
                        <!--
                        <div class="company-contacts__item-value">Пн-Пт: с 8.00 до 20.00</div>
                        <div class="company-contacts__item-value">Сб: с 8.00 до 18.00</div>
                        <div class="company-contacts__item-value">Вс: выходной</div>
                        -->
                        <div class="company-contacts__item-value">
                            <?php echo $company['working_time']; ?>
                        </div>
                    </div>
                    <div class="company-contacts__item address">
                        <div class="company-contacts__item-name">Адрес:</div>
                        <!--
                        <div class="company-contacts__item-value">Москва г, Северо-Восточный АО,</div>
                        <div class="company-contacts__item-value">Свиблово МО Серебрякова проезд, д2 к1</div>
                        -->
                        <div class="company-contacts__item-value">
                            <?php echo $company['address']; ?>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="<?php echo !empty($company['social_vk'])?$company['social_vk']:'#'; ?>">
                            <span class="social vk"></span>
                        </a>
                        <a href="<?php echo !empty($company['social_fb'])?$company['social_fb']:'#'; ?>">
                            <span class="social fb"></span>
                        </a>
                        <a href="<?php echo !empty($company['social_ok'])?$company['social_ok']:'#'; ?>">
                            <span class="social ok"></span>
                        </a>
                        <a href="<?php echo !empty($company['social_insta'])?$company['social_insta']:'#'; ?>">
                            <span class="social insta"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (!empty($products)){?>
    <section class="company-catalog-section" id="catalog">
        <div class="block">
            <div class="title no-button">
                <div class="title-text">Товары и услуги</div>
                <div class="green-bar"></div>
            </div>
            <div class="catalog-handler">
                <div class="catalog-handler__sort-by catalog-handler__item">
                    <span>Сортировать по</span>
                    <select name="sort" class="custom-select filter_parameter"
                            data-type="product" data-limit="<?php echo $limit; ?>"
                            data-target=".catalog-list" data-company="<?php echo $company['id'];?>"
                            data-container="#catalog">
                        <option value="price-asc">Цена по возрастанию</option>
                        <option value="price-desc">Цена по убыванию</option>
                        <!--<option value="2">Рейтинг</option>
                        <option value="3">Популярное</option>-->
                    </select>
                </div>
                <div class="catalog-handler__display-by catalog-handler__item">
                    <span>Выводить по</span>
                    <select name="count" class="custom-select filter_parameter"
                            data-type="product" data-limit="<?php echo $limit; ?>"
                            data-target=".catalog-list" data-company="<?php echo $company['id'];?>"
                            data-container="#catalog">
                        <option value="1">1 шт</option>
                        <option value="2">2 шт</option>
                        <option value="3">3 шт</option>
                    </select>
                </div>
                <div class="catalog-handler__change-view-wrapper">
                    <div class="squares catalog-handler__change-view table active">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="rectangles catalog-handler__change-view column">
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="catalog-wrapper company-catalog">
                <div class="catalog-list list-to-handle">
                    <!--
                    <a href="#" class="catalog-item item-to-handle">
                        <div class="catalog-item__image">
                            <img src="img/bg-city.png" alt="">
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
                    <a href="#" class="catalog-item item-to-handle">
                        <div class="catalog-item__image">
                            <img src="img/bg-city.png" alt="">
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
                    <a href="#" class="catalog-item item-to-handle">
                        <div class="catalog-item__image">
                            <img src="img/bg-city.png" alt="">
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
                    <a href="#" class="catalog-item item-to-handle">
                        <div class="catalog-item__image">
                            <img src="img/bg-city.png" alt="">
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
                    <a href="#" class="catalog-item item-to-handle">
                        <div class="catalog-item__image">
                            <img src="img/bg-city.png" alt="">
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
                    <a href="#" class="catalog-item item-to-handle">
                        <div class="catalog-item__image">
                            <img src="img/bg-city.png" alt="">
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
                        <?php foreach ($products as $product_item){?>
                            <?php include $WIDGETS . 'product_item.php'; ?>
                        <?php } ?>
                </div>
            </div>
            <div class="button button-lg button-white catalog-load-more"
                 data-type="product" data-current="1" data-limit="<?php echo $limit; ?>"
                 data-target=".catalog-list" data-company="<?php echo $company['id'];?>" data-container="#catalog">
                Показать еще
            </div>
        </div>
    </section>
    <?php } ?>

    <section id="gallery">
        <div class="block">
            <div class="title no-button">
                <div class="title-text">Галерея компании</div>
                <div class="green-bar"></div>
            </div>
            <div class="gallery-wrapper">
                <div class="swiper-container company-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/img/bg-office.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/bg-city.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <?php if (!empty($actions)){?>
    <section class="special-offers" id="discounts">
        <div class="block">
            <div class="title no-button">
                <div class="title-text">Акции</div>
                <div class="green-bar"></div>
            </div>
            <div class="discounts-wrapper">
                <!--
                <div class="discount-item">
                    <div class="discount-item__name">Скидка на покупку</div>
                    <div class="discount-item__image"><img src="img/bg-city.png" alt=""></div>
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
                    <div class="discount-item__image"><img src="img/bg-city.png" alt=""></div>
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
                    <div class="discount-item__image"><img src="img/bg-city.png" alt=""></div>
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
                    <div class="discount-item__image"><img src="img/bg-city.png" alt=""></div>
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
                    <?php foreach ($actions as $action_item){?>
                        <?php include $WIDGETS . 'action_item.php'; ?>
                    <?php } ?>
            </div>
            <div class="button button-lg button-white catalog-load-more"
                 data-type="action" data-current="1" data-limit="<?php echo $limit; ?>"
                 data-target=".discounts-wrapper" data-company="<?php echo $company['id'];?>" data-container="#discounts">
                Показать еще
            </div>
        </div>
    </section>
    <?php } ?>

    <?php if (!empty($vacancies)){?>
    <section class="company-jobs" id="jobs">
            <div class="jobs-background"></div>
            <div class="block">
                <div class="title no-button">
                    <div class="title-text">Вакансии</div>
                    <div class="green-bar"></div>
                </div>
                <div class="jobs-wrapper">
                    <!--
                    <div class="company-job-item">
                        <div class="company-job-item__title">
                            Оператор 1C
                        </div>
                        <div class="company-jobs-item__salary">
                            50 000 руб.
                        </div>
                        <div class="company-jobs-item__req">
                            <div>Требуемый опыт работы:</div>
                            <div>1–3 года</div>
                        </div>
                        <div class="company-jobs-item__req">
                            <div>Полная занятость, полный день</div>
                        </div>
                        <div class="company-jobs-item__req">
                            <div>Обязанности:</div>
                            <div>
                                -заливка заказов в БД в 1с<br/>
                                -работа с файлом транспортная логистика<br/>
                                -прием заявок<br/>
                                -внесение данных в электронные документы и БД<br/>
                                -оперативная работа с клиентами<br/>
                            </div>
                        </div>
                        <div class="company-jobs-item__req">
                            <div>Требования:</div>
                            <div>
                                -знание программ 1с, Excel (работа с таблицами)<br/>
                                -знание товарно-сопроводительной документации-обязательно<br/>
                            </div>
                        </div>
                        <div class="company-jobs-item__req">
                            <div>Условия:</div>
                            <div>
                                -график работы с 8.30 - 17.30,<br/>
                                -дотация на питание,<br/>
                                -оформление по ТК,<br/>
                                -возможность приобретения игрушек со скидкой.<br/>
                                -заработная плата на исп. срок 33 т.р. после испытательного срока в среднем 45-50 т.р.<br/>
                            </div>
                        </div>
                        <div class="company-jobs-btns">
                            <a href="#" class="button button-lg button-blue">откликнуться</a>
                            <div class="favorite">В избранное</div>
                        </div>
                    </div>
                    -->
                    <?php foreach ($vacancies as $vacancy){?>
                        <?php include $WIDGETS . 'vacancy_item_lg.php'; ?>
                    <?php } ?>
                </div>
            </div>
    </section>
    <?php } ?>

    <?php if (!empty($news)){?>
    <section id="blog">
        <div class="block">
            <div class="news-block">
                <div class="title no-button">
                    <div class="title-text">Блог</div>
                    <div class="green-bar"></div>
                </div>
                <div class="catalog-handler">
                    <div class="blog-handler__latest catalog-handler__item">
                        <span>Показать за</span>
                        <select name="range" class="custom-select filter_parameter"
                                data-type="news" data-limit="<?php echo $limit; ?>"
                                data-target=".news-wrapper" data-company="<?php echo $company['id'];?>"
                                data-container="#blog">
                            <option value="<?php echo date('Y-m-d H:i:s', strtotime('-1 month')).','.date('Y-m-d H:i:s');?>">Последний месяц</option>
                            <option value="<?php echo date('Y-m-d H:i:s', strtotime('2018-01-01 00:00:00')).','.date('Y-m-d H:i:s');?>">Всё время</option>
                        </select>
                    </div>
                    <div class="blog-handler__display-by catalog-handler__item">
                        <span>Выводить по</span>
                        <select name="count" class="custom-select filter_parameter"
                                data-type="news" data-limit="<?php echo $limit; ?>"
                                data-target=".news-wrapper" data-company="<?php echo $company['id'];?>"
                                data-container="#blog">
                            <option value="1">1 шт</option>
                            <option value="2">2 шт</option>
                            <option value="3">3 шт</option>
                        </select>
                    </div>
                </div>
                <div class="news-wrapper">
                        <?php foreach ($news as $news_item){?>
                            <?php include $WIDGETS . 'news_item_lg.php'; ?>
                        <?php } ?>
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
                        <div class="news-item__short-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.
                        </div>
                        <a href="#" class="news-item__button button button-lg button-green">
                            Читать полностью
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
                        <div class="news-item__short-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.
                        </div>
                        <a href="#" class="news-item__button button button-lg button-green">
                            Читать полностью
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
                        <div class="news-item__short-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.
                        </div>
                        <a href="#" class="news-item__button button button-lg button-green">
                            Читать полностью
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
                        <div class="news-item__short-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.
                        </div>
                        <a href="#" class="news-item__button button button-lg button-green">
                            Читать полностью
                        </a>
                    </div>
                    -->
                </div>
                <div class="button button-lg button-white catalog-load-more"
                     data-type="news" data-current="1" data-limit="<?php echo $limit; ?>"
                     data-target=".news-wrapper" data-company="<?php echo $company['id'];?>" data-container="#blog">
                    Показать еще
                </div>
            </div>
        </div>
    </section>
    <?php }?>
</div>