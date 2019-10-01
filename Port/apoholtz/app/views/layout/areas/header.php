<header>
    <div class="header_wrapper">
        <div class="logo">
            <?php if (!empty($this->meta) && !empty($this->meta->id) && $this->meta->id == 1) { ?>
                <img src="/img/logo.png" alt="logo">
            <?php } else { ?>
                <a title="Home" href="/">
                    <img src="/img/logo.png" alt="logo">
                </a>
            <?php } ?>

        </div>
        <div class="chat">
            <span class="header_title">chat online</span>
            <div>
                <span>need help with auto parts?</span>
            </div>
        </div>
        <div class="callus">
            <span class="header_title">call us</span>
            <div>
                <span><a href="tel:<?php echo $this->settings->phoneRetail; ?>"><?php echo $this->settings->phoneRetail; ?></a> </span>
                <span><a href="tel:<?php echo $this->settings->phoneWholesale; ?>"><?php echo $this->settings->phoneWholesale; ?></a></span>
            </div>
        </div>
        <div class="recall">
            or
            <div class="button_sm button callback_btn">Rückruf</div>

        </div>
        <div class="links">
            <?php if (!empty($this->menu->top)) { ?>
                <?php foreach ($this->menu->top as $menu_item) { ?>
                    <a href="<?php echo $menu_item->url; ?>"><span><?php echo $menu_item->name; ?></span></a>
                <?php } ?>
            <?php } ?>
            <!--
            <a href="#"><span>delivery information</span></a>
            <a href="#"><span>privacy policy</span></a>
            -->
            <!--<form class="header_search">
                <div class="search_lens"></div>
                <input type="search" class="search_input" placeholder="Search here...">
            </form>-->
        </div>
    </div>
    <div class="mobile_header">
        <div class="logo"><?php if (!empty($this->meta) && !empty($this->meta->id) && $this->meta->id == 1) { ?>
                <img src="/img/logo.png" alt="logo">
            <?php } else { ?>
                <a title="Home" href="/">
                    <img src="/img/logo.png" alt="logo">
                </a>
            <?php } ?></div>
        <div class="callus">
            <span class="header_title"></span>
            <div>
                <span><a href="tel:<?php echo $this->settings->phoneRetail; ?>"><?php echo $this->settings->phoneRetail; ?></a> </span>
                <span><a href="tel:<?php echo $this->settings->phoneWholesale; ?>"><?php echo $this->settings->phoneWholesale; ?></a></span>
            </div>
        </div>
        <div class="menu_icon_wrap">
            <div class="menu_icon"></div>
        </div>

    </div>
</header>
<div class="nav_wrapp">
    <?php if (!empty($this->menu->main)) { ?>
        <nav>
            <div class="menu">
                <?php foreach ($this->menu->main as $menu_item) { ?>
                    <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->name; ?></a>
                <?php } ?>
                <!--
                <a href="/">Home</a>
                <a href="#">about</a>
                <a href="#">services</a>
                <a href="#">portfolio</a>
                <a href="#">testimonials</a>
                <a href="/contacts">contact</a>
                -->
            </div>
        </nav>
    <?php } ?>
</div>
