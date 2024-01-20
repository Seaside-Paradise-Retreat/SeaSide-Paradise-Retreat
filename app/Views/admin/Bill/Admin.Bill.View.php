<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seaside Paradise Retreat</title>
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
            <div id="billTab" class="tabcontent">
                <h1 class="animate-charcter" style="text-align: center; margin-bottom: 50px; ">BILL</h1>
                <div class="ItemBill">
                    <div class="search">
                        <form action="/admin/Search/Bill" method="POST">
                            <input type="text" id="search" name="search" placeholder="Search">
                            <button type="submit" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Room Name</th>
                            <th>Total Price</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once(__DIR__ . '/../../../Models/admin.model.php');
                        $bills = selectBill();
                        $price = selectTotalPrice();
                        if ($bills) {
                            foreach ($bills as $bill) {
                        ?>
                                <tr>
                                    <td><?php echo $bill['id']; ?></td>
                                    <td style="width: 100px; white-space: nowrap;"><?php echo $bill['username']; ?></td>
                                    <td><?php echo $bill['phone']; ?></td>
                                    <td><?php echo $bill['email']; ?></td>
                                    <td><?php echo $bill['name']; ?></td>
                                    <td><?php echo $bill['total_price']; ?></td>
                                    <td><?php echo $bill['date']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr class="total-price">
                                <td colspan="6">
                                    <?php
                                    if (is_array($price)) {
                                        echo '<div class="total-prices">';
                                        echo '<label>Total Price: </label>';
                                        echo '<span>' . implode(', ', $price) . ' VND</span>';
                                        echo '</div>';
                                    } else {
                                        echo '<div class="total-prices">';
                                        echo '<label>Total Price: </label>';
                                        echo '<span>' . $price . ' VND</span>';
                                        echo '</div>';
                                    }
                                    ?>

                                </td>
                            </tr>
                        <?php
                        } else {
                            echo "<p>No bill found. </p>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>