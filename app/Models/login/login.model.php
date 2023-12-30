<?php 
require ("./app/Databases/database.php");
?>
<?php 
function getUser($user) {
    global $connection;
    $query = "SELECT password, rule FROM users WHERE email = :email";
    $statement = $connection->prepare($query);
    $statement->bindParam(':email', $user['email'], PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}

?>