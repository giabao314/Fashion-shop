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
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/footer.css">
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
                    <button class="right-item login" href="#">Đăng nhập</button>
                    <button class="right-item register" href="#">Đăng ký</button>
                </div>
                <div class="cart-dropdown">
                    <a href="#" class="nav-cart">
                        <i class='bx bx-cart-alt bx-tada cart-item'></i>
                        <span class="nav-product-count"></span>
                        <!-- <div class="clear"></div> -->
                    </a>
                    <div class="dropdown-menu-right"></div>
                </div>
            </div>
        </header>

        <div id="slider">
            <div class="slider-show">
                <div class="slider-content">
                    <div class="slider-title container">
                        <h1>Shopping Cart</h1>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng giá</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="./assets/img/product/product-1.jpg" alt="">
                                                    </a>
                                                </figure>
                                                <h3 class="product-title">
                                                    <a href="#">Trang phuc nam moi nhat</a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td class="price-col">$80.00</td>
                                        <td class="quantity-col">
                                            <div class="cart-product-quantity">
                                                <input type="number" value="1" min="1" max="1000" step="1" />
                                            </div>
                                        </td>
                                        <td class="total-col">$80.00</td>
                                        <td class="remove-col">
                                            <button class="btn-remove">
                                                <i class='bx bx-x'></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="./assets/img/product/product-1.jpg" alt="">
                                                    </a>
                                                </figure>
                                                <h3 class="product-title">
                                                    <a href="#">Trang phuc nam thiet ke dac biet</a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td class="price-col">$80.00</td>
                                        <td class="quantity-col">
                                            <div class="cart-product-quantity">
                                                <input type="number" value="1" min="1" max="1000" step="1" />
                                            </div>
                                        </td>
                                        <td class="total-col">$80.00</td>
                                        <td class="remove-col">
                                            <button class="btn-remove">
                                                <i class='bx bx-x'></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-outline-dark col-3 btn-block">
                                    <span>UPDATE CART</span>
                                    <i class='bx bx-refresh'></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-log-4">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">Cart Total</h3>
                                <table class="table summary-table">
                                    <tbody>
                                        <tr class="summary-subtotal">
                                            <td>Tổng tiền</td>
                                            <td>$80.00</td>
                                        </tr>
                                        <tr class="summary-shipping">
                                            <td>Phương thức vận chuyển</td>
                                        </tr>
                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="summary-shipping-row form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Default radio
                                                    </label>
                                                </div>
                                            </td>
                                            <td>$80.00</td>
                                        </tr>
                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="summary-shipping-row form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Default checked radio
                                                    </label>
                                                </div>
                                            </td>
                                            <td>$20.00</td>
                                        </tr>
                                        <tr class="summary-shipping-estimate">
                                            <td>
                                                Địa chỉ nhận hàng
                                                <br>
                                                <a href="#">Thay đổi địa chỉ</a>
                                            </td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td>Thành tiền</td>
                                            <td>$40.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button href="#" class="btn btn-outline-warning btn-block col-8">Xác nhận đơn hàng</button>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md">
                                <button href="#" class="btn btn-outline-dark btn-block">
                                    <span>Tiếp tục mua sắm</span>
                                    <i class='bx bx-refresh'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
    </div>
</body>

</html>