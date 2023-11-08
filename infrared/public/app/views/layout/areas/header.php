<header>
    <div class="header_inner">
        <div class="header-wrapper">
            <?php if (!empty($this->meta) && !empty($this->meta->id) && $this->meta->id == 1) { ?>
                <img src="/images/logo<?php echo $this->lang == 'en' ? '_en' : '_ru' ?>.png" alt="logo"
                     class="logo-image">
            <?php } else { ?>
                <a title="Home" href="<?php echo $this->lang == 'en' ? '/en/' : '/'; ?>" class="logo-image">
                    <img src="/images/logo<?php echo $this->lang == 'en' ? '_en' : '_ru' ?>.png" alt="logo"
                         class="logo-image">
                </a>
            <?php } ?>
            <div class="header-inner-wrapper">
                <div class="lang-wrap">
                    <a href="<?php echo '/en' . $this->meta->url; ?>"
                       class="lang <?php echo $this->lang == 'en' ? 'active' : ''; ?>">En</a>
                    <a href="<?php echo $this->meta->url; ?>"
                       class="lang <?php echo $this->lang == 'ru' ? 'active' : ''; ?>">Ru</a>
                </div>
                <!--<a href="<?php /*echo $this->lang == 'en' ? '/en/about/' : '/about/'; */ ?>" class="about">
                <?php /*echo $this->lang == 'en' ? 'The Firm' : 'О фирме'; */ ?>
            </a>-->
                <a href="tel:<?php echo $this->stripPhoneNumber($this->settings->phone); ?>" class="big_phone">
                    <?php echo $this->settings->phone; ?>
                </a>
                <div class="h-icons">
                    <a href="mailto:<?php echo $this->settings->email; ?>" class="email icon icon_mail"></a>
                    <a href="<?php echo !empty($this->settings->telegram) ? $this->settings->telegram : '#'; ?>"
                       class="telegram icon icon_telegram"></a>
                    <a href="#"
                       class="phone icon icon_phone callback-btn feedback-btn"></a>
                </div>
                <div class="menu toggle-menu">
                    <div class="menu-btn">
                        <i class="dot"></i>
                        <i class="dot"></i>
                        <i class="dot"></i>
                    </div>
                </div>
            </div>

        </div>
        <nav>
            <ul>
                <?php if (!empty($this->menu->top)) { ?>
                    <?php foreach ($this->menu->top as $menu_item) { ?>
                        <li class="<?php if (!empty($menu_item->children)) echo 'sub' ?>">
                            <a href="<?php echo $this->lang == 'en' ? '/en' : ''; ?><?php echo $menu_item->url; ?>">
                                <?php echo $menu_item->{'h1_' . $this->lang}; ?>
                            </a>
                            <?php if (!empty($menu_item->children)) { ?>
                                <ul class="submenu">
                                    <?php foreach ($menu_item->children as $child_level_2) { ?>
                                        <li>
                                            <a href="<?php echo $this->lang == 'en' ? '/en' : ''; ?><?php echo $child_level_2->url; ?>">
                                                <?php echo $child_level_2->{'h1_' . $this->lang}; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                <?php } ?>
                <ul>
                    <li>
                        <div class="lang-wrap">
                            <a href="<?php echo '/en' . $this->meta->url; ?>"
                               class="lang <?php echo $this->lang == 'en' ? 'active' : ''; ?>">En</a>
                            <a href="<?php echo $this->meta->url; ?>"
                               class="lang <?php echo $this->lang == 'ru' ? 'active' : ''; ?>">Ru</a>
                        </div>
                    </li>
                    <li>
                        <a href="tel:<?php echo $this->stripPhoneNumber($this->settings->phone); ?>" class="big_phone">
                            <?php echo $this->settings->phone; ?>
                        </a>
                    </li>
                    <!--<li>
                        <div class="h-icons">
                            <a href="mailto:<?php /*echo $this->settings->email; */?>" class="email icon icon_mail"></a>
                            <a href="<?php /*echo !empty($this->settings->telegram) ? $this->settings->telegram : '#'; */?>"
                               class="telegram icon icon_telegram"></a>
                            <a href="#"
                               class="phone icon icon_phone callback-btn feedback-btn"></a>
                        </div>
                    </li>-->
                </ul>
            </ul>
        </nav>
    </div>
</header>