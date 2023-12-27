<?php
$hostname = "localhost";
$database = "Seaside_paradise_retreat";
$username = "root";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4"; //$dsn: Database source name
try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// function getUser($username){
//     global $connection;
//     $query = "SELECT id FROM users WHERE username = :username";
//     $statament=$connection->prepare($query);
//     $statament->bindParam(":username", $username);
//     $statament->execute();
//     $user=$statament->fetch(PDO::FETCH_ASSOC);
//     return $user;
// }