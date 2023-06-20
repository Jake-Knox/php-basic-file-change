<!-- php -S 127.0.0.1:8000 to start local server -->
<?php
$requestPath = $_SERVER['REQUEST_URI'];

if ($requestPath === '/') {
    include __DIR__ . '/views/index.html';
} elseif ($requestPath === '/about') {
    include __DIR__ . '/../views/about.html';
} else {
    // Handle 404 Not Found
    http_response_code(404);
    echo '404 Not Found';
}
?>
