<?php

namespace app\NL\Route;

class Route
{
    private $routes = array();

    /**
     * @param $url
     * @param $callback
     */
    public function get($url, $callback)
    {
        $this->routes[$url] = $callback;
    }

    /**
     * @return mixed
     */
    public function dispatch()
    {
        $current_uri = $_SERVER['REQUEST_URI'];
        if (array_key_exists($current_uri, $this->routes)) {
            return call_user_func($this->routes[$current_uri]);
        } else {
            echo '<h3>Oooups...your URL: "' . $current_uri . '" does not exist!</h3>';
            return false;
        }
    }
}