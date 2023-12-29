<?php
require(__DIR__."../../Databases/database.php");
function createNewUser($name, $password, $phone, $email, $age, $gender){
    try{
        $stt = db() -> prepare("Insert into users(name, password, phone, email, age, gender) values(:name, :password, :phone, :email, :age, :gender)");
        $stt -> bindParam(':name',$name);
        $stt -> bindParam(':password', $password);
        $stt -> bindParam(':phone', $phone);
        $stt -> bindParam(':email', $email);
        $stt -> bindParam(':age', $age);
        $stt -> bindParam(':gender', $gender);
        
        $stt -> execute();
        echo "Create new user record successfull!";

    } catch(PDOException $e){
        echo "Error: " .$e ->getMessage();
    }
    header('location: /admin');
}


function updateUser($name, $password, $phone, $email, $age, $gender, int $id) 
{
    
    $statement = db()->prepare("update  users set name = :name, password = :password, phone = :phone, email = :email, age = :age, gender, = :gender where id = :id");
    $statement->execute([
        ':name' => $name,
        ':password' => $password,
        ':phone' => $phone,
        ':email' => $email,
        ':age' => $age,
        ':gender' => $gender,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}

