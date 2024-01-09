<?php 
function saveFeedbackToDatabase($id_room, $id_user, $star_rating, $feedback, $currentDateTime) {
    global $connection;
    $query = "INSERT INTO feedback (id_room, id_user, rating, content, date) VALUES (:id_room, :id_user, :star_rating, :feedback, :currentDateTime)";
    $statement = $connection->prepare($query);
    $params = array(
        ':id_room' => $id_room,
        ':id_user' => $id_user,
        ':star_rating' => $star_rating,
        ':feedback' => $feedback,
        ':currentDateTime' => $currentDateTime
    );
    $statement->execute($params);

}

function getFeedback($roomId){
    global $connection;
    try {
        $query = "SELECT r.id, r.name, r.rating, r.price, r.description, c.convenient,
        f.rating AS feedback_rating, f.content AS feedback_content, f.date AS feedback_date,
        u.id AS user_id, u.name AS user_name, u.avatar AS user_avatar
        FROM rooms r
        INNER JOIN (
            SELECT id_room
            FROM detail_room
            GROUP BY id_room
        ) d ON r.id = d.id_room
        INNER JOIN convenients c ON r.id = c.id_room
        LEFT JOIN feedback f ON r.id = f.id_room
        LEFT JOIN users u ON f.id_user = u.id
        WHERE r.id = :roomId;"; // Thêm điều kiện WHERE để lấy phòng theo roomId
        $statement = $connection->prepare($query);
        $statement->bindParam(':roomId', $roomId);
        $statement->execute();
        $roomWithFeedback = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $roomWithFeedback;
}



function isBooking($id_room, $id_user) :bool
{
    $isBooking = false;
    // if = false: phòng chưa được booking
    $user_booking_rooms = get_user_booking_info($id_user);
    foreach ($user_booking_rooms as $room) {
        if ($room['room_id'] == $id_room) {
            $isBooking = true;
            break;
        }
    }
    return $isBooking;
}

?>
