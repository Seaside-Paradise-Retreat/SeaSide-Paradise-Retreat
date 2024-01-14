<?php 
require ("./app/Databases/database.php");
?>
<?php 
function getUser($email) {
    global $connection;
    $query = "SELECT id,password,phone,name,avatar,role FROM users WHERE email = :email";
    $statement = $connection->prepare($query);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    print_r($user);
    return $user;
}
function countUser(){
    global $connection;
    $query = "SELECT COUNT(*) AS user_count FROM users;";
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $count = $result['user_count'];
    return (int) $count;
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