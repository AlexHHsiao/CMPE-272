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

$router->get('/', function () {
    require './views/home.php';
});

$router->get('/about', function () {
    require './views/about.php';
});

$router->get('/news', function () {
    require './views/news.php';
});

// Static route: /hello
$router->get('/product', function () {
    require './views/product.php';
});

// Static route: /hello
$router->get('/contact', function () {
    require './views/contact.php';
});

// Thunderbirds are go!
$router->run();
