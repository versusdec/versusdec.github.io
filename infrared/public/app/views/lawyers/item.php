<?php if ($this->lang == 'en'){ ?>

    <section class="">
        <div class="lawyer_item_container">
            <div class="text_block">
                <h2><?php echo $lawyer->h1_en; ?></h2>
                <div>
                    <p><?php echo $lawyer->position_en; ?></p>
                    <p><?php echo $lawyer->education_en; ?></p>
                </div>
            </div>
            <img src="<?php echo !empty($lawyer->thumb)?$lawyer->thumb:$lawyer->genimg; ?>" alt="">
        </div>
        <div class="s_service-item s_aside">
            <div class="i_aside">
                <?php echo $lawyer->sm_description_en; ?>
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
            </aside>
        </div>
    </section>

<?php }else{ ?>

    <section class="">
        <div class="lawyer_item_container">
            <div class="text_block">
                <h2><?php echo $lawyer->h1_ru; ?></h2>
                <div>
                    <p><?php echo $lawyer->position_ru; ?></p>
                    <p><?php echo $lawyer->education_ru; ?></p>
                </div>
            </div>
            <img src="<?php echo !empty($lawyer->thumb)?$lawyer->thumb:$lawyer->genimg; ?>" alt="">
        </div>
        <div class="s_service-item s_aside">
            <div class="i_aside">
                <?php echo $lawyer->sm_description_ru; ?>
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
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                <?php } ?>
            </aside>
        </div>
    </section>

<?php } ?>