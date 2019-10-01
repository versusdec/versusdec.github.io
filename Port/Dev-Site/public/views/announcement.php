<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <li><a href="/announcements/">Частные объявления</a></li>
    <?php if (!empty($category)){ ?>
        <li>
            <a href="<?php echo $category['meta']['url']; ?>">
                <?php echo !empty($category['meta']['breadcrumbs'])?$category['meta']['breadcrumbs']:$category['h1']; ?>
            </a>
        </li>
    <?php } ?>
    <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$announcement['h1']; ?></a></li>
</ul>
<section>
    <div class="block">
        <div class="catalog-item-wrapper">
            <div>
                <div class="catalog-item__name"><?php echo $announcement['h1']; ?></div>
                <div>
                    <?php echo $announcement['description']; ?>
                </div>
            </div>
        </div>
    </div>
</section>