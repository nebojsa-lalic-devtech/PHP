<?php

namespace app\NL\Route;

class FrontController implements IFrontController
{
    protected $current_uri;
    protected $routes = array();

    public function getUri()
    {
        $this->current_uri = $_SERVER['REQUEST_URI'];
    }

    /**
     * @param $uri
     * @param $view
     */
    public function setRoute($uri, $view)
    {
        $this->routes += array($uri => $view);
    }

    /**
     * @return bool|mixed
     */
    public function dispatch()
    {
        if (array_key_exists($this->current_uri, $this->routes)) {
            return call_user_func($this->routes[$this->current_uri]);
        } else {
            echo '<h3>Oooups...your URL: "' . $this->current_uri . '" does not exist!</h3>';
            return false;
        }
    }
}