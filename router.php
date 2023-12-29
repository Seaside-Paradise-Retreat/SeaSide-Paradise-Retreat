<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'app/Controllers/home/index.controller.php',
    '/about' => 'Controllers/about/about.controller.php',
    '/contact' => 'Controllers/contact/contact.controller.php',
    '/admin' => 'app/Controllers/admin/admin.controller.php',
    '/admin/User/create' => 'app/Controllers/admin/User/admin.createuser.controller.php',
    '/admin/User/edit' => 'app/Controllers/admin/User/admin.edit.user.controller.php'

];

if (array_key_exists($uri, $routes)) {
    require __DIR__ . '/' . $routes[$uri];
} else {
    http_response_code(404);
    // require __DIR__ . '/views/errors/404.php';
    die();
}
