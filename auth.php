<div id="modal" class="js-modal">
    <div class="modal-container js-modal-container" id="container">
        <div class="modal-close js-modal-close">
            <i class='bx bx-x'></i>
        </div>
        <div class="form-container sign-up-container">
            <form action="register.php" method="post" enctype="multipart/form-data">
                <h1>Tạo Tài Khoản</h1>
                <div class="social-container">
                    <a href="facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <!-- <span>or use your email for registration</span> -->
                <input type="text" placeholder="Họ" name="txtHo" required="required" />
                <input type="text" placeholder="Tên" name="txtTen" required="required" />
                <input type="email" placeholder="Email" name="txtEmail" required="required" />
                <input type="password" placeholder="Mật Khẩu" name="txtPass" required="required" />
                <input type="password" placeholder="Xác Nhận Mật Khẩu" name="txtCPass" required="required" />
                <input type="file" name="txtFile" required />
                <!-- <input type="submit" name="upload" value="Upload" class="btn" /> -->
                <button name="btnSignUp">Đăng Ký</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="index.php" method="get">
                <h1>Đăng Nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng tài khoản của bạn</span>
                <input type="email" placeholder="Email" name="txtEmail" />
                <input type="password" placeholder="Mật Khẩu" name="txtPass" />
                <a href="#">Quên mật khẩu?</a>
                <button name="btnSignIn">Đăng Nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Mừng Bạn Trở Lại!</h1>
                    <p>Để kết nối với chúng tôi, vui lòng đăng nhập!</p>
                    <button class="ghost" id="signIn">Đăng Nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào Bạn!</h1>
                    <p>Nhập thông tin và bắt đầu hành trình nào</p>
                    <button class="ghost" id="signUp">Đăng Ký</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>