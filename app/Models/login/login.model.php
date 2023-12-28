<?php 
require ("./app/Databases/database.php");
?>
<?php 
    function login($email, $password, $rule) {
        global $connection;
        $query = "SELECT password, rule FROM users WHERE email = :email";
        $statement = $connection->prepare($query);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $userpassworddata = $user['password'];
            if ($password == $userpassworddata) {
                if ($rule == 'user') {
                    echo '<script>alert("Login Successful");</script>';
                    header("Location: /user");
                } else if ($rule == 'admin') {
                    echo '<script>alert("Login Successful");</script>';
                    header("Location: '/admin'");
                }
            }
        }
    }

?>