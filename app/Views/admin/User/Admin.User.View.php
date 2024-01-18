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
            <div id="userTab" class="tabcontent">
                <h1 class="animate-charcter" style="text-align: center; margin-bottom: 50px; ">USER</h1>
                <div class="ItemUser">
                    <div class="search">
                        <form action="/admin/Search/User" method="POST">
                            <input type="text" id="search" name="search" placeholder="Search">
                            <button type="submit" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <a href="/admin/User/create"><button type="button" id="createUser">Create +</button></a>
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
                                    <td><img style="height:100px; width:100px" src="<?php echo $user['avatar']; ?>" alt="User Avatar"></td>
                                    <td class="ellipsis" onclick="showFullText(this)"><?php echo password_hash($user['password'], PASSWORD_DEFAULT); ?></td>
                                    <td><?php echo $user['phone']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['age']; ?></td>
                                    <td><?php echo $user['gender']; ?></td>
                                    <td><?php echo $user['availability']; ?></td>
                                    <td>
                                        <a href="/admin/User/edit?id=<?= $user['id'] ?>"><button type="button" id="button_edit"><i class="fas fa-edit"></i></button></a>
                                        <a href="/admin/User/delete?id=<?= $user['id'] ?>"><button type="button" id="button_delete"><i class="fas fa-trash"></i></button></a>
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

    </div>
</body>
<script>
    function showFullText(element) {
        element.classList.toggle('full-text');
    }
</script>


</html>