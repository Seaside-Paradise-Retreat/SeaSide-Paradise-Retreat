<?php

$host = "localhost";
$database = "Seaside_paraside_retreat";
$username = "root";
$password = "mysql";

try{
    $db =new PDO("mysql:host=$host;dbname=$database", $username, $password); //$dsn: Database source name
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}


function db(){
    global $db;
    return $db;
}

function selectAllUser(){
    try{
        $stt = db() -> query("Select * from users");
        $stt ->execute();
        return $stt -> fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e){
        echo "Error: " .$e->getMessage();
    }
}
function selectRoom(){
    try{
        $stt = db() -> query("Select * from rooms");
        $stt -> execute();
        return $stt ->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}
function findRoomById($roomId) {
    global $rooms;

    foreach ($rooms as $room) {
        if ($room['id'] == $roomId) {
            return $room;
        }
    }

    return null; // Return null if room not found
}
function findUserById($userId){
    global $users;
    foreach ($users as $user){
        if ($user['id'] == $userId){
            return $user;
        }
    }
    return null;
}
function selectBookingRoom(){
    try{
        $stt = db() -> query("Select * from booking");
        $stt -> execute();
        return $stt -> fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $e){
        echo "Error: " .$e ->getMessage();
    }
}



function createNewRoom(){
    
}