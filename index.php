<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Fashion shop</title>
</head>
<body>
    <div id="app">
        <header id="heading">
            <!-- Left navbar -->
            <div class="navbar-left">
                <a href="#" class="left-item nav-logo"><img src="./assets/img/logo/molla-logo.png" alt="Fashion-logo" class="nav-logo"></a>
                <a href="#" class="left-item nav-home">TRANG CHỦ</a>
                <div class="subnav">
                    <div class="subnav-separate"></div>
                    <a href="#" class="nav-product">
                        SẢN PHẨM
                        <i class='bx bx-chevron-down' ></i></i>
                    </a>
                    <div class="subnav-menu-left">
                        <a class="subnav-item" href="#">THỜI TRANG NAM</a>
                        <a class="subnav-item" href="#">THỜI TRANG NỮ</a>
                    </div>
                </div>
                <a href="#" class="left-item nav-about">VỀ CHÚNG TÔI</a>
                <a href="#" class="left-item nav-contact">LIÊN HỆ</a>
            </div>

            <!-- Right navbar -->
            <div class="navbar-right">
                <form action="#" method="get">
                    <div class="right-item nav-search-wrapper">
                        <input type="search" class="search-form" placeholder="Tìm sản phẩm...">
                        <button class="btn-search">
                            <i class='bx bx-search'></i>
                        </button>
                    </div>
                </form>
                <div class="auth-btn">
                    <button class="right-item login" href="#">Đăng nhập</button>
                    <button class="right-item register" href="#">Đăng ký</button>
                </div>
                <div class="cart-dropdown">
                    <a href="#" class="nav-cart">
                        <i class='bx bx-cart-alt bx-tada cart-item'></i>
                        <span class="nav-product-count">5</span>
                        <!-- <div class="clear"></div> -->
                    </a>
                    <div class="dropdown-menu-right"></div>
                </div>
            </div>
        </header>

        <div id="slider">
            <div class="slider-show">
                <div class="slider-content">
                    <h3 class="slider-content-item slider-subtile">
                        Want to know what's hot?
                    </h3>
                    <h1 class="slider-content-item slider-title">
                        Spring Lookbook 2022
                    </h1>
                    <a href="#content" class="slider-content-item btn-scrolldown">
                        <span>START SCROLLING</span>
                        <i class='bx bxs-chevrons-down bx-tada' ></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="content">
            
        </div>

        <div id="contact">

        </div>

        <div id="footer">

        </div>
    </div>
    <?php
        // $car = ['saab', 'toyota', 'pergeut', 'lexus', 'honda', 'suzuki'];
        // foreach($car as $key => $value) {
        //     echo 'car['. $key .']'.'->' .$value. '<br/>';
        // }
        // var_dump($car);
        // echo'for loop'.'<br/>';
        // for($i = 0;$i <br count($car);$i++) {
        //     echo $i.'->'.$car[$i].'<br/>';
        // }
        // $people = [
        //     [
        //         'name' => 'gia bao',
        //         'age' => 18,
        //         'address' => 'HCM'
        //     ],
        //     [
        //         'name' => 'Trung Nguyen',
        //         'age' => 20,
        //         'address' => 'Ha Noi'
        //     ],
        //     [
        //         'name' => 'Peter',
        //         'age' => 23,
        //         'address' => 'New York'
        //     ]
        // ];
        // foreach($people as $person => $value) {
        //     echo '<p><b>Khach hang '.$person.':</b></p>';
        //     echo '<ul>';
        //     foreach($value as $info) {
        //         echo '<li>'.$info.'</li>';
        //     }
        //     echo '</ul>';
        // }
        // $diemthi = [
        //     'hoang' => [
        //         'vatly' => 7,
        //         'hoahoc' => 8,
        //         'toan' => 9
        //     ],
        //     'minh' => [
        //         'vatly' => 9, 
        //         'hoahoc' => 6,
        //         'toan' => 10
        //     ],
        //     'trung' => [
        //         'vatly' => 3,
        //         'hoahoc' => 8,
        //         'toan' => 7
        //     ]
        // ];
        // foreach($diemthi as $student => $point) {
        //     echo "<b>hoc sinh $student:</b></br>";
        //     foreach($point as $keySub => $valueSub) {
        //         echo "$keySub: $valueSub";
        //             echo'<br/>';
        //     }
        // }
        
        // $text = '[{"ten":"Lập trình Web","giangvien":"Tuấn Hoàng"},
        //           {"ten":"Lập trình Java","giangvien":"Hoàng Sơn"},
        //           {"ten":"Lập trình HĐT","giangvien":"Minh Tâm"}]';
        // $arr = json_decode($text, true);
        // print_r($arr);
        // echo $arr[1]['ten'];
        // echo $arr[1]['giangvien'];
        // echo '<br />-------giá trị của mảng sau khi chuyển từ chuổi json-----<br />';
        // foreach($arr as $key => $value) {
        //     foreach($value as $data => $info) {
        //         echo $data.'=>'.$info.'</br>';
        //     }
        // }
        // function writeName() {
        //     echo 'chao may!';
        // }
        // writeName();
        // function sum($a, $b) {
        //     $total = $a + $b;
        //     return $total;
        // }
        // echo sum(4, 5);
    ?>
    <form action="welcome.php" method="get">
    Name: <input type="text" name="fname" />
    Age: <input type="text" name="age" />
    <input type="submit" />
    </form>

</body>
</html>