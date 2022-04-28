

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

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
                <form id="reg-form" method="post" enctype="multipart/form-data">
                    <h1>Tạo Tài Khoản</h1>
                    <div class="social-container">
                        <a href="facebook.com" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <!-- <span>or use your email for registration</span> -->
                    <input type="text" name="ho" placeholder="Họ" required="required" />
                    <input type="text" name="ten" placeholder="Tên" required="required" />
                    <input type="email" name="email" placeholder="Email" required="required" />
                    <input type="password" name="matkhau" placeholder="Mật Khẩu" required="required" />
                    <input type="password" name="cmatkhau" placeholder="Xác Nhận Mật Khẩu" required="required" />
                    <button id="ajaxreg">Đăng Kí</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <!-- action = "login.php" -->
                <form id="login-form" method="post" enctype="multipart/form-data">
                    <h1>Đăng Nhập</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>hoặc sử dụng tài khoản của bạn</span>
                    <input type="email" name="email_log" placeholder="Email" />
                    <input type="password" name="matkhau_log" placeholder="Mật Khẩu" />
                    <a href="#">Quên mật khẩu?</a>
                    <button id="ajaxlogin">Đăng Nhập</button>
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

    <script>
        $(document).ready(function() {
            $('#ajaxreg').on('click', function() {
                $("#ajaxreg").attr("disabled", "disabled");
                var ho = $("input[name=ho]").val();
                var ten = $("input[name=ten]").val();
                var email = $("input[name=email]").val();
                var matkhau = $("input[name=matkhau]").val();
                var cmatkhau = $("input[name=cmatkhau]").val();
                if (ho != "" && email != "" && ten != "" && matkhau != "" && cmatkhau === matkhau) {
                    $.ajax({
                        url: "saveCopy.php",
                        type: "POST",
                        data: {
                            type: 1,
                            ho: ho,
                            ten: ten,
                            email: email,
                            matkhau: matkhau
                        },
                        cache: false,
                        success: function(dataResult) {
                            var dataResult = JSON.parse(dataResult);
                            if (dataResult.statusCode == 200) {
                                $("#ajaxreg").removeAttr("disabled");
                                $('#reg-form').find('input').val('');
                                $('#success').prop('disabled', true);
                                $('#success').show();
                                $('#success').delay(2000).fadeOut('slow', function() {
                                    $('#success').prop('disabled', false);
                                });
                            } else if (dataResult.statusCode == 201) {
                                $('#error').prop('disabled', true);
                                $('#reg-form').find('input:email').val('');
                                $("#error").show();
                                $('#error').delay(2000).fadeOut('slow', function() {
                                    $('#error').prop('disabled', false);
                                });
                            }
                        }
                    });
                } else if (ho != "" && email != "" && ten != "" && matkhau != "" && cmatkhau != matkhau) {
                    alert('Mật khẩu xác nhận không đúng, vui lòng nhập lại');
                    $('#reg-form').find('input:password').val('');
                } else {
                    alert('Hãy điền đủ thông tin!');
                }
            });
            $('#ajaxlogin').on('click', function() {
                var email_log = $("input[name=email_log]").val();
                var matkhau_log = $("input[name=matkhau_log]").val();
                if (email_log != "" && matkhau_log != "") {
                    $.ajax({
                        url: "saveCopy.php",
                        type: "POST",
                        data: {
                            type: 2,
                            elog: email_log,
                            mklog: matkhau_log
                        },
                        cache: false,
                        success: function(dataResult) {
                            // alert('alo');
                            var dataResult = JSON.parse(dataResult);
                            // alert(dataResult.statusCode);
                            if (dataResult.statusCode == 200) {
                                location.href = "welcome.php";
                            } 
                            else if (dataResult.statusCode == 201) {
                                $('#error').prop('disabled', true);
                                $('#reg-form').find('input:email').val('');
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



</body>

</html>