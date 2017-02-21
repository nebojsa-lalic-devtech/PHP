<?php

spl_autoload_register(function($class){
    $path = $_SERVER['DOCUMENT_ROOT'] . '\app\\' . $class . '.php';

    if(!file_exists($path)){
        return false;
    }else{
        include_once $path;
        return true;
    }
});