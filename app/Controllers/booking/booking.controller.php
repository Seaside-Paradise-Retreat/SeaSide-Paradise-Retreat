<?php session_start() ?>
<?php
// $booking = "null";
require "app/Models/home/card.model.php";
require "app/Models/home/detailroom.model.php";
require "app/Models/bill/bill.model.php";
require "app/Models/detail/detail.model.php";
require "app/Models/booking/booking.model.php";
require "app/Models/booking_history/booking_history.model.php";
require "app/Models/admin.model.php";
if (isset($_GET['id_room'])) {
    $roomId = $_GET['id_room'];
    $images = getRoomImages($roomId);
    $rooms = getRooms();
    $room = getRoomId($roomId);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['check_in']) && !empty($_POST['check_out']) && isset($_POST['message'])) {
    $date_check_in = $_POST['check_in'];
    $date_check_out = $_POST['check_out'];
    $note = $_POST['message'];
    $user = $_SESSION['id'];
    $date = date('Y-m-d H:i:s');
    $total = $_POST['total_price'];
    $booked = checkBooked($roomId,$date_check_in, $date_check_out);
    echo "<script>console.log(" . $booked . ");</script>";
    if ($booked> 0) {
        echo "<script>alert('" . "The room was booked within the requested time period. Please choose another time or another room" . "');</script>";
    } else{
        $booking = booking($roomId, $user, $date_check_in, $date_check_out, $note);
        if ($booking) {
            echo "<script>alert('" . "Booking successful" . "');</script>";
            $bill = bill($booking, $date, $total);
            header("Location:/bill?id=$booking");
        } else {
            echo "<script>alert('" . "Booking Unsuccessful" . "');</script>";
        }
    }
}

require "app/Views/booking/booking.view.php";
?>
