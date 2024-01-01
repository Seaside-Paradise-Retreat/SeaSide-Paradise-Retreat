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
                <button onclick="OpenType('userTab')" class="tablinks">
                    <i class="fas fa-user" style="padding-right:30px"></i>
                    <h4 class="title">User</h4>
                </button>
            </div>
            <div class="item">
                <button onclick="OpenType('roomTab')" class="tablinks">
                    <i class="fas fa-list-ul" style="padding-right:30px"></i>
                    <h4 class="title">Room</h4>
                </button>
            </div>
            <div class="item">
                <button onclick="OpenType('bookingTab')" class="tablinks  active">
                    <i class="fas fa-list-ul" style="padding-right:30px"></i>
                    <h4 class="title">Booking</h4>
                </button>
            </div>
        </div>
        <div id="bookingTab" class="tabcontent active">
            <h1 class="title" style="text-align: center;">BOOKING</h1>
            <table class="table">
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
        <div id="roomTab" class="tabcontent">
            <h1 class="title" style="text-align: center;">ROOM</h1>
            <button type="button" id="createRoom">Create +</button>
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
                        <th>Rating</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add table rows with user data here -->
                    <tr>
                        <td>1</td>
                        <td>101</td>
                        <td>Standard</td>
                        <td>$89.99</td>
                        <td>Available</td>
                        <td>Cozy standard room with a queen-size bed.</td>
                        <td>4.0</td>
                        <td>
                            <button type="button" id="button_edit"><i class="fas fa-cog"></i></button>
                            <button type="button" id="button_delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
        <div id="userTab" class="tabcontent">
            <h1 class="title" style="text-align: center; ">USER</h1>
            <button type="button" id="createUser">Create +</button>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Avatar</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add table rows with user data here -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Avatar URL</td>
                        <td>123-456-7890</td>
                        <td>john@example.com</td>
                        <td>25</td>
                        <td>Male</td>
                        <td>
                            <button type="button" id="button_edit"><i class="fas fa-cog"></i></button>
                            <button type="button" id="button_delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
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
    </script>
</body>

</html>
