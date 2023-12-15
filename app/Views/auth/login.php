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
                  <button type="button" class="auth-form_swith" id="loginToRegister" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Register</button>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group login">
                    <input id="loginEmail" type="email" class="auth-form__input" placeholder="Email" >
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group login">
                    <input id="loginPassord" type="password" class="auth-form__input" placeholder="Password" >
                    <a href="#" id="forgot_password">Forget password</a>
                  </div>
                </div>
                <div class="auth-form__control">
                  <button class="btn-control" id="loginToRegister" >Sign in</button>
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