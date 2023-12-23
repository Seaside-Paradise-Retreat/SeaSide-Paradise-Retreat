<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'app/Controllers/home/index.controller.php',
    '/about' => 'Controllers/about/about.controller.php',
    '/contact' => 'Controllers/contact/contact.controller.php',
    '/admin' => 'Controllers/admin/admin.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
//    require 'views/errors/404.php';
   die();
}
