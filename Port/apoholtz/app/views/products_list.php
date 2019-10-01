<div class="content_wrapper">
    <div class="block">
        <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/" itemprop="item">home</a>
                <meta itemprop="position" content="1">
                <meta itemprop="name" content="home">
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="<?php echo $this->meta->url;?>" itemprop="item"><?php echo $page->name;?></a>
                <span itemprop="name"><?php echo $page->name;?></span>
                <meta itemprop="position" content="2">
            </li>
        </ul>

        <div class="title_red">
            Sie können <span>Hier bestellen</span>
            <div class="red_bar">
                <div>
                </div>
                <div>
                </div>
            </div>
            <div class="red_bar_reverse">
                <div>
                </div>
                <div>
                </div>
            </div>
        </div>

        <div>
            <?php echo $page->small_description;?>
        </div>

        <div class="catalog_list">
            <?php if (!empty($products)){?>
            <div class="menu_items">
                <?php foreach ($products as $product){?>
                    <div class="item">
                        <img src="<?php echo $product->img;?>" alt="<?php echo $product->alt;?>">
                        <div class="item_menu">
                            <div class="item_name">
                                <?php echo $product->name;?>
                            </div>
                            <div class="item_full-name">
                                <?php echo $product->full_name;?>
                            </div>
                            <div class="button button_sm order_btn" data-product-id="<?php echo $product->id;?>" data-product-name="<?php echo $product->name;?>" data-product-img="<?php echo $product->img;?>">
                                Lieferbar
                            </div>
                            <div class="menu_minimized">
                                <div class="red_bar">
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                <div class="criteria">
                                    <div class="thickness">
                                        <p>Größe
                                        </p>
                                        <div>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                            <a href="javascript:void(0)">6.5 mm</a>
                                        </div>
                                    </div>
                                    <div class="size">
                                        <p>Dicke
                                        </p>
                                        <div>
                                            <a href="javascript:void(0)">2440х1220</a>
                                            <a href="javascript:void(0)">2440х1220</a>
                                            <a href="javascript:void(0)">2440х1220</a>
                                            <a href="javascript:void(0)">2440х1220</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

            </div>
            <?php }?>
        </div>

        <div class="title_green">
            <div>Unsere  <span>Arbeiten</span>
            </div>
            <div class="green_bar">
                <div>
                </div>
                <div>
                </div>
            </div>
        </div>

        <?php echo $page->description;?>

        <div class="reg_form catalog_list_form">
            <div class="title">Der beste Fan auf demdem
            </div>
            <form class="registration products_form">
                <label>
                    <div>Ihr Name </div>
                    <input name="name" type="text" placeholder="" >
                </label>
                <label>
                    <div class="required_field">Ihr Telefon</div>
                    <input name="phone" type="number" placeholder="" required>
                </label>
                <label>
                    <div>Ihre Nachricht </div>
                    <textarea name="comment" placeholder="" ></textarea>
                </label>
                <input type="submit" class="button button_lg" value="BEZAHLUNG">
                <div class="modal__message reg_form_message"><div>danke, mein Liebling</div><div>Wir werden dich zurückrufen</div></div>

            </form>
        </div>
    </div>
</div>

<div class="modal order">
    <div class="modal-inner order_wrapp">
        <div class="modal__close-btn">
            <div></div>
            <div></div>
        </div>
        <div class="item_desc_wrapp">
            <div class="item_desc_text">
                <div class="item_name">Birkensperrholz Platte</div>
                <div class="item_desc">ls Diensteanbieter sind wir gemäß § 7 Abs.1 TMG fürг eigene Inhalte auf diesen
                    Seiten nach den allgemeinen Gesetzen
                </div>
            </div>
            <div class="item_desc_image">
                <img src="/img/fanera1.jpg" alt="">
            </div>
        </div>
        <div class="reg_form catalog_list_form order_form">
            <form class="registration order_form">
                <label>
                    <div>Ihr Name</div>
                    <input name="name" type="text" placeholder="">
                </label>
                <label>
                    <div class="required_field">Ihr Telefon</div>
                    <input name="phone" type="number" placeholder="" required>
                </label>
                <label>
                    <div>Ihre Nachricht</div>
                    <textarea name="comment" placeholder=""></textarea>
                </label>
                <input type="submit" class="button button_lg" value="BEZAHLUNG">

            </form>
        </div>
    </div>
    <div class="modal__message">
        <div>danke, mein Liebling</div>
        <div>Wir werden dich zurückrufen</div>
    </div>
</div>