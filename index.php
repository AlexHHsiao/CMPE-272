<?php

// Include the Router class
require __DIR__ . '/vendor/autoload.php';

// Create a Router
$router = new \Bramus\Router\Router();

// Custom 404 Handler
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404, route not found!';
});

// Before Router Middleware
$router->before('GET', '/.*', function () {
    header('X-Powered-By: bramus/router');
});

$router->all('/', function () {
    require_once  './views/home.php';
});

$router->all('/about', function () {
    require_once  './views/about.php';
});

$router->all('/news', function () {
    require_once  './views/news.php';
});

// Static route: /hello
$router->all('/product', function () {
    require_once  './views/product.php';
});

// Static route: /hello
$router->all('/contact', function () {
    require_once  './views/contact.php';
});

// Thunderbirds are go!
$router->run();
