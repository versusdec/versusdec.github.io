<footer>
    <div class="footer-wrapper">
        <div class="footer-social-wrapper">
            <div class="footer-sitename">
                <div>SVIBLOVO.RU</div>
                <div>районный портал</div>
            </div>
            <div class="footer-social-links">
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
            <div class="footer-rights">
                Все права на материалы, находящиеся на сайте, охраняются
                в соответствии с законодательством РФ.
                При любом использовании материалов сайта,
                ссылка на источник обязательна.
            </div>
        </div>
        <ul class="footer-nav">
            <!--
            <li><a href="#">Новости</a></li>
            <li><a href="#">Компании</a></li>
            <li><a href="#">Каталог</a></li>
            <li><a href="#">Акции</a></li>
            <li><a href="#">Вакансии</a></li>
            -->
            <?php if (!empty($this->menu['bottom'])){?>
                <?php $left_menu = $this->menu['bottom'][0];?>
                    <li><a href="<?php echo $left_menu['url'];?>"><?php echo $left_menu['h1'];?></a></li>
                    <?php if (!empty($left_menu['children'])){?>
                        <?php foreach ($left_menu['children'] as $menu_item){?>
                            <li><a href="<?php echo $menu_item['url'];?>"><?php echo $menu_item['h1'];?></a></li>
                        <?php }?>
                    <?php } ?>
            <?php }?>
        </ul>
        <div class="footer-links-wrapper">
            <ul class="footer-links">
                <!--
                <li><a href="#">О проекте</a></li>
                <li><a href="#">Частные объявления</a></li>
                <li><a href="#">Реклама на сайте</a></li>
                <li><a href="#">Форум</a></li>
                <li><a href="#">Обратная связь</a></li>
                -->
                <?php if (!empty($this->menu['bottom'])){?>
                    <?php $right_menu = $this->menu['bottom'][1];?>
                        <li><a href="<?php echo $right_menu['url'];?>"><?php echo $right_menu['h1'];?></a></li>
                        <?php if (!empty($right_menu['children'])){?>
                            <?php foreach ($right_menu['children'] as $menu_item){?>
                                <li><a href="<?php echo $menu_item['url'];?>"><?php echo $menu_item['h1'];?></a></li>
                            <?php }?>
                        <?php } ?>
                <?php }?>
            </ul>
            <div class="footer-copyright">
                Настоящий сайт является средством массовой информации (СМИ)
                под названиями «sviblovo.ru» – Свидетельство о регистрации Эл №ФС 77-70602
            </div>
        </div>
    </div>
</footer>