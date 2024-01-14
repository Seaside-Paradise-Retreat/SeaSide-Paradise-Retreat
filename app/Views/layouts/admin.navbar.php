<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/Adminpage.css">
</head>

<body>
    <?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['avatar'])) {
        $avatar = $_SESSION['avatar'];
    } else {
        echo "Error";
    } ?>
    <div class="navbar">
        <a href="/admin" style="text-decoration: none;">
            <img id="logo_hotel" src="../../../public/images/logo_hotel.png" alt="logo_hotel">
        </a>
        
        <div class="profile_user">
            <a href="/profile"><button id="profile"><img id="nav-avatar" src="<?php echo $avatar; ?>" alt="avatar" ></button></a>
            <a href="/logout"><button id="logout"><i class="fas fa-sign-out-alt" style="font-size: 30px;"></i></button></a>
        </div>
    </div>
</body>
</html>