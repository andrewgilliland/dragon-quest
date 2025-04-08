<?php

const BASE_DIR = __DIR__;
require BASE_DIR . '/vendor/autoload.php';

require_once("model/Router.php");
require_once("lib/functions.php");


$router = new Router();

$routes = [
    '/' => 'controllers/index.php',
    '/classes' => 'controllers/classes.php',
    '/monsters' => 'controllers/monsters.php',
    '/items' => 'controllers/items.php',
    '/play' => 'controllers/play.php',
];

$router->addRoutes($routes);

$router->setNotFoundCallback(function() {
    require_once("controllers/404.php");
    http_response_code(404);
});

$uri = $_SERVER['REQUEST_URI'];

$router->handleRequest($uri);