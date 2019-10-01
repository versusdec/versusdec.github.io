<section class="breadcrumbs">
	<div class="container">
		<ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="/" itemprop="item">Главная</a>
				<meta itemprop="position" content="1">
                <i class="fa fa-angle-double-right"></i>
			</li>
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<span itemprop="name">Карта сайта</span>
			</li>
		</ol>
	</div>
</section>

<section class="static-page">
	<div class="container">
		<div class="section-title">
            <h1>Карта сайта</h1>
        </div>
		<div class="static-page-discription">
			<?php if ($current == 1) { ?>
			<div class="col-lg-6 col-md-6">
				<span class="sitemap-title">Категории</span>
				<ul>
					<?php foreach ( $categories as $item) { ?>
						<a href="<?php echo $item->url?>"><li><?php echo $item->name?></li></a>
					<?php } ?>
				</ul>
				<span class="sitemap-title">Страницы</span>
				<ul>
					<?php foreach ( $articles as $item) { ?>
						<a href="<?php echo $item->url?>"><li><?php echo $item->name?></li></a>
					<?php } ?>
				</ul>
				<span class="sitemap-title">Применение</span>
				<ul>
					<?php foreach ( $tags as $item) { ?>
						<a href="<?php echo $item->url?>"><li><?php echo $item->name?></li></a>
					<?php } ?>
				</ul>
                <!--
				<span class="sitemap-title">Новости</span>
				<ul>
					<a href="<?php echo $newsSection->url; ?>"><li>Новости и статьи</li></a>
					<?php foreach ( $news as $item) { ?>
						<a href="<?php echo $item->url?>"><li><?php echo $item->name?></li></a>
					<?php } ?>
				</ul>
				-->
			</div>
			<div class="col-lg-6 col-md-6">
				<span class="sitemap-title">Назначение</span>
				<ul>
					<?php foreach ( $presets as $item) { ?>
						<a href="<?php echo $item->url?>"><li><?php echo $item->name?></li></a>
					<?php } ?>
				</ul>
				<span class="sitemap-title">Продукты</span>
				<ul>
					<?php foreach ( $products as $item) { ?>
						<a href="<?php echo $item->url?>"><li><?php echo $item->name?></li></a>
					<?php } ?>
				</ul>
			</div>
			<?php } else { ?>
				<div class="col-lg-6 col-md-6">
					<span class="sitemap-title">Продукты</span>
					<ul>
						<?php foreach ( $products as $item) { ?>
							<a href="<?php echo $item->url?>"><li><?php echo $item->name?></li></a>
						<?php } ?>
					</ul>
				</div>
				<?php if ($presets) { ?>
					<div class="col-lg-6 col-md-6">
						<span class="sitemap-title">Назначение</span>
						<ul>
							<?php foreach ( $presets as $item) { ?>
								<a href="<?php echo $item->url?>"><li><?php echo $item->name?></li></a>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
    <nav class="pagination-block">
        <?php include_once ROOT.'/public/app/views/layout/areas/pagination.php' ?>
    </nav>
    </div>

</section>