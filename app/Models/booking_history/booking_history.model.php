<?php require ("./app/Databases/database.php"); ?>
<?php 
function add_room_to_history($id_booking,$id_user,$id_bill){
    global $connection;
    $query = "INSERT INTO booking_history  (id_booking, id_user, id_bill)  VALUE (:id_booking,:id_user,:id_bill) ";
    $statement = $connection->prepare($query);
    $statement->bindParam(':id_booking', $id_booking);
    $statement->bindParam(':id_user', $id_user);
    $statement->bindParam(':id_bill', $id_bill);
    $statement->execute();
}
function get_user_booking_info($user_id)
{
    global $connection;
    $query = "SELECT users.name, rooms.id AS room_id, rooms.name AS room_name, rooms.price, rooms.description, bill.total_price, bill.date
                FROM users
                INNER JOIN booking_history ON users.id = booking_history.id_user
                INNER JOIN booking ON booking_history.id_booking = booking.id
                INNER JOIN bill ON booking_history.id_bill = bill.id
                INNER JOIN rooms ON booking.id_room = rooms.id
                WHERE users.id = :user_id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':user_id', $user_id);
    $statement->execute();
    $results = $statement->fetchAll();
    return $results;
}
function cancel_booking($id_booking_history){
    global $connection;
    $statement = $connection->prepare("delete from booking_history where id = :id");
    $statement->bindParam(':id',$id_booking_history);
    $statement->execute();
}
?>
