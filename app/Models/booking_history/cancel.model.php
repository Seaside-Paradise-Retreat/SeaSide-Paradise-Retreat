<?php require "app/Databases/database.php" ?>
<?php 
    function cancel_room($id_booking_history){
        global $connection;
        $query = "DELETE FROM booking WHERE id = :id_booking;";
        $statement = $connection->prepare($query);
        $statement->bindParam(':id_booking',$id_booking_history);
        $result =  $statement->execute();
        if ($result) {
            return true; 
        } else {
            return false; 
    }
}
?>