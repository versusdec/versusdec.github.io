<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->meta['title']; ?></title>
    <meta name="description" content="<?php echo $this->meta['description']; ?>">
    <meta name="keywords" content="<?php echo $this->meta['keywords']; ?>">
    <?php
    if (!empty($this->meta['canonical'])) {
        echo '<link rel="canonical" href="' . $this->meta['canonical'] . '">';
    } elseif (!empty($_SERVER['QUERY_STRING'])) {
        echo '<link rel="canonical" href="' . $this->meta['url'] . '">';
    }
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/critical.css">
    <?php echo $this->settings['gtm_head']; ?>
</head>
<body>
<?php
echo $this->settings['gtm_body'];
include_once 'areas/header.php';
?>
<main>
    <?php
    echo $content;
    ?>
</main>
<?php
include_once 'areas/footer.php';
?>
<script src="/js/vendor/jquery-3.3.1.min.js"></script>
<script>function loadcss(h) {
        var d = document, f = d.querySelector('head'), l = d.createElement("link");
        l.rel = "stylesheet";
        l.type = "text/css";
        l.href = h;
        f.appendChild(l);
    }

    loadcss('/css/main.css');</script>
<?php
if (!empty($this->meta['type'])) {
    switch ($this->meta['type']) {
        case 'main':
            echo '<script src="https://api-maps.yandex.ru/2.1/?apikey=e5287575-6c69-4db9-9c09-3823366088b1&lang=ru_RU"></script>
                  <script src="/js/maps.js" async></script>';
            break;
        case 'page':
            echo '<script>loadcss("/components/customSelect/customSelect.component.css")</script>
                  <script src="/js/vendor/jquery.customSelect.min.js"></script>';
            break;
        case 'news':
            break;
        case 'company':
            echo '<script>loadcss("/components/customSelect/customSelect.component.css")</script>
                  <script src="/js/vendor/jquery.customSelect.min.js"></script>
                  <script>loadcss("/css/swiper.min.css")</script>
                  <script src="/js/vendor/swiper.min.js"></script>
                  <script src="https://api-maps.yandex.ru/2.1/?apikey=e5287575-6c69-4db9-9c09-3823366088b1&lang=ru_RU"></script>
                  <script src="/js/maps.js" async></script>';
            break;
        case 'category':
            echo '<script>loadcss("/components/customSelect/customSelect.component.css")</script>
                  <script src="/js/vendor/jquery.customSelect.min.js"></script>';
            break;
        case 'announcement':
            break;
        case 'product':
            echo '<script>loadcss("/css/swiper.min.css")</script>
                  <script src="/js/vendor/swiper.min.js"></script>';
            break;
        case 'vacancy':
            break;
        default:
            //
    }
}
?>
<script type="module" src="/js/main.js" async></script>
</body>
</html>