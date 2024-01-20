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
    include(__DIR__ . "/.././../layouts/admin.navbar.php");
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
                    <h4 id="title">CREATE ROOM</h4>
                    <a href="/admin"><i class="fas fa-times"></i></a>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <input type="text" id="type" class="form-control" placeholder="Type" name="type" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price" class="form-control" placeholder="Price" name="price" required>
                </div>

                <div class="form-group">
                    <label for="availability">Availability:</label>
                    <input type="number" id="availability" class="form-control" placeholder="Availability" name="availability" min="0" max="1" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" id="description" class="form-control" placeholder="Description" name="description" required>
                </div>
                <div class="form-group">
                    <label for="convenient">Convenient:</label>
                    <input type="text" id="convenient" class="form-control" placeholder="Convenient" name="convenient" required>
                </div>
                <div class="form-group">
                    <label for="image_url">Image:</label>
                    <input type="text" id="image_url" class="form-control" placeholder="Image" name="image_url" required>
                </div>
                <div class="button">
                    <button type="submit" class="button_create" class="btn btn-primary btn-block">CREATE</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>