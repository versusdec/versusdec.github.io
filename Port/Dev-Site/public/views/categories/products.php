<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <?php if (isset($category)) { ?>
        <li><a href="/products/">Каталог услуг</a></li>
        <li>
            <a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs']) ? $this->meta['breadcrumbs'] : $category['h1']; ?></a>
        </li>
    <?php } else { ?>
        <li>
            <a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs']) ? $this->meta['breadcrumbs'] : $page['h1']; ?></a>
        </li>
    <?php } ?>
</ul>
<div class="page-content side-menu-page">
    <div class="block side-menu-block">
        <i class="fas fa-caret-square-down side-menu-button"></i>
        <ul class="side-menu">
            <li><a href="javascript:void(0)">Категории:</a></li>
            <!--
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
            -->
            <?php if (!empty($products_categories)) { ?>
                <?php foreach ($products_categories as $category_item) { ?>
                    <li>
                        <a href="<?php echo $urls[$category_item['meta_id']]; ?>"><?php echo $category_item['h1']; ?></a>
                    </li>
                    <?php if (!empty($category_item['children'])) { ?>
                        <?php foreach ($category_item['children'] as $child_level_1) { ?>
                            <li>
                                <a href="<?php echo $urls[$child_level_1['meta_id']]; ?>">&nbsp;&mdash;&nbsp;<?php echo $child_level_1['h1']; ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
    <section>
        <div class="block">
            <div class="catalog-handler">
                <div class="catalog-handler__sort-by catalog-handler__item">
                    <span>Сортировать по</span>
                    <select name="sort" class="custom-select filter_parameter"
                            data-type="product" data-limit="<?php echo $limit; ?>"
                            data-target=".catalog-list" <?php if (isset($category)) {
                        echo 'data-category="' . $category['id'] . '"';
                    } ?>>
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
                            data-target=".catalog-list" <?php if (isset($category)) {
                        echo 'data-category="' . $category['id'] . '"';
                    } ?>>
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
            <div class="catalog-wrapper">
                <div class="catalog-list-wrapper">
                    <?php if (!empty($products)) { ?>
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
                            <?php foreach ($products as $product_item) { ?>
                                <?php include $WIDGETS . 'product_item.php'; ?>
                            <?php } ?>

                        </div>
                        <div class="button button-lg button-white catalog-load-more"
                             data-type="product" data-current="1" data-limit="<?php echo $limit; ?>"
                             data-target=".catalog-list" <?php if (isset($category)) {
                            echo 'data-category="' . $category['id'] . '"';
                        } ?>>
                            Показать еще
                        </div>
                    <?php } else { ?>
                        <p>В данной категории нет товаров...</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>