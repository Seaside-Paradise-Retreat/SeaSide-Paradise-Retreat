<?php session_start() ?>
<?php
    // require "app/Models/home/card.model.php";
    // require "app/Models/home/detailroom.model.php";
    require "app/Models/booking_history/booking_history.model.php";
    $booked_rooms_information = get_user_booking_info($_SESSION['id']);
    if (isset($_GET['id'])){
        $id_booking_history = $_GET['id'];
        cancel_booking($id_booking_history);
    }
    // require "app/Views/booking_history/booking_history.view.php";
 ?>