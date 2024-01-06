<?php
require(__DIR__."../../Databases/database.php");
function createNewUser($name, $password, $phone, $email, $age, $gender,$availability){
    global $connection;
    try{
        $stt = $connection -> prepare("Insert into users(name, password, phone, email, age, gender, availability) values(:name, :password, :phone, :email, :age, :gender, :availability)");
        $stt -> bindParam(':name',$name);
        $stt -> bindParam(':password', $password);
        $stt -> bindParam(':phone', $phone);
        $stt -> bindParam(':email', $email);
        $stt -> bindParam(':age', $age);
        $stt -> bindParam(':gender', $gender);
        $stt -> bindParam(':availability', $availability);
        $stt -> execute();
        echo "Create new user record successfull!";

    } catch(PDOException $e){
        echo "Error: " .$e ->getMessage();
    }
    header('location: /admin');
}


function updateUser($name, $availability, $phone, $email, $age, $gender, int $id):bool

{
    global $connection;
    
    $statement = $connection->prepare("update  users set name = :name, availability = :availability, phone = :phone, email = :email, age = :age, gender = :gender where id = :id");
    $statement->execute([
        ':name' => $name,
        ':availability' => $availability,
        ':phone' => $phone,
        ':email' => $email,
        ':age' => $age,
        ':gender' => $gender,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}

function deleteUser(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET availability = 0 WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}
function selectAllUser(){
    global $connection;
    try{
        $stt = $connection -> query("Select * from users");
        $stt ->execute();
        return $stt -> fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e){
        echo "Error: " .$e->getMessage();
    }
}
function selectRoom(){
    global $connection;
    try{
        $stt = $connection -> query("Select * from rooms");
        $stt -> execute();
        return $stt ->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}

function createRoom($name, $type, $price, $availability, $description, $rating){
    global $connection;
    try{
        $stt = $connection -> prepare("Insert into rooms(name, type, price, availability, description, rating) values(:name, :type, :price, :availability, :description, :rating)");
        $stt -> bindParam(':name',$name);
        $stt -> bindParam(':type', $type);
        $stt -> bindParam(':price', $price);
        $stt -> bindParam(':availability', $availability);
        $stt -> bindParam(':description', $description);
        $stt -> bindParam(':rating', $rating);
        
        $stt -> execute();
        echo "Create new room record successfull!";

    } catch(PDOException $e){
        echo "Error: " .$e ->getMessage();
    }
    header('location: /admin');
}

function insertIntoDetailRoom($roomId, $imageUrl)
{
    global $connection;
    try {
        $statement = $connection->prepare("INSERT INTO detail_room (id_room, image_url) VALUES (:roomId, :imageUrl)");
        $statement->execute([
            ':roomId' => $roomId,
            ':imageUrl' => $imageUrl,
        ]);
    } catch (PDOException $e) {
        // Log or handle the exception as needed
        error_log("Error inserting into detail_room: " . $e->getMessage());
    }
    header('location: /admin');
}
function updateRoom($name, $type, $price, $availability, $description, $rating, int $id):bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE rooms SET name = :name, type = :type, price = :price, availability = :availability, description = :description, rating = :rating WHERE id = :id");
        $statement->execute([
            ':name' => $name,
            ':type' =>  $type,
            ':price' =>  $price,
            ':availability' =>  $availability,
            ':description' =>  $description,
            ':rating' =>  $rating,
            ':id' => $id
        ]);

    return $statement->rowCount() > 0;
}
function deleteRoom(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE rooms SET availability = 0 WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
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
    global $connection;

    try{
        global $connection;
        $stt = $connection -> prepare("Select * from booking");
        $stt -> execute();
        return $stt -> fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $e){
        echo "Error: " .$e ->getMessage();
    }
}

function updateBooking($id_room, $check_in_date, $check_out_date, $availability){
    global $connection;
    try {
        $statement = $connection->prepare("UPDATE booking SET id_room = :id_room, check_in_date = :check_in_date, check_out_date = :check_out_date, availability = :availability WHERE id = :id");
        $statement->execute([
            ':id_room' => $id_room,
            ':check_in_date' => $check_in_date,
            ':check_out_date' => $check_out_date,
            ':availability' => $availability,
            ':id' => $_GET["id"]
        ]);
    } catch (PDOException $e) {
        // Handle the exception (display an error message or log it)
        echo 'Error: ' . $e->getMessage();
    }
}

function deleteBooking(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE booking SET availability = 0 WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}
