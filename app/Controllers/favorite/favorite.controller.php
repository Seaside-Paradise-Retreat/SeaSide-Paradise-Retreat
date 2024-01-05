<?php session_start()  ?>
<?php  
    require ("app/Models/favorite/favorite.model.php");
    require ("app/Models/detail/detail.model.php");
?>

<?php  
    if (isset($_GET['id_room'])) {
        $isAdd = true; //phòng chưa được thêm vào yêu thích
        $roomId = $_GET['id_room'];
        $room= getRoomId($roomId);
        $id_user = $_SESSION['id'];
        $favorite_rooms = get_list_favorite($id_user) ;
        echo "<script>console.log('" ."id room trên url" . $roomId. "')</script>";
        foreach ($favorite_rooms as $favorite_room) {
            if($favorite_room['id'] == $roomId){
               $isAdd = false;
               break;
            }
        }
        if ($isAdd) {
            $favorite_room = add_favourite($roomId, $id_user);
        }
        header("Location: /#like_room$roomId");

    }
?>