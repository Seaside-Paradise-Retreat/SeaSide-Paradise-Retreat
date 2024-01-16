<?php  session_start() ?>
<?php
require ("./app/Models/home/card.model.php");
require ("./app/Models/home/detailroom.model.php");
require ("./app/Models/register/register.model.php");
require ("./app/Models/login/login.model.php");
require ("app/Models/favorite/favorite.model.php");
require ("app/Models/search/search.model.php");
echo "<script>
    console.log('lam');
</script>";
echo "<script>
console.log('{$_POST["nav_input"]}');
</script>";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nav_input'])){
    echo "<script>console.log('{$_POST["nav_input"]}');</script>";
    $searchPrice = $_POST['nav_input'];
    $search_price = (int)$searchPrice;// Giá tiền tối thiểu
    $rooms = search_room($search_price);
    if(empty($rooms)){
        header("Location:/error");
    }
}
?>
<?php require ("app/Views/search/search.view.php"); ?>