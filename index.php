<?php

require_once 'lib/functions.php';

// Router logic
$page = $_GET['page'] ?? 'home'; // Default to 'home' if no page is specified

// dd($_SERVER);

$pageFile = __DIR__ . "/views/$page.view.php";

if (file_exists($pageFile)) {
    include $pageFile;
} else {
    http_response_code(404);
    echo "404 - Page not found";
}