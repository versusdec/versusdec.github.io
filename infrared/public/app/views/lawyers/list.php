<?php if ($this->lang == 'en'){ ?>

<section class="s_lawyers s_aside">
    <div class="i_aside">
        <h2><?php echo $page->h1_en; ?></h2>
        <div><?php echo $page->description_en; ?></div>
        <?php if (!empty($lawyers)) { ?>
            <div class="cols cols-list">
                <?php foreach ($lawyers as $lawyer) { ?>
	                <?php include ROOT . '/public/app/views/lawyers/card_en.php' ?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <aside class="right">
        <?php include_once ROOT . '/public/app/views/layout/areas/form_en.php' ?>
    </aside>
</section>

<?php }else{ ?>
    <section class="s_lawyers s_aside">
        <div class="i_aside">
            <h2><?php echo $page->h1_ru; ?></h2>
            <div><?php echo $page->description_ru; ?></div>
            <?php if (!empty($lawyers)) { ?>
                <div class="cols cols-list">
                    <?php foreach ($lawyers as $lawyer) { ?>
                        <?php include ROOT . '/public/app/views/lawyers/card.php' ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <aside class="right">
            <?php include_once ROOT . '/public/app/views/layout/areas/form_ru.php' ?>
        </aside>
    </section>
<?php } ?>
