<?php 
    function getRooms(){
        global $connection;
        try {
            $query = "SELECT r.id,r.availability, r.name, d.image_url, r.price, r.description, c.convenient
            FROM Rooms r
            INNER JOIN (
            SELECT id_room, MIN(image_url) AS image_url
            FROM Detail_room
            GROUP BY id_room
            ) d ON r.id = d.id_room
            INNER JOIN Convenients c ON r.id = c.id_room;";
            $statement = $connection->prepare($query);
            $statement->execute();
            $rooms =  $statement->fetchAll();
            } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        return $rooms;
    }
    function countRooms(){
        global $connection;
        $query = "SELECT COUNT(*) AS room_count FROM rooms;";
        $statement = $connection->prepare($query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $count = $result['room_count'];
        return (int) $count;
    }

    function selectAVGRatingRoom($roomId)
{
    global $connection;
    $stt = $connection->prepare("SELECT AVG(feedback.rating) as average_rating
        FROM rooms
        LEFT JOIN feedback ON rooms.id = feedback.id_room
        WHERE rooms.id = :roomId"
    );
    $stt->bindParam(':roomId', $roomId, PDO::PARAM_INT);
    $stt->execute();
    $result = $stt->fetch(PDO::FETCH_ASSOC);
    return $result['average_rating'];
}
?>

