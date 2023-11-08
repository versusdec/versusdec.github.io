<?php if ($this->lang == 'en'){ ?>

<section class="s_aside">
    <div class="i_aside">
        <h2>Search results</h2>
        <?php if (!empty($lawyers)) { ?>
            <div class="cols cols-list">
                <?php foreach ($lawyers as $lawyer) { ?>
	                <?php include ROOT . '/public/app/views/lawyers/card_en.php' ?>
                <?php } ?>
            </div>
        <?php } else { ?>
			<p>Unfortunately, your search returned no results.</p>
        <?php } ?>
    </div>
    <aside class="right">
        <?php include_once ROOT . '/public/app/views/layout/areas/form_en.php' ?>
    </aside>
</section>

<?php }else{?>

<section class="s_aside">
    <div class="i_aside">
        <h2>Результаты поиска</h2>
        <?php if (!empty($lawyers)) { ?>
            <div class="cols cols-list">
                <?php foreach ($lawyers as $lawyer) { ?>
                    <?php include ROOT . '/public/app/views/lawyers/card.php' ?>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p>К сожалению, по Вашему запросу ничего не найдено.</p>
        <?php } ?>
    </div>
    <aside class="right">
        <?php include_once ROOT . '/public/app/views/layout/areas/form_ru.php' ?>
    </aside>
</section>

<?php } ?>