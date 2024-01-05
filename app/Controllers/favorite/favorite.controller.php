<?php session_start()  ?>
<?php  
    require ("app/Models/favorite/favorite.model.php");
    require ("app/Models/detail/detail.model.php");
?>

<?php  
    if (isset($_GET['id_room'])) {
        $roomId = $_GET['id_room'];
        $room= getRoomId($roomId);
        $id_user = $_SESSION['id'];
        $favorite_room = add_favourite($roomId,$id_user);
        if($favorite_room){
            header("Location:/#like_room$roomId");
        }
        echo "<script>console.log('" . $roomId. "')</script>";
    }
?>