<?php session_start()  ?>
<?php  
    require ("app/Models/favorite/favorite.model.php");
    require ("app/Models/detail/detail.model.php");
    require ("app/Models/home/detailroom.model.php");
    require ("app/Models/home/card.model.php");
    $images = getRoomImages($roomId);
    $rooms = getRooms();
?>
