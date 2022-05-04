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
    <?php
    include('header.php');
    ?>
    <div id="slider">
        <div class="slider-show">
            <div class="slider-content">
                <div class="slider-title container">
                    <h1>Danh Mục Sản Phẩm</h1>
                    <span>Fashion shop</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action" aria-current="true">
                        Quần</button>
                    <button type="button" class="list-group-item list-group-item-action">Áo</button>
                    <button type="button" class="list-group-item list-group-item-action">Váy</button>
                    <button type="button" class="list-group-item list-group-item-action">Giày</button>
                    <button type="button" class="list-group-item list-group-item-action">Phụ kiện</button>
                </div>
                <br>
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action" aria-current="true">
                        Quần</button>
                    <button type="button" class="list-group-item list-group-item-action">Áo</button>
                    <button type="button" class="list-group-item list-group-item-action">Váy</button>
                    <button type="button" class="list-group-item list-group-item-action">Giày</button>
                    <button type="button" class="list-group-item list-group-item-action">Phụ kiện</button>
                </div>
            </div>
            <div class="col-lg-9">
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
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
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