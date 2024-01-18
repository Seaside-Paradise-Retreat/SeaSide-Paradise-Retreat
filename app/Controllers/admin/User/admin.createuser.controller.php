<?php
require(__DIR__. '/../../../Models/admin.model.php');
$user_error = $password_error = $phone_error = $availability_error = $email_error = $age_error = $gender_error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $availability = $_POST['availability'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    if (!validateUsernames($name)) {
        $user_error = "Please enter a valid username (4-25 characters).";
    }
    if (!validatePasswords($password)) {
        $password_error = "Password must be at least 8 characters long and include uppercase, lowercase, digit, and special character.";
    }
    if (!validateAvailabilitys($availability)) {
        $availability_error = "Please enter a valid availability (0 or 1).";
    }
    if (!validatePhones($phone)) {
        $phone_error = "Please enter a valid 10-digit phone number.";
    }
    if (!validateEmails($email, $connection)) {
        $email_error = "Please enter a valid email address without spaces and '@'.";
    }
    if (!validateAge($age)) {
        $age_error = "Please enter a valid age as a positive numeric value.";
    }

    // Add gender validation if needed
    if (!validateGender($gender)){
        $gender_error = "Please enter a valid gender as a positive numeric value.";
    }
    // Check if any error occurred
    if ($user_error || $password_error || $availability_error || $phone_error || $email_error || $age_error || $gender_error) {
        echo "Invalid input. Please check your form data.";
    } else {
        // All input fields are valid, proceed to create a new user
        $result = createNewUser(
            $name,
            password_hash($password, PASSWORD_DEFAULT),
            $phone,
            $email,
            $age,
            $gender,
            $availability
        );
        if ($result) {
            echo '<script>
                    alert("Create new user record successful!");
                    window.location.href = "/admin";
                </script>';
            exit(); 
        } else {
            echo "Error creating new user record.";
        }
    }
}
// Include the form for updating existing users
require(__DIR__ . "/../../../Views/admin/User/Admin.Create.View.User.php");
