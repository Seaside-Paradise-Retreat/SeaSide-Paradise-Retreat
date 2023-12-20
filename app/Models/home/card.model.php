<?php 
    function getRooms(){
        global $connection;
        try {
            $query = "SELECT * FROM rooms";
            $statement = $connection->prepare($query);
            $statement->execute();
            $rooms =  $statement->fetchAll();
            } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
        return $rooms;
    }
?>