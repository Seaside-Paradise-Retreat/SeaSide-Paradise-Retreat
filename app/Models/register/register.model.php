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
        $statament=$connection->prepare($query);
        $statament->bindParam(":username", $userName);
        $statament->execute();
        $user=$statament->fetch(PDO::FETCH_ASSOC);
        if (!empty($user) ) {
            return "Username already exist";
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
            $statament=$connection->prepare($query);
            $statament->bindParam(":email", $email);
            $statament->execute();
            $email=$statament->fetch(PDO::FETCH_ASSOC);
            if (!empty($email)) {
                return "Email does exist";
            }
            return;
        }
    function validatePhone($phoneNumber) {
        global $connection;
        $phone = preg_replace("/[^0-9]/", "", $phoneNumber);
        $query = "SELECT phone FROM users WHERE phone = :phone";
        $statament = $connection ->prepare($query);
        $statament->bindParam(":phone", $phone);
        $statament->execute();
        $phonedata=$statament->fetch(PDO::FETCH_ASSOC);
        if (!empty($phonedata)) {
            return "Phone does exist";
        }
        return;
    }

    function getAge($date){
        $currentDate = new DateTime();
        $dateOfBirth = new DateTime($date);
        $age = $dateOfBirth->diff($currentDate);
        return $age->y; 
    }
   

    // $form_valid = false;
    

    function registerUser($userName, $password, $phone, $email, $date, $gender)
    {
        global $connection;
        try {
            $query = "INSERT INTO users (name, email, password, phone, age, gender) VALUES (:username, :email, :password ,:phone, :age, :gender)";
            $statament = $connection->prepare($query);
            $statament->bindParam(":username", $userName, PDO::PARAM_STR);
            $statament->bindParam(":email", $email, PDO::PARAM_STR);
            $statament->bindParam(":password", $password);
            $statament->bindParam(":phone", $phone,PDO::PARAM_STR);
            $statament->bindParam(":age", $date, PDO::PARAM_INT);
            $statament->bindParam(":gender", $gender, PDO::PARAM_STR);
            $result = $statament->execute();
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function validateDay($date_of_birth)
    {
        $currentDateTime = new DateTime('now');
        $currentDate = $currentDateTime->format('Y-m-d H:i');
        if($date_of_birth > $currentDate){
            return  "You cannot choose a date in the future";
        }
        return;
    }
?>