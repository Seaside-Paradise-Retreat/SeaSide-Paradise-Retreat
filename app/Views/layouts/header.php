<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/footer.css">
    <link rel="stylesheet" href="../../public/css/register.css">
    <link rel="stylesheet" href="../../public/css/show.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="navbar">
      <div class="logo nav_text">
        <a href="home.php"><img src="../Assets/images/logo_hotel.png" id="logo_nav" alt="logo"  width="50px" height="50px" > </a>
      </div>
      <div class="nav_text"><a  class="nav_text_menu" href="hotel_home_page.html">HOME</a></div>
      <div class="nav_text"><a  class="nav_text_menu" href="hotel_about_us_page.html">ABOUTS US</a></div>
      <div class="nav_text"><a  class="nav_text_menu" href="hotel_rooms_page.html">ROOMS</a></div>
      <div class="nav_text nav_text_search">
        <input type="text" name="nav_input" id="nav_input_search" style="outline: none; padding-left:20px; " placeholder="Search" >
        <button  id="search">
          <i id="nav_search_icon" class="fa-solid fa-magnifying-glass"></i> 
        </button>   
      </div>
  
      <div class="nav_log nav_text">
        <div class="nav_log_text" id="sign">
          <button type="button" class="nav_text_menu nav_button_sign_in " id="showModal" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@mdo">SIGN IN</button>
        </div>
        <div class="nav_log_text" id="register">
          <button type="button" class="nav_text_menu nav_button_register" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-whatever="@mdo">REGISTER</button>
        </div>
      </div>
</div>
