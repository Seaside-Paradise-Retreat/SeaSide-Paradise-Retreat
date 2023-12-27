<?php 

?>
<?php 
    $userName = "";
    $phone = "";    
    $email = "";
    $date ="";
    $gender = "";
    $password = "";
    $conformpassword = "";
    $user_error ="";
    $email_error = "";
    $phone_error = "";
    $terms_error = "";
    $confirmpassword_error = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["name"])) {
            $user_error = validateUsername($_POST["name"]);
            if (empty($user_error)) {
                $userName = htmlspecialchars($_POST["name"]);
                $_SESSION['name'] = $userName;
            }
        }

        if(isset($_POST["email"])){
            $email_error = validateEmail($_POST["email"]);
            if(empty($email_error)){
                $email =htmlspecialchars($_POST["email"]);
                $_SESSION['email'] = $email;
            }    
        }
        if (isset($_POST["phone"])) {
            $phone_error = validatePhone($_POST["phone"]);
            if (empty($phone_error)) {
                $phone = htmlspecialchars($_POST["phone"]);
                $_SESSION['phone'] = $phone;
            }
        }
        if(isset($_POST["date"])){
            $date =$_POST["date"];
            $age = getAge($date);
            $_SESSION['age'] = $age;
        }
        if(isset($_POST["gender"])){
            $gender =$_POST["gender"];
        }
        if(isset($_POST["password"])){
            $password =$_POST["password"];
        }
        if(isset($_POST["confirmpassword"])){
            $confirmpassword = htmlspecialchars($_POST["confirmpassword"]);
            if($confirmpassword !==$password){
                $confirmpassword_error = "Password incorrect";
            }
        }
        if(!isset($_POST["checkboxaccep"])){
            $terms_error = "You must accept the Terms of Service";
        }
        if (empty($user_error)) {
            $result = registerUser($userName, $password, $phone, $email, $date, $gender);
            if ($result) {
                echo '<script>alert("Register UnSuccessful");</script>';
                header('Location: /');
        }else{
            echo "Error";
        }}
    }

?>
<div class="modal fade form-auth" id="registerModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="/home/register" method="post">
                <div class="auth-form__header">
                  <h4 class="auth-form__heading">Register</h4>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerName" name="name" type="text" class="auth-form__input" placeholder="Name" required>
                    <small class="form-text text-danger"> <?php echo $user_error; ?></small>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group">
                    <input id="registerEmail" name="email" type="text" class="auth-form__input" placeholder="Email" required>
                    <small class="form-text text-danger"> <?php echo $email_error; ?></small>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="auth-form__group date-gender">
                    <div class="auth-form__date">
                      <input type="date" name="date" id="auth-form__date" class="auth-form__input " placeholder="Date of birth" required>
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
                    <input id="registerPhone" name="phone" type="text" class="auth-form__input" placeholder="Phone number" required>
                    <small class="form-text text-danger"> <?php echo $phone_error; ?></small>
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
                    <small class="form-text text-danger"> <?php echo $confirmpassword_error; ?></small>
                  </div>
                </div>
                <div class="auth-form__aside">
                  <p id="checkboxaccep" class="auth-form__inform"><input type="checkbox" name="checkboxaccep"> We will call or text you to confirm the phone number.
                    <a id="auth-form__policy-link" href="#">Privacy policy</a>
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