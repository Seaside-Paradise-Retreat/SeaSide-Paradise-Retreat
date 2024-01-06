<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_User</title>
    <link rel="stylesheet" href="../../../../public/css/Adminpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<?php 

// require(__DIR__ . '/../../../Databases/database.php');
require(__DIR__ . '/../../../Models/admin.model.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['name']) and !empty($_POST['type']) and !empty($_POST['price']) and !empty($_POST['availability']) and !empty($_POST['description']) and !empty($_POST['rating']) and !empty($_GET["id"]) ) {
        $statement = $connection->prepare("update rooms set name = :name, type = :type, price = :price, availability = :availability, description = :description, rating = :rating where id = :id");
        $statement->execute([
            ':name' => $_POST['name'],
            ':type' =>  $_POST['type'],
            ':price' =>  $_POST['price'],
            ':availability' =>  $_POST['availability'],
            ':description' =>  $_POST['description'],
            ':rating' =>  $_POST['rating'],
            ':id' => $_GET["id"]
        ]);
        
        
        header('location: /admin');
        
    }
}

include(__DIR__ . "/.././../layouts/admin.navbar.php");
    $id = $_GET["id"] ? $_GET["id"] : null;
    if (isset($id)):
   
        $statement = $connection->prepare('select * from rooms where id = :id');
        $statement->execute([':id' => $id]);
        $room = $statement->fetch();

?>

<div class="container">
    <div class="main_menu_left">
    <a href="/admin" style="text-decoration: none;">
            <div class="item">
                <button onclick="OpenType('userTab')" class="tablinks" data-tab="userTab">
                    <i class="fas fa-user" style="padding-right:20px"></i>
                    <h5 class="title">User</h5>
                </button>
            </div>
        </a>
        <a href="/admin" style="text-decoration: none;">
            <div class="item">
                <button onclick="OpenType('roomTab')" class="tablinks" data-tab="roomTab">
                    <i class="fas fa-list-ul" style="padding-right:20px"></i>
                    <h5 class="title">Room</h5>
                </button>
            </div>
        </a>

        <a href="/admin" style="text-decoration: none;">
            <div class="item">
                <button onclick="OpenType('bookingTab')" class="tablinks active" data-tab="bookingTab">
                    <i class="fas fa-list-ul" style="padding-right:20px"></i>
                    <h5 class="title">Booking</h5>
                </button>
            </div>
        </a>
    </div>
    
    <div id="Modal" class="main_menu_right">
        <form  class="form_action" action="#" method="post">
            <div class="form_title">
                <h4 id="title">EDIT ROOM</h4>
                <a href="/admin"><i class="fas fa-times" ></i></a>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?=$room['name'];?>">
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" id="type" class="form-control" placeholder="Type" name="type" value="<?=$room['type'];?>">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" class="form-control" placeholder="Price" name="price" value="<?=$room['price'];?>">
            </div>

            <div class="form-group">
                <label for="availability">Availability:</label>
                <input type="number" id="availability" class="form-control" placeholder="Availability" name="availability" min="0" max="1" value="<?=$room['availability'];?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" class="form-control" placeholder="Description" name="description" value="<?=$room['description'];?>">
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" id="rating" class="form-control" placeholder="Rating" name="rating" min="1" max="5" value="<?=$room['rating'];?>">
            </div>
            <div class="button">
                <button type="submit" class="button_create" class="btn btn-primary btn-block">EDIT</button>
            </div>
        </form>
    </div>
</div>
<?php endif ?>
</body>
</html>