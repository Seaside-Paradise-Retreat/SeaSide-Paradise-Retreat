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
            <div id="roomTab" class="tabcontent">
                <h1 class="animate-charcter" style="text-align: center; margin-bottom:50px">ROOM</h1>
                <div class="ItemRoom">
                    <div class="search">
                        <form action="/admin/Search/Room" method="POST">
                            <input type="text" id="search" name="search" placeholder="Search">
                            <button type="submit" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
                        </form>
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
                                    <td class="ellipsis" onclick="showFullText(this)"> <?php echo $room['description'];  ?></td>
                                    <td class="option">
                                        <a href="/admin/Room/edit?id=<?= $room['id'] ?>"><button type="button" id="button_edit"><i class="fas fa-edit"></i></button></a>
                                        <a href="/admin/Room/delete?id=<?= $room['id'] ?>"><button type="button" onclick="deleteRoom(roomId)" id="button_delete"><i class="fas fa-trash"></i></button></a>
                                        <a href="/admin/Feedback?id=<?= $room['id'] ?>"><button type="button" id="button_comment"><i class="fas fa-comment"></i></button></a>
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
        </div>

    </div>
</body>
<script>
    function showFullText(element) {
        element.classList.toggle('full-text');
    }
</script>
</html>