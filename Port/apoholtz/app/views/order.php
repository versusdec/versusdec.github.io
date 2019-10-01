<div class="container f_column section js_order_container">
    <div><h1>Оформление заказа</h1></div>
    <div class="f_container f_space_between order_wrap">

        <div class="column_half rows order_form_wrap">
            <div class="title">1. Введите контактные данные:</div>

            <div class="f_container f_space_between order_form">
                <div class="column_thirty">
                    <input type="text" placeholder="Имя" name="buyer_name">
                    <i class="fa fa-user"></i>
                </div>
                <div class="column_thirty">
                    <input type="text" placeholder="Email" name="buyer_email">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="column_thirty">
                    <input name="buyer_phone" type="text" class="_phone" placeholder="Телефон" required="" value="+7 (___) ___ __ __">
                    <i class="fa fa-phone"></i>
                </div>
            </div>



            <div class="title m_t_40">2. Выберите метод оплаты:</div>
            <div>
                <input class="green_ply_radio" type="radio" value="2" id="math_cash" name="pay_method" checked><label for="math_cash" class="bold green_ply_radio"> Наличными</label>
            </div>
            <div class="m_t_10">
                <input class="green_ply_radio" type="radio" value="1" id="math_card" name="pay_method"><label for="math_card" class="bold green_ply_radio"> Банковской картой</label>
            </div>

            <div class="method_title m_t_40">3. Выберите метод доставки:</div>
            <div class="delivery_method m_t_30">
                <input class="green_ply_radio" type="radio" value="1" id="del_f" name="delivery" checked><label class="bold green_ply_radio" for="del_f"> Самовывоз <span></span></label>
            </div>
            <div class="delivery_method m_t_10">
                <input class="green_ply_radio" type="radio" value="2" id="del_s" name="delivery"><label class="bold green_ply_radio" for="del_s"> С помощью службы доставки <span><!--( <span class="map_delivery_cost">0 руб.</span> )--></span></label>
            </div>
            <div class="map_label">
                <span>Для расчета стоимости доставки заполните поля &laquo;Город&raquo; и &laquo;Адрес&raquo;</span>
                <span>Важно!</span> Сверьте введенный адрес с адресом указанным на карте.
            </div>
            <div class="f_container f_space_between m_t_20 delivery_fields">
                <div class="column_thirty">
                    <input type="text" placeholder="Город" name="buyer_city">
                    <i class="fa fa-university"></i>
                </div>
                <div class="column_xthirty">
                    <input type="text" placeholder="Адрес" name="buyer_address">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
            <div id="map_container"></div>
        </div>

        <div class="column_half">
            <div class="order_items_wrap">

                <div class="title">Ваша покупка</div>

                <div class="order_item_block f_container f_column">

                    <div class="order_item_wrap f_container">
                        <div>Товар</div>
                        <div>Кол-во</div>
                        <div>Итого</div>
                    </div>
                    <?php foreach ($products as $product) { ?>
                        <div class="order_item_wrap f_container">
                            <div class="f_container">
                                <a href="<?php echo $product->url;?>">
                                <img src="<?php echo $product->img ?>" alt="product">
                                </a>
                                <div>
                                    <p><a href="<?php echo $product->url; ?>"><?php echo $product->name ?></a></p>
                                    <p class="big">Цена: <?php echo $product->cost ?> руб.</p>
                                </div>
                            </div>
                            <div class="f_container f_align_center big"><?php echo $product->count ?></div>

                            <div data-item-weight="<?php echo $product->count * $product->weight;?>" class="f_container f_align_center big js_order_item_cost"><?php echo number_format($product->count * $product->cost, 0, '', ' ' ); ?> руб.</div>
                        </div>
                    <?php } ?>

                    <div class="order_item_panel f_container f_align_center">
                        <div class="text_right js_delivery_total">Доставка: <span class="js_delivery_info">самовывоз</span>
                            <span class="js_delivery_notif">Для расчета стоимости доставки выберите пункт:<br> &laquo;С помощью службы доставки&raquo;</span>
                        </div>
                        <div class="big text_right"><span class="js_order_delivery_cost">0 руб.</span></div>
                    </div>
                    <div class="order_item_panel f_container f_align_center">
                        <div class="text_right">Итого к оплате:</div>
                        <div class="big text_right js_order_total_cost"></div>
                    </div>
                    <div class="order_final_container">
                        <div>
                            <a href="/cart/" class="btn cart_final_btn btn-gray">Изменить заказ</a>
                        </div>
                        <div>
                            <a href="#" class="btn order_final_btn">Сделать заказ</a>
                        </div>
                    </div>
                </div>
<!--
                <div class="rows rows_end order_final_panel">
                    <div>Итого:<span class="js_order_total_cost"></span></div>
                    <a href="#" class="btn order_final_btn">Сделать заказ</a>
                </div>
-->
            </div>
        </div>
    </div>
</div>