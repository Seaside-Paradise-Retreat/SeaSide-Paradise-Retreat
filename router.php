<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'app/Controllers/home/home.controller.php',
    '/about' => 'app/Controllers/about/about.controller.php',
    '/home/register' => 'app/Controllers/register/register.controler.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
//    require 'views/errors/404.php';
   die();
}