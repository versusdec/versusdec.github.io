<footer>
    <div class="footer-wrapper">
        <div class="col">
            <?php if (!empty($this->meta) && !empty($this->meta->id) && $this->meta->id == 1) { ?>
                <img src="/images/logo_footer<?php echo $this->lang == 'en' ? '_en' : '' ?>.png" alt="logo"
                     class="logo-image">
            <?php } else { ?>
                <a title="Home" href="/">
                    <img src="/images/logo_footer<?php echo $this->lang == 'en' ? '_en' : '' ?>.png" alt="logo"
                         class="logo-image">
                </a>
            <?php } ?>
            <div class="address">
                <?php
                switch ($this->lang){
                    case 'en':
                        echo $this->settings->address_en;
                        break;
                    default: echo $this->settings->address_ru;
                }
                ?>
            </div>
        </div>

        <div class="col">
            <a href="tel:<?php echo $this->stripPhoneNumber($this->settings->phone); ?>" class="phone icon icon_phone">
                <?php echo $this->settings->phone; ?>
            </a>
            <span class="copyrights">
                 <?php echo $this->lang == 'en'?'All rights reserved.':'Все права защищены.'; ?>
            </span>
            <div class="social-wrapper">
                <a href="mailto:<?php echo $this->settings->email; ?>" class="email icon_mail icon"></a>
                <a href="<?php echo !empty($this->settings->telegram)?$this->settings->telegram:'#'; ?>"
                   class="telegram icon_telegram icon"></a>
                <a href="<?php echo !empty($this->settings->twitter)?$this->settings->twitter:'#'; ?>" class="twitter icon_twitter icon"></a>
                <a href="<?php echo !empty($this->settings->facebook)?$this->settings->facebook:'#'; ?>"
                   class="facebook icon_facebook icon"></a>
                <a href="tel:<?php echo $this->stripPhoneNumber($this->settings->phone); ?>"
                   class="phone icon_phone icon"></a>
            </div>
        </div>

        <div class="col">
            <nav class="sideline">
                <ul>
                    <?php if (!empty($this->menu->bottom)) { ?>
                        <?php foreach ($this->menu->bottom as $menu_item) { ?>
                            <li>
                                <a href="<?php echo $this->lang == 'en'?'/en':''; ?><?php echo $menu_item->url; ?>">
                                    <?php echo $menu_item->{'h1_'.$this->lang}; ?>
                                </a>
                                <?php if (!empty($menu_item->children)) { ?>
                                    <ul class="submenu">
                                        <?php foreach ($menu_item->children as $child_level_2) { ?>
                                            <li>
                                                <a href="<?php echo $this->lang == 'en'?'/en':''; ?><?php echo $child_level_2->url; ?>">
                                                    <?php echo $child_level_2->{'h1_'.$this->lang}; ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</footer>

<?php include_once 'callback_'.$this->lang.'.php' ?>

<div class="modal thankyou">
    <div class="modal-inner">
        <div class="modal__close-btn">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="modal-message">
        <div><?php echo $this->lang == 'en'? 'Thank you for subscription!' : 'Спасибо! Мы свяжемся с Вами в ближайшее время!'; ?></div>
    </div>
</div>

<div class="modal onmoderation">
    <div class="modal-inner">
        <div class="modal__close-btn">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="modal-message">
        <div><?php echo $this->lang == 'en'? 'Thank you! Your comment is awaiting moderation!' : 'Спасибо! Ваш комментарий отправлен на модерацию!'; ?></div>
    </div>
</div>

