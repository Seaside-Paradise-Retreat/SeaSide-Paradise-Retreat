<?php  session_start() ?>
<?php
require ("./app/Models/home/card.model.php");
require ("./app/Models/home/detailroom.model.php");
require ("./app/Models/register/register.model.php");
require ("./app/Models/login/login.model.php");
require ("app/Models/favorite/favorite.model.php");
require ("app/Models/search/search.model.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nav_input'])){
    $search = $_POST['nav_input'];
    $rooms = '';
    $search_price = (int)$search;
    $rooms = search_room($search_price);
    if(empty($rooms)){
        $rooms = search_room_convenient($search);
    }
    // echo "<script>console.log('{$room['availability']}');</script>";
    foreach($rooms as $room){
        $room_availability = $room['availability'];
    }
    if(empty($rooms) || $room_availability == 0){
        header("Location:/error");
    }

}
?>
<?php require ("app/Views/search/search.view.php"); ?>