<div class="container">
    <section class="columns catalog_section">

    <div class="column_full">
        <div class="breadcrumbs">
            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="<?php echo $category->url; ?>" itemprop="item"><?php echo $category->name; ?></a>
                    <meta itemprop="position" content="1">
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <?php foreach ($product->properties as $property) {
                    if ($property->id == 17) { ?>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a href="/<?php $vid_url = explode("/", trim($product->url, '/'));
                            array_pop($vid_url);
                            echo implode("/", $vid_url) ?>/" itemprop="item"><?php echo $property->value; ?></a>
                            <meta itemprop="position" content="2">
                            <i class="fa fa-angle-double-right"></i>
                        </li>
                    <?php }
	                if ($property->id == 24 || $property->id == 25) { ?>
						<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							<a href="/<?php $vid_url = explode("/", trim($product->url, '/'));
			                array_pop($vid_url);
			                echo implode("/", $vid_url) ?>/" itemprop="item"><?php echo $property->value; ?></a>
							<meta itemprop="position" content="2">
							<i class="fa fa-angle-double-right"></i>
						</li>
	                <?php }
                } ?>

                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name"><?php echo $product->name; ?></span>
                </li>
            </ol>
        </div>

        <div class="product_wrap">
            <h1 class="title"><?php echo $product->name; ?></h1>
            <div class="columns f_align_center">
                <div class="column_half">
                    <img class="main_img" src="<?php echo $product->img; ?>" alt="<?php echo $product->name; ?>">
                </div>
                <div class="column_half">
                    <div class="product_panel  columns f_space_between">
	                    <?php if ($product->available == '1') { ?>
                        <div>

							<?php if ($product->cost != '0.00') { ?>
								<div class="cost"><?php echo number_format($product->cost, 0, '.', ' '); ?> руб.</div>
							<?php } else { ?>
								<span class="negotiable">Договорная</span>
							<?php } ?>
							<span class="item"><span>Цена за лист.</span></span>

                        </div>
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
                               class="btn js_buy_button"><i class="fa fa-shopping-cart" title="Добавить в корзину"></i>Купить</a>
                            <a class="btn in_cart"
                                <?php foreach ($this->cart as $item_id => $item) {if ( $item_id === $product->id){ ?> style="display: block;" <?php } }?>
                               href="/cart" title="Перейти в корзину"><i class="fa fa-check"></i>В корзину</a>
                            <a class="buy_fast" href="#" data-target="#fastOrder" data-toggle="modal">Купить в один клик</a>
                        </div>
	                <?php } else { ?>
						<div>
                            <span class="notavailable">Скоро в продаже</span>
                            <a class="buy_fast notify_available" href="#" data-target="#availabilityModal" data-toggle="modal">Сообщить когда появится</a>
                        </div>

						<div class="quantity"></div>
						<div>
                            <a href="#similar" class="similar btn">Смотрите похожие</a>
                        </div>
	                <?php } ?>
					</div>
                    <div class="product_properties">
                        <?php foreach ($product->properties as $property) { if ($property->show_in_product) { ?>
                            <div class="f_container properties_row f_space_between">
                                <div><?php echo $property->name;  ?></div>
                                <div><?php echo $property->value;  ?></div>
                            </div>
                        <?php }}  ?>
                    </div>

                </div>
            </div>
            <div class="f_container f_space_around product_icons f_wrap">
                <div>
                    <img src="/images/i-item1.png" alt="delivery">
                    <span>Быстрая<br>доставка</span>
                </div>
                <div>
                    <img src="/images/i-item2.png" alt="quality">
                    <span>Гаратия<br>качества</span>
                </div>
                <div>
                    <img src="/images/i-item3.png" alt="refund">
                    <span>Гарантия<br>возврата денег</span>
                </div>
                <div>
                    <img src="/images/i-item4.png" alt="support">
                    <span>Бесплатная<br>консультация</span>
                </div>
            </div>
        </div>

	    <?php if (strlen(trim(strip_tags($product->description)))) {?>
        <div class="product_description">
            <div class="tab_wrap">
                <div class="tab_menu">
                    <ul class="d_i_b">
                        <li><a class="active" data-tab="tab1" href="#">Описание</a></li>
                        <?php /*<li><a data-tab="tab2" href="#">Отзывы</a></li>*/?>
                    </ul>
                </div>
                <div class="tab_content static-page-discription">
                    <div id="tab1" class="active tab_content_block">
                        <?php echo $product->description; ?>
                    </div>
					<?php /*<div id="tab2" class="tab_content_block">
                    </div>*/?>
                </div>
            </div>
        </div>
	    <?php }?>

        <?php if (!empty($similar)) {?>
        <div id="similar" class="similar_products">
            <div class="row">
                <div class="section_title">Похожие товары:</div>
                <div class="col-xs-12">
					<?php if (count($similar) >= 5) { ?>
						<div class="similar-container swiper-container">
							<div class="swiper-wrapper">
								<?php foreach ($similar as $product) { ?>
									<div class="swiper-slide"><?php include "layout/areas/catalog_item.php"?></div>
								<?php } ?>
							</div>
							<!-- Add Arrows -->

						</div>
						<div class="customNextBtn fa fa-angle-right"></div>
						<div class="customPrevBtn fa fa-angle-left"></div>
					<?php } else {?>
					<div class="f_container f_wrap catalog__block">
						<?php foreach ($similar as $product) {
							include "layout/areas/catalog_item.php";
						}?>
					</div>
					<?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if (!empty($recently_viewed)) {?>
            <div id="recently_viewed" class="recently_slider<?php if (count($recently_viewed) == 1){echo ' one-item';}?>">
                <div class="row">
                    <div class="section_title">Недавно просмотренные:</div>
                    <div class="col-xs-12">
	                    <?php if (count($recently_viewed) >= 5) { ?>
                        <div class="recently-container swiper-container">
                            <div class="swiper-wrapper">

                                <?php foreach ($recently_viewed as $product) { ?>
                                    <div class="swiper-slide"><?php include "layout/areas/catalog_item.php"?></div>
                                <?php } ?>

                            </div>
                            <!-- Add Arrows -->

                        </div>
                        <div class="customNextBtn fa fa-angle-right"></div>
                        <div class="customPrevBtn fa fa-angle-left"></div>
	                    <?php } else {?>
							<div class="f_container f_wrap catalog__block">
			                    <?php foreach ($recently_viewed as $product) {
                                    include "layout/areas/catalog_item.php";
			                    }?>
							</div>
	                    <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
</div>