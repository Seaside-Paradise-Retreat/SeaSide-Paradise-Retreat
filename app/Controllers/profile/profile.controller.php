<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['name']) && isset($_SESSION['phone']) && isset($_SESSION['avatar'])) {
    $id = $_SESSION['id'];
    $avatar = $_SESSION['avatar'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $password = $_SESSION['password'];
}
?>
<?php 
require 'app/Views/profile/profile.view.php';
?>