<?php session_start();
?>
<?php 
require 'app/Views/layouts/navbar.php';
require 'app/Views/layouts/header.php';
 ?>
 <link rel="stylesheet" href="public/css/account.css">
<div class="row profile-home-page">
        <div class="row-name">
            <img src="<?php echo $_SESSION['avatar']; ?>" width="200px" height="200px" class="img-avt" alt="img-avt" id="img-avt">
            <p class="name-user" id="name-user"><?php echo $_SESSION['name']?></p>
        </div>

        <div class="row  d-flex justify-content-around align-content-between ">
            <div class="list--profile col-lg-3 col-12">
                <a href="/profile" class="text">
                    <i class="material-icons">account_circle</i>
                    <h5 >Personal information</h5>
                    <p >Provide personal information and how we can contact you</p>
                </a>
            </div>
            <div class="list--profile col-lg-3 col-12">
              <a href="/list_favorite" class="text">
                <i class="fas fa-shopping-cart"></i>
                <h5 >Favourite list</h5>
                <p >View booking information and their history</p>
              </a>
            </div>
            <div class="list--profile col-lg-3 col-12">
                <a href="/account/change_password" class="text">
                    <i class="material-icons">account_circle</i>
                    <h5 >Change password</h5>
                    <p >Provide personal information and how we can contact you</p>
                </a>
            </div>
        </div>
    </div>
    <div id="pp" style="height: 114px;"></div>
    <?php
        require 'app/Views/layouts/footer.php';
     ?>
