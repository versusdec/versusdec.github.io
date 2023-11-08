<?php if ($this->lang == 'en'){ ?>

<section class="block page">
	<h2><?php echo $page->h1_en; ?></h2>
	<?php if (!empty($page->genimg)) { ?>
		<div class="page-img">
			<img src="<?php echo $page->genimg; ?>" alt="">
		</div>
	<? } ?>
	<div class="s_aside">
		<div class="i_aside">
			<h3 class="underline light">Information</h3>
			<?php echo $page->description_en; ?>
		</div>
		<!--<aside class="right">
			<h3 class="underline light">How to get</h3>
			<div id="map" data-center="<?php /*echo $this->settings->coordinates; */?>" style="margin-bottom: 60px;"></div>
			<p><?php /*echo $this->settings->address_en; */?></p>
		</aside>-->
	</div>
</section>

<?php }else{?>

<section class="block page">
    <h2><?php echo $page->h1_ru; ?></h2>
    <?php if (!empty($page->genimg)) { ?>
        <div class="page-img">
            <img src="<?php echo $page->genimg; ?>" alt="">
        </div>
    <? } ?>
    <div class="s_aside">
        <div class="i_aside">
            <h3 class="underline light">Информация</h3>
            <?php echo $page->description_ru; ?>
        </div>
        <!--<aside class="right">
            <h3 class="underline light">Как добраться</h3>
            <div id="map" data-center="<?php /*echo $this->settings->coordinates; */?>" style="margin-bottom: 60px;"></div>
            <p><?php /*echo $this->settings->address_ru; */?></p>
        </aside>-->
    </div>
</section>

<?php } ?>