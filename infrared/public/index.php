<?php
include_once 'bootstrap.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$_SERVER['REQUEST_URI'] = explode("?", $_SERVER['REQUEST_URI'])[0];
$redirect = \core\api::get('redirects/get', ['uri' => $_SERVER['REQUEST_URI']]);

if (!empty($redirect)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$redirect->redirect_url);
    exit;
}

if ($_SERVER['REQUEST_URI'] == '/sitemap.xml') {
    $controller = new controllers\sitemap();
    $controller->index();
    exit;
}
/*
if ($_SERVER['REQUEST_URI'] == '/en/feed/rss.xml') {
    $controller = new controllers\feed(null, 'en', false);
    $controller->index();
    exit;
}

if ($_SERVER['REQUEST_URI'] == '/feed/rss.xml') {
    $controller = new controllers\feed(null, 'ru', false);
    $controller->index();
    exit;
}
*/
if (preg_match('/(\/(en))?\/([a-z]+)\/rss.xml|(\/(en))?\/([a-z]+)\/([0-9]+)\/rss.xml/i', $_SERVER['REQUEST_URI'], $ms, 0,0)){
    if (!empty($ms[3]) && $ms[3] == 'blog'){
        $articles_lang = 'ru';
        if (!empty($ms[2]) && $ms[2] == 'en'){
            $articles_lang = 'en';
        }
        $controller = new controllers\feed(null, $articles_lang, false);
        $controller->articles();
        exit;
    } elseif (!empty($ms[6]) && $ms[6] == 'news'){
        $news_lang = 'ru';
        $news_cat = 0;
        if (!empty($ms[5]) && $ms[5] == 'en'){
            $news_lang = 'en';
        }
        if (!empty($ms[7])){
            $news_cat = $ms[7];
        }
        $controller = new controllers\feed(null, $news_lang, $news_cat);
        $controller->news();
        exit();
    } elseif (!empty($ms[6]) && $ms[6] == 'career'){
        $career_lang = 'ru';
        $career_section = 0;
        if (!empty($ms[5]) && $ms[5] == 'en'){
            $career_lang = 'en';
        }
        if (!empty($ms[7])){
            $career_section = $ms[7];
        }
        $controller = new controllers\feed(null, $career_lang, $career_section);
        $controller->career();
        exit();
    }
}

if (empty($_GET) && $_SERVER['REQUEST_METHOD'] != 'POST') {
    if (substr($_SERVER['REQUEST_URI'], -1) != '/') {
        $moved = $_SERVER['REQUEST_URI'].'/';
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$moved);
        exit;
    }
}

$uri = $_SERVER['REQUEST_URI'];
$page = false;
$request = explode("?", $_SERVER['REQUEST_URI']);
$request = explode("/", trim($request[0], "/"));

if (stristr($_SERVER['REQUEST_URI'], '/page/') !== false
    && (is_numeric(end($request)))) {
    $uri = str_replace('page/'.end($request).'/', '', $_SERVER['REQUEST_URI']);
    $page = end($request);
}


$lang = 'ru';

if (preg_match('/^(\/en\/)/mi', $uri, $matches, 0, 0)){
    $lang = str_replace('/','', $matches[1]);
    $uri = str_replace($matches[1], '/', $uri);
}

$meta = \core\api::get('meta/uri', ['uri' => $uri]);
if (!empty($meta) && $meta->id == 1){
    $meta->type = 'main';
}

if (!empty($meta)) {
    $controller = 'controllers\\' . $meta->type;
    $controller = new $controller($meta, $lang,  $page);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller->request();
    } else {
        $controller->index();
    }
} elseif ($uri == '/sitemap/') {
    notFound($uri, $lang);
} else {

    $strip_lang = [];
    foreach ($request as $k => $v){
        if ($v != $lang){
            $strip_lang[] = $v;
        }
    }
    $request = $strip_lang;

    if (count($request)>=2) {
        $controller = 'controllers\\'.$request[0];
        $method = $request[1];
    } else {
        if ($request[0] == 'customer'){
            $controller = 'controllers\\customer';
            $method = 'index';
        } else {
            $controller = 'controllers\\main';
            $method = $request[0];
        }
    }

    if (class_exists($controller)) {
        $controller = new $controller($meta, $lang, $page);
    } else {
        notFound($uri, $lang);
    }

    if (method_exists($controller, $method)) {
        $controller->$method();
    } else {
        notFound($uri, $lang);
    }
}

function notFound($uri, $lang){
    header('HTTP/1.1 404 Not Found');
    $settings = \core\api::get('settings/getAll');
    $controller = 'controllers\\notFound';
    $controller = new $controller((object)[
        'title_en'=> $settings->not_found_title_en,
        'description_en' => $settings->not_found_desc_en,
        'keywords_en' => $settings->not_found_keywords_en,
        'title_ru'=> $settings->not_found_title_ru,
        'description_ru' => $settings->not_found_desc_ru,
        'keywords_ru' => $settings->not_found_keywords_ru,
        'url' => $uri
    ], $lang, false);
    $controller->index();
}
