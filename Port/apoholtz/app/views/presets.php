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
            <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                <?php if ($breadcrumbs) { $i = 1;?>
                    <?php foreach($breadcrumbs as $item) { $i++;?>
                        <?php if (isset($item['link'])) { ?>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a href="<?php echo $item['link'];?>" itemprop="item"><?php echo $item['name'];?></a>
                                <meta itemprop="position" content="<?php echo $i;?>">
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                        <?php } else {?>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name" ><?php echo $item['name'];?></span>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="name" >Поиск</span>
                    </li>
                <?php } ?>
            </ol>
        </div>

        <div class="catalog_title">
            <h1><?php if ($title) { echo $title;} ?></h1>
            <?php if (empty($products)):?>
                <p>Нет товаров, соответствующих вашему выбору.</p>
            <?php endif;?>
        </div>


        <div class="static-page-discription"><?php if ($current == 1 && isset($small_description)) { echo $small_description;} ?></div>

		<div class="top_pagination">
		    <?php if (!empty($search_results)):?>
			    <?php include ROOT.'/public/app/views/layout/areas/pagination_search.php' ?>
		    <?php else:?>
			    <?php include ROOT.'/public/app/views/layout/areas/pagination.php' ?>
		    <?php endif;?>
		</div>

        <div class="f_container f_wrap catalog__block">
            <?php foreach ($products as $product) { ?>
                <?php include ROOT.'/public/app/views/layout/areas/catalog_item.php'?>
            <?php } ?>
        </div>
        <div class="bottom_pagination">
            <?php if (!empty($search_results)):?>
                <?php include ROOT.'/public/app/views/layout/areas/pagination_search.php' ?>
            <?php else:?>
                <?php include ROOT.'/public/app/views/layout/areas/pagination.php' ?>
            <?php endif;?>
        </div>
        <div class="category-short-discription static-page-discription">
            <?php if ($current == 1 && isset($description)) {echo $description;}?>
        </div>
    </div>
</section>
</div>