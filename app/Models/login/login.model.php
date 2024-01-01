<?php 
require ("./app/Databases/database.php");
?>
<?php 
function getUser($user) {
    global $connection;
    $query = "SELECT password, role FROM users WHERE email = :email";
    $statement = db()->prepare($query);
    $statement->bindParam(':email', $user['email'], PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}

?>