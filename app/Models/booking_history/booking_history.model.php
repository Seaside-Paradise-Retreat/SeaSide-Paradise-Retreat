<?php require ("./app/Databases/database.php"); ?>
<?php 
function get_user_booking_info($user_id)
{
    global $connection;
    $query = "SELECT booking.id, booking.available, booking.check_in_date,booking.check_out_date, users.name, rooms.id AS room_id, rooms.name AS room_name, rooms.price, rooms.description, bill.total_price, bill.date
    FROM users
    INNER JOIN booking ON users.id = booking.id_user
    INNER JOIN bill ON bill.id_booking = booking.id
    INNER JOIN rooms ON booking.id_room = rooms.id
    WHERE users.id = :user_id;
    -- GROUP BY rooms.id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':user_id', $user_id);
    $statement->execute();  
    $results = $statement->fetchAll();
    return $results;
}
?>
