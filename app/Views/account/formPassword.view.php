<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['id']) || !$_SESSION['id']) {
    header('Location: /login');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmNewPassword = $_POST['confirm_new_password'];


    //Lấy id của user gán vào biến userId để kiểm tra xem có phải là người dùng đó không
    $userId = $_SESSION['id'];
    // Lấy mật khẩu hiện tại từ cơ sở dữ liệu
    $query = "SELECT password FROM users WHERE id = :id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':id', $userId, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    //Mật khẩu lấy từ database;
    //echo var_dump($result['password']);
    

    // Kiểm tra mật khẩu hiện tại có khớp với mật khẩu đã lưu trong database hay không
    if (password_verify($currentPassword, $result['password'])) {
        // Nếu mật khẩu hiện tại đúng
        if ($newPassword === $confirmNewPassword) {
            $newHashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            // Cập nhật mật khẩu mới vào cơ sở dữ liệu
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
?>

<link rel="stylesheet" href="../../../public/css/formPassword.css">
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

    <div class="form-group">
        <input type="submit" value="Đổi mật khẩu">
    </div>

</form>
