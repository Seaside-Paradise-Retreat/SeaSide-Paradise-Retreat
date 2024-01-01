<?php session_start() ?>
<?php
    require "app/Models/home/card.model.php";
    require "app/Models/home/detailroom.model.php";
    require "app/Models/bill/bill.model.php";
    require "app/Models/booking_history/booking_history.model.php";
    if (isset($_GET['id_room'])) {
        $roomId = $_GET['id_room'];
        $images = getRoomImages($roomId);
        $rooms = getRooms();
        $room = $rooms[$roomId];
    }
    require "app/Views/booking/booking.view.php";
 ?>
