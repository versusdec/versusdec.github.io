<?php
include_once 'bootstrap.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

ob_start();
$_SERVER['REQUEST_URI'] = explode("?", $_SERVER['REQUEST_URI'])[0];
$redirect = \core\api::get('redirects/getForUrl', ['url' =>  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"]);
//print_r( ['url' =>  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"]); exit();

if (!empty($redirect)) {

	$redirect->redirect_url = str_replace( "http:", "https:", $redirect->redirect_url);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$redirect->redirect_url);
    exit;
}

if ($_SERVER['REQUEST_URI'] == '/sitemap.xml') {
    $controller = new controllers\sitemap();
    $controller->index();
    exit;
}

if ($_SERVER['REQUEST_URI'] == '/market/yandex') {
    $controller = new controllers\market();
    $controller->yandex();
    exit;
}

if ($_SERVER['REQUEST_URI'] == '/market/google.xml') {
    $controller = new controllers\market();
    $controller->google();
    exit;
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

$meta = \core\api::get('meta/uri', ['uri' => $uri]);

if ($_SERVER['REQUEST_URI'] == '/callback'
|| $_SERVER['REQUEST_URI'] == '/quickorder'
|| $_SERVER['REQUEST_URI'] == '/order'
|| $_SERVER['REQUEST_URI'] == '/product'
|| $_SERVER['REQUEST_URI'] == '/sale') {
    $controller = 'controllers\\' . str_replace('/', '', $_SERVER['REQUEST_URI']);
    $controller = new $controller(false, false);
    $controller->request();
    exit();
}

if (stristr($_SERVER['REQUEST_URI'], '/cart/')) {
    $controller = 'controllers\\cart';
    $controller = new $controller((object)[
        'title' => 'Корзина покупок',
        'description'=>'Корзина с вашими покупками на сайте',
        'keywords'=>'корзина',
        'url' => '/cart/'
    ], $page);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller->request();
    }else {
        $controller->index();
    }
    exit();
}

if (stristr($_SERVER['REQUEST_URI'], '/calculator.json')) {
	$controller = 'controllers\\calculator';
	$controller = new $controller();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$controller->request();
	}else {
		$controller->index();
	}
	exit();
}

if (stristr($_SERVER['REQUEST_URI'], '/order/')) {
    $controller = 'controllers\\order';
    $controller = new $controller((object)[
        'title' => 'Оформление заказа',
        'description'=>'Оформление заказа',
        'keywords'=>'заказ',
        'url' => '/order/'
    ], $page);

    if (stristr($_SERVER['REQUEST_URI'], '/order/payture/')) {
        $controller->payture();
    } elseif (stristr($_SERVER['REQUEST_URI'], '/order/payment/')) {
        $controller->payment();
    } elseif (stristr($_SERVER['REQUEST_URI'], '/order/paymentsuccess/')) {
        $controller->paymentsuccess();
    } else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $controller->request();
        }else {
            $controller->index();
        }
    }
    exit();
}

if (stristr($_SERVER['REQUEST_URI'], '/payment-notification/')) {
    $controller = 'controllers\\payment_notification';
    $controller = new $controller($meta, $page);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (stristr($_SERVER['REQUEST_URI'], '/payment-notification/payture/')) {
            $controller->payture();
        } else {
            $controller->request();
        }
    }else {
        header('Location: /');
    }
    exit();
}

if (stristr($_SERVER['REQUEST_URI'], '/search/')) {
    $controller = 'controllers\\search';
    $controller = new $controller($meta, $page);
    $controller->request();
    exit();
}

if (stristr($_SERVER['REQUEST_URI'], '/selection/')) {
    $controller = 'controllers\\selection';
    $controller = new $controller($meta, $page);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller->request();
    }else {
        $controller->index();
    }
    exit();
}

if (!empty($meta)) {
    $controller = 'controllers\\' . $meta->type;
    $controller = new $controller($meta, $page);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller->request();
    } else {
        $controller->index();
    }
} elseif ($uri == '/sitemap/') {
    $controller = 'controllers\\sitemap';
    $controller = new $controller((object)[
        'title'=> 'Карта сайта&nbsp;&mdash; Торговля древесно-плитными материалами',
        'description' => 'Данная страница содержит ссылки на&nbsp;все разделы сайта.',
        'keywords' => 'карта сайта, sitemap'
    ], $page, 'Карта сайта');
    $controller->html();
} else {
    
    if (count($request)>=2) {
        $controller = 'controllers\\'.$request[0];
        $method = $request[1];
    } else {
        $controller = 'controllers\\main';
        $method = $request[0];
    }

    if (class_exists($controller)) {
        $controller = new $controller($meta);
    } else {
        notFound();
    }

    if (method_exists($controller, $method)) {
        $controller->$method();
    } else {
        notFound();
    }
}

function notFound(){
    header("HTTP/1.0 404 Not Found");
    $controller = 'controllers\\notFound';
    $controller = new $controller((object)[
        'title'=> '404: страница не&nbsp;найдена&nbsp;&mdash;  ООО «Грин Плай»',
    ], false, '404&nbsp;&mdash; страница не&nbsp;найдена. Воспользуйтесь ссылками ниже:');
    $controller->index();
}

ob_get_flush();