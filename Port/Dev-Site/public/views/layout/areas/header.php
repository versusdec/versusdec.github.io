<header class="stick-to-top">
    <div class="stripe"></div>
    <div class="header-wrapper">
        <div class="logo">
            <a href="/">
                <img src="/img/SVIBLOVO.RU.png" alt="SVIBLOVO.RU">
            </a>
            <p>районный портал</p>
        </div>
        <div class="device-wrapper">
            <div class="device-inner-wrapper">
                <div class="header-menu">
                    <form action="" class="search-form">
                        <input type="text" class="search-bar">
                        <button type="submit" class="button button-white button-xs">найти</button>
                    </form>
                    <ul class="menu">
                        <!--
                        <li><a href="/catalog-company.html">компании</a></li>
                        <li><a href="/jobs.html">вакансии</a></li>
                        <li><a href="/services-catalog.html">услуги</a></li>
                        <li><a href="#">объявления</a></li>
                        <li><a href="#">форумы</a></li>
                        <li><a href="#">новости</a></li>
                        -->
                        <?php if (!empty($this->menu['top'])){?>
                            <?php foreach ($this->menu['top'] as $menu_item){?>
                                <li><a href="<?php echo $menu_item['url'];?>"><?php echo $menu_item['h1'];?></a></li>
                            <?php } ?>
                        <?php }?>
                    </ul>
                </div>
                <div class="login-wrapper">
                    <div>
                        <?php if (!empty($this->user)){?>
                            <a href="/customer/">Привет, <?php echo $this->user['name']; ?></a>
                            <a href="/customer/logout/">выйти</a>
                        <?php } else {?>
                        <a href="#">войти</a>
                        <a href="#">регистрация</a>
                        <?php } ?>
                    </div>
                    <div>
                        <!--
                        <a href="#"><span class="social vk"></span></a>
                        <a href="#"><span class="social fb"></span></a>
                        <a href="#"><span class="social ok"></span></a>
                        <a href="#"><span class="social insta"></span></a>
                        -->
                        <a href="<?php echo !empty($this->settings['vk'])?$this->settings['vk']:'#'; ?>"><span class="social vk"></span></a>
                        <a href="<?php echo !empty($this->settings['facebook'])?$this->settings['facebook']:'#'; ?>"><span class="social fb"></span></a>
                        <a href="<?php echo !empty($this->settings['ok'])?$this->settings['ok']:'#'; ?>"><span class="social ok"></span></a>
                        <a href="<?php echo !empty($this->settings['instagram'])?$this->settings['instagram']:'#'; ?>"><span class="social insta"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <i class="fas fa-caret-square-down menu-button"></i>
    </div>
</header>