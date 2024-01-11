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
?>

