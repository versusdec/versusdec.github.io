<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$page['h1']; ?></a></li>
</ul>
<section>
    <div class="block">
        <div class="catalog-item-wrapper">
            <div>
                <div class="catalog-item__name"><?php echo $page['h1']; ?></div>
                <div>
                    <?php echo $page['description']; ?>
                </div>
            </div>
        </div>
    </div>
</section>