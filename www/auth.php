<?php
require_once(__DIR__ . './app/includes/sessionStart.php');
?>



<div id="form-container">
    <div class="form">
        <img src="./images/auth-logo.PNG" alt="logo" width="200px" height="200px" class="logo" />


        <form >
            <div id="login-form-body">
                <div class="text-fields">
                    <i class="fa fa-envelope" style="color:white;font-size: 25px;margin-right: 10px;"></i>
                    <input type="email" placeholder="Email" id="auth-txt-email" autocomplete="off" />
                </div>
                <div class="text-fields">
                    <i class="fa fa-key" style="color:white;font-size: 25px;margin-right: 10px;"></i>
                    <input type="password" placeholder="Password" id="auth-txt-password" autocomplete="off" />
                </div>
                <div id="forgot-pass">
                    Forgot Password ?
                </div>
                    <input type="submit" value="Login" id="login-button" />
                <div class="or">
                    OR
                </div>
                <div class="social">
                    <div class="facebook">
                        <i class="fa fa-facebook" style="color:white;background-color: #3b5998;font-size: 20px;"></i>
                    </div>
                    <div class="google">
                        <i class="fa fa-google" style="color:#d52121;background-color: white;font-size: 20px;"></i>
                    </div>
                </div>
                <div class="register-div">
                    <p>Don't have Account ?</p>
                    <h3 class="register-button" id="switchToSignUp">Sign Up</h3>
                </div>
            </div>
        </form>




        <form  id="NewUserForm" action="/Cinema-Show/www/app/Controllers/createUser.php" method="post" enctype="multipart/form-data"   >
            <div id="signup-form-body">
                <div class="text-fields">
                    <i class="fa fa-user" style="color:white;font-size: 25px;margin-right: 10px;"></i>
                    <input type="text" placeholder="Name" id="auth-txt-name" autocomplete="off" name="name" required />
                </div>
                <div class="text-fields">
                    <i class="fa fa-envelope" style="color:white;font-size: 25px;margin-right: 10px;"></i>
                    <input type="email" placeholder="Email" id="auth-txt-email" autocomplete="off" name="email" required />
                </div>
                <div class="text-fields">
                    <i class="fa fa-key" style="color:white;font-size: 25px;margin-right: 10px;"></i>
                    <input type="password" placeholder="Password" id="auth-txt-password" autocomplete="off" name="password" required />
                </div>
                    <input type="submit" value="Sign Up" id="signup-button" name="submit" />
                <div class="or">
                    OR
                </div>
                <div class="social">
                    <div class="facebook">
                        <i class="fa fa-facebook" style="color:white;background-color: #3b5998;font-size: 20px;"></i>
                    </div>
                    <div class="google">
                        <i class="fa fa-google" style="color:#d52121;background-color: white;font-size: 20px;"></i>
                    </div>
                </div>
                <div class="register-div">
                    <p>Already have account ?</p>
                    <h3 class="register-button" id="switchToLogin">Login</h3>
                </div>
            </div>

        </form>

    </div>
</div>