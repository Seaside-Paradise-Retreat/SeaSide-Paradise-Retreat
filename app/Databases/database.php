<?php
<<<<<<< HEAD
// function checkUrl() {
//     if ($_SERVER['SERVER_ADDR'] == "127.0.0.1" || $_SERVER['SERVER_NAME'] == "localhost") {
//         $hostname = "localhost";
//         $database = "Seaside_paradise_retreat";
//         $username = "root";
//         $password = "";
//     } else {
//         $hostname = "sql211.infinityfree.com";
//         $database = "if0_35784170_Seaside_paradise_retreat";
//         $username = "if0_35784170";
//         $password = "Honglam123";
//     }
// // }
        $hostname = "localhost";
        $database = "Seaside_paradise_retreat";
        $username = "root";
        $password = "";
$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";

=======
$hostname = "localhost";
$database = "Seaside_paradise_retreat";
$username = "root";
$password = "mysql";
$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4"; 
>>>>>>> 4cb2870f1d33e95e379edd347b7fa13f827cbb0f
try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
