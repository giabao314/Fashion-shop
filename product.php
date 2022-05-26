<?php
include('opendb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>

</head>

<body>
    <?php
    session_start();
    include('auth.php');
    ?>
    <header id="heading">
        <!-- Left navbar -->
        <div class="navbar-left">
            <a href="index.php" class="left-item nav-logo"><img src="./assets/img/logo/molla-logo.png" alt="Fashion-logo" class="nav-logo"></a>
            <a href="index.php" class="left-item nav-home">TRANG CHỦ</a>
            <div class="subnav">
                <div class="subnav-separate"></div>
                <a href="product.php" class="nav-product">
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
            <form method="post">
                <div class="right-item nav-search-wrapper">
                    <input type="search" class="search-form" id="search-box" name="search-box" placeholder="Tìm sản phẩm...">
                    <input type="button" id="ajax-btn-search" class="btn-search" name="search-btn">
                    <i class='bx bx-search'></i>
                    </input>
                </div>
            </form>
            <div class="auth-btn">
                <!-- <a href="auth.php"> -->
                <button class="right-item auth js-sign-auth">Đăng nhập / Đăng kí</button>
                <?php
                if (isset($_SESSION['elog'])) {
                ?>

                    <script>
                        document.querySelector(".js-sign-auth").style.display = "none";
                    </script>
                    <a class="right-item auth" href="logout.php">
                        Đăng xuất
                    </a>
                    <a class="right-item auth auth-user" href="user.php">
                        <?php
                        echo "Chào " . $_SESSION['signIn_name'];
                        ?>
                    </a>
                <?php
                }
                ?>
                <!-- </a> -->
            </div>
            <div class="cart-dropdown">
                <a class="nav-cart" href="cart.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['signIn_id'] ?>">
                    <i class='bx bx-cart-alt bx-tada cart-item'></i>
                    <span class="nav-product-count">5</span>
                    <!-- <div class="clear"></div> -->
                </a>
                <div class="dropdown-menu-right"></div>
            </div>
        </div>
    </header>
    <div id="product-slider">
        <div class="slider-show">
            <div class="slider-content">
                <div class="slider-title container">
                    <h1>Danh Mục Sản Phẩm</h1>
                    <span>Fashion shop</span>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./index.php">Trang Chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="./product.php">Sản Phẩm</a>
                </li>
            </ol>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget widget-clean">
                    <label>Bộ lọc: </label>
                    <a href="./product.php" class="sidebar-filter-clean">Xóa bộ lọc</a>
                </div>
                <div class="widget widget-collapsible">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-collapse" role="button" aria-expanded="false" aria-controls="widget-collapse">Danh mục sản phẩm
                            <i class='bx bx-chevron-down'></i>
                        </a>
                    </h3>
                    <?php 
                        include('filter.php');
                    ?>
                </div>
                <div class="widget widget-collapsible">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-collapse-2" role="button" aria-expanded="false" aria-controls="widget-collapse">Giá
                            <i class='bx bx-chevron-down'></i>
                        </a>
                    </h3>
                    <div id="widget-collapse-2" class="category collapse show">
                        <div class="price-slider">
                            <div class="-price-slider-wrapper">
                                <div class="values">
                                    <div class="range-name">Khoảng giá</div>
                                    <div class="price-range">
                                        <span id="range1">
                                            <?php
                                            $min_row = mysqli_fetch_array(mysqli_query($conn, "SELECT MIN(donGia) as min FROM sanpham ORDER BY sanpham.donGia ASC"));
                                            echo $min_price = number_format($min_row['min']);
                                            ?>
                                        </span>
                                        <span> &dash; </span>
                                        <span id="range2">
                                            <?php
                                            $max_row = mysqli_fetch_array(mysqli_query($conn, "SELECT MAX(donGia) as max FROM sanpham ORDER BY sanpham.donGia DESC"));
                                            echo $max_price = number_format($max_row['max']);
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="price-slider-container">
                                    <div class="slider-track"></div>
                                    <input type="range" min="30" max="9000" value="30" id="slider-1" oninput="slideOne()">
                                    <input type="range" min="30" max="9000" value="9000" id="slider-2" oninput="slideTwo()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="dynamic-content" class="col-lg-9">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php
        include('footer.php');
        ?>
    </div>

<style>
    #loading {
        text-align: center;
        background: url("./assets/img/slider/loader.gif") no-repeat center;
        height: 150px;
    }
</style>

    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://code.jquery.com/ui/1.12.0/jquery-ui.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>

    <!-- script auth -->
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
    <!-- end script auth -->

    <!-- script price slider -->
    <script>
        window.onload = function() {
            slideOne();
            slideTwo();
        }

        let sliderOne = document.getElementById("slider-1");
        let sliderTwo = document.getElementById("slider-2");
        let displayValOne = document.getElementById("range1");
        let displayValTwo = document.getElementById("range2");
        let minGap = 0;
        let sliderTrack = document.querySelector(".slider-track");
        let sliderMaxValue = document.getElementById("slider-1").max;

        function slideOne() {
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderOne.value = parseInt(sliderTwo.value) - minGap;
            }
            console.log(displayValOne.textContent);
            displayValOne.textContent = sliderOne.value + '$';
            fillColor();
        }

        function slideTwo() {
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderTwo.value = parseInt(sliderOne.value) + minGap;
            }
            console.log(displayValTwo.textContent);
            displayValTwo.textContent = sliderTwo.value + '$';
            fillColor();
        }

        function fillColor() {
            percent1 = (sliderOne.value / sliderMaxValue) * 100;
            percent2 = (sliderTwo.value / sliderMaxValue) * 100;
            sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #cc9966 ${percent1}% , #cc9966 ${percent2}%, #dadae5 ${percent2}%)`;
        }
    </script>
    <!-- end script price slider -->

    <!-- script search w pagination ajax -->
    <script>
        $(document).ready(function() {

            function filter_data() {
                $('#dynamic-content').html('<div id="loading" style=""></div>');
                var action = 'fetch_data';
                var minimum_price = $('#slider-1').val();
                var maximum_price = $('#slider-2').val();
                var brand = get_filter('brand');
            }

            function get_filter(class_name) {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
            }

            load_data(1);
            
            function load_data(page, query = '') {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        page: page,
                        query: query
                    },
                    success: function(dataResult) {
                        $('#dynamic-content').html(dataResult);
                    }
                });
            }
            $(document).on('click', '.page-link', function() {
                var page = $(this).data('page_number');
                var query = $('#search-box').val();
                load_data(page, query);
            });

            $('#search-box').keyup(function() {
                var query = $('#search-box').val();
                load_data(1, query);
            });

        });
    </script>
    <!-- end script search w pagination ajax -->



</body>

</html>