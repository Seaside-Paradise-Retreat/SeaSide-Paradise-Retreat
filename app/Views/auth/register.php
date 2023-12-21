<div class="modal fade form-auth" id="registerModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="auth-form__header">
                  <h4 class="auth-form__heading">Register</h4>
                  <button type="button" class="auth-form_swith" data-bs-toggle="modal" id="registerToLogin" data-bs-target="#loginModal" data-bs-dismiss="modal">Sign in</button>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerName" name="name" type="text" class="auth-form__input" placeholder="Name" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerEmail" name="email" type="email" class="auth-form__input" placeholder="Email" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group date-gender">
                    <div class="auth-form__date">
                      <input type="date" id="auth-form__date" class="auth-form__input " placeholder="Date of birth" required>
                    </div>
                    <select name="gender" id="auth-form__gender" class="auth-form__input" required>
                      <option disabled >Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerPhone" name="phone" type="tel" class="auth-form__input" placeholder="Phone number" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerPassword" name="password" type="password" class="auth-form__input" placeholder="Password" required>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerConfirmPassword" name="confirmpassword" type="password" class="auth-form__input" placeholder="Confirm password" required>
                  </div>
                </div>
                <div class="auth-form__aside">
                  <p id="checkboxaccep" class="auth-form__inform"><input type="checkbox" name="checkboxaccep"> We will call or text you to confirm the phone number.
                    <a id="auth-form__policy-link" href="#">Privacy policy</a>
                  </p>
                </div>
<div class="auth-form__control">
                  <button class="btn-control" id="registrationForm" >Continue</button>
                </div>
                <div class="auth-form__or login">
                  <div>
                    <hr>
                  </div>
                  <div><span><i>OR</i></span></div>
                  <div>
                    <hr>
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