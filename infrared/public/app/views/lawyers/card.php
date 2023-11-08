<div class="col card">
	<div class="card__img">
        <a href="<?php echo $lawyer->url ?>">
            <img src="<?php echo !empty($lawyer->thumb)?$lawyer->thumb:$lawyer->genimg; ?>" alt="<?php echo !empty($lawyer->alt)?$lawyer->alt:$lawyer->h1_ru; ?>">
        </a>
	</div>
	<div class="card__heading">
		<h3><a href="<?php echo $lawyer->url ?>"><?php echo $lawyer->h1_ru ?></a></h3>
		<div class="inline">
			<a class="icon icon_mail  callback-btn feedback-btn" title="" data-lawyer="<?php echo $lawyer->id; ?>"></a>
			<a class="icon icon_face" title="vcard" href="<?php echo !empty($lawyer->vcard_ru)?$lawyer->vcard_ru:'/vcard/?id='.$lawyer->id; ?>"></a>
		</div>
	</div>
	<span><?php echo $lawyer->position_ru ?></span>
</div>