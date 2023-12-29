<?php 
require ("./app/Databases/database.php");
?>
<?php 
function getUser($email) {
    global $connection;
    $query = "SELECT password, role FROM users WHERE email = :email";
    $statement = $connection->prepare($query);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}

?>