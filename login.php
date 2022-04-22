<?php
session_start();

if (isset($_REQUEST['btnSignUp'])) {
    $_SESSION['tenTK'] = $_REQUEST['txtName'];
    echo ($_SESSION['tenTK']);
}

require('common.php');
?>

<div id="modal" class="js-modal">
    <?php
    if (isLogined()) {
    ?>

        Ban da dang nhap voi username = <?php echo ($_SESSION['tenTK']) ?>. <br />
        nhan vao <a href="session.php">day</a> de den trang session.php <br />
        nhan vao <a href="logout.php?url=2">day</a> de logout va den trang session.php
    <?php
    } else {
    ?>
        <div class="container js-modal-container" id="container">
            <div class="modal-close js-modal-close">
                <i class='bx bx-x'></i>
            </div>
            <div class="form-container sign-up-container">
                <form action="login.php" method="get">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Name" name="txtName" value="<?php /*echo($_COOKIE[''])*/ ?>"/>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <button name="btnSignUp">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="index.php">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>