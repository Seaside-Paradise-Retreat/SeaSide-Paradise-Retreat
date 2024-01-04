<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['name']) && isset($_SESSION['phone']) && isset($_SESSION['avatar'])) {
    $id = $_SESSION['id'];
    $avatar = $_SESSION['avatar'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $password = $_SESSION['password'];
}
?>
<?php 
// echo "<script>
//     console.log('Avatar:', '{$_SESSION['avatar']}');
//     console.log('Name:', '{$_SESSION['name']}');
//     console.log('Email:', '{$_SESSION['email']}');
//     console.log('ID:', '{$_SESSION['id']}');
// </script>";
?>

 
<?php
require 'app/Views/layouts/navbar.php';
require 'app/Views/layouts/header.php';
?>
<link rel="stylesheet" href="public/css/profile.css">
<!-- body -->
<div class="contents ">
    <h1 class="tilte-form">Hi <?php echo $_SESSION['name']; ?></h1>
    <p class="" id="profile-date">July 2023</p>
    <div class="row content_profile-usernames">
        <div class="col-lg-4 content_profile-usernames-about">
            <!--Avatar-->
            <div class="edit-avata-user">
                <img id="avata-user" src="<?php echo $_SESSION['avatar']; ?>" alt="avatar">
            </div>
            <!--Upload avatar-->
            <!-- <div class="edit-avata-user">
                <button id="profile-edit-avata">Upload a photo</button>
            </div> -->
            <h4 class="m-4">Identify Verification</h4>
            <p style="padding-left: 30px; padding-right:30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cum veritatis quaerat ut reprehenderit architecto ipsa quos similique eveniet voluptates. Iste facere cumque, voluptatibus cum ut aut ipsam similique eaque?</p>
            <h3 id="profile-user-name" style="padding-left: 30px;">User Name</h3>
            <p style="padding-left: 30px;">
                <i class="fa-solid fa-check"></i>Email confirmed
            </p>
            <p style="padding-left: 30px;">
                <i class="fa-solid fa-check"></i>Mobile confirmed
            </p>
        </div>


        <!-- Form Thong tin người dùng -->
        <div class="col-lg-1"></div>
        <form class="col-lg-5 " action="profile/edit" method="post" style="" >
            <div class="content_profile-username-email-password" style="margin-top: 30px;">
                <input type="hidden" value="<?= $id ?>" name="id">
                <label for="user_name" class="title">Name</label>
                <input type="text" class="form-input-profile" name="user-name" id="user_name" style="padding-left: 20px;" placeholder="User name" value="<?php echo $_SESSION['name']; ?>"readonly>

                <label for="" class="title">Email</label>
                <input type="text" class="form-input-profile" name="email" id="email11" style="padding-left: 20px;" placeholder="Email" value="<?php echo $_SESSION['email']; ?>"readonly>

                <label for="" class="title">Phone</label>
                <input type="tel" class="form-input-profile" name="phonenumber" id="user_phonenumber" style="padding-left: 20px;" placeholder="Phonenumber" value="<?php echo $_SESSION['phone']; ?>"readonly>

                <!-- <label for="" class="title">Password</label>
                <input type="password" class="form-input-profile" name="password" id="user_password" style="padding-left: 20px;" placeholder="**********" value="<?php echo $_SESSION['password']; ?>"readonly> -->

                <p>All required user information can be saved here.</p>
                <div class="profile-back-edit mt-3">
                    <a href="/account" class="link-back">Back</a>
                    <button type="submit">Edit</button>
                </div>
            </div>
            <hr>
        </form>
        
<?php //require_once 'app/Views/layouts/footer.php'; ?>