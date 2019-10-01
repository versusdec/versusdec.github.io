<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$page['h1']; ?></a></li>
</ul>

<section id="blog">
    <div class="block news">
        <div class="news-block">
            <div class="title no-button">
                <div class="title-text"><?php echo $page['h1'];?></div>
            </div>
            <div class="catalog-handler">
                <div class="blog-handler__latest catalog-handler__item">
                    <span>Показать за</span>
                    <select name="range" class="custom-select filter_parameter"
                            data-type="news" data-limit="<?php echo $limit; ?>"
                            data-target=".news-wrapper" data-news-for="<?php if ($this->meta['id']==3){echo 'region';}else{echo 'companies';}?>">
                        <option value="<?php echo date('Y-m-d H:i:s', strtotime('-1 month')).','.date('Y-m-d H:i:s');?>">Последний месяц</option>
                        <option value="<?php echo date('Y-m-d H:i:s', strtotime('2018-01-01 00:00:00')).','.date('Y-m-d H:i:s');?>">Всё время</option>
                    </select>
                </div>
                <div class="blog-handler__display-by catalog-handler__item">
                    <span>Выводить по</span>
                    <select name="count" class="custom-select filter_parameter"
                            data-type="news" data-limit="<?php echo $limit; ?>"
                            data-target=".news-wrapper" data-news-for="<?php if ($this->meta['id']==3){echo 'region';}else{echo 'companies';}?>">
                        <option value="1">1 шт</option>
                        <option value="2">2 шт</option>
                        <option value="3">3 шт</option>
                    </select>
                </div>
            </div>
            <div class="news-wrapper">
                <?php if (!empty($news)){?>
                    <?php foreach ($news as $news_item){?>
                        <?php include $WIDGETS . 'news_item_lg.php'; ?>
                    <?php } ?>
                <?php }?>
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
                 data-target=".news-wrapper" data-news-for="<?php if ($this->meta['id']==3){echo 'region';}else{echo 'companies';}?>">
                Показать еще
            </div>
        </div>
    </div>
</section>