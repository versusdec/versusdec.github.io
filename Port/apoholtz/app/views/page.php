<div class="content_wrapper<?php if ($this->meta->id == 24){echo ' contacts';}?>">
    <div class="block<?php if ($this->meta->id == 24){echo ' contacts_wrapp';}?>">
        <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/" itemprop="item">home</a>
                <meta itemprop="position" content="1">
                <meta itemprop="name" content="home">
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="<?php echo $this->meta->url;?>" itemprop="item"><?php echo $page->name;?></a>
                <span itemprop="name"><?php echo $page->name;?></span>
                <meta itemprop="position" content="2">
            </li>
        </ul>

        <?php echo $page->description;?>

    </div>
</div>