<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seaside Paradise Retreat</title>
    <link rel="stylesheet" href="../../../../public/css/Adminpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <?php

    require(__DIR__ . '/../../../Databases/database.php'); // Ensure this line is uncommented and provides the correct path to the database connection file
    require(__DIR__ . '/../../../Models/admin.model.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (
            !empty($_POST['name']) &&
            !empty($_POST['type']) &&
            !empty($_POST['price']) &&
            isset($_POST['availability']) &&
            !empty($_POST['description']) &&
            !empty($_GET["id"])
        ) {
            $result = updateRoom(
                $_POST['name'],
                $_POST['type'],
                $_POST['price'],
                $_POST['availability'],
                $_POST['description'],
                $_GET["id"]
            );
            if ($result) {
                echo "<script> 
                        alert('Update room record successful!') ;
                        window.location.href='/admin/Room/view';
                    </script>";
                // header('Location: /admin');
                exit();
            } else {
                echo "Error.";
            }
        }
    }
    include(__DIR__ . "/.././../layouts/admin.navbar.php");
    $id = $_GET["id"] ?? null;
    if (isset($id)) :
        $statement = $connection->prepare('SELECT * FROM rooms WHERE id = :id');
        $statement->execute([':id' => $id]);
        $room = $statement->fetch();
    ?>
        <div class="container">
            <div class="main_menu_left">
                <div class="item">
                    <a class="redirect" href="/admin/User/view">
                        <button class="tablinks" data-tab="userTab">
                            <i class="fas fa-user" style="padding-right:30px"></i>
                            <h5 class="titles">User</h5>
                        </button>
                    </a>
                </div>
                <div class="item">
                    <a class="redirect" href="/admin/Room/view">
                        <button class="tablinks" data-tab="roomTab">
                            <i class="fas fa-list-ul" style="padding-right:30px"></i>
                            <h5 class="titles">Room</h5>
                        </button>
                    </a>
                </div>
                <div class="item">
                    <a class="redirect" href="/admin/Booking/view">
                        <button class="tablinks" data-tab="bookingTab">
                            <i class="fas fa-list-ul" style="padding-right:30px"></i>
                            <h5 class="titles">Booking</h5>
                        </button>
                    </a>
                </div>
                <div class="item">
                    <a class="redirect" href="/admin/Bill/view">
                        <button class="tablinks" data-tab="billTab">
                            <i class="fas fa-list-ul" style="padding-right:30px"></i>
                            <h5 class="titles">Bill</h5>
                        </button>
                    </a>
                </div>
            </div>
            <div id="Modal" class="main_menu_right">
                <form class="form_action" action="#" method="post">
                    <div class="form_title">
                        <h4 id="title">EDIT ROOM</h4>
                        <a href="/admin"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?= $room['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="type">Type:</label>
                        <input type="text" id="type" class="form-control" placeholder="Type" name="type" value="<?= $room['type']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" id="price" class="form-control" placeholder="Price" name="price" value="<?= $room['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="availability">Availability:</label>
                        <input type="number" id="availability" class="form-control" placeholder="Availability" name="availability" value="<?= $room['availability']; ?>" min="0" max="1">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" id="description" class="form-control" placeholder="Description" name="description" value="<?= $room['description']; ?>">
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