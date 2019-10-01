<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $this->meta->title;?></title>

    <meta name="description" content="<?php echo $this->meta->description;?>"/>
    <meta name="keywords" content="<?php echo $this->meta->keywords;?>" />

    <?php if ( ((isset($current) && $current != 1) && ($this->meta->url != '/sitemap/')) ||
        ((!empty($_SERVER['QUERY_STRING']))&&(!empty($this->meta->type))) ||
        (!empty($this->meta->canonical)) ) { ?>
        <link rel="canonical" href="<?php echo $this->prepareCanonical(); ?>"/>
    <?php }?>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/helper.css" />
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
    <?php echo $this->settings->gtmHead;?>
</head>
<body>

<?php echo $this->settings->gtmBody;?>

<!--header-->
<div class="main_container">

    <div class="mobil_overlay"></div>
    <div class="menu_overlay"></div>
    <!-- section -->
    <div class="container perm_warehouse">
        <div class="row header_block">
            <div class="col-sm-2 col-md-2 col-lg-3">
                <a href="http://faneracompany.ru/ceny/" class="main_logo d_i_b" rel="nofollow">
                    <img src="/images/logo.png" alt="logo">
                </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-5 perm_warehouse_title">
                <div class="permian-header">Фанера со склада в Перми</div>
                <hr class="permian-hr">
                <div class="permian-header2">Древесина, фанера и пиломатериалы</div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 text_right perm_warehouse_telephone">
                <div class="head_phone">

                    <a href="tel:+73422008590">+7 (342) 200-85-90</a>
                </div>
                <form id="callback_form" class="hidden-xs f_container column_end" action="#">
                    <input id="js_header_phone" class="_phone" name="headPhone" type="text" required="" value="+7 (___) ___ __ __">
                    <input id="js_fake_phone" class="fake_phone" name="headPhone" type="text" placeholder="Перезвонить? Введите номер">
                    <button name="button-submit" type="submit"><i class="fa fa-phone"></i> <span>Перезвоните мне</span></button>
                </form>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="container perm_warehouse">
        <div class="columns">
            <div class="column_half product_list">
                <div class="stock-item column_half">
                    <a href="http://faneracompany.ru/ceny/" rel="nofollow">
                        <img src="/images/warehouse/1.jpg" alt="type1">
                        <span class="stock-item-caption">Фанера ФК 1525*1525*10 мм</span>
                        <span class="stock-item-price">от <strong>435</strong> руб</span>
                    </a>
                </div>

                <div class="stock-item column_half">
                    <a href="http://faneracompany.ru/ceny/" rel="nofollow">
                        <img src="/images/warehouse/2.jpg" alt="type2">
                        <span class="stock-item-caption">Фанера ФСФ 1220*2440*9 мм</span>
                        <span class="stock-item-price">от <strong>918</strong> руб</span>
                    </a>
                </div>

                <div class="stock-item column_half">
                    <a href="http://faneracompany.ru/ceny/" rel="nofollow">
                        <img src="/images/warehouse/3.jpg" alt="type3">
                        <span class="stock-item-caption">Фанера ламинированная 1220*2440*9мм</span>
                        <span class="stock-item-price">от <strong>955</strong> руб</span>
                    </a>
                </div>

                <div class="stock-item column_half">
                    <a rel="nofollow">
                        <img src="/images/warehouse/4.jpg" alt="type4">
                        <span class="stock-item-caption">Фанерная плита 1525х3050</span>
                    </a>
                </div>

                <div class="stock-item column_half">
                    <a rel="nofollow">
                        <img src="/images/warehouse/warehouse_cat2.png" alt="type5">
                        <span class="stock-item-caption">ОСП (OSB)</span>
                    </a>
                </div>

                <div class="stock-item column_half">
                    <a rel="nofollow">
                        <img src="/images/warehouse/dvp.jpg" alt="type6">
                        <span class="stock-item-caption">ДВП</span>
                    </a>
                </div>

                <div class="stock-item column_half">
                    <a rel="nofollow">
                        <img src="/images/warehouse/warehouse_cat5.png" alt="type7">
                        <span class="stock-item-caption">Мебельный щит</span>
                    </a>
                </div>

                <div class="stock-item column_half">
                    <a rel="nofollow">
                        <img src="/images/warehouse/warehouse_cat6.png" alt="type8">
                        <span class="stock-item-caption">Погонажные изделия</span>
                    </a>
                </div>


            </div>
            <div class="column_half">
                <p>Мы работаем с надежными поставщиками, поэтому мы можем гарантировать качество товара, широкий ассортимент и доступную цену.</p>
                <p>Предоставляем все необходимые сертификаты, подтвержда ющие качество нашего товара.</p>
                <p>Можем обеспечить любой требуемый объем поставки любым видом транспорта, с собственного склада. При хранении соблюдаются нужные условия, что позволяет сохранять качества древесных плит.</p>
                <p>Принимаем оплату наличными и пластиковыми картами, так же у нас есть расчётный счет с НДС. Для крупных заказчиков мы готовы предоставить индивидуальные условия и гибкую систему скидок.</p>
                <p>Менеджеры нашей компании расскажут, какой материал лучше выбрать для тех или иных строительных работ. Так же вы можете заказать доставку товара, и оплатить его при получении.</p>
                <p>Мы можем осуществить доставку товара в любой город РФ.</p>

                <div class="f_container f_space_around us_choesen_icons f_wrap">
                    <div>
                        <img src="/images/why1.png" alt="quality">
                        <span>Качественная <br>продукция</span>
                    </div>
                    <div>
                        <img src="/images/why3.png" alt="support">
                        <span>Консультация  <br>и помощь</span>
                    </div>
                    <div>
                        <img src="/images/why2.png" alt="delivery">
                        <span>Быстрая<br>доставка</span>
                    </div>
                    <div>
                        <img src="/images/why4.png" alt="best price">
                        <span>Лучшая<br>цена</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container perm_warehouse">
        <h2>Наши контакты в Пермском крае, город Кунгур:</h2>
        <div class="columns">
            <div class="column_half">
                <a class="tel" href="tel:+73422008590" >+7 (342) 200-85-90</a>
                <p>Россия, Пермский край, город Кунгур, ул. Гребнева, 286</p>
                <p>info@eco-mat.ru</p>
                <p>Время работы </p>
                <p>ПН-ПТ: <strong>9.00-18.00</strong>, СБ-ВС: <strong>10.00-16.00</strong></p>
                <div class="perm_desktop_map">
                    <script charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=pV0vHKdx80VBAXNZ4wbX9L2U2ULDRUfG&amp;width=100%&amp;height=312&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false" async=""></script>
                </div>
            </div>
            <div class="column_half">

                <form id="perm_page_form" action="#" class="rows ">
                    <div class="f_container f_space_between contacts_page_form">
                        <div class="column_thirty">
                            <input type="text" placeholder="Имя" name="name" required>
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="column_thirty">
                            <input name="phone" type="text" class="_phone" placeholder="Телефон" value="+7 (___) ___ __ __" required>
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="column_thirty">
                            <input type="text" placeholder="Email" name="email" required>
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="f_container contacts_page_form contacts_textarea">
                        <textarea name="comment" id="comment_area" title="Комментарий" cols="5" rows="3" placeholder="Комментарий" required></textarea>
                        <i class="fa fa-comment"></i>
                    </div>
                    <div class="f_container f_align_center">
                        <button class="contacts_form_submit" type="submit">Отправить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div id="map" class="container perm_warehouse perm_mobile_map">

    </div>
<!--    <script charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=pV0vHKdx80VBAXNZ4wbX9L2U2ULDRUfG&amp;width=100%&amp;height=485&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false" async=""></script>-->

    <!-- end section -->

<!--end header-->

</div><!-- END main_container -->
<footer class="columns f_space_between">

    <div>
        <address class="copyright">© <?php echo date('Y');?>, ООО «ГРИН ПЛАЙ»</address>
    </div>
    <div>
        <div class="foot-contacts">
            <ul>
                <li><i class="fa fa-map-marker"></i> Офис: Россия, Пермский край, город Кунгур, ул. Гребнева, 286</li>
            </ul>
        </div>
    </div>
    <div class="foot-contacts">
        <ul>
            <li>
                <i class="fa fa-phone"></i>
                Тел/фaкc: <a class="big_tel" href="tel:+73422008590">+7 (342) 200-85-90</a>
            </li>
        </ul>
    </div>

</footer>

<?php include_once ROOT . '/public/app/views/popups/thanksPopup.php' ?>

<script src="/js/main.js" async="async"></script>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</body>
</html>