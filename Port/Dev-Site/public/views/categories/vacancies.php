<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <?php if (isset($category)){ ?>
        <li><a href="/vacancies/">Каталог вакансий</a></li>
        <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$category['h1']; ?></a></li>
    <?php } else { ?>
        <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$page['h1']; ?></a></li>
    <?php } ?>
</ul>
<div class="page-content side-menu-page">
    <div class="block side-menu-block">
        <i class="fas fa-caret-square-down side-menu-button"></i>
        <ul class="side-menu">
            <li>Направления:</li>
            <!--
            <li><a href="#">Разработчик</a></li>
            <li><a href="#">Менеджер</a></li>
            <li><a href="#">Кладовщик</a></li>
            <li><a href="#">Кассир</a></li>
            -->
            <?php if (!empty($vacancies_categories)){?>
                <?php foreach ($vacancies_categories as $category_item){?>
                    <li><a href="<?php echo $urls[$category_item['meta_id']]; ?>"><?php echo $category_item['h1'];?></a></li>
                    <?php if (!empty($category_item['children'])){?>
                        <?php foreach ($category_item['children'] as $child_level_1){?>
                            <li><a href="<?php echo $urls[$child_level_1['meta_id']]; ?>">&nbsp;&mdash;&nbsp;<?php echo $child_level_1['h1'];?></a></li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php }?>

            <li>Зарплата</li>
            <li><input type="number" placeholder="От"></li>
            <li><input type="number" placeholder="До"></li>

            <li>График работы:</li>
            <li>
                <label class="custom-checkbox-form">
                    <input type="checkbox" checked>
                    <span class="custom-checkbox">Аптеки</span>
                </label>
            </li>
            <li>
                <label class="custom-checkbox-form">
                    <input type="checkbox">
                    <span class="custom-checkbox">Аптеки</span>
                </label>
            </li>
            <li>
                <label class="custom-checkbox-form">
                    <input type="checkbox">
                    <span class="custom-checkbox">Аптеки</span>
                </label>
            </li>
            <li>
                <label class="custom-checkbox-form">
                    <input type="checkbox">
                    <span class="custom-checkbox">Аптеки</span>
                </label>
            </li>

        </ul>
    </div>
    <section>
        <div class="block">
            <div class="catalog-handler">
                <div class="catalog-handler__sort-by catalog-handler__item">
                    <span>Сортировать по</span>
                    <select name="sort" class="custom-select filter_parameter"
                            data-type="vacancy" data-limit="<?php echo $limit; ?>"
                            data-target=".vacancies-list" <?php if (isset($category)){echo 'data-category="'.$category['id'].'"';}?>>
                        <option value="salary-asc">Зп по возрастанию</option>
                        <option value="salary-desc">Зп по убыванию</option>
                        <!--<option value="2">Рейтинг</option>
                        <option value="3">Популярное</option>-->
                    </select>
                </div>
                <div class="catalog-handler__display-by catalog-handler__item">
                    <span>Выводить по</span>
                    <select name="count" class="custom-select filter_parameter"
                            data-type="vacancy" data-limit="<?php echo $limit; ?>"
                            data-target=".vacancies-list" <?php if (isset($category)){echo 'data-category="'.$category['id'].'"';}?>>
                        <option value="1">1 шт</option>
                        <option value="2">2 шт</option>
                        <option value="3">3 шт</option>
                    </select>
                </div>
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
                                <img src="img/SVIBLOVO.RU.png" alt="">
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
                                <img src="img/SVIBLOVO.RU.png" alt="">
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
                                <img src="img/SVIBLOVO.RU.png" alt="">
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
                                <img src="img/SVIBLOVO.RU.png" alt="">
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
                                <img src="img/SVIBLOVO.RU.png" alt="">
                            </a>
                        </div>
                        <div class="favorite">В избранное</div>
                    </div>
                </div>
                -->
                <?php if (!empty($vacancies)){?>
                    <div class="vacancies-list">
                    <?php foreach ($vacancies as $vacancy_item){?>
                        <?php include $WIDGETS . 'vacancy_item.php'; ?>
                    <?php } ?>
                    </div>
                    <div class="button button-lg button-white catalog-load-more"
                         data-type="vacancy" data-current="1" data-limit="<?php echo $limit; ?>"
                         data-target=".vacancies-list" <?php if (isset($category)){echo 'data-category="'.$category['id'].'"';}?>>
                        Показать еще
                    </div>
                <?php } else { ?>
                    <p>В данной категории нет вакансий...</p>
                <?php } ?>
            </div>
        </div>
    </section>
</div>