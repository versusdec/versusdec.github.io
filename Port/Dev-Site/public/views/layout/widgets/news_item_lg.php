<div class="news-item">
    <div class="news-item__date">
        <?php echo $helper::prettyDate($news_item['created']); ?>
    </div>
    <div class="news-item__title">
        <?php echo $news_item['h1'];?>
    </div>
    <div class="news-item__short-desc">
        <?php echo $news_item['sm_description'];?>
    </div>
    <a href="<?php echo $urls[$news_item['meta_id']]; ?>" class="news-item__button button button-lg button-green">
        Читать полностью
    </a>
</div>