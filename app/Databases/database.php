<?php
$hostname = "localhost";
$database = "Seaside_paradise_retreat";
$username = "root";
$password = "mysql";
$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4"; 
try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
