<?php session_start() ?>
<?php
    require "app/Models/home/card.model.php";
    require "app/Models/home/detailroom.model.php";
    require "app/Models/booking_history/booking_history.model.php";
    require "app/Models/booking_history/cancel.model.php";
    echo "<script>console.log(".$_SESSION['id'] . " )</script>"; 
    $booked_rooms_information = get_user_booking_info($_SESSION['id'] );
    // echo "Rooms: " . count( $booked_rooms_information) . " rows<br>";
    // echo "<pre>";
    // print_r($booked_rooms_information);
    // echo "</pre>";
    require "app/Views/booking_history/booking_history.view.php";
?>