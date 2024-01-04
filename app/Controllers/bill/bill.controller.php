<?php session_start() ?>
<?php
    require ("app/Models/bill/bill.model.php");
    require ("app/Models/booking/booking.model.php");
    if(isset($_GET['id'])){
        $booking_id = $_GET['id'];
        $bill_information = get_information_bill($booking_id, $_SESSION['id']);
        echo "<script>console.log('" . $booking_id . "');</script>";
        echo "<script>console.log('" . $_SESSION['id'] . "');</script>";
        // echo "<script>console.log('" . $bill_information . "');</script>";
    }
    //booking này lấy từ model booking khi user booku=in thành công
    // echo "<script>console.log('" . $booking . "');</script>";
    // echo "<script>console.log('" . $_SESSION['id'] . "');</script>";
    // echo "<script>console.log('" . $bill_information . "');</script>";

    require ("app/Views/bill/bill.view.php") ;
?>