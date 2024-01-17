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
    include(__DIR__ . "../../../../layouts/admin.navbar.php");
    require(__DIR__ . '/../../../../Models/admin.model.php');
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
        <div class="main_menu">
            <div class="searchUser">
                <h1 class="animate-character">SEASIDE PARADISE RETREAT</h1>
            </div>
            <div class="scrollable-table">
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
                        if (!empty($_POST['search'])) {
                            $searchTerm = $_POST['search'];
                            $searchBills = searchBillWithUser($searchTerm);
                            if ($searchBills) {
                                foreach ($searchBills as $searchBill) {
                        ?>
                                    <tr>
                                        <td><?php echo $searchBill['id']; ?></td>
                                        <td style="width: 100px; white-space: nowrap;"><?php echo $searchBill['username']; ?></td>
                                        <td><?php echo $searchBill['phone']; ?></td>
                                        <td><?php echo $searchBill['email']; ?></td>
                                        <td><?php echo $searchBill['name']; ?></td>
                                        <td><?php echo $searchBill['total_price']; ?></td>
                                        <td><?php echo $searchBill['date']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                        <?php
                            } else {
                                echo "<p>No bill found. </p>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>