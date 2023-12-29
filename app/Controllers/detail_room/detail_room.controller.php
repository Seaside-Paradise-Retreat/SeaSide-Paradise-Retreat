<?php
    require_once ("app/Models/detail/detail.model.php");
    require_once ("app/Models/home/detailroom.model.php");
    if (isset($_GET['id_room'])) {
        $roomId = $_GET['id_room'];
        $images = getRoomImages($roomId);
        $rooms = getRoomId($roomId);
        // $room = $rooms[$roomId];
    }
?>
<?php 
    require "app/Views/detail_room/index.php";
?>