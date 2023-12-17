<div class="modal fade form-auth" id="loginModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="auth-form__header">
                  <h4 class="auth-form__heading">Sign in</h4>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group login">
                    <input id="loginEmail" type="email" class="auth-form__input" placeholder="Email" >
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group login">
                    <input id="loginPassord" type="password" class="auth-form__input" placeholder="Password" >
                  </div>
                  <div class="mb-3 forgot_password">
                    <button type="button" class="button_register" id="loginToRegister" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Register</button>
                    <a href="#" id="forgot_password">Forgot password</a>
                  </div>
                </div>
                <div class="auth-form__control">
                  <button class="btn-control" id="loginToRegister" >Sign in</button>
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
                <div class="auth-form__social login">
                  <a href="https://m.facebook.com/login/?locale=vi_VN" class="btn btn--with-icon">
                    <i class="fa-brands fa-facebook"></i>
                    Continue with facebook
                  </a>
                  <a href="https://www.google.com.vn/?hl=en" class="btn btn--with-icon">
                    <i class="fa-brands fa-google"></i>
                    Continue with Google
                  </a>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>