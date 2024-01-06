<?php  session_start() ?>
<?php
require ("./app/Models/home/card.model.php");
require ("./app/Models/home/detailroom.model.php");
require ("./app/Models/register/register.model.php");
require ("./app/Models/login/login.model.php");
require ("app/Models/favorite/favorite.model.php");
$rooms= getRooms();
$room = "";
?>
<?php
    $userName = "";
    $phone = "";    
    $email = "";
    $date ="";
    $gender = "";
    $password = "";
    $confirmpassword = "";
    $user_error ="";
    $email_error = "";
    $phone_error = "";
    $terms_error = "";
    $confirmpassword_error = "";
    $registersuccessfull  = "";
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

if(!$registersuccessfull){
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dataUser = getUser($email);
    if ($dataUser) {
        if (password_verify($password, $dataUser['password'])) {
            if ($dataUser['role'] == 'user') {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $dataUser['id'];
                $_SESSION['name'] = $dataUser['name'];
                $_SESSION['avatar'] = $dataUser['avatar'];
                $_SESSION['phone'] = $dataUser['phone'];
                $_SESSION['isLogin'] = true;    
                echo '<script>alert("Login Successful");</script>';
            } else if ($dataUser['role']  == 'admin') {
                echo '<script>alert("Login Successful");</script>';
                header("Location: /admin");
            }
        }
        else{
            echo '<script>alert("Error");</script>';
        }
    }
}
}
?>

<?php
require "app/views/home/home.view.php";
?>