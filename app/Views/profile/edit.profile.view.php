<?php 
session_start();
if (isset($_SESSION['id'], $_SESSION['email'], $_SESSION['name'], $_SESSION['phone'], $_SESSION['password'], $_SESSION['avatar'])) {
    $id = $_SESSION['id'];
    $avatar = $_SESSION['avatar'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $password = $_SESSION['password'];  
    $role = $_SESSION['role'];
} 
?>
<?php 
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>" ?>
<?php
require 'app/Views/layouts/header.php';
// if ($role == 'user'){
//     require 'app/Views/layouts/navbar.php';
// }
// else {
//     require 'app/Views/layouts/admin.navbar.php';
// }
?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['id']) && !empty($_POST['avatar'])) {
    // if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['id'])&& !empty($_POST['avatar'])) {
        echo "<script>alert('đã chạy')</script>";
        $statement = $connection->prepare("UPDATE users SET name = :name, email = :email, phone = :phone, avatar = :avatar WHERE id = :id");
        $statement->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':phone' => $_POST['phone'],
            // ':password' => $_POST['password'],
            ':avatar' => $_POST['avatar'],
            ':id' => $_POST['id'],
        ]);
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        // $_SESSION['password'] = $_POST['password'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['avatar'] = $_POST['avatar'];
        
        header('Location: /profile');
        exit;
    }
}
?>



<div><a href="/profile"><img src="../../../public/images/back.png" style="width:50px; margin-left: 200px;margin-top: 100px"></a></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <form id="profile-form" action="" method="post">
                        <input type="hidden" value="<?= $id ?>" name="id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Avatar URL:</label>
                            <input type="text" class="form-control" id="avatar" name="avatar" value="<?php echo $_SESSION['avatar']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
                        </div> -->
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  //require 'app/Views/layouts/footer.php';
?>