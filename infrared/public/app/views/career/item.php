<?php if ($this->lang == 'en'){ ?>

    <section class="s_aside">
        <div class="i_aside">
            <h2><?php echo $career->h1_en; ?></h2>
            <?php echo $career->description_en; ?>

            <?php if (!empty($career->filepath_en)){?>
                <p><a href="<?php echo $career->filepath_en; ?>" download="">Download</a></p>
            <?php } ?>
        </div>
        <aside class="right">
            <?php include_once  ROOT . '/public/app/views/layout/areas/career_form_en.php'; ?>
        </aside>
    </section>

<?php }else{ ?>

    <section class="s_aside">
        <div class="i_aside">
            <h2><?php echo $career->h1_ru; ?></h2>
            <?php echo $career->description_ru; ?>

            <?php if (!empty($career->filepath_ru)){?>
                <p><a href="<?php echo $career->filepath_ru; ?>" download="">Скачать</a></p>
            <?php } ?>
        </div>
        <aside class="right">
            <?php include_once  ROOT . '/public/app/views/layout/areas/career_form_ru.php'; ?>
        </aside>

    </section>

<?php } ?>