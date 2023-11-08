<?php if ($this->lang == 'en') { ?>

    <section class="s_news">
        <h2><?php echo $page->h1_en; ?></h2>

        <?php if (!empty($page->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $page->genimg; ?>" alt="">
            </div>
        <? } ?>

        <div class="news-list">
            <?php foreach ($articles as $item) { ?>
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

        <div class="row">
            <div class="col">
                <?php include_once ROOT . '/public/app/views/layout/areas/pagination.php' ?>
            </div>
        </div>
    </section>

<?php } else { ?>

    <section class="s_news">
        <h2><?php echo $page->h1_ru; ?></h2>

        <?php if (!empty($page->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $category->genimg; ?>" alt="">
            </div>
        <? } ?>

        <div class="news-list">
            <?php foreach ($articles as $item) { ?>
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

        <div class="row">
            <div class="col">
                <?php include_once ROOT . '/public/app/views/layout/areas/pagination.php' ?>
            </div>
        </div>
    </section>

<?php } ?>

