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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Fashion shop</title>
</head>

<body>
    <?php include('auth.php') ?>

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
                        <i class='bx bx-chevron-down'></i></i>
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
                    <button class="right-item auth js-sign-auth">Đăng nhập / Đăng kí</button>
                </div>
                <div class="cart-dropdown">
                    <a href="cart.php" class="nav-cart">
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
                        Spring lookbook 2022
                    </h1>
                    <a href="#content" class="slider-content-item btn-scrolldown">
                        <span>START SCROLLING</span>
                        <i class='bx bxs-chevrons-down bx-tada'></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="content-item item-1">
                <div class="row item-container">
                    <div class="col-half product-item">
                        <div class="product-item-heading">
                            <div class="heading-title">
                                <h2 class="item-title">
                                    About this look
                                </h2>
                                <p class="title-desc">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                </p>
                            </div>
                        </div>
                        <div class="row product-item-content">
                            <div class="col-s product-list">
                                <div class="product-cover">
                                    <div class="col-product">
                                        <figure class="product-header">
                                            <a href="product.php">
                                                <img src="./assets/img/product/product-1.jpg" alt="Product image" class="product-img">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expand">
                                                    <i class='bx bx-heart'></i>
                                                    <span>Yêu thích</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview btn-expand">
                                                    <i class='bx bxs-binoculars'></i>
                                                    <span>Xem nhanh</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare btn-expand">
                                                    <i class='bx bx-shuffle'></i>
                                                    <span>So sánh</span>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product-cart">
                                                    <span>Thêm vào giỏ</span>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-content">
                                            <h3 class="product-title">
                                                <a href="">Suede Moto Jacket</a>
                                            </h3>
                                            <div class="product-price">
                                                <span>$1298</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-product">
                                        <figure class="product-header">
                                            <a href="product.php">
                                                <img src="./assets/img/product/product-1.jpg" alt="Product image" class="product-img">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expand">
                                                    <i class='bx bx-heart'></i>
                                                    <span>Yêu thích</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview btn-expand">
                                                    <i class='bx bxs-binoculars'></i>
                                                    <span>Xem nhanh</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare btn-expand">
                                                    <i class='bx bx-shuffle'></i>
                                                    <span>So sánh</span>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product-cart">
                                                    <span>Thêm vào giỏ</span>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-content">
                                            <h3 class="product-title">
                                                <a href="">Suede Moto Jacket</a>
                                            </h3>
                                            <div class="product-price">
                                                <span>$1298</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-half banner-item">
                        <div class="banner-overlay">
                            <a href="#">
                                <img src="./assets/img/banner/banner-1.jpg" alt="Banner">
                            </a>
                            <div class="banner-content">
                                <h2 class="banner-title">
                                    01. Get your
                                    <br>
                                    inspiration
                                    <br>
                                    in the street.
                                </h2>
                                <h3 class="banner-subtile">
                                    IN THIS LOOK
                                </h3>
                                <ul class="banner-product-list">
                                    <li>
                                        Moto Jacket
                                    </li>
                                    <li>
                                        Henry Backpack
                                    </li>
                                </ul>
                                <div class="banner-price">
                                    $98.00 - $1,298.00
                                </div>
                                <a href="#" class="btn-buy">
                                    <span>BUY ALL</span>
                                    <i class='bx bx-arrow-back bx-rotate-180'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-item item-2">
                <div class="row item-container">
                    <div class="col-half product-item">
                        <div class="product-item-heading">
                            <div class="heading-title">
                                <h2 class="item-title">
                                    About this look
                                </h2>
                                <p class="title-desc">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                </p>
                            </div>
                        </div>
                        <div class="row product-item-content">
                            <div class="col-s product-list">
                                <div class="product-cover">
                                    <div class="col-product">
                                        <figure class="product-header">
                                            <a href="product.php">
                                                <img src="./assets/img/product/product-1.jpg" alt="Product image" class="product-img">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expand">
                                                    <i class='bx bx-heart'></i>
                                                    <span>Yêu thích</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview btn-expand">
                                                    <i class='bx bxs-binoculars'></i>
                                                    <span>Xem nhanh</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare btn-expand">
                                                    <i class='bx bx-shuffle'></i>
                                                    <span>So sánh</span>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product-cart">
                                                    <span>Thêm vào giỏ</span>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-content">
                                            <h3 class="product-title">
                                                <a href="">Suede Moto Jacket</a>
                                            </h3>
                                            <div class="product-price">
                                                <span>$1298</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-product">
                                        <figure class="product-header">
                                            <a href="product.php">
                                                <img src="./assets/img/product/product-1.jpg" alt="Product image" class="product-img">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expand">
                                                    <i class='bx bx-heart'></i>
                                                    <span>Yêu thích</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview btn-expand">
                                                    <i class='bx bxs-binoculars'></i>
                                                    <span>Xem nhanh</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare btn-expand">
                                                    <i class='bx bx-shuffle'></i>
                                                    <span>So sánh</span>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product-cart">
                                                    <span>Thêm vào giỏ</span>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-content">
                                            <h3 class="product-title">
                                                <a href="">Suede Moto Jacket</a>
                                            </h3>
                                            <div class="product-price">
                                                <span>$1298</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-half banner-item">
                        <div class="banner-overlay">
                            <a href="#">
                                <img src="./assets/img/banner/banner-1.jpg" alt="Banner">
                            </a>
                            <div class="banner-content">
                                <h2 class="banner-title">
                                    01. Get your
                                    <br>
                                    inspiration
                                    <br>
                                    in the street.
                                </h2>
                                <h3 class="banner-subtile">
                                    IN THIS LOOK
                                </h3>
                                <ul class="banner-product-list">
                                    <li>
                                        Moto Jacket
                                    </li>
                                    <li>
                                        Henry Backpack
                                    </li>
                                </ul>
                                <div class="banner-price">
                                    $98.00 - $1,298.00
                                </div>
                                <a href="#" class="btn-buy">
                                    <span>BUY ALL</span>
                                    <i class='bx bx-arrow-back bx-rotate-180'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-item item-3">
                <div class="row item-container">
                    <div class="col-half product-item">
                        <div class="product-item-heading">
                            <div class="heading-title">
                                <h2 class="item-title">
                                    About this look
                                </h2>
                                <p class="title-desc">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                </p>
                            </div>
                        </div>
                        <div class="row product-item-content">
                            <div class="col-s product-list">
                                <div class="product-cover">
                                    <div class="col-product">
                                        <figure class="product-header">
                                            <a href="product.php">
                                                <img src="./assets/img/product/product-1.jpg" alt="Product image" class="product-img">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expand">
                                                    <i class='bx bx-heart'></i>
                                                    <span>Yêu thích</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview btn-expand">
                                                    <i class='bx bxs-binoculars'></i>
                                                    <span>Xem nhanh</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare btn-expand">
                                                    <i class='bx bx-shuffle'></i>
                                                    <span>So sánh</span>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product-cart">
                                                    <span>Thêm vào giỏ</span>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-content">
                                            <h3 class="product-title">
                                                <a href="">Suede Moto Jacket</a>
                                            </h3>
                                            <div class="product-price">
                                                <span>$1298</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-product">
                                        <figure class="product-header">
                                            <a href="product.php">
                                                <img src="./assets/img/product/product-1.jpg" alt="Product image" class="product-img">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expand">
                                                    <i class='bx bx-heart'></i>
                                                    <span>Yêu thích</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-quickview btn-expand">
                                                    <i class='bx bxs-binoculars'></i>
                                                    <span>Xem nhanh</span>
                                                </a>
                                                <a href="#" class="btn-product-icon btn-compare btn-expand">
                                                    <i class='bx bx-shuffle'></i>
                                                    <span>So sánh</span>
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product-cart">
                                                    <span>Thêm vào giỏ</span>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="product-content">
                                            <h3 class="product-title">
                                                <a href="">Suede Moto Jacket</a>
                                            </h3>
                                            <div class="product-price">
                                                <span>$1298</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-half banner-item">
                        <div class="banner-overlay">
                            <a href="#">
                                <img src="./assets/img/banner/banner-1.jpg" alt="Banner">
                            </a>
                            <div class="banner-content">
                                <h2 class="banner-title">
                                    01. Get your
                                    <br>
                                    inspiration
                                    <br>
                                    in the street.
                                </h2>
                                <h3 class="banner-subtile">
                                    IN THIS LOOK
                                </h3>
                                <ul class="banner-product-list">
                                    <li>
                                        Moto Jacket
                                    </li>
                                    <li>
                                        Henry Backpack
                                    </li>
                                </ul>
                                <div class="banner-price">
                                    $98.00 - $1,298.00
                                </div>
                                <a href="#" class="btn-buy">
                                    <span>BUY ALL</span>
                                    <i class='bx bx-arrow-back bx-rotate-180'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="contact">

        </div>

        <?php include('footer.php'); ?>
        <!-- <div id="footer">
        </div> -->
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
    // function sum($a, $b) 
    //     $total = $a + $b;
    //     return $total;
    // }
    // echo sum(4, 5);

    ?>


    <!-- <form action="welcome.php" method="get">
        Name: <input type="text" name="fname" /></br>
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form> -->

    <script>
        const modalContainer = document.querySelector('.js-modal-container');
        const defaultContainer = document.getElementById('container');
        const modal = document.querySelector('.js-modal');

        function showAuth() {
            modal.classList.add('open');
        }

        function hideAuth() {
            modal.classList.remove('open');
            defaultContainer.classList.remove("right-panel-active");
        }
        document.querySelector('.js-sign-auth').addEventListener('click', showAuth);
        document.querySelector('.js-modal-close').addEventListener('click', hideAuth);
        modal.addEventListener('click', hideAuth);

        modalContainer.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>

</body>

</html>