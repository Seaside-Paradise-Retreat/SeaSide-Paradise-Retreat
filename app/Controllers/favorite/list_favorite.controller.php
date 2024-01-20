<?php session_start()  ?>
<?php  
    require ("app/Models/favorite/favorite.model.php");
    require ("app/Models/home/card.model.php");
    require ("app/Models/detail/detail.model.php");
    require ("app/Models/home/detailroom.model.php");

    if(isset($_SESSION['id']) && $_SESSION["isLogin"]){ //$_SESSION ['id'] is id of user when user login 
         //1 Duluxe Deluxe 50.00 1 Deluxe Rooms are luxurious and spacious hotel acco... 4
        $favorite_rooms = get_list_favorite($_SESSION['id']);
    }  
    echo "<script>console.log(" . $_SESSION['id'] .")</script>";
    echo "<script>console.log(" . $_SESSION['isLogin'] .")</script>";
?>
<?php require ("app/Views/favorite/favorite.view.php") ?>
