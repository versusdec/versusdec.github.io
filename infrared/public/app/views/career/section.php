<?php if ($this->lang == 'en') { ?>

<section class="s_news s_aside">
    <div class="i_aside">
        <h2><? echo $section->h1_en ?></h2>

        <?php if (!empty($section->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $section->genimg; ?>" alt="">
            </div>
        <? } ?>

        <nav class="news-nav">
            <ul class="news-nav__list">
                <?php foreach ($sections as $item) { ?>
                    <li class="news-nav__item">
                        <a href="/en<?php echo $item->url ?>">
                            <?php echo $item->h1_en ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

        <?php if (!empty($career)) { ?>
            <div class="news-list">
                <?php foreach ($career as $item) { ?>

                    <div class="news-item">
                        <div class="item-img">
                            <img src="<?php echo !empty($item->thumb) ? $item->thumb : $item->genimg; ?>"
                                 alt="<?php echo !empty($item->alt) ? $item->alt : $item->h1_en; ?>">
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
        <?php } ?>

    </div>
    <aside class="right">
        <?php include_once  ROOT . '/public/app/views/layout/areas/career_form_en.php'; ?>
    </aside>
</section>

<?php } else { ?>

<section class="s_news s_aside">
    <div class="i_aside">
        <h2><? echo $section->h1_ru ?></h2>

        <?php if (!empty($section->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $section->genimg; ?>" alt="">
            </div>
        <? } ?>
        <nav class="news-nav">
            <ul class="news-nav__list">
                <?php foreach ($sections as $item) { ?>
                    <li class="news-nav__item">
                        <a href="<?php echo $item->url ?>">
                            <?php echo $item->h1_ru ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

        <?php if (!empty($career)) { ?>
            <div class="news-list">
                <?php foreach ($career as $item) { ?>

                    <div class="news-item">
                        <div class="item-img">
                            <img src="<?php echo !empty($item->thumb) ? $item->thumb : $item->genimg; ?>"
                                 alt="<?php echo !empty($item->alt) ? $item->alt : $item->h1_ru; ?>">
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
        <?php } ?>
    </div>
    <aside class="right">
        <?php include_once  ROOT . '/public/app/views/layout/areas/career_form_ru.php'; ?>
    </aside>
</section>

<?php } ?>
