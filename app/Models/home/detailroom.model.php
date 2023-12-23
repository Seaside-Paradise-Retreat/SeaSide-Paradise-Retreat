<?php 
    function getRoomImages($roomId) {
        global $connection;
        try {
            $query = "SELECT image_url FROM Detail_room WHERE id_room = :roomId";
            $statement = $connection->prepare($query);
            $statement->bindParam(':roomId', $roomId, PDO::PARAM_INT);
            $statement->execute();
            $images = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $images;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>