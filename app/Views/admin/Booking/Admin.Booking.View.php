<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEASIDE PARADISE RETREAT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../../../../public/css/Adminpage.css">
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
        <div class="menu_right">
            <div id="bookingTab" class="tabcontent active">
                <h1 class="animate-charcter" style="text-align: center; margin-bottom:50px">BOOKING</h1>
                <div class="ItemBooking">
                    <div class="search">
                        <form action="/admin/Search/Booking" method="POST">
                            <input type="text" id="search" name="search" placeholder="Search">
                            <button type="submit" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Room</th>
                            <th>Name Customer</th>
                            <th>Phone Number</th>
                            <th>Check in</th>
                            <th>Check out</th>
                            <th>Price</th>
                            <th>Availability</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require(__DIR__ . '/../../../Models/admin.model.php');
                        $bookings = selectBookingRoom();
                        $rooms = selectRoom();
                        $users = selectAllUser();
                        if ($bookings) {
                            foreach ($bookings as $book) {
                        ?>
                                <tr>
                                    <td><?php echo $book['id']; ?></td>
                                    <td>
                                        <?php
                                        $roomId = $book['id_room'];
                                        $room = findRoomById($roomId);
                                        if ($room) {
                                            echo $room['name'];
                                        } else {
                                            echo "Room not found";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $userId = $book['id_user'];
                                        $user = findUserById($userId);
                                        if ($user) {
                                            echo $user['name'];
                                        } else {
                                            echo "User not found";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $userId = $book['id_user'];
                                        $user = findUserById($userId);
                                        if ($user) {
                                            echo $user['phone'];
                                        } else {
                                            echo "User not found";
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $book['check_in_date']; ?></td>
                                    <td><?php echo $book['check_out_date']; ?></td>
                                    <td>
                                        <?php
                                        $roomId = $book['id_room'];
                                        $room = findRoomById($roomId);
                                        if ($room) {
                                            echo $room['price']; // Replace 'room_name' with the actual field name
                                        } else {
                                            echo "Room not found";
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $book['availability']; ?></td>
                                    <td>
                                        <a href="/admin/Booking/edit?id=<?= $book['id'] ?>"><button type="button" id="button_edit"><i class="fas fa-edit"></i></button></a>
                                        <a href="/admin/Booking/delete?id=<?= $book['id'] ?>"><button type="button" id="button_delete"><i class="fas fa-trash"></i></button></a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<p>No booking found. </p>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>