<?php
function getRoomId($roomId){
    global $connection;
    try {
        $query = "SELECT r.id, r.name, r.rating, d.image_url, r.price, r.description, c.convenient
        FROM Rooms r
        INNER JOIN (
        SELECT id_room, MIN(image_url) AS image_url
        FROM Detail_room
        GROUP BY id_room
        ) d ON r.id = d.id_room
        INNER JOIN Convenients c ON r.id = c.id_room
        WHERE r.id = :roomId;"; // Thêm điều kiện WHERE để lấy phòng theo roomId
        $statement =  db()->prepare($query);
        $statement->bindParam(':roomId', $roomId);
        $statement->execute();
        $room = $statement->fetch();
        } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
    return $room;
}
?>