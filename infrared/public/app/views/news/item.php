<?php if ($this->lang == 'en'){ ?>

<section class="">
    <h2><?php echo $news->h1_en; ?></h2>
    <?php echo $news->description_en; ?>

    <?php if (!empty($news->filepath_en)){?>
        <p><a href="<?php echo $news->filepath_en; ?>" download="">Download</a></p>
    <?php } ?>
</section>

<?php }else{ ?>

<section class="">
    <h2><?php echo $news->h1_ru; ?></h2>
    <?php echo $news->description_ru; ?>

    <?php if (!empty($news->filepath_ru)){?>
        <p><a href="<?php echo $news->filepath_ru; ?>" download="">Скачать</a></p>
    <?php } ?>
</section>

<?php } ?>