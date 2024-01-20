<div class="navbar">
      <div class="logo nav_text">
        <a href="/"><img src="public/images/logo_hotel.png" id="logo_nav" alt="logo"  width="50px" height="50px" > </a>
      </div>
      <div class="nav_text"><a class="nav_text_menu" style="<?= urlIs('/') ? 'color: blue;' : '' ?>" href="/">HOME</a></div>
      <div class="nav_text"><a  class="nav_text_menu" style="<?= urlIs('/about') ? 'color: blue;' : '' ?>" href="/about">ABOUT US</a></div>
      <div class="nav_text"><a  class="nav_text_menu" style="<?= urlIs('/room') ? 'color: blue;' : '' ?>" href="/room">ROOMS</a></div>
      <div class="nav_text nav_text_search">
        <form action="/search" method="post">
          <input type="text" name="nav_input" id="nav_input_search" style="outline: none; padding-left:20px; " placeholder="Search" >
          <a href="/search"> <button type="submit" id="nav_search_icon"><i class="fa-solid fa-magnifying-glass"></i></button></a>
        </form>
      </div>  
      <div class="nav_log nav_text">
        <?php 
        if(empty($_SESSION['email']) || empty($_SESSION['password']) )  :
        ?>
        <div class="nav_log_text" id="sign">
          <button type="button"  class="nav_text_menu nav_button_sign_in " id="showModal" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@mdo">SIGN IN</button>
        </div>
        <div class="nav_log_text" id="register">
          <button type="button" class="nav_text_menu nav_button_register" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-whatever="@mdo">REGISTER</button>
        </div>
        <?php 
          else:
           ?>
          </div>
        <div class="nav_log nav_text nav-item dropdown" id="avata">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img id="nav-avatar" src="<?php echo $_SESSION['avatar']; ?>" alt="avatar" height="150px" width="auto" >
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/list_favorite" style="color: #0052FE;" id="favorite" >Favorite</a></li>
          <li><a class="dropdown-item" href="/booking_history" style="color: #0052FE;" id="booking_history" >Booking history</a></li>
          <li><a class="dropdown-item" href="/account" style="color: #0052FE;">Account</a></li>
          <li><a class="dropdown-item" href="/logout" style="color: #0052FE;" id="logout">Log out</a></li>
        </ul>
      </div>
        <?php 
        endif 
        ?>
      </div>
</div>
