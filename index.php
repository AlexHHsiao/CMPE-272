<?php
// $request = substr($_SERVER['REQUEST_URI'], 4);
$request = $_SERVER['REQUEST_URI'];
echo $request;
switch ($request) {
    case '/' :
        require __DIR__ . './views/home.php';
        break;
    case '' :
        require __DIR__ . './views/home.php';
        break;
    case '/about' :
        require __DIR__ . './views/about.php';
        break;
    case '/news' :
        require __DIR__ . './views/news.php';
        break;
    case '/product' :
        require __DIR__ . './views/product.php';
        break;
    case '/contact' :
        require __DIR__ . './views/contact.php';
        break;
    default:
        http_response_code(404);
        echo 'Not Found';
        break;
}

