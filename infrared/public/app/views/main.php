<?php if ($this->lang == 'en') { ?>

    <?php if (!empty($banners)) { ?>
        <section class="slider">
            <div class="top-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($banners as $banner) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo !empty($banner->link) ? '/en' . $banner->link : '#'; ?>">
                                <?php if (!empty($banner->h1_en)) { ?>
                                    <div class="h1"><?php echo $banner->h1_en; ?></div>
                                <?php } ?>
                                <?php if (!empty($banner->genimg)) { ?>
                                    <div class="top-slider__img">
                                        <img
                                            src="<?php echo (!empty($banner->img) && count($banner->img) > 0) ? $banner->img[0]->src : $banner->genimg; ?>"
                                            alt="<?php echo $banner->h1_en; ?>">
                                    </div>
                                <?php } ?>
                                <div class="top-slider__text">
                                    <?php echo $banner->sm_description_en; ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
    <?php } ?>

    <?php if (!empty($news)) { ?>
        <section class="s_news s_aside">
            <div class="news-wrap i_aside">
                <div class="img-slider img-slider__opv swiper-container">
                    <h3 class="underline light">News</h3>
                    <div class="swiper-wrapper">
                        <?php foreach ($news as $n_item) { ?>
                            <div class="swiper-slide">
                                <a href="/en<?php echo $n_item->url ?>">
                                    <div class="item-img">
                                        <img
                                            src="<?php echo !empty($n_item->img[0]->thumb) ? $n_item->img[0]->thumb : (!empty($n_item->img[0]->src)?$n_item->img[0]->src : (!empty($n_item->thumb)?$n_item->thumb:$n_item->genimg)); ?>"
                                            alt="<?php echo !empty($n_item->alt) ? $n_item->alt : $n_item->h1_en; ?>">
                                    </div>
                                    <div class="img-slider__text">
                                        <h3> <?php echo $n_item->sm_description_en ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class=" img-slider__opv no-autoplay swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($sliders as $slider) { ?>

                            <div class="swiper-slide">
                                <h3 class="underline light"><?php echo $slider->h1_en; ?></h3>
                                <a href="<?php echo !empty($slider->link) ? '/en' . $slider->link : '#'; ?>">
                                    <div class="img-slider__img item-img">
                                        <img src="<?php echo $slider->genimg ?>" alt="">
                                    </div>
                                    <div class="img-slider__text">
                                        <h3><?php echo $slider->sm_description_en ?></h3>
                                    </div>
                                </a>
                            </div>


                        <?php } ?>
                    </div>
                    <!--<div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>-->
                </div>
            </div>
            <aside class="right">
                <?php include_once ROOT . '/public/app/views/layout/areas/form_en.php' ?>
            </aside>
        </section>
    <?php } ?>

    <?php if (!empty($projects)) { ?>
        <section class="slider">
            <h2><a class="ah2" href="/en/projects/">Projects</a></h2>
            <div class="text-slider swiper-container">
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
        </section>
    <?php } ?>


    <?php if (!empty($brands)) { ?>
        <section class="slider">
            <h2>Clients</h2>
            <div class="img-slider swiper-container">
                <div class="swiper-wrapper text_light">
                    <?php foreach ($brands as $brand) { ?>
                        <div class="swiper-slide">
                            <div class="img-slider__img">
                                <?php if (!empty($brand->genimg)) { ?>
                                    <img src="<?php echo $brand->genimg ?>" alt="">
                                <?php } ?>
                            </div>
                            <div class="img-slider__text">
                                <?php echo $brand->sm_description_en ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
    <?php } ?>

    <?php if (!empty($awards)) { ?>
        <section class="slider">
            <h2>Awards</h2>
            <div class="awards-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($awards as $award) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo !empty($award->link_en)?$award->link_en:'#'?>">
                                <div class="awards__img">
                                    <img src="<?php echo $award->genimg ?>" alt="">
                                </div>
                                <div class="awards__text">
                                    <?php echo $award->sm_description_en ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
    <?php } ?>

<?php } else { ?>

    <?php if (!empty($banners)) { ?>
        <section class="slider">
            <div class="top-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($banners as $banner) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo !empty($banner->link) ? $banner->link : '#'; ?>">
                                <?php if (!empty($banner->h1_ru)) { ?>
                                    <div class="h1"><?php echo $banner->h1_ru; ?></div>
                                <?php } ?>
                                <?php if (!empty($banner->genimg)) { ?>
                                    <div class="top-slider__img">
                                        <img src="<?php echo !empty($banner->thumb) ? $banner->thumb : $banner->genimg; ?>"
                                             alt="<?php echo $banner->h1_ru; ?>">
                                    </div>
                                <?php } ?>
                                <div class="top-slider__text">
                                    <?php echo $banner->sm_description_ru; ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
    <?php } ?>

    <?php if (!empty($news)) { ?>
        <section class="s_news s_aside">
            <div class="news-wrap i_aside">
                <div class="img-slider img-slider__opv swiper-container">
                    <h3 class="underline light heights">Новости</h3>
                    <div class="swiper-wrapper">
                        <?php foreach ($news as $n_item) { ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $n_item->url ?>">
                                    <div class="item-img">
                                        <img
                                            src="<?php echo !empty($n_item->thumb) ? $n_item->thumb : $n_item->genimg; ?>"
                                            alt="<?php echo !empty($n_item->alt) ? $n_item->alt : $n_item->h1_ru; ?>">
                                    </div>
                                    <div class="img-slider__text">
                                        <h3> <?php echo $n_item->sm_description_ru ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class=" img-slider__opv no-autoplay swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($sliders as $slider) { ?>
                            <div class="swiper-slide">
                                <h3 class="underline light heights"><?php echo $slider->h1_ru; ?></h3>
                                <a href="<?php echo !empty($slider->link) ? $slider->link : '#'; ?>">
                                    <div class="img-slider__img item-img">
                                        <img src="<?php echo $slider->genimg ?>" alt="">
                                    </div>
                                    <div class="img-slider__text">
                                        <h3><?php echo $slider->sm_description_ru ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <!--<div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>-->
                </div>
            </div>
            <aside class="right">
                <?php include_once ROOT . '/public/app/views/layout/areas/form_ru.php' ?>
            </aside>
        </section>
    <?php } ?>

    <?php if (!empty($projects)) { ?>
        <section class="slider">
            <h2><a class="ah2" href="/projects/">Проекты</a></h2>
            <div class="text-slider swiper-container">
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
        </section>
    <?php } ?>

    <?php if (!empty($brands)) { ?>
        <section class="slider">
            <h2>Клиенты</h2>
            <div class="img-slider swiper-container">
                <div class="swiper-wrapper text_light">
                    <?php foreach ($brands as $brand) { ?>
                        <div class="swiper-slide">
                            <div class="img-slider__img">
                                <?php if (!empty($brand->genimg)) { ?>
                                    <img src="<?php echo $brand->genimg ?>" alt="">
                                <?php } ?>
                            </div>
                            <div class="img-slider__text">
                                <?php echo $brand->sm_description_ru ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
    <?php } ?>

    <?php if (!empty($awards)) { ?>
        <section class="slider">
            <h2>Награды</h2>
            <div class="awards-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($awards as $award) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo !empty($award->link_ru)?$award->link_ru:'#'?>">
                                <div class="awards__img">
                                    <img src="<?php echo $award->genimg ?>" alt="">
                                </div>
                                <div class="awards__text">
                                    <?php echo $award->sm_description_ru ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
    <?php } ?>

<?php } ?>