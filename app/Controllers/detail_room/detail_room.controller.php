<?php session_start() ?>
<?php
require("app/Models/home/card.model.php");
require("app/Models/home/detailroom.model.php");
require("app/Models/detail/detail.model.php");
require("app/Models/register/register.model.php");
require("app/Models/login/login.model.php");
require "app/Models/admin.model.php";
require("app/Models/booking_history/booking_history.model.php");
require("app/Models/feedback/feedback.model.php");
if (isset($_GET['id_room'])) {
    $roomId = $_GET['id_room'];
    $images = getRoomImages($roomId);
    $rooms = getRoomId($roomId);
} ?>
<?php
$userName = "";
$phone = "";
$email = "";
$date = "";
$gender = "";
$password = "";
$confirmpassword = "";
$user_error = "";
$email_error = "";
$phone_error = "";
$terms_error = "";
$confirmpassword_error = "";
$registersuccessfull  = "";
$password_error_login = "";
$email_error_login = "";
// Register
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["name"])) {
        $user_error = validateUsername($_POST["name"]);
        if (empty($user_error)) {
            $userName = htmlspecialchars($_POST["name"]);
            $_SESSION['name'] = $userName;
        }
    }
    if (isset($_POST["email"])) {
        $email_error = validateEmail($_POST["email"]);
        if (empty($email_error)) {
            $email = htmlspecialchars($_POST["email"]);
            $_SESSION['email'] = $email;
        }
    }
    if (isset($_POST["phone"])) {
        $phone_error = validatePhone($_POST["phone"]);
        if (empty($phone_error)) {
            $phone = htmlspecialchars($_POST["phone"]);
            $_SESSION['phone'] = $phone;
        }
    }
    if (!empty($_POST["date"])) {
        $date = $_POST["date"];
        $age = getAge($date);
        $_SESSION['age'] = $age;
    }
    if (!empty($_POST["gender"])) {
        $gender = $_POST["gender"];
    }
    if (isset($_POST["password"])) {
        $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    }
    if (isset($_POST["confirmpassword"])) {
        $confirmpassword = htmlspecialchars($_POST["confirmpassword"]);
        if ($confirmpassword !== $password) {
            $confirmpassword_error = "Password incorrect";
        }
    }
    if (!isset($_POST["checkboxaccep"])) {
        $terms_error = "You must accept the Terms of Service";
    }
    if (empty($user_error) && empty($email_error) && empty($phone_error) && empty($confirmpassword_error) && empty($terms_error)) {
        $result = registerUser($userName, $hashedPassword, $phone, $email, $date, $gender);
        if (!empty($result)) {
            echo '<script>alert("Register Successful and you need to log in again");</script>';
            $registersuccessfull = true;
        } else {
            echo '<script>alert("Register Error");</script>';
        }
    }
}
?>
<?php
//Login
if (!$registersuccessfull) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dataUser = getUser($email);
        if (empty($dataUser)) {
            $email_error_login = "Email not found!";
        } else {
            if ($dataUser) {
                if (password_verify($password, $dataUser['password'])) {
                    if ($dataUser['role'] == 'user') {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['id'] = $dataUser['id'];
                        $_SESSION['name'] = $dataUser['name'];
                        $_SESSION['avatar'] = $dataUser['avatar'];
                        $_SESSION['phone'] = $dataUser['phone'];
                        $_SESSION['role'] = $dataUser['role'];
                        $_SESSION['isLogin'] = true;
                        echo '<script>alert("Login Successful");</script>';
                    } else if ($dataUser['role']  == 'admin') {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['id'] = $dataUser['id'];
                        $_SESSION['name'] = $dataUser['name'];
                        $_SESSION['avatar'] = $dataUser['avatar'];
                        $_SESSION['phone'] = $dataUser['phone'];
                        $_SESSION['role'] = $dataUser['role'];
                        $_SESSION['isLogin'] = true;
                        echo '<script>alert("Login Successful");</script>';
                        header("Location: /admin");
                    }
                } else {
                    $password_error_login = "Password incorrect!";
                }
            }
        }
    }
}
?>
<?php
if (isset($_GET['id_room'])) {
    $roomID = $_GET['id_room']; // ID Room hiện tại
    $user_id_to_check = $_SESSION['id']; // ID user hiện tại
    $isBooking = isBooking($roomID, $user_id_to_check);
    if ($isBooking) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['id_room']) && isset($_POST['star_rating']) && isset($_POST['feedback'])) {
                $id_room = $_POST['id_room'];
                $star_rating = $_POST['star_rating'];
                $feedback = $_POST['feedback'];
                $currentDateTime = date('Y-m-d H:i:s');
                $addFeedback = saveFeedbackToDatabase($id_room, $user_id_to_check, $star_rating, $feedback);
            } else {
                echo "Vui lòng điền đầy đủ thông tin trong form.";
            }
        }
    } else {
    }
}
// header("Location:/detail_room?id_room=$roomID");
?>
<?php
require "app/Views/detail_room/index.php";
?>