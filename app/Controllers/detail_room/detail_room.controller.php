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
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['rule'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rule = $_POST['rule'];
        login($email,$password,$rule);
    }
    ?>
<?php 
    require "app/Views/detail_room/index.php";
?>