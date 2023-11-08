<div class="col card">
    <div class="card__img">
        <a href="/en<?php echo $lawyer->url ?>">
            <img src="<?php echo !empty($lawyer->thumb)?$lawyer->thumb:$lawyer->genimg; ?>" alt="<?php echo !empty($lawyer->alt)?$lawyer->alt:$lawyer->h1_en; ?>">
        </a>
    </div>
    <div class="card__heading">
        <h3><a href="/en<?php echo $lawyer->url ?>"><?php echo $lawyer->h1_en ?></a></h3>
        <div class="inline">
            <a class="icon icon_mail  callback-btn feedback-btn" title="" data-lawyer="<?php echo $lawyer->id; ?>"></a>
            <a class="icon icon_face" title="vcard" href="<?php echo !empty($lawyer->vcard_en)?$lawyer->vcard_en:'/en/vcard/?id='.$lawyer->id; ?>"></a>
        </div>
    </div>
    <span><?php echo $lawyer->position_en ?></span>
</div>