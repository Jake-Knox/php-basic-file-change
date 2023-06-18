<?php
$requestPath = $_SERVER['REQUEST_URI'];

if ($requestPath === '/') {
    include '../views/index.html';
} elseif ($requestPath === '/about') {
    include '../views/about.html';
} else {
    // Handle 404 Not Found
    http_response_code(404);
    echo '404 Not Found';
}
