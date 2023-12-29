<?php

$host = "localhost";
$database = "Seaside_paradise_retreat";
$username = "root";
$password = "mysql";

try{
    $db =new PDO("mysql:host=$host;dbname=$database", $username, $password); //$dsn: Database source name
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
if (!function_exists('db'))   {
    function db()  {
        global $db;
        return $db;
    }
  }




