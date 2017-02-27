<?php

namespace app\NL\Route;

$request_uri = explode('/', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[1]) {
    // Home page
    case '':
        require_once 'app/NL/Views/index.php';
        break;
    // About page
    case 'about':
        require_once 'app/NL/Views/about.php';
        break;
    // Project page
    case 'project':
        require_once 'app/NL/Views/projects.php';
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require_once 'app/NL/Views/404.php';
        break;
}