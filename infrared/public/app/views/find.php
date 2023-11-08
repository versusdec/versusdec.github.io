<?php if ($this->lang == 'en'){ ?>

    <section class="s_aside">
        <div class="i_aside">
            <h2>Search results</h2>
            <?php if (!empty($projects)) { ?>
                <div class="news-list">
                    <?php foreach ($projects as $project) { ?>
                        <div class="news-item">
                            <a href="/en<?php echo $project->url ?>">
                                <h3 class="underline orange heights"><?php echo $project->h1_en ?></h3>

                                <div class="text-content">
                                    <?php echo $project->sm_description_en ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <p>Unfortunately, your search returned no results.</p>
            <?php } ?>
        </div>
        <aside class="right">
            <?php include_once ROOT . '/public/app/views/layout/areas/find_form_en.php' ?>
        </aside>
    </section>

<?php }else{?>

    <section class="s_aside">
        <div class="i_aside">
            <h2>Результаты поиска</h2>
            <?php if (!empty($projects)) { ?>
                <div class="news-list">
                    <?php foreach ($projects as $project) { ?>
                        <div class="news-item">
                            <a href="<?php echo $project->url ?>">
                                <h3 class="underline orange heights"><?php echo $project->h1_ru ?></h3>

                                <div class="text-content">
                                    <?php echo $project->sm_description_ru ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <p>К сожалению, по Вашему запросу ничего не найдено.</p>
            <?php } ?>
        </div>
        <aside class="right">
            <?php include_once ROOT . '/public/app/views/layout/areas/find_form_ru.php' ?>
        </aside>
    </section>

<?php } ?>