<?php
require(__DIR__ . '/../../../Databases/database.php');
require(__DIR__. '/../../../Models/admin.model.php');
$price_error = $availability_error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];
    $description = $_POST['description'];
    if (!validateAvailabilitys($availability)) {
        $availability_error = "Please enter a valid availability (0 or 1).";
    }
    if (!validatePrice($price)){
        $price_error = "Please enter price greater than 0";
    }
    if (!$price_error && !$availability_error ){
        $result = createRoom(
            $name,
            $type,
            $price,
            $availability,
            $description,
            $_POST['image_url'],
            $_POST['convenient']
        );
        if ($result) {
            echo "<script>alert(Create new room record successful!)</script>";
            header('Location: /admin/Room/view'); 
            exit();  
        } else {
            echo "Error creating new room record.";
        }
    } else {
        echo "Please fill in all the required fields.";
    }
}
require(__DIR__ . "/../../../Views/admin/Room/Admin.Create.Room.php");
