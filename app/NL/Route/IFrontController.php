<?php

namespace app\NL\Route;

interface IFrontController
{
    public function getUri();

    public function setRoute($uri, $view);

    public function dispatch();
}