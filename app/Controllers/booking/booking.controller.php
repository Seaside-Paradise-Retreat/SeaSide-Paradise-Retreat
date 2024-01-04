<?php session_start() ?>
<?php
$booking = "null";
    require "app/Models/home/card.model.php";
    require "app/Models/home/detailroom.model.php";
    require "app/Models/bill/bill.model.php";
    require "app/Models/detail/detail.model.php";
    require "app/Models/booking_history/booking_history.model.php";
    require "app/Models/admin.model.php";
    if (isset($_GET['id_room'])) {
        $roomId = $_GET['id_room'];
        $images = getRoomImages($roomId);
        $rooms = getRooms();
        $room= getRoomId($roomId);
    }
        function booking($room,$user,$chech_in_date, $check_out_date,$note){
        global $connection;
        $query = "INSERT INTO booking (id_room,id_user,check_in_date, check_out_date,note)  VALUE(:id_room, :id_user,:check_in_date, :check_out_date,:note)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':id_room', $room, PDO::PARAM_INT);
        $statement->bindParam(':id_user', $user, PDO::PARAM_INT);
        $statement->bindParam(':check_in_date', $chech_in_date);
        $statement->bindParam(':check_out_date', $check_out_date);
        $statement->bindParam(':note', $note,PDO::PARAM_STR);
        $statement->execute();  
        $id_booking = $connection->lastInsertId();
        return $id_booking;
    }
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['check_in']) && !empty($_POST['check_out']) && isset($_POST['message'])) {
            $date_check_in = $_POST['check_in'];
            $date_check_out = $_POST['check_out'];
            $note = $_POST['message'];
            $user = $_SESSION['id'];
            $date = date('Y-m-d H:i:s');
            $total = $_POST['total_price'];
            $booking = booking($roomId,$user,$date_check_in,$date_check_out,$note);
            echo "<script>console.log(". $booking. ");</script>";
            if($booking){
                $bill = bill($booking,$date,$total);
                header("Location:/bill?id=$booking");
                echo "<script>alert('" . "Booking successful" . "');</script>"; 
            }
        }else{
            echo "<script>alert('" . "Booking Unsuccessful" . "');</script>"; 
        }
    require "app/Views/booking/booking.view.php";
 ?>
