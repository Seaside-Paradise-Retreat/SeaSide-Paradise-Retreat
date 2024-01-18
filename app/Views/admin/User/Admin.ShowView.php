<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../../../../public/css/Adminpage.css">
</head>

<body>
    <div class="container">
        <div class="main_menu_left" style="height:800px">
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
            <h1 class="animate-character">SEASIDE PARADISE RETREAT</h1>
            <div class="ManageTab">
                <div class="button_user">
                    <a class="redirect" href="/admin/User/view">
                        <h1>User</h1>
                        <?php
                        require(__DIR__ . "/../../../Models/admin.model.php");
                        $countUser = selectCountUser();
                        echo "<h2>" . $countUser . "</h2>";
                        ?>
                    </a>
                </div>
                <div class="button_user">
                    <a class="redirect" href="/admin/Room/view">
                        <h1>Room</h1>
                        <?php
                        $countRoom = selectCountRoom();
                        echo "<h2>" . $countRoom . "</h2>";
                        ?>
                    </a>
                    
                </div>
                <div class="button_user">
                    <a class="redirect" href="/admin/Booking/view">
                        <h1>Booking</h1>
                        <?php
                        $countBooked = selectCountBooking();
                        echo "<h2>" . $countBooked . "</h2>";
                        ?>
                    </a>
                </div>
                <div class="button_user">
                    <a class="redirect" href="/admin/Bill/view">
                        <h1>Bill</h1>
                        <?php
                        $countBill = selectCountBill();
                        echo "<h2>" . $countBill . "</h2>";
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>