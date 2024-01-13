<?php
require("./app/Databases/database.php");
?>
<?php
function booking($room, $user, $chech_in_date, $check_out_date, $note)
{
    global $connection;
    $query = "INSERT INTO booking (id_room,id_user,check_in_date, check_out_date,note)  VALUE(:id_room, :id_user,:check_in_date, :check_out_date,:note)";
    $statement = $connection->prepare($query);
    $statement->bindParam(':id_room', $room, PDO::PARAM_INT);
    $statement->bindParam(':id_user', $user, PDO::PARAM_INT);
    $statement->bindParam(':check_in_date', $chech_in_date);
    $statement->bindParam(':check_out_date', $check_out_date);
    $statement->bindParam(':note', $note, PDO::PARAM_STR);
    $statement->execute();
    $id_booking = $connection->lastInsertId();
    return $id_booking;
}

function getNextDateTime()
{
    $currentDateTime = new DateTime('now');
    $currentDate = $currentDateTime->format('Y-m-d H:i');
    $nextDateTime =  date_add($currentDateTime, date_interval_create_from_date_string("1 days"));
    $nextDate = date_format($nextDateTime, "Y-m-d H:i");
    return $nextDate;
}
function getMaxCheckInDateTime()
{
    $currentDateTime = new DateTime('now');
    $currentDate = $currentDateTime->format('Y-m-d H:i');
    $nextDateTime =  date_add($currentDateTime, date_interval_create_from_date_string("30 days"));
    $nextDate = date_format($nextDateTime, "Y-m-d H:i");
    return $nextDate;
}

function checkBooked($check_in_date, $check_out_date) {
    global $connection;
    $query = "SELECT COUNT(*) AS count FROM booking WHERE id_room = :roomId 
        AND check_in_date <= :checkout_date 
        AND check_out_date >= :checkin_date";
    $statement = $connection->prepare($query);
    $statement->bindParam(':roomId', $roomId);
    $statement->bindParam(':checkin_date', $check_in_date);
    $statement->bindParam(':checkout_date', $check_out_date);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
}
?>
