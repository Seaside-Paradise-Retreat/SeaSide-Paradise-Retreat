<?php
require(__DIR__ . '/../../../Databases/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['name']) and !empty($_POST['type']) and !empty($_POST['price']) and !empty($_POST['availability']) and !empty($_POST['description']) and !empty($_POST['rating']) ) {
       
        $statement = $connection->prepare("insert into rooms (name, type, price, availability, description, rating) values (:name, :type, :price, :availability, :description, :rating)");
        $statement->execute([
        ':name' => $_POST['name'],
        ':type' =>  $_POST['type'],
        ':price' =>  $_POST['price'],
        ':availability' =>  $_POST['availability'],
        ':description' =>  $_POST['description'],
        ':rating' =>  $_POST['rating'],
    ]);
        
    header('location: /admin');
    }
}
require(__DIR__ . "/../../../Views/admin/Room/Admin.Create.Room.php");