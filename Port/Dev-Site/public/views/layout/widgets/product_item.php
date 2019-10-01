<a href="<?php echo $urls[$product_item['meta_id']]; ?>" class="catalog-item">
    <div class="catalog-item__image">
        <img src="/img/bg-city.png" alt="">
    </div>
    <div class="catalog-item__desc">
        <div class="catalog-item__name"><?php echo $product_item['h1']; ?></div>
        <div class="catalog-item__short-desc">
            <?php echo $product_item['sm_description']; ?>
        </div>
        <div class="catalog-item__price">
            <?php echo !empty($product_item['price'])&&$product_item['price']>0?'от '.number_format($product_item['price'], 0, '.', '').' руб.':''; ?>
        </div>
    </div>
</a>