<?php 
require ("./app/Databases/database.php");
?>
<?php 
    function booking($room,$user,$chech_in_date, $check_out_date){
        global $connection;
        $query = "INSERT INTO booking (id_room,id_user,check_in_date, check_out_date)  VALUE(:id_room, :id_user,:check_in_date, :check_out_date)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':id_room', $user, PDO::PARAM_INT);
        $statement->bindParam(':id_user', $room, PDO::PARAM_INT);
        $statement->bindParam(':check_in_date', $chech_in_date);
        $statement->bindParam(':check_out_date', $check_out_date);
        $statement->execute();
        $booking = $statement->fetch(PDO::FETCH_ASSOC);
        return $booking;
    }
?>