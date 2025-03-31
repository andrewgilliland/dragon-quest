<?php

class Router {
    private $routes = [];
    private $notFoundCallback;

    public function addRoute($path, $callback) {
        $this->routes[$path] = $callback;
    }

    public function addRoutes($routes) {
        foreach ($routes as $path => $callback) {
            $this->addRoute($path, $callback);
        }
    }

    public function setNotFoundCallback($callback) {
        $this->notFoundCallback = $callback;
    }

    public function handleRequest($uri) {
        if (array_key_exists($uri, $this->routes)) {
            require_once($this->routes[$uri]);
        } else {
            if ($this->notFoundCallback) {
                call_user_func($this->notFoundCallback);
            } else {
                http_response_code(404);
                echo "404 - Page not found";
            }
        }
    }
}