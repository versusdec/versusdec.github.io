<?php if ($this->lang == 'en') { ?>

    <section class="s_news">
        <h2>News</h2>

        <nav class="news-nav">
            <ul class="news-nav__list">
                <?php foreach ($categories as $category) { ?>
                    <li class="news-nav__item" data-id="<?php echo $category->id ?>"><?php echo $category->h1_en ?></li>
                <?php } ?>
                <li class="news-nav__item" data-id="subscr">Subscribe</li>
            </ul>
        </nav>

        <?php foreach ($categories as $category) { ?>
            <div class="news-category">
                <div class="news-category-title underline light underline-bottom-12">
                    <h3 id="<?php echo $category->id ?>"><? echo $category->h1_en ?></h3>
                    <span>
                        <a href="/en/news/<?php echo $category->id; ?>/rss.xml" target="_blank" title="RSS-feed" class="rss">
                            <img src="/images/generic_feed_icon.svg" alt="RSS-feed">
                        </a>
                        <a href="/en<?php echo $category->url ?>" class="show-more">Show all...</a>
                    </span>
                </div>
                <?php if (!empty($category->news)) { ?>
                    <div class="news-list">
                        <?php foreach ($category->news as $item) { ?>

                                <div class="news-item">
                                    <div class="item-img">
                                        <a href="/en<?php echo $item->url ?>">
                                        <img src="<?php echo !empty($item->thumb) ? $item->thumb : $item->genimg; ?>"
                                             alt="<?php echo !empty($item->alt) ? $item->alt : $item->h1_en; ?>"></a>
                                    </div>
                                    <time
                                        datetime="<?php echo !empty($item->date) ? date('Y-m-d h:i', strtotime($item->date)) : ''; ?>"><?php echo date('d.m.Y', strtotime($item->date)) ?>
                                    </time>
                                    <h3>
                                        <a href="/en<?php echo $item->url ?>"><?php echo $item->h1_en ?></a>
                                    </h3>
                                </div>

                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <h3 class="text-orange" style="margin: 60px 0;" id="subscr">For all issues related to publications, news and
            press releases,
            <br/> please contact:</h3>
        <div class="s_aside">

            <aside class="left">
                <div class="card">
                    <div class="item-img">
                        <img src="<?php echo !empty($this->settings->manager_thumb)?$this->settings->manager_thumb:$this->settings->manager_genimg ?>"
                             alt="<?php echo $this->settings->manager_alt ?>">
                    </div>
                    <div class="card__heading">
                        <h3><?php echo $this->settings->manager_firstname_en . ' ' . $this->settings->manager_lastname_en  ?></h3>
                        <div class="inline">
                            <a class="icon icon_mail  callback-btn feedback-btn" title=""
                               data-lawyer="manager"></a>
                            <a class="icon icon_face" title="vcard"
                               href="<?php echo !empty($this->settings->manager_vcard_en) ? $this->settings->manager_vcard_en : '/en/vcard/?id=manager'; ?>"></a>
                        </div>
                    </div>
                    <span><?php echo $this->settings->manager_position_en; ?></span>
                    <p><?php echo $this->settings->manager_sm_description_en ?></p>
                </div>
            </aside>

            <div class="i_aside subscription">
                <!--            --><?php //include ROOT . '/public/app/views/layout/areas/subscribe.php' ?>
                <a href="/en/subscription/"><h2>Subscribe</h2></a>

            </div>
        </div>
    </section>

<?php } else { ?>

    <section class="s_news">
        <h2>Новости</h2>
        <nav class="news-nav">
            <ul class="news-nav__list">
                <?php foreach ($categories as $category) { ?>
                    <li class="news-nav__item" data-id="<?php echo $category->id ?>"><?php echo $category->h1_ru ?></li>
                <?php } ?>
                <li class="news-nav__item" data-id="subscr">Подписка</li>
            </ul>
        </nav>
        <?php foreach ($categories as $category) { ?>
            <div class="news-category">
                <div class="news-category-title underline light underline-bottom-12">
                    <h3 id="<?php echo $category->id ?>"><? echo $category->h1_ru ?></h3>
                    <span>
                        <a href="/news/<?php echo $category->id; ?>/rss.xml" target="_blank" title="RSS-лента" class="rss">
                            <img src="/images/generic_feed_icon.svg" alt="RSS-лента">
                        </a>
                        <a href="<?php echo $category->url ?>" class="show-more">Показать все...</a>
                    </span>
                </div>
                <?php if (!empty($category->news)) { ?>
                    <div class="news-list">
                        <?php foreach ($category->news as $item) { ?>

                                <div class="news-item">
                                    <div class="item-img">
                                        <a href="<?php echo $item->url ?>">
                                        <img src="<?php echo !empty($item->thumb) ? $item->thumb : $item->genimg; ?>"
                                             alt="<?php echo !empty($item->alt) ? $item->alt : $item->h1_ru; ?>"></a>
                                    </div>
                                    <time
                                        datetime="<?php echo !empty($item->date) ? date('Y-m-d h:i', strtotime($item->date)) : ''; ?>"><?php echo date('d.m.Y', strtotime($item->date)) ?>
                                    </time>
                                    <h3>
                                        <a href="<?php echo $item->url ?>"><?php echo $item->h1_ru ?></a>
                                    </h3>
                                </div>

                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <h3 class="text-orange" style="margin: 60px 0;" id="subscr">По всем вопросам, связанными с публикациями,
            новостями и
            пресс-релизами, <br/> пожалуйста,
            обращайтесь:</h3>
        <div class="s_aside">

            <aside class="left">
                <div class="card">
                    <div class="item-img">
                        <img src="<?php echo !empty($this->settings->manager_thumb)?$this->settings->manager_thumb:$this->settings->manager_genimg ?>"
                             alt="<?php echo $this->settings->manager_alt ?>">
                    </div>
                    <div class="card__heading">
                        <h3><?php echo $this->settings->manager_firstname_ru . ' ' . $this->settings->manager_lastname_ru  ?></h3>
                        <div class="inline">
                            <a class="icon icon_mail  callback-btn feedback-btn" title=""
                               data-lawyer="manager"></a>
                            <a class="icon icon_face" title="vcard"
                               href="<?php echo !empty($this->settings->manager_vcard_ru) ? $this->settings->manager_vcard_ru : '/vcard/?id=manager'; ?>"></a>
                        </div>
                    </div>
                    <span><?php echo $this->settings->manager_position_ru; ?></span>
                    <p><?php echo $this->settings->manager_sm_description_ru ?></p>
                </div>
            </aside>

            <div class="i_aside subscription">
                <!--	        --><?php //include ROOT . '/public/app/views/layout/areas/subscribe.php' ?>
                <a href="/subscription/"><h2>Оформить подписку</h2></a>
            </div>
        </div>
    </section>

<?php } ?>