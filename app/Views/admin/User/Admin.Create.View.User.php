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
                    <h4 id="title">CREATE USER</h4>
                    <a href="/admin/User/view"><i class="fas fa-times"></i></a>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                    <span class="error"><?php echo $user_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                    <span class="error"><?php echo $password_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="number" id="phone" class="form-control" placeholder="Phone Number" name="phone">
                    <span class="error"><?php echo $phone_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="availability">Availability :</label>
                    <input type="number" id="availability" class="form-control" placeholder="Availability" name="availability">
                    <span class="error"><?php echo $availability_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="form-control" placeholder="Email" name="email">
                    <span class="error"><?php echo $email_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" class="form-control" placeholder="Age" name="age">
                    <span class="error"><?php echo $age_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="text" id="gender" class="form-control" placeholder="Gender" name="gender">
                    <span class="error"><?php echo $gender_error; ?></span>
                </div>
                <div class="button">
                    <button type="submit" class="button_create" class="btn btn-primary btn-block">CREATE</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>