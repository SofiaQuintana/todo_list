<?php

$routes = [
    '/todo-list/' => 'views/home.html'
    // more routes to be defined
];

$requestedPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($requestedPath, $routes)) {
    include $routes[$requestedPath];
} else {
    // Handle 404: Page not found
    echo 'Page not found.';
}

?>