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

    if (!empty($_POST['name']) and !empty($_POST['password']) and !empty($_POST['phone']) and !empty($_POST['email']) and !empty($_POST['age']) and !empty($_POST['gender']) and !empty($_GET["id"]) ) {
        $statement = db()->prepare("update users set name = :name, password = :password, phone = :phone, email = :email, age = :age, gender = :gender where id = :id");
        $statement->execute([
            ':name' => $_POST['name'],
            ':password' =>  $_POST['password'],
            ':phone' =>  $_POST['phone'],
            ':email' =>  $_POST['email'],
            ':age' =>  $_POST['age'],
            ':gender' =>  $_POST['gender'],
            ':id' => $_GET["id"]
        ]);
        // updateUser($_POST['name'],$_POST['password'],$_POST['phone'],$_POST['email'],$_POST['age'],$_POST['gender'],$_POST['name'])
        
        header('location: /admin');
        
    }
}

include(__DIR__ . "/.././../layouts/admin.navbar.php");
    $id = $_GET["id"] ? $_GET["id"] : null;
    if (isset($id)):
   
        $statement = db()->prepare('select * from users where id = :id');
        $statement->execute([':id' => $id]);
        $user = $statement->fetch();

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
        <form  class="form_action" method="post">
            <div class="form_title">
                <h2 id="title">EDIT USER</h2>
                <a href="/admin"><i class="fas fa-times" ></i></a>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?=$user['name'];?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" class="form-control" placeholder="Password" name="password" value="<?=$user['password'];?>" >
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="number" id="phone" class="form-control" placeholder="Phone Number" name="phone" value="<?=$user['phone']; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" placeholder="Email" name="email" value="<?=$user['email']; ?>">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" class="form-control" placeholder="Age" name="age" value="<?=$user['age'];?>">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" id="gender" class="form-control" placeholder="Gender" name="gender" value="<?=$user['gender']; ?>">
            </div>
            <div class="button">
                <button type="submit" class="button_create">EDIT</button>
            </div>
        </form>
    </div>
</div>
<?php endif ?>
</body>
</html>