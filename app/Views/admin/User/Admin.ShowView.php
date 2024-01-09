<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/Adminpage.css">
    <style>
        .tabcontent {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main_menu_left">
            <div class="item">
                <button onclick="OpenType('userTab')" class="tablinks" data-tab="userTab">
                    <i class="fas fa-user" style="padding-right:30px"></i>
                    <h5 class="titles">User</h5>
                </button>
            </div>
            <div class="item">
                <button onclick="OpenType('roomTab')" class="tablinks" data-tab="roomTab">
                    <i class="fas fa-list-ul" style="padding-right:30px"></i>
                    <h5 class="titles">Room</h5>
                </button>
            </div>
            <div class="item">
                <button onclick="OpenType('bookingTab')" class="tablinks active" data-tab="bookingTab">
                    <i class="fas fa-list-ul" style="padding-right:30px"></i>
                    <h5 class="titles">Booking</h5>
                </button>
            </div>
        </div>
        <div id="bookingTab" class="tabcontent active">

            <h1 class="title" style="text-align: center; margin-bottom:50px">BOOKING</h1>
            <div class="ItemBooking">
                <div class="search">
                    <input type="text" id="search" name="input_search" placeholder="Search">
                    <button type="button" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
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
                                    // Find the room in the $rooms array
                                    $room = findRoomById($roomId);

                                    // Check if the room is found
                                    if ($room) {
                                        echo $room['name']; // Replace 'room_name' with the actual field name
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
                                        // Find the room in the $rooms array
                                        $room = findRoomById($roomId);

                                        // Check if the room is found
                                        if ($room) {
                                            echo $room['price']; // Replace 'room_name' with the actual field name
                                        } else {
                                            echo "Room not found";
                                        }

                                    ?>
                                </td>
                                <td><?php echo $book['availability']; ?></td>

                                <td >
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
            
        
        <div id="roomTab" class="tabcontent">

            <h1 class="title" style="text-align: center; margin-bottom:50px">ROOM</h1>
            <div class="ItemRoom">
                <div class="search">
                    <input type="text" id="search" name="input_search" placeholder="Search">
                    <button type="button" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
                </div>
                <a href="/admin/Room/create"><button type="button" id="createRoom">Create +</button></a>
            </div>

            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Availability</th>
                        <th>Description</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    require_once(__DIR__ . '/../../../Models/admin.model.php');
                    $rooms = selectRoom();
                    

                    if ($rooms) {
                        foreach ($rooms as $room) {
                    ?>
                            <tr>
                                <td><?php echo $room['id']; ?></td>
                                <td><?php echo $room['name']; ?></td>
                                <td><?php echo $room['type']; ?></td>
                                <td><?php echo $room['price']; ?></td>
                                <td><?php echo $room['availability']; ?></td>
                                <td class="ellipsis" onclick="showFullText(this)" > <?php echo $room['description'];  ?></td>
                                <td class="option">
                                    <a href="/admin/Room/edit?id=<?= $room['id'] ?>"><button type="button" id="button_edit"><i class="fas fa-edit"></i></button></a>
                                    <a href="/admin/Room/delete?id=<?= $room['id'] ?>"><button type="button" onclick="deleteRoom(roomId)" id="button_delete"><i class="fas fa-trash"></i></button></a>
                                    <button type="button" id="button_comment"><i class="fas fa-comment"></i></button>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<p>No room found. </p>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <div id="userTab" class="tabcontent">
            <h1 class="title" style="text-align: center; margin-bottom: 50px; ">USER</h1>
            <div class="ItemUser">
                <div class="search">
                    <input type="text" id="search" name="input_search" placeholder="Search">
                    <button type="button" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
                </div>
                <a href="admin/User/create"><button type="button" id="createUser">Create +</button></a>
            </div>
            <br>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="width: 100px;">Name</th>
                        <th>Avatar</th>
                        <th>Password</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Availability</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add table rows with user data here -->
                    <?php

                    require_once(__DIR__ . '/../../../Models/admin.model.php');
                    $users = selectAllUser();

                    if ($users) {

                        foreach ($users as $user) {
                    ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td style="width: 100px; white-space: nowrap;"> <?php echo $user['name']; ?></td>
                                <td><?php echo $user['avatar']; ?></td>
                                <td class="ellipsis" onclick="showFullText(this)"><?php echo password_hash($user['password'], PASSWORD_DEFAULT); ?></td>
                                <td><?php echo $user['phone']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['age']; ?></td>
                                <td><?php echo $user['gender']; ?></td>
                                <td><?php echo $user['availability']; ?></td>
                                <td>
                                    <a href="admin/User/edit?id=<?= $user['id'] ?>"><button type="button" id="button_edit"><i class="fas fa-edit"></i></button></a>
                                    <a href="admin/User/delete?id=<?= $user['id'] ?>"><button type="button" id="button_delete"><i class="fas fa-trash"></i></button></a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<p>No user found. </p>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    <script>
        function OpenType(type) {
            var tabcontent = document.getElementsByClassName("tabcontent");
            for (var i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }

            var activeTab = document.getElementById(type);
            activeTab.classList.add("active");
        }
        function showFullText(element) {
            element.classList.toggle('full-text');
        }
        function deleteRoom(roomId) {
            let text = "Do you want to delete that room?\n Either OK or Cancel.";
            if (confirm(text) === true) {
                let deleteUrl = `admin/Room/delete?id=${roomId}`;
                window.location.href = deleteUrl;
            } else {
                alert("Delete Canceled");
            }
        }
    </script>
</body>

</html>