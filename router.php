<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'app/Controllers/home/home.controller.php',
    '/about' => 'app/Controllers/about/about.controller.php',
    '/detail_room' => 'app/Controllers/detail_room/detail_room.controller.php',
    '/booking_room' => 'app/Controllers/booking/booking.controller.php',
    '/booking_history' => 'app/Controllers/booking/booking_history.controller.php',
    '/cancel' => 'app/Controllers/booking/cancel.controller.php',
    '/logout' => 'app/Controllers/logout/logout.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
//    require 'app/Controllers/error/error.controller.php';
   die();
}