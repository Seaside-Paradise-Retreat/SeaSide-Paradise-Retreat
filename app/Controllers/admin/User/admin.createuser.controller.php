<?php
require(__DIR__ . '/../../../Databases/database.php');
require(__DIR__. '/../../../Models/admin.model.php');
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
        $result = createNewUser(
            $_POST['name'],
            password_hash($_POST['password'], PASSWORD_DEFAULT),
            $_POST['phone'],
            $_POST['email'],
            $_POST['age'],
            $_POST['gender'],
            $_POST['availability']
        );

        if ($result) {
            echo '<script>
                    alert("Create new user record successful!");
                    window.location.href = "/admin";
                </script>';
            exit(); 
        } else {
            echo "Error creating new user record.";
           
        }
    }
}

// Assuming there is a form for updating existing users
require(__DIR__ . "/../../../Views/admin/User/Admin.Create.View.User.php");
