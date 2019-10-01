<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->meta->title; ?></title>
    <meta name="description" content="<?php echo $this->meta->description ? $this->meta->description : ''; ?>">
    <meta name="keywords" content="<?php echo $this->meta->keywords ? $this->meta->keywords : ''; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (((isset($current) && $current != 1) && ($this->meta->url != '/sitemap/')) ||
        ((!empty($_SERVER['QUERY_STRING'])) && (!empty($this->meta->type))) ||
        (!empty($this->meta->canonical))) { ?>
        <link rel="canonical" href="<?php echo $this->prepareCanonical(); ?>"/>
    <?php } ?>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/media_queries.css">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet'/>
    <?php echo $this->settings->gtmHead; ?>
</head>

<body>
<div class="page-wrapper">


    <?php echo $this->settings->gtmBody; ?>
    <?php include_once 'areas/header.php' ?>
    <?php include_once 'areas/menu.php' ?>

    <?php echo $content; ?>

    <?php include_once __DIR__ . '/../popups/callback.php' ?>
    <?php include_once 'areas/footer.php' ?>

</div>
<script src="/js/main.js" async="async"></script>

</body>
</html>