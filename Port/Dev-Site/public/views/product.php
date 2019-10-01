<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <li><a href="/products/">Каталог услуг</a></li>
    <?php if (!empty($category)){ ?>
        <li>
            <a href="<?php echo $category['meta']['url']; ?>">
                <?php echo !empty($category['meta']['breadcrumbs'])?$category['meta']['breadcrumbs']:$category['h1']; ?>
            </a>
        </li>
    <?php } ?>
    <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$product['h1']; ?></a></li>
</ul>
<section>
    <div class="block">
        <div class="catalog-item-wrapper">
            <div class="gallery">
                <div class="swiper-container catalog-item-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/1)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/2)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/3)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/4)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/5)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/6)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/7)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/8)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/9)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/10)"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/1)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/2)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/3)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/4)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/5)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/6)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/7)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/8)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/9)"></div>
                        <div class="swiper-slide"
                             style="background-image:url(http://lorempixel.com/1200/1200/nature/10)"></div>
                    </div>
                </div>
            </div>
            <div class="catalog-item__desc-wrapper">
                <div class="catalog-item__name"><?php echo $product['h1']; ?></div>
                <div class="catalog-item__price">
                    <?php echo !empty($product['price'])&&$product['price']>0?number_format($product['price'], 0, '.', '').' руб':''; ?>
                </div>
                <div class="catalog-item__availability">Наличие: <span><?php echo $product['instock']==1?'Есть':'Нет'; ?></span></div>
                <table class="catalog-item__specifications">
                    <tbody>
                    <tr>
                        <td class="title">Характеристики</td>
                    </tr>
                    <tr>
                        <td>Размер</td>
                        <td>100x100</td>
                    </tr>
                    <tr>
                        <td>Вес</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>Цвет</td>
                        <td>Красный</td>
                    </tr>
                    </tbody>
                </table>
                <div class="catalog-item__desc">
                    <div class="title">Описание</div>
                    <?php echo $product['description']; ?>
                </div>
                <div class="button button-sm button-blue">Заказать</div>
            </div>

        </div>
    </div>
</section>