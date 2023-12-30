<?php
    require ("app/Models/home/card.model.php");
    require ("app/Models/home/detailroom.model.php");
    require ("app/Models/register/register.model.php");
    require ("app/Models/login/login.model.php");
    if (isset($_GET['id_room'])) {
        $roomId = $_GET['id_room'];
        $images = getRoomImages($roomId);
        $rooms = getRooms();
        $room = $rooms[$roomId];
    }
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = array(
        'email' => $email,
        'password' => $password
    );
    
    $dataUser = getUser($user);
    if ($dataUser) {
        if ($password == $dataUser['password']) {
            if ($dataUser['rule'] == 'user') {
                echo '<script>alert("Login Successful");</script>';
                header("Location: /user");
            } else if ($user['rule']  == 'admin') {
                echo '<script>alert("Login Successful");</script>';
                header("Location: /admin");
            }
        }
    }
}
    ?>
<?php 
    require "app/Views/detail_room/index.php";
?>