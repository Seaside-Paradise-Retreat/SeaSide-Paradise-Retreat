<?php session_start() ?>
<?php
    require ("app/Models/bill/bill.model.php");
    require ("app/Models/booking/booking.model.php");
    if(isset($_GET['id'])){
        $booking_id = $_GET['id'];
        $bill_information = get_information_bill($booking_id, $_SESSION['id']);
    }
    require ("app/Views/bill/bill.view.php") ;
?>