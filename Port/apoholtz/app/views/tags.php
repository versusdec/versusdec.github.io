<div class="container">
<section class="columns catalog_section">
    <div class="column_fourth mob">
        <form class="search_form mob f_container" action="/search/" method="get" style="position: relative">
            <input type="text" autocomplete="off" name="q" value="" placeholder="Введите запрос...">
            <div class="nav-submit-button clearfix">
                <button type="submit" title="Перейти" class="button"><i class="fa fa-search"></i></button>
            </div>
            <ul id="search-product-results"></ul>
        </form>
        <a class="btn btn_filter"></a>
        <a href="#" data-target="#CalcModal" data-toggle="modal"  data-category="<?php echo $category->id;?>"  class="btn btn_calc big_btn_calc">КАЛЬКУЛЯТОР</a>
        <div class="wrap_for_mobile_filter">
            <?php if ($filters) { include_once ROOT.'/public/app/views/widgets/filter.php'; } ?>
        </div>
    </div>

    <div class="column_three_quarters">
        <div class="breadcrumbs">
            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="/" itemprop="item">Главная</a>
                    <meta itemprop="position" content="1">
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name" ><?php echo $tag->short_name;?></span>
                </li>
            </ol>
        </div>

        <div class="catalog_title"><h1><?php echo $tag->name;?></h1><span class="btn_filter">Фильтр</span></div>



        <?php if ($current == 1) { echo $tag->short_description;} ?>
		<div class="top_pagination">
		    <?php include ROOT.'/public/app/views/layout/areas/pagination.php' ?>
		</div>
        <div class="f_container f_wrap catalog__block">
            <?php foreach ($products as $product) { ?>
                <?php include ROOT.'/public/app/views/layout/areas/catalog_item.php'?>
            <?php } ?>
        </div>
        <div class="bottom_pagination">
            <?php include ROOT.'/public/app/views/layout/areas/pagination.php' ?>
        </div>
        <div class="category-short-discription">
            <?php if ($current == 1) {echo $tag->description;}?>
        </div>
    </div>
</section>
</div>