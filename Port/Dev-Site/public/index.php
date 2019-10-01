<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('ROOT', rtrim(realpath(__DIR__.'/../'), '/'));

include_once ROOT.'/api/core/autoload.php';

$config = \core\config::getInstance();
$config->set(ROOT.'/config.ini');

$uri = $_SERVER['REQUEST_URI'];
//$request = new \core\request($_GET);

$controller = new \core\controller();
$redirect = $controller->api->call('redirects.get', ['uri' => $uri]);

if (!empty($redirect)) {
    header('Location: '.$redirect['redirect_url'], true, 301);
    exit;
}

if ( (strpos($uri, '?') === false)&&(strpos($uri, '.') === false)&&(substr($uri, -1) != '/') ){
    header('Location: '.$uri.'/', true, 301);
    exit();
}

$uri = explode('?', $uri)[0];

$meta = $controller->api->call('meta.get', ['uri' => $uri]);

define('BASE', ROOT . '/public/');

if (!empty($meta)){
    if ($meta['id'] == '1') $meta['type'] = 'main';

    $controller = 'controllers\\'.$meta['type'];
    if (class_exists($controller)) {
        $controller = new $controller($meta);
        if (method_exists($controller, 'index')) {
            $controller->index();
        } elseif (method_exists($controller, 'request')){
            $controller->request();
        } else {
            notFound();
        }
    } else {
        notFound();
    }
} else {
    $uri = trim($uri, '/');
    $parts = explode('/', $uri);
    if (count($parts) == 2){
        $controller = 'controllers\\'.$parts[0];
        if (class_exists($controller)) {
            $controller = new $controller($meta);
            if (method_exists($controller, $parts[1])) {
                $controller->{$parts[1]}();
            } else {
                notFound();
            }
        } else {
            notFound();
        }
    } else {
        $controller = new \controllers\main($meta);
        $method = $uri;
        if (method_exists($controller, $method)){
            $controller->{$method}();
        } else {
            notFound();
        }
    }
}

function notFound()
{
    header("HTTP/1.1 404 Not Found");
    $meta = [
        'url' => $_SERVER['REQUEST_URI'],
        'title' => '',
        'description' => '',
        'keywords' => '',
        'canonical' => '',
        'type' => 'notfound',
        'noindex' => 0,
        'nofollow' => 0
    ];
    $controller = new controllers\notfound($meta);
    $controller->index();
    exit();
}


