<?php

spl_autoload_register(function($class){
    $path = $_SERVER['DOCUMENT_ROOT'] . '\classes\\' . $class . '.php';

    if(!file_exists($path)){
        return false;
    }else{
        include $path;
        return true;
    }
});