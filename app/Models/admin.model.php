<?php
require(__DIR__."../../Databases/database.php");


// function validateUsername($name) {
//     $name = trim($name);
//     if (empty($name)) {
//         return false; // Please enter UserName
//     } elseif (strlen($name) < 4 || strlen($name) > 25) {
//         return false; // Your name must be at least 4 characters
//     }

//     return true; // Valid username
// }

// function validateEmail($email, $connection) {
//     $email = trim($email);

//     if (empty($email)) {
//         return false; // Please enter an email
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         return false; // Email must contain '@'
//     }

//     $query = "SELECT email FROM users WHERE email = :email";
//     $statement = $connection->prepare($query);
//     $statement->bindParam(":email", $email);
//     $statement->execute();
//     $existingEmail = $statement->fetch(PDO::FETCH_ASSOC);

//     if (!empty($existingEmail)) {
//         return false; // Email already exists
//     }

//     return true; // Valid email
// }

// function validatePassword($password) {
//     if (empty($password)) {
//         return false; // Password is required
//     } elseif (strlen($password) < 8) {
//         return false; // Password must be at least 8 characters long
//     } elseif (!preg_match('/[A-Z]/', $password)) {
//         return false; // Password must contain at least one uppercase letter
//     } elseif (!preg_match('/[a-z]/', $password)) {
//         return false; // Password must contain at least one lowercase letter
//     } elseif (!preg_match('/[0-9]/', $password)) {
//         return false; // Password must contain at least one digit
//     } elseif (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
//         return false; // Password must contain at least one special character
//     }

//     return true; // Valid password
// }

// function validatePhone($phoneNumber) {
//     $phone = preg_replace("/[^0-9]/", "", $phoneNumber);
//     if (empty($phoneNumber)) {
//         return false; // Please enter phone number
//     } elseif (strlen($phone) !== 10) {
//         return false; // Invalid phone number format
//     }

//     return true; // Valid phone number
// }

// function validateAvailability($availability) {
//     if (empty($availability)) {
//         return false; // Please enter availability
//     } elseif (preg_match('/^[01]$/', $availability)) {
//         return true; // Valid availability
//     } else {
//         return false; // Availability should be either '0' or '1'
//     }


// }

// function validateAge($age){

// }

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
function updateUser($name, $phone, $email, $age, $gender,  $availability ,int $id):bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE  users SET name = :name, phone = :phone, email = :email, age = :age, gender = :gender, availability = :availability where id = :id");
    $statement->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':email' => $email,
        ':age' => $age,
        ':gender' => $gender,
        ':availability' => $availability,
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


function createRoom($name, $type, $price, $availability, $description, $imageUrls, $convenient)
{
    global $connection;

    try {
        $insertRoomStatement = $connection->prepare("INSERT INTO rooms (name, type, price, availability, description) VALUES (:name, :type, :price, :availability, :description)");
        $insertRoomStatement->execute([
            ':name' => $name,
            ':type' => $type,
            ':price' => $price,
            ':availability' => $availability,
            ':description' => $description,
        ]);

        $statement = $connection->prepare("SELECT id FROM rooms ORDER BY id DESC LIMIT 1");
        $statement->execute();
        $newlyInsertedRoom = $statement->fetch(PDO::FETCH_ASSOC);

        if ($newlyInsertedRoom) {
            $roomId = $newlyInsertedRoom['id'];

            if (!empty($roomId)) {
                if (!empty($imageUrls)) {
                    $imageUrls = explode(" ", $imageUrls);
                    $imageUrls = array_map('trim', $imageUrls);

                    foreach ($imageUrls as $imageUrl) {
                        insertIntoDetailRoom($roomId, $imageUrl);
                    }
                }

                if (!empty($convenient)) {
                    $statement = $connection->prepare("INSERT INTO convenients(id_room, convenient) VALUES (:roomId, :convenient)");
                    $statement->execute([
                        ':roomId' => $roomId,
                        ':convenient' => $convenient
                    ]);
                }

                return true; // Room creation successful
            } else {
                return false; // Unable to retrieve newly inserted room ID
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false; // Room creation failed
    }
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
function updateRoom($name, $type, $price, $availability, $description, int $id):bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE rooms SET name = :name, type = :type, price = :price, availability = :availability, description = :description WHERE id = :id");
        $statement->execute([
            ':name' => $name,
            ':type' =>  $type,
            ':price' =>  $price,
            ':availability' =>  $availability,
            ':description' =>  $description,
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
    if ($users){
        foreach ($users as $user){
            if ($user['id'] == $userId){
                return $user;
            }
        }
    }
    
    return null;
}
function selectBookingRoom(){
    try{
        global $connection;
        $stt = $connection -> prepare("Select * from booking");
        $stt -> execute();
        return $stt -> fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $e){
        echo "Error: " .$e ->getMessage();
    }
}

function updateBooking($id_room, $check_in_date, $check_out_date, $availability, int $id){
    global $connection;
        $statement = $connection->prepare("UPDATE booking SET id_room = :id_room, check_in_date = :check_in_date, check_out_date = :check_out_date, availability = :availability WHERE id = :id");
        $statement->execute([
            ':id_room' => $id_room,
            ':check_in_date' => $check_in_date,
            ':check_out_date' => $check_out_date,
            ':availability' => $availability,
            ':id' => $id
        ]);
        return $statement->rowCount() > 0;
}

function deleteBooking(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE booking SET availability = 0 WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

function selectAVGRatingForRoom($roomId)
{
    global $connection;
    $stt = $connection->prepare("SELECT rooms.name, AVG(feedback.rating) as average_rating
        FROM rooms
        LEFT JOIN feedback ON rooms.id = feedback.id_room
        WHERE rooms.id = :roomId"
    );
    $stt->bindParam(':roomId', $roomId, PDO::PARAM_INT);
    $stt->execute();
    $result = $stt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function selectDetailFeedback($roomId){
    global $connection;
    $stt = $connection ->prepare("SELECT  feedback.id_user, feedback.content, feedback.rating
    FROM feedback
    WHERE feedback.id_room = :roomId"); 
    $stt->bindParam(':roomId', $roomId, PDO::PARAM_INT);
    $stt->execute();
    $result = $stt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function selectBill(){
    global $connection;
    $stt = $connection -> prepare("SELECT bill.id, users.name as username, users.phone, users.email, rooms.name, bill.total_price, bill.date
        FROM
            booking
        JOIN
            users ON booking.id_user = users.id
        JOIN
            rooms ON booking.id_room = rooms.id
        JOIN
            bill ON booking.id = bill.id_booking");
    $stt -> execute();
    return $stt -> fetchAll(PDO::FETCH_ASSOC);
}


function selectTotalPrice(){
    global $connection;
    $stt = $connection->prepare("SELECT SUM(total_price) as total_price FROM bill");
    $stt->execute();
    $result = $stt->fetch(PDO::FETCH_ASSOC);

    return $result['total_price'];
}