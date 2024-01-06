<?php
require(__DIR__ . '/../../../Databases/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['password']) &&
        !empty($_POST['availability']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['email']) &&
        !empty($_POST['age']) &&
        !empty($_POST['gender'])
    ) {
        
        $statement = $connection->prepare("INSERT INTO users (name, password, phone, email, age, gender, availability) VALUES (:name, :password, :phone, :email, :age, :gender, :availability)");
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

        $statement->execute([
            ':name' => $_POST['name'],
            ':password' => $hashedPassword,
            ':phone' => $_POST['phone'],
            ':email' => $_POST['email'],
            ':age' => $_POST['age'],
            ':gender' => $_POST['gender'],
            ':availability' => $_POST['availability']
        ]);

        header('location: /admin');
    }
}

// Assuming there is a form for updating existing users
require(__DIR__ . "/../../../Views/admin/User/Admin.Create.View.User.php");
