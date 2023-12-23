<?php  require_once '../layouts/header.php'; ?>
<link rel="stylesheet" href="../../../public/css/profile.css">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title title-modal fs-5" id="modal-edit">Edit</h1>
          <button type="button" class="btn-close button_cancel" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>

            <div class="mb-3">
              <label for="name">UserName:</label>
              <input type="text" class="form-control" id="name" value="Việt Mỹ"style="background-color: white;">
            </div>
            <div class="mb-3">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Email" value="Vietmy@gmail.com" style="background-color: white;">
            </div>
            <div class="mb-3">
              <label for="phone">PhoneNumber:</label>
              <input type="tel" class="form-control" id="phone" value="0987654321"style="background-color: white;">
            </div>
            <div class="mb-3">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" value="hihimyne" style="background-color: white;">
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn modal-save" onclick="change()">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- body -->
  <div class="contents" style="margin-bottom: 40px;">
    <h1>Hi, <span id="content_profile-username">Viet My</span>!</h1>
    <p id="profile-date">July 2023</p>

    <div class="row content_profile-usernames">
      <div class="col-lg-4 content_profile-usernames-about">
        <div class="edit-avata-user">
          <img id="avata-user" src="./assets/avata-profile.jpg" alt="ảnh đại diện">
        </div>
        <div class="edit-avata-user">
          <button id="profile-edit-avata">Upload a photo</button>
          <input type="file" id="avatar-input" accept="image/*" style="display: none;"></input>
        </div>
        <h4>Identify Verification</h4>
        <p style="padding-left: 30px; padding-right:30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure cum veritatis quaerat ut reprehenderit architecto ipsa quos similique eveniet voluptates. Iste facere cumque, voluptatibus cum ut aut ipsam similique eaque?</p>
        <h3 id="profile-user-name" style="padding-left: 30px;">User Name</h3>
        <p style="padding-left: 30px;">
          <i class="fa-solid fa-check"></i>Email confirmed
        </p>
        <p style="padding-left: 30px;">
          <i class="fa-solid fa-check"></i>Mobile confirmed
        </p>
      </div>



      <div class="col-lg-1"></div>
      <div class="col-lg-5 content_profile-username-email-password" style="margin-top: 30px;">
        <label for="">Name</label>
        <input type="text" class="form-input-profile" name="user-name" id="user_name" style="padding-left: 20px;"placeholder="User name" value="Việt Mỹ" readonly>

        <label for="">Email</label>
        <input type="text" class="form-input-profile" name="email" id="email11" style="padding-left: 20px;" placeholder="Email" value="Vietmy@gmail.com" readonly>

        <label for="">Phone</label>
        <input type="tel" class="form-input-profile" name="phonenumber" id="user_phonenumber" style="padding-left: 20px;" placeholder="Phonenumber" value="0987654321" readonly>

        <label for="">Password</label>
        <input type="password" class="form-input-profile" name="password" id="user_password" style="padding-left: 20px;" placeholder="**********" value="hihimyne" readonly>

        <p>All required user information can be save here.</p>
        <div class="profile-back-edit">
          <a href="profile_home_page.html"><button id="profile-back">Back</button></a>
          <button id="profile-edit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"data-bs-whatever="@mdo">Edit</button>
        </div>
      </div>
    </div>

  </div>