<?php
$cart = (isset($_POST['cart'])) ? $_SESSION['cart']: [];
?>
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
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Fashion shop</title>
</head>

<body>
    <?php
    session_start();
    include('auth.php');
    ?>
    <div id="app">
        <?php
        include('header.php');
        ?>

        <div id="slider">
            <div class="slider-show">
                <div class="slider-content">
                    <div class="slider-title container">
                        <h1>Giỏ Hàng Của Bạn</h1>
                        <span>Fashion shop</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng giá</th>
                                    <th></th>
                                </tr>
                            <tbody>
                                <?php $tamtinh = 0; ?>
                                <?php foreach ($cart as $key => $value): 
                                    $tamtinh += ($value['gia']*$value['qty']);
                                ?>
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="/assets/img/product/<?php echo $value['anh'] ?>" alt="">
                                                </a>
                                            </figure>
                                            <h3 class="product-title">
                                                <a href="#"><?php echo $value['ten'] ?></a>
                                            </h3>
                                        </div>
                                    </td>
                                    <td class="price-col"><?php echo $value['gia'] ?></td>
                                    <td class="quantity-col" action="cart.php">
                                        <div class="cart-product-quantity">
                                            <input type="hidden" name="action" value="update">
                                            <input type="hidden" name="idSP" value="<?php echo $value['id'] ?>">
                                            <input type="number" value="<?php echo $value['qty'] ?>" min="1" step="1" />
                                        </div>
                                    </td>
                                    <td class="total-col"><?php echo number_format($value['gia']*$value['qty']) ?></td>
                                    <td class="remove-col">
                                        <button class="btn-remove" href="cart.php?id=<?php echo $value['id']  ?> &action=delete">
                                            <i class='bx bx-x'></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end" action="cart.php">
                            <button class="btn btn-outline-dark col-3 btn-block" type="submit">
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
                                            <td>Tạm tính</td>
                                            <td><?php echo number_format($tamtinh)?></td>
                                        </tr>
                                        <tr class="summary-shipping">
                                            <td>Phương thức vận chuyển</td>
                                        </tr>
                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="summary-shipping-row form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Giao hàng miễn phí
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="shipping-price">$0.00</td>
                                        </tr>
                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="summary-shipping-row form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Giao hàng tiêu chuẩn
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="shipping-price">$20.00</td>
                                        </tr>
                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="summary-shipping-row form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Giao hàng tên lửa
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="shipping-price">$50.00</td>
                                        </tr>
                                        <tr class="summary-shipping-estimate">
                                            <td>
                                                <div class="shipping-estimate-title">
                                                    Địa chỉ nhận hàng
                                                </div>
                                                <a class="shipping-address" href="#">Thay đổi địa chỉ</a>
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
