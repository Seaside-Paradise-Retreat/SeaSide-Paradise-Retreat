<?php 
require ("./app/Databases/database.php");
?>
<?php 
    function bill($id_booking,$date,$total_price){
        global $connection;
        $query = "INSERT INTO bill (id_booking,date,total_price)  VALUE(:id_booking, NOW(),:total_price)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':id_booking',$id_booking, PDO::PARAM_INT);
        $statement->bindParam(':total_price',$total_price);
        $statement->execute();
        $id_bill = $connection->lastInsertId();
        return $id_bill;
    }
    function get_information_bill($booking_id, $user_id){
        global $connection;
        $query = "SELECT bill.id as bill_id, bill.total_price, bill.date, users.name, rooms.id AS room_id, rooms.name AS room_name, rooms.price, rooms.description, booking.id, booking.availability, booking.check_in_date, booking.check_out_date
        FROM bill
        INNER JOIN booking ON bill.id_booking = booking.id
        INNER JOIN rooms ON booking.id_room = rooms.id
        INNER JOIN users ON booking.id_user = users.id
        WHERE booking.id =  :booking_id and  users.id = :user_id ;";
        $statement = $connection->prepare($query);
        $statement->bindParam(':booking_id',$booking_id, PDO::PARAM_INT);
        $statement->bindParam(':user_id',$user_id, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
?>