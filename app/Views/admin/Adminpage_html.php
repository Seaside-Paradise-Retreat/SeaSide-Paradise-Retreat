<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/Adminpage.css">

</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="../admin/Adminpage_html.php" style="text-decoration: none;">
                <img id="logo_hotel" src="../../Assets/images/logo_hotel.png" alt="logo_hotel">
            </a>
            <div class="search">
                <input type="text" id="search" name="input_search" placeholder="Search">
                <button type="button" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
            </div>
            <div class="profile_user">
                <i class="fas fa-user-circle" style="font-size: 35px;"></i>
                <div class="menu">
                    <div class="has-sub-menu">
                        <i class="fas fa-caret-down" style="font-size: 35px;"></i>
                        <div class="sub-menu">
                            <button type="button" id="profile">Profile</button>
                            <button type="button" id="logout">Log Out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="main_menu_left">
                <div class="item">
                    <a href="" style="text-decoration: none; color:inherit">
                        <button type="button" id="user">
                            <i class="fas fa-user" style="padding-right:10px"></i>
                            <h4 class="title">User</h4>
                        </button>
                    </a>
                </div>
                <div class="item">
                    <button type="button" id="room">
                        <i class="fas fa-list-ul" style="padding-right:10px"></i>
                        <h4 class="title">Room</h4>
                    </button>
                </div>
                <div class="item">
                    <button type="button" id="booking">
                        <i class="fas fa-list-ul" style="padding-right:10px"></i>
                        <h4 class="title">Booking</h4>
                    </button>

                </div>
            </div>
            <div class="main_menu_right">
                <div class="Booking">
                    <h1 class="title" style="text-align: center;">BOOKING</h1>
                    <table class="tableOfBooking">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Room</th>
                                <th>Name Customer</th>
                                <th>Phone Number</th>
                                <th>Check in</th>
                                <th>Check out</th>
                                <th>Money</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add table rows with user data here -->
                            <tr>
                                <td>1</td>
                                <td>Delux</td>
                                <td>Hung</td>
                                <td>123-456-7890</td>
                                <td>20/12/2023</td>
                                <td>23/12/2023</td>
                                <td>3000000</td>
        
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>