<?php  session_start() ?>
<?php
    require ("./app/Models/register/register.model.php");
    require ("./app/Models/home/card.model.php");
    require ("./app/Models/home/detailroom.model.php");
    $rooms= getRooms();
    require "app/views/home/home.view.php";
?>
