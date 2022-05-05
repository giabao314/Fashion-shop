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
        <form action="#" method="get">
            <div class="right-item nav-search-wrapper">
                <input type="search" class="search-form" placeholder="Tìm sản phẩm...">
                <button class="btn-search">
                    <i class='bx bx-search'></i>
                </button>
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

<script>
    window.onscroll = function() {
        scroll();
    };

    function scroll() {
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            document.getElementById("heading").style.top = "0";
        } else {
            document.getElementById("heading").style.top = "-68px";
        }
        
    }
</script>