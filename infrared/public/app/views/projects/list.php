<?php if ($this->lang == 'en') { ?>

    <section class="s_news">
        <?php if (!empty($page->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $page->genimg; ?>" alt="">
            </div>
        <? } ?>


        <div class="s_aside flex-order">
            <div class=" i_aside">
                <h2><?php echo $page->h1_en; ?></h2>

                <div class="news-list">
                    <?php foreach ($projects as $item) { ?>
                        <div class="news-item">
                            <a href="/en<?php echo $item->url ?>">
                                <h3 class="underline orange heights"><?php echo $item->h1_en ?></h3>

                                <div class="text-content">
                                    <?php echo $item->sm_description_en ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <aside class="right flex-order-1">
                <?php include_once ROOT . '/public/app/views/layout/areas/find_form_en.php' ?>
            </aside>
        </div>

        <div class="row">
            <div class="col">
                <?php include_once ROOT . '/public/app/views/layout/areas/pagination.php' ?>
            </div>
        </div>
    </section>

<?php } else { ?>

    <section class="s_news">
        <?php if (!empty($page->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $category->genimg; ?>" alt="">
            </div>
        <? } ?>

        <div class="s_aside flex-order">
            <div class="i_aside">
                <h2><?php echo $page->h1_ru; ?></h2>
                <div class="news-list">
                    <?php foreach ($projects as $item) { ?>
                        <div class="news-item">
                            <a href="<?php echo $item->url ?>">
                                <h3 class="underline orange heights"><?php echo $item->h1_ru ?></h3>

                                <div class="text-content">
                                    <?php echo $item->sm_description_ru ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <aside class="right flex-order-1">
                <?php include_once ROOT . '/public/app/views/layout/areas/find_form_ru.php' ?>
            </aside>
        </div>

        <div class="row">
            <div class="col">
                <?php include_once ROOT . '/public/app/views/layout/areas/pagination.php' ?>
            </div>
        </div>
    </section>

<?php } ?>

