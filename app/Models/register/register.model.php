
<?php 
require ("./app/Databases/database.php");
?>
<?php 
    function validateUsername($userName) {
        global $connection; 
        $userName = trim($userName);
        if(empty($userName)) {
            return "Please enter UserName";
        }
        if (strlen($userName) < 4 || strlen($userName) > 25) {
            return "Your name must be at least 4 characters";
        }
        $query = "SELECT name FROM users WHERE name = :username";
        $statament=db()->prepare($query);
        $statament->bindParam(":username", $userName);
        $statament->execute();
        $user=$statament->fetch(PDO::FETCH_ASSOC);
        if (!empty($user) ) {
            return "Username already exists";
        }
        return;
    }

    function validateEmail($email) {
        global $connection;
            $email =(trim($email));
            if(empty($email)) {
                return "Please enter an email";
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                return  "Email must contain '@'";
            }
            $query = "SELECT email FROM users WHERE email = :email";
            $statament=db()->prepare($query);
            $statament->bindParam(":email", $email);
            $statament->execute();
            $email=$statament->fetch(PDO::FETCH_ASSOC);
            if (!empty($email)) {
                return "Email does exit";
            }
            return;
        }
    function validatePhone($phoneNumber) {
        global $connection;
        $phone = preg_replace("/[^0-9]/", "", $phoneNumber);
        $query = "SELECT phone FROM users WHERE phone = :phone";
        $statament = db() ->prepare($query);
        $statament->bindParam(":phone", $phone);
        $statament->execute();
        $phonedata=$statament->fetch(PDO::FETCH_ASSOC);
        if (!empty($phonedata)) {
            return "Phone does exit";
        }
        return;
    }

    function getAge($date){
        $dateofbirth = new DateTime($date);
        $currentDate = new DateTime();
        $age = $currentDate->diff($dateofbirth)->y;
        return $age;
    }
   

    // $form_valid = false;
    

    function registerUser($userName, $password, $phone, $email, $date, $gender)
    {
        global $connection;
        try {
            $query = "INSERT INTO users (name, email, password, phone, age, gender) VALUES (:username, :email, :password ,:phone, :age, :gender)";
            $statament = db()->prepare($query);
            $statament->bindParam(":username", $userName, PDO::PARAM_STR);
            $statament->bindParam(":email", $email, PDO::PARAM_STR);
            $statament->bindParam(":password", $password);
            $statament->bindParam(":phone", $phone, PDO::PARAM_INT);
            $statament->bindParam(":age", $date, PDO::PARAM_INT);
            $statament->bindParam(":gender", $gender, PDO::PARAM_STR);
            $result = $statament->execute();
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }


?>