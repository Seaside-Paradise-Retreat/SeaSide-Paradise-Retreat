<div class="modal fade form-auth" data-backdrop="static" id="registerModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" method="post" id="registerForm">
                <div class="auth-form__header">
                  <h4 class="auth-form__heading">Register</h4>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerName" name="name" type="text" class="auth-form__input" placeholder="Name" value="<?php echo $username ?>" required>
                    <small class="form-text text-danger"> <?php echo $user_error; ?></small>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerEmail" name="email" type="text" class="auth-form__input" value="<?php echo $email ?>" placeholder="Email"required>
                    <small class="form-text text-danger"> <?php echo $email_error; ?></small>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group date-gender">
                    <div class="auth-form__date">
                      <input type="date" name="date" id="auth-form__date" class="auth-form__input " placeholder="Date of birth"required>
                    </div>
                    <select name="gender" id="auth-form__gender" class="auth-form__input">
                      <option disabled >Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerPhone" name="phone" type="text" class="auth-form__input" value="<?php echo $phone ?>" placeholder="Phone number"required>
                    <small class="form-text text-danger"> <?php echo $phone_error; ?></small>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerPassword" name="password" type="password" class="auth-form__input" value="<?php echo $password ?>" placeholder="Password" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerConfirmPassword" name="confirmpassword" type="password" value="<?php echo $username ?>" class="auth-form__input" placeholder="Confirm password" required>
                    <small class="form-text text-danger"> <?php echo $confirmpassword_error; ?></small>
                  </div>
                </div>
                <div class="auth-form__aside">
                  <p id="checkboxaccep" class="auth-form__inform"><input type="checkbox" name="checkboxaccep"> We will call or text you to confirm the phone number.
                    <a id="auth-form__policy-link" href="#">Privacy policy</a>
                    <small class="form-text text-danger"> <?php echo $terms_error; ?></small>
                  </p>
                </div>
                <div class="auth-form__control">
                    <button type="submit" class="btn-control" id="registrationForm" >Continue</button>
                </div>
                <div class="auth-form__aside">
                  <button type="button" class="auth-form_swith"  data-bs-toggle="modal" id="registerToLogin" data-bs-target="#loginModal" data-bs-dismiss="modal">Do you already have an account? Sign in</button>
                </div>
                <div class="auth-form__or login">
                  <div>
                    <hr style="color:blue;width:170px">
                  </div>
                  <div><span><i style="padding: 0 20px;" >OR</i></span></div>
                  <div>
                    <hr style="color:blue;width:170px">
                  </div>
                </div>
                <!-- <hr> -->
                <div class="auth-form__social login">
                  <a href="https://m.facebook.com/login/?locale=vi_VN" class="btn btn--with-icon" class="btn btn--with-icon">
                    <i class="fa-brands fa-facebook"></i>
                    Continue with facebook
                  </a>
                  <a href="https://www.google.com.vn/?hl=en" class="btn btn--with-icon">
                    <i class="fa-brands fa-google"></i>
                    Continue with Google
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>