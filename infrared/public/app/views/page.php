<?php if ($this->lang == 'en') { ?>

    <section class="block page">
        <h2><?php echo $page->h1_en; ?></h2>
        <?php if (!empty($page->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $page->genimg; ?>" alt="">
            </div>
        <? } ?>
        <?php echo $page->description_en; ?>
    </section>

<?php } else { ?>

    <section class="block page">
        <h2><?php echo $page->h1_ru; ?></h2>
        <?php if (!empty($page->genimg)) { ?>
            <div class="page-img">
                <img src="<?php echo $page->genimg; ?>" alt="">
            </div>
        <? } ?>
        <?php echo $page->description_ru; ?>
    </section>

<?php } ?>

