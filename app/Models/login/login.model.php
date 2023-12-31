<?php 
require ("./app/Databases/database.php");
?>
<?php 
function getUser($email) {
    global $connection;
    $query = "SELECT id,password, role FROM users WHERE email = :email";
    $statement = $connection->prepare($query);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    print_r($user);
    return $user;

}
// $email = "example@example.com";
// $user = getUser($email);
// if ($user) {
//     $id = $user['id'];
//     echo "Id của người dùng là: " . $id;
// } else {
//     echo "Không tìm thấy người dùng với email đã cho.";
// }
?>