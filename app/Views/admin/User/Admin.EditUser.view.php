<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_User</title>
    <link rel="stylesheet" href="../../../../public/css/Adminpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <?php

    require(__DIR__ . '/../../../Models/admin.model.php');
    $user_error = $phone_error = $availability_error = $email_error = $age_error = $gender_error = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $availability = $_POST['availability'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        !empty($_GET["id"]);
        if (!validateUsernames($name)) {
            $user_error = "Please enter a valid username (4-25 characters).";
        }
        if (!validateAvailabilitys($availability)) {
            $availability_error = "Please enter a valid availability (0 or 1).";
        }
        if (!validatePhones($phone)) {
            $phone_error = "Please enter a valid 10-digit phone number.";
        }
        if (!validateEmails($email, $connection)) {
            $email_error = "Please enter a valid email address without spaces and '@'.";
        }
        if (!validateAge($age)) {
            $age_error = "Please enter a valid age as a positive numeric value.";
        }

        // Add gender validation if needed
        if (!validateGender($gender)) {
            $gender_error = "Please enter a valid gender as a positive numeric value.";
        }
        // Check if any error occurred
        if ($user_error || $availability_error || $phone_error || $email_error || $age_error || $gender_error) {
            echo "Invalid input. Please check your form data.";
        } else {
            // All input fields are valid, proceed to create a new user
            $result = updateUser(
                $name,
                $phone,
                $email,
                $age,
                $gender,
                $availability,
                $_GET["id"]
            );
            if ($result) {
                echo '<script>
                    alert("Update user record successful!");
                    window.location.href = "/admin";
                </script>';
                exit();
            } else {
                echo "Error update user record.";
            }
        }
    }
    include(__DIR__ . "/.././../layouts/admin.navbar.php");
    $id = $_GET["id"] ? $_GET["id"] : null;
    if (isset($id)) :
        $statement = $connection->prepare('select * from users where id = :id');
        $statement->execute([':id' => $id]);
        $user = $statement->fetch();

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
                <div class="item">
                    <button onclick="OpenType('billTab')" class="tablinks" data-tab="billTab">
                        <i class="fas fa-list-ul" style="padding-right:30px"></i>
                        <h5 class="titles">Bill</h5>
                    </button>
                </div>
            </div>
            <div id="Modal" class="main_menu_right">
                <form class="form_action" method="post">
                    <div class="form_title">
                        <h4 id="title">EDIT USER</h4>
                        <a href="/admin"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?= $user['name']; ?>">
                        <span class="error"><?php echo $user_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="number" id="phone" class="form-control" placeholder="Phone Number" name="phone" value="<?= $user['phone']; ?>">
                        <span class="error"><?php echo $phone_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" placeholder="Email" name="email" value="<?= $user['email']; ?>">
                        <span class="error"><?php echo $email_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" id="age" class="form-control" placeholder="Age" name="age" value="<?= $user['age']; ?>">
                        <span class="error"><?php echo $age_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="text" id="gender" class="form-control" placeholder="Gender" name="gender" value="<?= $user['gender']; ?>">
                        <span class="error"><?php echo $gender_error; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="availability">Availability</label>
                        <input type="text" id="availability" class="form-control" placeholder="Availability" name="availability" value="<?= $user['availability']; ?>">
                        <span class="error"><?php echo $availability_error; ?></span>
                    </div>
                    <div class="button">
                        <button type="submit" class="button_create">EDIT</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif ?>
</body>

</html>