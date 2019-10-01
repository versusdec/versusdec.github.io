<ul class="breadcrumb">
    <li><a href="/">Главная</a></li>
    <li><a href="/vacancies/">Вакансии</a></li>
    <?php if (!empty($category)){ ?>
        <li>
            <a href="<?php echo $category['meta']['url']; ?>">
                <?php echo !empty($category['meta']['breadcrumbs'])?$category['meta']['breadcrumbs']:$category['h1']; ?>
            </a>
        </li>
    <?php } ?>
    <li><a href="<?php echo $this->meta['url']; ?>"><?php echo !empty($this->meta['breadcrumbs'])?$this->meta['breadcrumbs']:$vacancy['h1']; ?></a></li>
</ul>

<section class="company-jobs" id="jobs">
    <div class="jobs-background"></div>
    <div class="block">
        <div class="jobs-wrapper">
            <?php include $WIDGETS . 'vacancy_item_lg.php'; ?>
        </div>
    </div>
</section>