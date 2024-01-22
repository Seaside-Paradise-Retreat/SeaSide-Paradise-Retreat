<?php
session_start();
if (!isset($_SESSION['id']) || !$_SESSION['id']) {
    header('Location: /login');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmNewPassword = $_POST['confirm_new_password'];
    $userId = $_SESSION['id'];
    $query = "SELECT password FROM users WHERE id = :id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':id', $userId, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    if (password_verify($currentPassword, $result['password'])) {
        if ($newPassword === $confirmNewPassword) {
            $newHashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $updateQuery = "UPDATE users SET password = :new_password WHERE id = :id";
            $updateStatement = $connection->prepare($updateQuery);
            $updateStatement->bindParam(':new_password', $newHashedPassword);
            $updateStatement->bindParam(':id', $userId);
            $updateStatement->execute();

            echo '<script>alert("Password has been changed!");</script>';
            header("Location:/profile");
        } else {
            echo '<script>alert("New password and confirm password do not match!");</script>';
        }
    } else {
        echo '<script>alert("Current password is incorrect!");</script>';
    }
}
?>z
<?php 
require 'app/Views/layouts/header.php'
?>
<link rel="stylesheet" href="../../../public/css/formPassword.css">
<h1 class="text-center title">Change password</h1>
<form action="" method="post" class="password-form">
    <div class="form-group">
        <label for="current_password">Current password:</label>
        <input type="password" id="current_password" name="current_password" required>
    </div>
    <div class="form-group">
        <label for="new_password">New password</label>
        <input type="password" id="new_password" name="new_password" required>
    </div>

    <div class="form-group">
        <label for="confirm_new_password">Confirm new password</label>
        <input type="password" id="confirm_new_password" name="confirm_new_password" required>
    </div>

    <div class="row form-group">
        <a href="/profile" class="col-8 password" style="color: azure;">Back</a>.
        <p class="col-1"></p>
        <input class="col-3 password2" type="submit" value="Change password">
    </div>
</form>
