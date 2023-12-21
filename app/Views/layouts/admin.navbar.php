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
    <div class="navbar">
        <a href="../admin/Adminpage_html.php" style="text-decoration: none;">
            <img id="logo_hotel" src="../../../public/images/logo_hotel.png" alt="logo_hotel">
        </a>
        <div class="search">
            <input type="text" id="search" name="input_search" placeholder="Search">
            <button type="button" id="buttonsearch"><i id="iconsearch" class="fas fa-search"></i></button>
        </div>
        <div class="profile_user">
            <i class="fas fa-user-circle" style="font-size: 35px;"></i>
            <div class="menu">
                <div class="has-sub-menu">
                    <i class="fas fa-caret-down" style="font-size: 35px;"></i>
                    <div class="sub-menu">
                        <button type="button" id="profile">Profile</button>
                        <button type="button" id="logout">Log Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>