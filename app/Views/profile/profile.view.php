<?php 
if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['name']) && isset($_SESSION['phone']) && isset($_SESSION['avatar'])) {
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
require 'app/Views/layouts/header.php';
if ($role == 'user') {
    require 'app/Views/layouts/navbar.php';
} else {
    require 'app/Views/layouts/admin.navbar.php';
}
?>
<link rel="stylesheet" href="public/css/profile.css">
<div class="contents ">
    <h1 class="tilte-form">Hi <?php echo $_SESSION['name']; ?></h1>
    <div class="row content_profile-usernames">
        <div class="col-lg-4 content_profile-usernames-about">
            <div class="edit-avata-user">
                <img src="/public/images/<?php echo $_SESSION['avatar']; ?>" alt="Avatar" width="200px" height="200px" style="border-radius: 50%; object-fit: cover;">
            </div>
            <h4 class="m-4">Identify Verification</h4>
            <p style="padding-left: 30px; padding-right:30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cum veritatis quaerat ut reprehenderit architecto ipsa quos similique eveniet voluptates. Iste facere cumque, voluptatibus cum ut aut ipsam similique eaque?</p>
            <h3 id="profile-user-name" style="padding-left: 30px;"><?php echo $_SESSION['name']; ?></h3>
            <p style="padding-left: 30px;">
                <i class="fa-solid fa-check"></i>Email confirmed
            </p>
            <p style="padding-left: 30px;">
                <i class="fa-solid fa-check"></i>Mobile confirmed
            </p>
        </div>
        <div class="col-lg-1"></div>
        <form class="col-lg-5 " action="" method="post" style="">
            <div class="content_profile-username-email-password" style="margin-top: 30px;">
                <input type="hidden" value="<?= $id ?>" name="id">
                <label for="user_name" class="title">Name</label>
                <input type="text" class="form-input-profile" name="user-name" id="user_name" style="padding-left: 20px;" placeholder="User name" value="<?php echo $_SESSION['name']; ?>" readonly>

                <label for="" class="title">Email</label>
                <input type="text" class="form-input-profile" name="email" id="email11" style="padding-left: 20px;" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" readonly>

                <label for="" class="title">Phone</label>
                <input type="tel" class="form-input-profile" name="phonenumber" id="user_phonenumber" style="padding-left: 20px;" placeholder="Phonenumber" value="<?php echo $_SESSION['phone']; ?>" readonly>
                <p class="mt-4">All required user information can be saved here.</p>
                <div class="profile-back-edit">
                    <a href="/account" class="button" style="margin-left: 0px; background: #4cc9f3">Back</a>
                    <a href="/profile/edit" class="button" style="margin-left: 530px; background: #4cc9f3">Edit</a>
                </div>
            </div>
            <hr>
        </form>