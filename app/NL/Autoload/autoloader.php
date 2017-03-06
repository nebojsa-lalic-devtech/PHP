<?php

function autoloadMultipleDirectory($class)
{
    $file = dirname($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR . $class . '.php';
    if (is_file($file)) {
        include_once $file;
    }
}

spl_autoload_register('autoloadMultipleDirectory');

