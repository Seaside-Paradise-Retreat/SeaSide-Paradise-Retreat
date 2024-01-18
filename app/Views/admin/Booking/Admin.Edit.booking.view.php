<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Booking</title>
    <link rel="stylesheet" href="../../../../public/css/Adminpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
<?php

require(__DIR__ . '/../../../Databases/database.php');
require(__DIR__ . '/../../../Models/admin.model.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['id_room']) && 
        !empty($_POST['check_in_date']) && 
        !empty($_POST['check_out_date']) && 
        isset($_POST['availability']) && 
        !empty($_GET["id"])
    ) {
        $result = updateBooking(
            $_POST['id_room'],
            $_POST['check_in_date'],
            $_POST['check_out_date'],
            $_POST['availability'],
            $_GET["id"]
        );
        if ($result) {
            echo "<script> 
                    alert('Update booking record successful!') ;
                    window.location.href='/admin';
                </script>";
            // header('Location: /admin');
            exit();
        } else {
            echo "Error.";
        }
    }
}

include(__DIR__ . "/.././../layouts/admin.navbar.php");
    $id = $_GET["id"] ?? null; // Use the null coalescing operator for default value
    if ($id) :
        $statement = $connection->prepare('SELECT * FROM booking WHERE id = :id');
        $statement->execute([':id' => $id]);
        $book = $statement->fetch();
    ?>

        <div class="container">
        <div class="main_menu_left">
                <div class="item">
                    <a class="redirect" href="/admin">
                        <button onclick="OpenType('userTab')" class="tablinks" data-tab="userTab">
                            <i class="fas fa-user" style="padding-right:30px"></i>
                            <h5 class="titles">User</h5>
                        </button>
                    </a>
                </div>
                <div class="item">
                    <a class="redirect" href="/admin">
                        <button onclick="OpenType('roomTab')" class="tablinks" data-tab="roomTab">
                            <i class="fas fa-list-ul" style="padding-right:20px"></i>
                            <h5 class="title">Room</h5>
                        </button>
                    </a>
                </div>
                <div class="item">
                    <a class="redirect" href="/admin">
                        <button onclick="OpenType('bookingTab')" class="tablinks active" data-tab="bookingTab">
                            <i class="fas fa-list-ul" style="padding-right:20px"></i>
                            <h5 class="title">Booking</h5>
                        </button>
                    </a>
                </div>
                <div class="item">
                    <a class="redirect" href="/admin">
                        <button onclick="OpenType('billTab')" class="tablinks" data-tab="billTab">
                            <i class="fas fa-list-ul" style="padding-right:30px"></i>
                            <h5 class="titles">Bill</h5>
                        </button>
                    </a>
                </div>
            </div>
            <div id="Modal" class="main_menu_right">
                <form class="form_action" action="#" method="post">
                    <div class="form_title">
                        <h4 id="title">EDIT BOOKING</h4>
                        <a href="/admin"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="form-group">
                        <label for="id_room">Id Room</label>
                        <input type="number" class="form-control" id="id_room" placeholder="Id Room" name="id_room" value="<?= $book['id_room']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="check_in">Check In</label>
                        <input type="datetime-local" id="check_in" class="form-control" placeholder="Check In" name="check_in_date" value="<?= $book['check_in_date']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="check_out">Check Out</label>
                        <input type="datetime-local" id="check_out" class="form-control" placeholder="Check Out" name="check_out_date" value="<?= $book['check_out_date']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="availability">Availability</label>
                        <input type="number" id="availability" class="form-control" placeholder="Availability" name="availability" value="<?= $book['availability']; ?>" min="0" max="1">
                    </div>
                    <div class="button">
                        <button type="submit" class="button_create" >EDIT</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif ?>
</body>

</html>
