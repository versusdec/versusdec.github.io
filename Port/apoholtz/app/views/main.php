<div class="content_wrapper">
    <div class="block slider_block">
        <?php if (!empty($banners)) { ?>
            <div class="slider_container swiper-container">
                <div class="slider_wrapper swiper-wrapper">
                    <?php foreach ($banners as $banner) { ?>
                        <div class="slide swiper-slide">
                            <div class="discount"><span><?php echo $banner->name; ?></span></div>
                            <img src="<?php echo $banner->img; ?>" alt="<?php echo $banner->alt; ?>"
                                 title="<?php echo $banner->title; ?>">
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        <?php } ?>
        <div class="reg_form">
            <div class="title">Der beste Fan auf demdem</div>
            <div class="title2">Еrhalten Sie 30% Rabatt</div>
            <form class="registration form_main">
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
                <div class="modal__message reg_form_message">
                    <div>danke, mein Liebling</div>
                    <div>Wir werden dich zurückrufen</div>
                </div>

            </form>
        </div>
    </div>

    <div class="block">
        <div class="products_block">
            <div class="title">
                Sie können <span>hier bestellen</span>
            </div>
            <div class="description">
                <?php echo $page->small_description; ?>
                <!--
                Konstruktiver Holzschutz aus Gummi schützt die Unterkonstruktion vor Staunässe und
                vermeidet damit Verwitterung und Fäule. Gummigranulat unterleger dienen ebenfalls als
                Dämmfunktion für einen
                erhöhten Trittkomfort. Ein Klappern ist unmöglich, auch auf steinigen Untergrund.
                -->
            </div>
            <div class="menu_items">
                <?php if (!empty($categories)) { ?>
                    <?php foreach ($categories as $category) { ?>
                        <div class="item">
                            <img src="<?php echo $category->img; ?>" alt="<?php echo $category->alt; ?>">
                            <div class="item_menu">
                                <div class="item_name">
                                    <?php echo $category->name; ?>
                                </div>
                                <div class="item_full-name">
                                    <?php echo $category->full_name; ?>
                                </div>
                                <a href="/products">
                                    <div class="button button_sm">
                                        Lieferbar
                                    </div>
                                </a>
                                <div class="menu_minimized">
                                    <div class="red_bar">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="criteria">
                                        <div class="thickness">
                                            <p>Größe</p>
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
                                            <p>Dicke</p>
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
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div class="title_red">
            Sie können <span>Hier bestellen</span>
            <div class="red_bar">
                <div></div>
                <div></div>
            </div>
            <div class="red_bar_reverse">
                <div></div>
                <div></div>
            </div>
        </div>

        <div>
            <?php echo $page->description; ?>
        </div>
        <!--
        <p>
            Monkey Bar auf dem Dach des 25 Hours Hotel Bikini Berlin ein Hotspot. <a href="javascript:void(0)">Noch
                immer sind die
                Schlangen
                insbesondere</a> an Wochenenden lang. Verwundern kann das nicht – bei dieser grandiosen Aussicht.
            Von
            der
            umlaufenden Terrasse im zehnten Stock bietet sich ein weiter Blick über den Tiergarten, und auf der
            anderen
            Seite kann man die Neuerfindung der City West rund um die Gedächtniskirche verfolgen.
        </p>
        <p>
            Ja, auch das Affenhaus des Zoos liegt dem Barbesucher zu Füßen. Das Innere ist mit viel Holz, in warmen
            Farben und Liebe zum Detail designt: Blickfang ist die Bar und eine DJ-Ecke, an deren Turntables
            regelmäßig
            aufgelegt wird. Wie das Design ist die Cocktail­karte vom Dschungelmotiv inspiriert. Exotisches,
            Klassisches, solide zubereitet. Allerdings ist mit Wartezeiten zu rechnen, nicht immer kann der Service
            den
            Andrang meistern.
        </p>
        <p>
            Monkey Bar auf dem Dach des 25 Hours Hotel Bikini Berlin ein Hotspot. Noch immer sind die Schlangen
            insbesondere an Wochenenden lang. Verwundern kann das nicht – bei dieser
            Noch immer sind die Schlangen insbesondere an Wochenenden lang. Verwundern kann das nicht – bei dieser
        </p>
        -->

    </div>
    <div class="special_offer">
        <img src="/img/special.jpg" alt="">
    </div>
    <div class="block">

        <div class="mobile_visibility">
            <div class="title_green">
                <div>UNSERE <span> ARBEITEN </span></div>
                <div class="green_bar">
                    <div></div>
                    <div></div>
                </div>
                <div class="sub_title">Konstruktiver Holzschutz aus Gummi schützt die Unterkonstruktion vor
                    Staunässe
                    und vermeidet damit Verwitterung
                </div>
            </div>
            <div class="examples_grid">
                <div class="grid_item1">
                    <img src="/img/20141224124027.jpg" alt="">
                    <div class="item_title_wrap">
                        <div class="blur"></div>
                        <div class="square"></div>
                        <div class="item_title">
                            Sperrholz
                            an den
                            Wänden
                        </div>
                    </div>
                </div>
                <div class="grid_item2">
                    <img src="/img/2.jpg" alt="">
                    <div class="item_title_wrap">
                        <div class="blur"></div>
                        <div class="square"></div>
                        <div class="item_title">
                            Plywood for furniture
                        </div>
                    </div>
                </div>
                <div class="grid_item3">
                    <img src="/img/3.jpg" alt="">
                    <div class="item_title_wrap">
                        <div class="blur"></div>
                        <div class="square"></div>
                        <div class="item_title">
                            Sperrholz
                            für die
                            Dekoration
                        </div>
                    </div>
                </div>
                <div class="grid_item4">
                    <img src="/img/22872.jpg" alt="">
                    <div class="item_title_wrap">
                        <div class="blur"></div>
                        <div class="square"></div>
                        <div class="item_title">
                            Sperrholz
                            für<br/>
                            Möbel
                        </div>
                    </div>
                </div>
                <div class="grid_item5">
                    <img src="/img/12312e.jpg" alt="">
                    <div class="item_title_wrap">
                        <div class="blur"></div>
                        <div class="square"></div>
                        <div class="item_title">
                            Sperrholz für Parkett
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title_green">
            <div>Unsere <span> Arbeiten </span></div>
            <div class="green_bar">
                <div></div>
                <div></div>
            </div>
            <div class="sub_title">Konstruktiver Holzschutz aus Gummi schützt die Unterkonstruktion vor
                Staunässe
                und vermeidet damit
            </div>
        </div>
        <div class="support">

            <div class="support_item">
                <div class="support_item__image">
                    <img src="/img/sert.png" alt="">
                </div>
                <div class="support_item__title">
                    Qualität<br/>
                    Produktion
                </div>
                <div class="support_item__desc">
                    Konstruktiver Holzschutz aus Gummi schützt die Unterkon
                    struktion vor Staunässe und
                </div>
            </div>
            <div class="support_item">
                <div class="support_item__image">
                    <img src="/img/truck.png" alt="">
                </div>
                <div class="support_item__title">
                    Schnell<br/>
                    Lieferung
                </div>
                <div class="support_item__desc">
                    Konstruktiver Holzschutz aus Gummi schützt die Unterkon
                    struktion vor Staunässe und
                </div>
            </div>
            <div class="support_item">
                <div class="support_item__image">
                    <img src="/img/medal.png" alt="">
                </div>
                <div class="support_item__title">
                    Das Beste<br/>
                    der Preis
                </div>
                <div class="support_item__desc">
                    Konstruktiver Holzschutz aus Gummi schützt die Unterkon
                    struktion vor Staunässe und
                </div>
            </div>
            <div class="support_item">
                <div class="support_item__image">
                    <img src="/img/phone.png" alt="">
                </div>
                <div class="support_item__title">
                    Beratung<br/>
                    und Hilfe
                </div>
                <div class="support_item__desc">
                    Konstruktiver Holzschutz aus Gummi schützt die Unterkon
                    struktion vor
                    Staunässe und
                </div>
            </div>

        </div>
    </div>
    <div class="map_wrapper">
        <div class="contacts_title">
            <div>UNSERE <span> KONTAKTE </span></div>
            <div class="green_bar">
                <div></div>
                <div></div>
            </div>
        </div>

        <div id="map"></div>
        <div class="map_cont">
            <div class="cont_item">
                <div class="image">
                    <img src="/img/map-icon.png" alt="">
                </div>
                <div class="text">Alte Jakobstraße 124-128,<br/>
                    10969 Berlin
                </div>
            </div>
            <div class="cont_item">
                <div class="image">
                    <img src="/img/phone-icon.png" alt="">
                </div>
                <div class="text">+49 30 78902600<br/>+49 30 78902606</div>
            </div>
            <div class="cont_item">
                <div class="image">
                    <img src="/img/mail-icon.png" alt="">
                </div>
                <div class="text"><a href="mailto:info@apaholz.de">info@apaholz.de</a></div>
            </div>
            <div class="cont_item">
                <div class="image">
                    <img src="/img/web-icon.png" alt="">
                </div>
                <div class="text"><a href="javascript:void(0)">apaholz.de</a></div>
            </div>
        </div>
    </div>
    <div class="sert block">
        <div class="title_red">
            Unsere <span>Zertifikate</span>
            <div class="red_bar_reverse">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <div class="sertificates">
        <div class="sert_slider swiper-container">
            <div class="sert_wrapp swiper-wrapper">
                <div class="swiper-slide sert_slide"><img src="/img/sertif.png" alt=""></div>
                <div class="swiper-slide sert_slide"><img src="/img/sertif.png" alt=""></div>
                <div class="swiper-slide sert_slide"><img src="/img/sertif.png" alt=""></div>
                <div class="swiper-slide sert_slide"><img src="/img/sertif.png" alt=""></div>
                <div class="swiper-slide sert_slide"><img src="/img/sertif.png" alt=""></div>
                <div class="swiper-slide sert_slide"><img src="/img/sertif.png" alt=""></div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="part block">
        <div class="title_green">
            <div>Unsere <span> Lieblingskunden </span></div>
            <div class="green_bar">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <?php if (!empty($brands)) { ?>
        <div class="partners">
            <div class="part_slider swiper-container">
                <div class="part_wrapp swiper-wrapper">
                    <?php foreach ($brands as $brand) { ?>
                        <div class="swiper-slide part_slide"><img src="<?php echo $brand->img; ?>"
                                                                  alt="<?php echo $brand->alt; ?>"></div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    <?php } ?>
</div>