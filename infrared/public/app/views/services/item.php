<?php if ($this->lang == 'en') { ?>

    <?php if (!empty($service->genimg)) { ?>
        <section>
            <div class="page-img">
                <img src="<?php echo $service->genimg; ?>" alt="">
            </div>
        </section>
    <?php } ?>

    <section class="s_service-item s_aside">
        <div class="i_aside">
            <h2 class=""><?php echo $service->h1_en ?></h2>

            <article>
                <?php echo $service->description_en ?>
            </article>

            <?php if (!empty($lawyers)) { ?>
                <div class="cols cols-list">
                    <?php foreach ($lawyers as $lawyer) { ?>
                        <?php include ROOT . '/public/app/views/lawyers/card_en.php' ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <aside class="right">

            <?php if (!empty($projects)) { ?>
                <div class="slider">
                    <div class="text-slider swiper-container img-slider__opv">
                        <h2>Projects</h2>
                        <div class="swiper-wrapper text_light">
                            <?php foreach ($projects as $project) { ?>
                                <div class="swiper-slide">
                                    <h3 class="underline orange">
                                        <a href="/en<?php echo $project->url ?>">
                                            <?php echo $project->h1_en ?>
                                        </a>
                                    </h3>
                                    <div class="text-content">
                                        <?php echo $project->sm_description_en ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            <?php } ?>
            <?php include_once ROOT . '/public/app/views/layout/areas/form_en.php' ?>
        </aside>
    </section>

<?php } else { ?>

    <?php if (!empty($service->genimg)) { ?>
        <section>
            <div class="page-img">
                <img src="<?php echo $service->genimg; ?>" alt="">
            </div>
        </section>
    <?php } ?>

    <section class="s_service-item s_aside">
        <div class="i_aside">
            <h2 class=""><?php echo $service->h1_ru ?></h2>

            <article>
                <?php echo $service->description_ru ?>
            </article>

            <?php if (!empty($lawyers)) { ?>
                <div class="cols cols-list">
                    <?php foreach ($lawyers as $lawyer) { ?>
                        <?php include ROOT . '/public/app/views/lawyers/card.php' ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <aside class="right">
            <?php if (!empty($projects)) { ?>
                <div class="slider">
                    <div class="text-slider swiper-container img-slider__opv">
                        <h2>Проекты</h2>
                        <div class="swiper-wrapper text_light">
                            <?php foreach ($projects as $project) { ?>
                                <div class="swiper-slide">
                                    <h3 class="underline orange">
                                        <a href="<?php echo $project->url ?>">
                                            <?php echo $project->h1_ru ?>
                                        </a>
                                    </h3>
                                    <div class="text-content">
                                        <?php echo $project->sm_description_ru ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            <?php } ?>
            <?php include_once ROOT . '/public/app/views/layout/areas/form_ru.php' ?>
        </aside>
    </section>

<?php } ?>