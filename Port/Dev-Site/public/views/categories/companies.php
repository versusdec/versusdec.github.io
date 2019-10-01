<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <?php if (isset($category)){ ?>
        <li><a href="/companies/">Каталог компаний</a></li>
        <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$category['h1']; ?></a></li>
    <?php } else { ?>
        <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$page['h1']; ?></a></li>
    <?php } ?>
</ul>
<div class="page-content side-menu-page">
    <div class="block side-menu-block">
        <i class="fas fa-caret-square-down side-menu-button"></i>
        <ul class="side-menu">
            <li>Категории:</li>
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
            <?php if (!empty($companies_categories)){?>
                <?php foreach ($companies_categories as $category_item){?>
                    <li><a href="<?php echo $urls[$category_item['meta_id']]; ?>"><?php echo $category_item['h1'];?></a></li>
                    <?php if (!empty($category_item['children'])){?>
                        <?php foreach ($category_item['children'] as $child_level_1){?>
                            <li><a href="<?php echo $urls[$child_level_1['meta_id']]; ?>">&nbsp;&mdash;&nbsp;<?php echo $child_level_1['h1'];?></a></li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php }?>
        </ul>
    </div>
    <section>
        <div class="block">
            <?php if (!empty($companies)){ ?>
            <div class="company-list-wrapper">
                <form action="" class="search-form">
                    <input type="text" class="search-bar">
                    <button type="submit" class="button button-white button-xs">найти</button>
                </form>

                <!--
                <a href="/company.html" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название фирмы</div>
                    <div class="company-description">
                        краткое описание компании и чем занимается и прочее
                        что посчитает правильным написать про себя
                    </div>
                </a>
                <a href="#" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название</div>
                    <div class="company-description">
                        краткое описание компании
                    </div>
                </a>
                <a href="#" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название фирмы</div>
                    <div class="company-description">
                        краткое описание компании и чем занимается и прочее
                        что посчитает правильным написать про себя
                    </div>
                </a>
                <a href="#" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название фирмы</div>
                    <div class="company-description">
                        краткое описание компании и чем занимается и прочее
                        что посчитает правильным написать про себя
                    </div>
                </a>
                <a href="#" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название фирмы</div>
                    <div class="company-description">
                        краткое описание компании и чем занимается и прочее
                        что посчитает правильным написать про себя
                    </div>
                </a>
                <a href="#" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название</div>
                    <div class="company-description">
                        краткое описание компании
                    </div>
                </a>
                <a href="#" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название фирмы</div>
                    <div class="company-description">
                        краткое описание компании и чем занимается и прочее
                        что посчитает правильным написать про себя
                    </div>
                </a>
                <a href="#" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название фирмы</div>
                    <div class="company-description">
                        краткое описание компании и чем занимается и прочее
                        что посчитает правильным написать про себя
                    </div>
                </a>
                <a href="#" class="company">
                    <div class="company-logo flex-center">
                        <img src="img/SVIBLOVO.RU.png" alt="">
                    </div>
                    <div class="company-name">Название фирмы</div>
                    <div class="company-description">
                        краткое описание компании и чем занимается и прочее
                        что посчитает правильным написать про себя
                    </div>
                </a>
                -->

                <?php foreach ($companies as $company){ ?>
                    <?php include $WIDGETS . 'company_item.php'; ?>
                <?php } ?>

            </div>
            <div class="button button-lg button-white catalog-load-more"
                 data-type="company" data-current="1" data-limit="<?php echo $limit; ?>"
                 data-target=".company-list-wrapper" <?php if (isset($category)){echo 'data-category="'.$category['id'].'"';}?>>
                Показать еще
            </div>
            <?php } else { ?>
                <p>В данной категории нет компаний...</p>
            <?php } ?>
        </div>
    </section>
</div>