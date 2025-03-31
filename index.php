<?php

require_once("lib/functions.php");

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'controllers/index.php',
    '/classes' => 'controllers/classes.php',
    '/monsters' => 'controllers/monsters.php',
    '/items' => 'controllers/items.php',
];

if (array_key_exists($uri, $routes)) {
    require_once($routes[$uri]);
} else {
    http_response_code(404);
    echo "404 - Page not found";
}