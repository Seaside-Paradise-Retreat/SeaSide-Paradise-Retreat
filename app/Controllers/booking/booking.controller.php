<?php session_start() ?>
<?php
    require "app/Models/home/card.model.php";
    require "app/Models/home/detailroom.model.php";
    require "app/Models/bill/bill.model.php";
    require "app/Models/booking_history/booking_history.model.php";
    require "app/Models/admin.model.php";
    if (isset($_GET['id_room'])) {
        $roomId = $_GET['id_room'];
        $images = getRoomImages($roomId);
        $rooms = getRooms();
        $room = findRoomById($roomId);
        echo "<script>console.log($roomId)</script>";
        echo "<script>console.log($room)</script>";
    }
    require "app/Views/booking/booking.view.php";
 ?>
