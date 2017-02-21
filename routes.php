<?php

$request_uri = explode('/', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[1]) {
    // Home page
    case '':
        require_once 'views/index.php';
        break;
    // About page
    case 'about':
        require_once 'views/about.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require_once 'views/404.php';
        break;
}