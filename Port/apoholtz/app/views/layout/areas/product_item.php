<li class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
	<div class="product-item a-product-block">
		<?php if ($product->sale == '1') { ?>
			<div class="wrap-ribbon">

				<div class="ribbon">Акция!</div>

			</div>
		<?php }?>
		<div class="product-img" style="background: url('<?php echo $product->img;?>'); background-size: cover">
			<a href="<?php echo $product->url;?>" style="display: flex; width: 100%; padding-top: 83%;"></a>
		</div>
        <div class="product-title">
			<a class=" " style="display: block; min-height: 111px" href="<?php echo $product->url;?>" title="<?php echo $product->name;?>"><?php echo $product->name;?></a>
        </div>
		<div class="product-disc">
			<?php if ($product->available == '1') { ?>
				<?php if ($product->cost != '0.00') { ?>
					<div class="cost"><?php echo number_format($product->cost, 0, '.', ' ');?>  <span class="currency">руб.</span></div>
				<?php } else {?>
					<div class="cost negotiable">Договорная</div>
				<?php }?>
				<?php if ($product->old_cost != '0.00') { ?>
					<div class="old_cost">Старая цена <?php echo number_format($product->old_cost, 0, '.', ' ');?> руб.</div>
				<?php } else {?>
					<div class="old_cost">цена</div>
				<?php } ?>
			<?php } ?>
		</div>
		<?php if ($product->available == '1') { ?>
		<div class="add-to-cart"><button type="button" class="btn order-product <?php if ($product->available == '0') { echo 'product-not-available'; } ?>" <?php if ($product->available == '0') { echo 'disabled'; } ?> data-prod="<?php echo $product->id;?>" data-toggle="modal" data-target="#OrderModal"><img alt="cart" src="/images/shopping-cart.png"/> Заказать</button></div>
		<?php } else { ?>
			<div class="not-available">Нет в наличии</div>
		<?php } ?>

        </div>
</li>