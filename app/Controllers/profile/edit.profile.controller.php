
<?php 
session_start();
require 'app/Views/layouts/header.php';
if (isset($_SESSION['id'], $_SESSION['email'], $_SESSION['name'], $_SESSION['phone'], $_SESSION['password'])) {
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $password = $_SESSION['password'];
    // $avatar = $_SESSION['avatar'];
}
?>

<?php 
require 'app/Views/profile/edit.profile.view.php';
?>
