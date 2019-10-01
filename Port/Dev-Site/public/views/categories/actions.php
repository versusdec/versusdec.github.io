<?php if (!empty($banners) && !empty($banners['horizontal'])){?>
    <a href="<?php echo !empty($banners['horizontal']['url'])?$banners['horizontal']['url']:'#'; ?>" class="offer">
        <div class="full-width-offer"><?php echo !empty($banners['horizontal']['sm_description'])?$banners['horizontal']['sm_description']:'' ?></div>
    </a>
<?php } ?>
<section class="special-offers">
    <div class="block">
        <div class="title">
            <div class="title-text">Акции</div>
            <div class="green-bar"></div>
            <!--
            <a href="/actions/">
                <div class="button button-lg button-white">посмотреть все</div>
            </a>
            -->
        </div>
        <div class="discounts-wrapper">
            <!--
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            <div class="discount-item">
                <div class="discount-item__name">Скидка на покупку</div>
                <div class="discount-item__image"><img src="/img/bg-city.png" alt=""></div>
                <div class="discount-item__short-desc">
                    Акция в магазинах «ПАКТОР» — на женский
                    ассортимент, продающийся со скидкой,
                    предоставляется дополнительная скидка <span class="discount-value">70%</span>.
                    <br/><br/>
                    Приглашаем за выгодными покупками!
                </div>
                <div class="share">Рассказать друзьям</div>
            </div>
            -->
            <?php if (!empty($actions)){?>
                <?php foreach ($actions as $action_item){?>
                    <?php include $WIDGETS . 'action_item.php'; ?>
                <?php } ?>
            <?php } ?>
        </div>
        <?php if (!empty($banners)){?>
            <div class="offer">
                <?php if (!empty($banners['horizontal-sm-1'])){ ?>
                    <a href="<?php echo !empty($banners['horizontal-sm-1']['url'])?$banners['horizontal-sm-1']['url']:'#'; ?>" class="horizontal-offer"></a>
                <?php }elseif (!empty($banners['horizontal-sm-2'])){ ?>
                    <a href="<?php echo !empty($banners['horizontal-sm-2']['url'])?$banners['horizontal-sm-2']['url']:'#'; ?>" class="horizontal-offer"></a>
                <?php }elseif (!empty($banners['horizontal-sm-3'])){ ?>
                    <a href="<?php echo !empty($banners['horizontal-sm-3']['url'])?$banners['horizontal-sm-3']['url']:'#'; ?>" class="horizontal-offer"></a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>