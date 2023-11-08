<!DOCTYPE html>
<html lang="<?php echo $this->lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php
        switch ($this->lang){
            case 'en':
                echo $this->meta->title_en;
                break;
            default: echo $this->meta->title_ru;
        }
        ?></title>
    <meta name="description" content="<?php
    switch ($this->lang){
        case 'en':
            echo $this->meta->description_en?$this->meta->description_en:'';
            break;
        default: echo $this->meta->description_ru?$this->meta->description_ru:'';
    }
    ?>">
    <meta name="keywords" content="<?php
    switch ($this->lang){
        case 'en':
            echo $this->meta->keywords_en?$this->meta->keywords_en:'';
            break;
        default: echo $this->meta->keywords_ru?$this->meta->keywords_ru:'';
    }
    ?>">
    <?php if (!empty($this->meta->canonical)) { ?>
        <link rel="canonical" href="<?php echo $this->meta->canonical; ?>">
    <?php } ?>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <?php if (isset($this->meta->noindex) && $this->meta->noindex == '1') { ?>
        <?php if (isset($this->meta->nofollow) && $this->meta->nofollow == '1') { ?>
            <meta name="robots" content="noindex, nofollow">
        <?php } else { ?>
            <meta name="robots" content="noindex">
        <?php } ?>
    <?php } else { ?>
        <?php if (isset($this->meta->nofollow) && $this->meta->nofollow == '1') { ?>
            <meta name="robots" content="nofollow">
        <?php } ?>
    <?php } ?>
    <?php echo $this->settings->gtm_head; ?>
    <?php if (!empty($this->rss)){?>
    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="http://<?php echo $_SERVER['HTTP_HOST'].$this->rss; ?>">
    <?php } ?>
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/main.css?v2.06">
    <link rel="stylesheet" href="/css/media-queries.css?v1.06">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=0a95a14f-e5c8-40d3-b5a5-cab0ab71a8bd&lang=ru_RU"
            type="text/javascript">
    </script>
</head>
<body>
<?php echo $this->settings->yandex; ?>
<?php echo $this->settings->google; ?>
<?php echo $this->settings->gtm_body; ?>
<?php include_once 'areas/header.php' ?>
<main>
    <?php echo $content; ?>
</main>
<?php include_once 'areas/footer.php' ?>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/swiper.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/masked.input.min.js"></script>
<script src="/js/main.js?v1.604" async></script>
</body>
</html>