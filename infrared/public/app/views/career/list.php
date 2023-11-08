<?php if ($this->lang == 'en') { ?>

    <section class="s_news s_aside">
        <div class="i_aside">
            <h2><?php echo $page->h1_en; ?></h2>

            <!--<nav class="news-nav">
                <ul class="news-nav__list">
                    <?php /*foreach ($sections as $section) { */?>
                        <li class="news-nav__item" data-id="<?php /*echo $section->id */?>"><?php /*echo $section->h1_en */?></li>
                    <?php /*} */?>
                </ul>
            </nav>-->

            <?php foreach ($sections as $section) { ?>
                <div class="news-category">
                    <div class="news-category-title underline light underline-bottom-12">
                        <h3 id="<?php echo $section->id ?>"><? echo $section->h1_en ?></h3>
                        <span>
                        <a href="/en/career/<?php echo $section->id; ?>/rss.xml" target="_blank" title="RSS-feed" class="rss">
                            <img src="/images/generic_feed_icon.svg" alt="RSS-feed">
                        </a>
                        <a href="/en<?php echo $section->url ?>" class="show-more">Show all...</a>
                    </span>
                    </div>
                    <?php if (!empty($section->careers)) { ?>
                        <div class="news-list">
                            <?php foreach ($section->careers as $item) { ?>

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

        </div>
        <aside class="right">
            <?php include_once  ROOT . '/public/app/views/layout/areas/career_form_en.php'; ?>
        </aside>
    </section>

<?php } else { ?>

    <section class="s_news s_aside">
        <div class="i_aside">
            <h2><?php echo $page->h1_ru; ?></h2>
            <!--<nav class="news-nav">
                <ul class="news-nav__list">
                    <?php /*foreach ($sections as $section) { */?>
                        <li class="news-nav__item" data-id="<?php /*echo $section->id */?>"><?php /*echo $section->h1_ru */?></li>
                    <?php /*} */?>
                </ul>
            </nav>-->
            <?php foreach ($sections as $section) { ?>
                <div class="news-category">
                    <div class="news-category-title underline light underline-bottom-12">
                        <h3 id="<?php echo $section->id ?>"><? echo $section->h1_ru ?></h3>
                        <span>
                        <a href="/career/<?php echo $section->id; ?>/rss.xml" target="_blank" title="RSS-лента" class="rss">
                            <img src="/images/generic_feed_icon.svg" alt="RSS-лента">
                        </a>
                        <a href="<?php echo $section->url ?>" class="show-more">Показать все...</a>
                    </span>
                    </div>
                    <?php if (!empty($section->careers)) { ?>
                        <div class="news-list">
                            <?php foreach ($section->careers as $item) { ?>

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
        </div>
        <aside class="right">
            <?php include_once  ROOT . '/public/app/views/layout/areas/career_form_ru.php'; ?>
        </aside>

    </section>

<?php } ?>