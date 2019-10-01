<div class="section">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item">Главная</a>
            <meta itemprop="position" content="1">
            <i class="fa fa-angle-double-right"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span itemprop="name">Корзина</span>
        </li>
    </ol>
    <?php if (empty($cart)) { ?>

        Корзина пустая

    <?php } else { ?>
        <div class="csrt_head f_container f_space_between">
            <h1>Ваша корзина</h1>
        </div>

        <div class="cart_item_block js_cart_item_block f_container f_column">

            <div class="cart_item f_container f_space_between">
                <div>Товар</div>
                <div></div>
                <div>Цена</div>
                <div>Кол-во</div>
                <div>Итого</div>
                <div></div>
            </div>

        </div>

        <div class="f_container pay_info_row">
            <div class="column_half clear-cart-container">
                <!--<div class="pay_info">
                    <img src="/public/images/credit-cart.png" alt="">
                    <span>Наличные, безналичные, Visa/MasterCard</span>
                </div>-->
            </div>
            <div class="column_half f_column text_right">
                <div class="grand_total_cost">
                    <span>Итого к оплате:</span>
                    <span class="js_grand_total_cost bold">0 руб.</span>
                </div>
                <!--
                <div>
                    <a href="/order" class="btn to_order_btn">Оформить заказ</a>
                </div>
                -->
            </div>
        </div>

        <div class="text_right">
            <a href="/order" class="btn to_order_btn">Оформить заказ</a>
        </div>

    <?php } ?>
</div>