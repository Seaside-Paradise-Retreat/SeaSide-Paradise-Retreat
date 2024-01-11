<?php
require(__DIR__ . '/../../../Databases/database.php');
require(__DIR__. '/../../../Models/admin.model.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['type']) &&
        !empty($_POST['price']) &&
        !empty($_POST['availability']) &&
        !empty($_POST['description'])
    ) {
        // Call the function to create a new room
        $result = createRoom(
            $_POST['name'],
            $_POST['type'],
            $_POST['price'],
            $_POST['availability'],
            $_POST['description'],
            $_POST['image_url'], 
            $_POST['convenient'] 
        );

        if ($result) {
            echo "Create new room record successful!";
            
            header('Location: /admin'); 
            exit();  
        } else {
            echo "Error creating new room record.";
                }
    } else {
        echo "Please fill in all the required fields.";
        
    }
}


require(__DIR__ . "/../../../Views/admin/Room/Admin.Create.Room.php");
?>


