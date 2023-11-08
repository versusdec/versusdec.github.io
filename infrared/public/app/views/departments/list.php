<?php if ($this->lang == 'en') { ?>

    <section class="s_services">
        <h2><?php echo $page->h1_en; ?></h2>
        <?php if (!empty($page->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $page->genimg; ?>" alt="">
            </div>
        <?php } ?>
        <div class="s_aside">
            <div class="i_aside cols">
                <?php if (!empty($services)) { ?>
                    <div class="col">
                        <h3 class="underline light">Services</h3>
                        <ul>
                            <?php foreach ($services as $service) { ?>
                                <li>
                                    <a href="/en<?php echo $service->url; ?>"><?php echo $service->h1_en; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <?php if (!empty($departments)){ ?>
                    <div class="col">
                        <h3 class="underline light">Departments</h3>
                        <!--
                        <ul class="show_projects">
                            <?php if (!empty($departments)) { ?>
                                <?php foreach ($departments as $d_item) { ?>
                                    <li data-id="<?php echo $d_item->id; ?>">
                                        <a><?php echo $d_item->h1_en; ?></a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                        -->
                        <ul>
                            <?php foreach ($departments as $department) { ?>
                                <li>
                                    <a href="/en<?php echo $department->url; ?>"><?php echo $department->h1_en; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <aside class="right">
                <?php include_once ROOT . '/public/app/views/layout/areas/form_en.php' ?>
            </aside>
        </div>
    </section>

    <?php if (!empty($projects)) { ?>
        <section class="slider">
            <h2>Projects</h2>
            <div class="text-slider swiper-container">
                <div class="swiper-wrapper text_light">
                    <?php foreach ($projects as $project) { ?>
                        <div class="swiper-slide">
                            <h3 class="underline orange"><?php echo $project->h1_en ?></h3>
                            <div class="text-content">
                                <?php echo $project->sm_description_en ?>
                            </div>
                            <a href="/en<?php echo $project->url ?>" class="menu">
                                <div class="menu-btn">
                                    <i class="dot"></i>
                                    <i class="dot"></i>
                                    <i class="dot"></i>
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

    <section class="s_services">
        <h2><?php echo $page->h1_ru; ?></h2>
        <?php if (!empty($page->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $page->genimg; ?>" alt="">
            </div>
        <?php } ?>
        <div class="s_aside">
            <div class="i_aside cols">
                <?php if (!empty($services)) { ?>
                    <div class="col">
                        <h3 class="underline light">Услуги</h3>
                        <ul>
                            <?php foreach ($services as $service) { ?>
                                <li>
                                    <a href="<?php echo $service->url; ?>"><?php echo $service->h1_ru; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <?php if (!empty($departments)){ ?>
                    <div class="col">
                        <h3 class="underline light">Отрасли</h3>
                        <!--
                        <ul class="show_projects">
                            <?php if (!empty($departments)) { ?>
                                <?php foreach ($departments as $d_item) { ?>
                                    <li data-id="<?php echo $d_item->id; ?>">
                                        <a><?php echo $d_item->h1_ru; ?></a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                        -->
                        <ul>
                            <?php foreach ($departments as $department) { ?>
                                <li>
                                    <a href="<?php echo $department->url; ?>"><?php echo $department->h1_ru; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <aside class="right">
                <?php include_once ROOT . '/public/app/views/layout/areas/form_ru.php' ?>
            </aside>
        </div>
    </section>

    <?php if (!empty($projects)) { ?>
        <section class="slider">
            <h2>Проекты</h2>
            <div class="text-slider swiper-container">
                <div class="swiper-wrapper text_light">
                    <?php foreach ($projects as $project) { ?>
                        <div class="swiper-slide">
                            <h3 class="underline orange"><?php echo $project->h1_ru ?></h3>
                            <div class="text-content">
                                <?php echo $project->sm_description_ru ?>
                            </div>
                            <a href="<?php echo $project->url ?>" class="menu">
                                <div class="menu-btn">
                                    <i class="dot"></i>
                                    <i class="dot"></i>
                                    <i class="dot"></i>
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
