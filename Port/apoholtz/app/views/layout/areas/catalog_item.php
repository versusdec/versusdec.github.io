<div class="catalog_item rows">
    <a href="<?php echo $product->url; ?>" title="<?php echo $product->name; ?>">
        <div class="item_title">
            <?php echo $product->name; ?>
        </div>
        <img src="<?php echo $product->img; ?>" alt="<?php echo $product->name; ?>">
    </a>

    <?php if ($product->available == '1') { ?>
        <?php if ($product->cost != '0.00') { ?>
            <div class="cost"><?php echo number_format($product->cost, 0, '.', ' '); ?> <span
                        class="currency">руб.</span></div>
            <div class="cost_notice">цена за лист</div>
        <?php } else { ?>
            <div class="cost negotiable">Договорная</div>
        <?php } ?>

    <?php } else {?>
		<div class="cost"><?php echo number_format($product->cost, 0, '.', ' '); ?> <span
					class="currency">руб.</span></div>
    <div class="cost_notice">последняя цена</div>
	<?php } ?>

    <div class="item_panel columns f_space_around">
	    <?php if ($product->available == '1') { ?>
        <div class="quantity">
            <div class="quantity-nav">
                <div class="quantity-button quantity-down">-</div>
            </div>
            <input type="number" min="1" max="10000" step="1" value="1">
            <div class="quantity-nav">
                <div class="quantity-button quantity-up">+</div>
            </div>
        </div>
        <div>

            <a href="#" data-id="<?php echo $product->id; ?>"
                <?php foreach ($this->cart as $item_id => $item) {if ( $item_id === $product->id){ ?> style="display: none;" <?php } }?>
               class="btn js_buy_button" title="Добавить в корзину"><i class="fa fa-shopping-cart"></i>Купить</a>
            <a class="btn in_cart"
                <?php foreach ($this->cart as $item_id => $item) {if ( $item_id === $product->id){ ?> style="display: block;" <?php } }?>
               href="/cart" title="Перейти в корзину"><i class="fa fa-check"></i>В корзину</a>

        </div>
	    <?php } else { ?>
			<div class="not-available">пока нет в наличии</div>
	    <?php } ?>
    </div>
</div>