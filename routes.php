<?php

$request_uri = explode('/', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[1]) {
    // Home page
    case '':
        require_once 'public/Views/index.php';
        break;
    // About page
    case 'about':
        require_once 'public/Views/about.php';
        break;
    // Project page
    case 'project':
        require_once 'public/Views/projects.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require_once 'public/Views/404.php';
        break;
}