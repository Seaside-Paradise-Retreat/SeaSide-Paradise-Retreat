<?php  session_start() ?>
<?php
require ("./app/Models/home/card.model.php");
require ("./app/Models/home/detailroom.model.php");
require ("./app/Models/register/register.model.php");
require ("./app/Models/login/login.model.php");
$rooms= getRooms();
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

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["name"])) {
            $user_error = validateUsername($_POST["name"]);
            if (empty($user_error)) {
                $userName = htmlspecialchars($_POST["name"]);
                $_SESSION['name'] = $userName;
            }
        }
        if(isset($_POST["email"])){
            $email_error = validateEmail($_POST["email"]);
            if(empty($email_error)){
                $email =htmlspecialchars($_POST["email"]);
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
        if(isset($_POST["date"])){
            $date =$_POST["date"];
            $age = getAge($date);
            $_SESSION['age'] = $age;
        }
        if(isset($_POST["gender"])){
            $gender =$_POST["gender"];
        }
        if(isset($_POST["password"])){
            $password =$_POST["password"];
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        }
        if(isset($_POST["confirmpassword"])){
            $confirmpassword = htmlspecialchars($_POST["confirmpassword"]);
            if($confirmpassword !==$password){
                $confirmpassword_error = "Password incorrect";
            }
        }
        // if(!isset($_POST["checkboxaccep"])){
        //     $terms_error = "You must accept the Terms of Service";
        // }

        if (empty($user_error) &&  empty($email_error) && empty($phone_error)) {
            $result = registerUser($userName, $password, $phone, $email, $date, $gender);
            print_r($result);
            if (!empty($result)) {
                echo '<script>alert("Register Successful and you need to log in again");</script>';
        }else{
            echo '<script>alert("Error");</script>';
        }}
    }
    

?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['rule'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rule = $_POST['rule'];
        login($email,$password,$rule);
    }
      
?>
<?php
require "app/views/home/home.view.php";

?>
