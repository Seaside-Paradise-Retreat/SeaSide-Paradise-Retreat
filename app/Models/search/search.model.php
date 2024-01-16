<?php 
function search_room($min_price){
    global $connection;
    $max_price = $min_price + 50000;
    $query = "SELECT *, c.convenient 
    FROM rooms 
    INNER JOIN Convenients c ON rooms.id = c.id_room
    WHERE price BETWEEN ? AND ?";
    $statement = $connection->prepare($query);
    $statement->bindParam(1, $min_price, PDO::PARAM_INT);
    $statement->bindParam(2, $max_price, PDO::PARAM_INT);
    $statement->execute();
    $results = $statement->fetchAll();
    return $results;
}
function search_room_convenient($convenient){
    global $connection;
    $query = "SELECT *, c.convenient 
    FROM rooms 
    INNER JOIN Convenients c ON rooms.id = c.id_room
    WHERE  BETWEEN ? AND ?";
    $statement = $connection->prepare($query);
    $statement->bindParam(1, $min_price, PDO::PARAM_INT);
    $statement->bindParam(2, $max_price, PDO::PARAM_INT);
    $statement->execute();
    $results = $statement->fetchAll();
    return $results;
}   
?>