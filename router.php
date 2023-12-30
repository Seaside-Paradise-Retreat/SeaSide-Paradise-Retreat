<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'app/Controllers/home/index.controller.php',
    '/about' => 'Controllers/about/about.controller.php',
    '/contact' => 'Controllers/contact/contact.controller.php',
    '/admin' => 'app/Controllers/admin/admin.controller.php',
    '/admin/User/create' => 'app/Controllers/admin/User/admin.createuser.controller.php',
    '/admin/User/edit' => 'app/Controllers/admin/User/admin.edit.user.controller.php',
    '/admin/User/delete' => 'app/Controllers/admin/User/admin.delete.user.controller.php',
    '/admin/Room/create' => 'app/Controllers/admin/Room/admin.create.room.controller.php',
    '/admin/Room/edit' => 'app/Controllers/admin/Room/admin.edit.room.controller.php',
    '/admin/Room/delete' => 'app/Controllers/admin/Room/admin.delete.room.controller.php',
    '/admin/Booking/edit' => 'app/Controllers/admin/Booking/admin.edit.booking.controller.php',
    '/admin/Booking/delete' => 'app/Controllers/admin/Booking/admin.delete.booking.controller.php',
    '/' => 'app/Controllers/home/home.controller.php',
    '/about' => 'app/Controllers/about/about.controller.php',
    '/detail_room' => 'app/Controllers/detail_room/detail_room.controller.php',
    '/account' => 'app/Controllers/account/account.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require __DIR__ . '/' . $routes[$uri];
} else {
    http_response_code(404);
    // require __DIR__ . '/views/errors/404.php';
    die();
}
