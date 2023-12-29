<?php
require(__DIR__ . '/../../../Databases/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['name']) and !empty($_POST['password']) and !empty($_POST['phone']) and !empty($_POST['email']) and !empty($_POST['age']) and !empty($_POST['gender']) ) {
       
        $statement = db()->prepare("insert into users (name, password, phone, email, age, gender) values (:name, :password, :phone, :email, :age, :gender)");
        $statement->execute([
        ':name' => $_POST['name'],
        ':password' =>  $_POST['password'],
        ':phone' =>  $_POST['phone'],
        ':email' =>  $_POST['email'],
        ':age' =>  $_POST['age'],
        ':gender' =>  $_POST['gender'],
    ]);
        
    header('location: /admin');
    }
}
require(__DIR__ . "/../../../Views/admin/User/Admin.Create.View.User.php");
