<div id="modal" class="js-modal">
    <div class="alert alert-success alert-dismissible" id="success">
        Đăng ký thành công!
        <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> -->
    </div>
    <div class="alert alert-danger alert-dismissible" id="error">
        Email hoặc mật khẩu không hợp lệ!
        <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> -->
    </div>
    <div class="modal-container js-modal-container" id="container">
        <div class="modal-close js-modal-close">
            <i class='bx bx-x'></i>
        </div>
        <div class="form-container sign-up-container">
            <!-- action = "register.php" -->
            <form id="reg-form" enctype="multipart/form-data">
                <h1>Tạo Tài Khoản</h1>
                <div class="social-container">
                    <a href="https://facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="https://linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <!-- <span>or use your email for registration</span> -->
                <!-- <input type="text" name="ho" placeholder="Họ" required="required" /> -->
                <input type="text" name="tenTK" placeholder="Tên Tài Khoản" required="required" />
                <input type="email" name="email" placeholder="Email" required="required" />
                <input type="password" name="pass" placeholder="Mật Khẩu" required="required" />
                <input type="password" name="cPass" placeholder="Xác Nhận Mật Khẩu" required="required" />
                <input type="button" id="ajaxreg" value="Đăng Kí" />
            </form>
        </div>
        <div class="form-container sign-in-container">
            <!-- action = "login.php" -->
            <form id="login-form" enctype="multipart/form-data">
                <h1>Đăng Nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng tài khoản của bạn</span>
                <input type="email" name="email_log" placeholder="Email" />
                <input type="password" name="pass_log" placeholder="Mật Khẩu" />
                <a href="#">Quên mật khẩu?</a>
                <input type="button" id="ajaxlogin" value="Đăng Nhập" />
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Mừng Bạn Trở Lại!</h1>
                    <p>Để kết nối với chúng tôi, vui lòng đăng nhập!</p>
                    <input type="button" class="ghost" id="signIn" value="Đăng Nhập" />
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào Bạn!</h1>
                    <p>Nhập thông tin và bắt đầu hành trình nào</p>
                    <input type="button" class="ghost" id="signUp" value="Đăng Ký" />
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

<script>
    $(document).ready(function() {
        $('#ajaxreg').on('click', function() {
            // $("#ajaxreg").attr("disabled", "disabled");
            // var ho = $("input[name=ho]").val();
            var tenTK = $("input[name=tenTK]").val();
            var email = $("input[name=email]").val();
            var pass = $("input[name=pass]").val();
            var cPass = $("input[name=cPass]").val();
            // alert(tenTK);
            // alert(email);
            // alert(pass);
            // alert(cPass);
            if (email != "" && tenTK != "" && pass != "" && cPass === pass) {
                $.ajax({
                    url: "authProcess.php",
                    type: "POST",
                    data: {
                        type: 1,
                        tenTK: tenTK,
                        email: email,
                        pass: pass
                    },
                    cache: false,
                    success: function(dataResult) {
                        // console.log(dataResult);
                        var dataResult = JSON.parse(dataResult);
                        // console.log(JSON.parse(dataResult));
                        if (dataResult.statusCode == 200) {
                            // alert('co vao day khong?');
                            $("#ajaxreg").removeAttr("disabled");
                            $('#reg-form').find('input:text').val('');
                            $('#reg-form').find('input:password').val('');
                            $('#success').prop('disabled', true);
                            $('#success').show();
                            $('#success').delay(2000).fadeOut('slow', function() {
                                $('#success').prop('disabled', false);
                            });
                            container.classList.remove("right-panel-active");
                        } else if (dataResult.statusCode == 201) {
                            $("#ajaxreg").removeAttr("disabled");
                            $('#error').prop('disabled', true);
                            $('#reg-form').find('input:email').val('');
                            $("#error").show();
                            $('#error').delay(2000).fadeOut('slow', function() {
                                $('#error').prop('disabled', false);
                            });
                        }
                    }
                });
            } else if (email != "" && tenTK != "" && pass != "" && cPass != pass) {
                alert('Mật khẩu xác nhận không đúng, vui lòng nhập lại');
                $("#ajaxreg").removeAttr("disabled");
                $('#reg-form').find('input:password').val('');
            } else {
                alert('Hãy điền đủ thông tin!');
            }
        });
        $('#ajaxlogin').on('click', function() {
            var email_log = $("input[name=email_log]").val();
            var pass_log = $("input[name=pass_log]").val();
            if (email_log != "" && pass_log != "") {
                $.ajax({
                    url: "authProcess.php",
                    type: "POST",
                    data: {
                        type: 2,
                        elog: email_log,
                        plog: pass_log
                    },
                    cache: false,
                    success: function(dataResult) {
                        // alert('alo');
                        var dataResult = JSON.parse(dataResult);
                        // alert(dataResult);
                        console.log(dataResult.statusCode);
                        if (dataResult.statusCode == 200) {
                            // alert("co vao day khong?");
                            // location.href = "index.php";
                            location.reload();
                        } else if (dataResult.statusCode == 201) {
                            // alert("co vao day khong 201?");
                            // location.reload();
                            // $('#error').prop('disabled', true);
                            $('#login-form').find('input:password').val('');
                            $("#error").show();
                            $('#error').delay(2000).fadeOut('slow', function() {
                                $('#error').prop('disabled', false);
                            });
                        }
                    }
                });
            } else {
                alert('Hãy điền đủ thông tin!');
            }
        });
    });
</script>