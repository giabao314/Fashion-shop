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
    <link rel="stylesheet" href="./assets/scss/price-slider.scss">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/auth.css">
    <!-- <link rel="stylesheet" href="./assets/css/styleClone.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- <script src="./script.js"></script> -->
    <!-- <script src="./assets/js/price-slider.js"></script> -->
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
                    <div id="widget-collapse" class="category collapse show">
                        <a href="./product.php/?category=quan" class="filter-item">
                            <div class="filter-name">
                                Quần
                            </div>
                            <div class="filter-query">
                                <span class="item-count">10</span>
                            </div>
                        </a>

                        <a href="./product.php/?category=ao" class="filter-item">
                            <div class="filter-name">
                                Áo
                            </div>
                            <div class="filter-query">
                                <span class="item-count">10</span>
                            </div>
                        </a>

                        <a href="./product.php/?category=phukien" class="filter-item">
                            <div class="filter-name">
                                Phụ Kiện
                            </div>
                            <div class="filter-query">
                                <span class="item-count">10</span>
                            </div>
                        </a>

                        <a href="./product.php/?category=khac" class="filter-item">
                            <div class="filter-name">
                                Khác
                            </div>
                            <div class="filter-query">
                                <span class="item-count">10</span>
                            </div>
                        </a>
                    </div>

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
                                            0$
                                        </span>
                                        <span> &dash; </span>
                                        <span id="range2">
                                            100$
                                        </span>
                                    </div>
                                </div>
                                <div class="price-slider-container">
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="100" value="0" id="slider-1" oninput="slideOne()">
                                    <input type="range" min="0" max="100" value="100" id="slider-2" oninput="slideTwo()">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- <div class="widget widget-collapsible">

                </div>
                <div class="widget widget-collapsible">

                </div> -->
                <!-- <div class="list-group">
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
                </div> -->
            </div>
            <div class="col-lg-9">
                <div class="row product-item-content">
                    <div class="col-product">
                        <figure class="product-header">
                            <a href="Productitem.php">
                                <img src="./assets/img/slider/slider-1.jpg" alt="Product image" class="product-img">
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
                                    <i class='bx bx-cart-add'></i>
                                    <span> Thêm vào giỏ</span>
                                </a>
                            </div>
                        </figure>
                        <div class="product-content">
                            <div class="product-cat">
                                <a href="./product/?category=woman">woman</a>
                            </div>
                            <h3 class="product-title">
                                <a href="">Suede Moto Jacket</a>
                            </h3>
                            <div class="product-price">
                                <span>$1298</span>
                            </div>
                            <!-- <div class="product-rating-container">

                            </div>
                            <div class="product-nav-color">

                            </div> -->
                        </div>
                    </div>

                    <div class="col-product">
                        <figure class="product-header">
                            <a href="product.php">
                                <img src="./assets/img/slider/slider-1.jpg" alt="Product image" class="product-img">
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
                                    <i class='bx bx-cart-add'></i>
                                    <span> Thêm vào giỏ</span>
                                </a>
                            </div>
                        </figure>
                        <div class="product-content">
                            <div class="product-cat">
                                <a href="./product/?category=woman">woman</a>
                            </div>
                            <h3 class="product-title">
                                <a href="">Suede Moto Jacket</a>
                            </h3>
                            <div class="product-price">
                                <span>$1298</span>
                            </div>
                            <!-- <div class="product-rating-container">

                            </div>
                            <div class="product-nav-color">

                            </div> -->
                        </div>
                    </div>

                    <div class="col-product">
                        <figure class="product-header">
                            <a href="product.php">
                                <img src="./assets/img/slider/slider-1.jpg" alt="Product image" class="product-img">
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
                                    <i class='bx bx-cart-add'></i>
                                    <span> Thêm vào giỏ</span>
                                </a>
                            </div>
                        </figure>
                        <div class="product-content">
                            <div class="product-cat">
                                <a href="./product/?category=woman">woman</a>
                            </div>
                            <h3 class="product-title">
                                <a href="">Suede Moto Jacket</a>
                            </h3>
                            <div class="product-price">
                                <span>$1298</span>
                            </div>
                            <!-- <div class="product-rating-container">

                            </div>
                            <div class="product-nav-color">

                            </div> -->
                        </div>
                    </div>

                    <div class="col-product">
                        <figure class="product-header">
                            <a href="product.php">
                                <img src="./assets/img/slider/slider-1.jpg" alt="Product image" class="product-img">
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
                                    <i class='bx bx-cart-add'></i>
                                    <span> Thêm vào giỏ</span>
                                </a>
                            </div>
                        </figure>
                        <div class="product-content">
                            <div class="product-cat">
                                <a href="./product/?category=woman">woman</a>
                            </div>
                            <h3 class="product-title">
                                <a href="">Suede Moto Jacket</a>
                            </h3>
                            <div class="product-price">
                                <span>$1298</span>
                            </div>
                            <!-- <div class="product-rating-container">

                            </div>
                            <div class="product-nav-color">

                            </div> -->
                        </div>
                    </div>

                    <div class="col-product">
                        <figure class="product-header">
                            <a href="product.php">
                                <img src="./assets/img/slider/slider-1.jpg" alt="Product image" class="product-img">
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
                                    <i class='bx bx-cart-add'></i>
                                    <span> Thêm vào giỏ</span>
                                </a>
                            </div>
                        </figure>
                        <div class="product-content">
                            <div class="product-cat">
                                <a href="./product/?category=woman">woman</a>
                            </div>
                            <h3 class="product-title">
                                <a href="">Suede Moto Jacket</a>
                            </h3>
                            <div class="product-price">
                                <span>$1298</span>
                            </div>
                            <!-- <div class="product-rating-container">

                            </div>
                            <div class="product-nav-color">

                            </div> -->
                        </div>
                    </div>

                    <div class="col-product">
                        <figure class="product-header">
                            <a href="product.php">
                                <img src="./assets/img/slider/slider-1.jpg" alt="Product image" class="product-img">
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
                                    <i class='bx bx-cart-add'></i>
                                    <span> Thêm vào giỏ</span>
                                </a>
                            </div>
                        </figure>
                        <div class="product-content">
                            <div class="product-cat">
                                <a href="./product/?category=woman">woman</a>
                            </div>
                            <h3 class="product-title">
                                <a href="">Suede Moto Jacket</a>
                            </h3>
                            <div class="product-price">
                                <span>$1298</span>
                            </div>
                            <!-- <div class="product-rating-container">

                            </div>
                            <div class="product-nav-color">

                            </div> -->
                        </div>
                    </div>

                    
                
            </div>
        </div>
        <ul class="pagination">
            <li class="page-item"></li>
            <li class="page-item"></li>
            <li class="page-item"></li>
            <li class="page-item"></li>
            <li class="page-item-total"></li>
            <li class="page-item"></li>
        </ul>
    </div>
    <?php
    include('footer.php');
    ?>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://code.jquery.com/ui/1.12.0/jquery-ui.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>

    <script>
        // const modalContainer = document.querySelector('.js-modal-container');
        // const defaultContainer = document.getElementById('container');
        // const modal = document.querySelector('.js-modal');

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
            displayValOne.textContent = sliderOne.value + '$';
            fillColor();
        }

        function slideTwo() {
            if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
                sliderTwo.value = parseInt(sliderOne.value) + minGap;
            }
            displayValTwo.textContent = sliderTwo.value + '$';
            fillColor();
        }

        function fillColor() {
            percent1 = (sliderOne.value / sliderMaxValue) * 100;
            percent2 = (sliderTwo.value / sliderMaxValue) * 100;
            sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #cc9966 ${percent1}% , #cc9966 ${percent2}%, #dadae5 ${percent2}%)`;
        }
    </script>

    <script>
        $('.slider').each(function(e) {

            var slider = $(this),
                width = slider.width(),
                handle,
                handleObj;

            let svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svg.setAttribute('viewBox', '0 0 ' + width + ' 83');

            slider.html(svg);
            slider.append($('<div>').addClass('active').html(svg.cloneNode(true)));

            slider.slider({
                range: true,
                values: [1800, 7800],
                min: 500,
                step: 5,
                minRange: 1000,
                max: 12000,
                create(event, ui) {

                    slider.find('.ui-slider-handle').append($('<div />'));

                    $(slider.data('value-0')).html(slider.slider('values', 0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                    $(slider.data('value-1')).html(slider.slider('values', 1).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                    $(slider.data('range')).html((slider.slider('values', 1) - slider.slider('values', 0)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));

                    setCSSVars(slider);

                },
                start(event, ui) {

                    $('body').addClass('ui-slider-active');

                    handle = $(ui.handle).data('index', ui.handleIndex);
                    handleObj = slider.find('.ui-slider-handle');

                },
                change(event, ui) {
                    setCSSVars(slider);
                },
                slide(event, ui) {

                    let min = slider.slider('option', 'min'),
                        minRange = slider.slider('option', 'minRange'),
                        max = slider.slider('option', 'max');

                    if (ui.handleIndex == 0) {
                        if ((ui.values[0] + minRange) >= ui.values[1]) {
                            slider.slider('values', 1, ui.values[0] + minRange);
                        }
                        if (ui.values[0] > max - minRange) {
                            return false;
                        }
                    } else if (ui.handleIndex == 1) {
                        if ((ui.values[1] - minRange) <= ui.values[0]) {
                            slider.slider('values', 0, ui.values[1] - minRange);
                        }
                        if (ui.values[1] < min + minRange) {
                            return false;
                        }
                    }

                    $(slider.data('value-0')).html(ui.values[0].toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                    $(slider.data('value-1')).html(ui.values[1].toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));
                    $(slider.data('range')).html((slider.slider('values', 1) - slider.slider('values', 0)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '&thinsp;'));

                    setCSSVars(slider);

                },
                stop(event, ui) {

                    $('body').removeClass('ui-slider-active');

                    let duration = .6,
                        ease = Elastic.easeOut.config(1.08, .44);

                    TweenMax.to(handle, duration, {
                        '--y': 0,
                        ease: ease
                    });

                    TweenMax.to(svgPath, duration, {
                        y: 42,
                        ease: ease
                    });

                    handle = null;

                }
            });

            var svgPath = new Proxy({
                x: null,
                y: null,
                b: null,
                a: null
            }, {
                set(target, key, value) {
                    target[key] = value;
                    if (target.x !== null && target.y !== null && target.b !== null && target.a !== null) {
                        slider.find('svg').html(getPath([target.x, target.y], target.b, target.a, width));
                    }
                    return true;
                },
                get(target, key) {
                    return target[key];
                }
            });

            svgPath.x = width / 2;
            svgPath.y = 42;
            svgPath.b = 0;
            svgPath.a = width;

            $(document).on('mousemove touchmove', e => {
                if (handle) {

                    let laziness = 4,
                        max = 24,
                        edge = 52,
                        other = handleObj.eq(handle.data('index') == 0 ? 1 : 0),
                        currentLeft = handle.position().left,
                        otherLeft = other.position().left,
                        handleWidth = handle.outerWidth(),
                        handleHalf = handleWidth / 2,
                        y = e.pageY - handle.offset().top - handle.outerHeight() / 2,
                        moveY = (y - laziness >= 0) ? y - laziness : (y + laziness <= 0) ? y + laziness : 0,
                        modify = 1;

                    moveY = (moveY > max) ? max : (moveY < -max) ? -max : moveY;
                    modify = handle.data('index') == 0 ? ((currentLeft + handleHalf <= edge ? (currentLeft + handleHalf) / edge : 1) * (otherLeft - currentLeft - handleWidth <= edge ? (otherLeft - currentLeft - handleWidth) / edge : 1)) : ((currentLeft - (otherLeft + handleHalf * 2) <= edge ? (currentLeft - (otherLeft + handleWidth)) / edge : 1) * (slider.outerWidth() - (currentLeft + handleHalf) <= edge ? (slider.outerWidth() - (currentLeft + handleHalf)) / edge : 1));
                    modify = modify > 1 ? 1 : modify < 0 ? 0 : modify;

                    if (handle.data('index') == 0) {
                        svgPath.b = currentLeft / 2 * modify;
                        svgPath.a = otherLeft;
                    } else {
                        svgPath.b = otherLeft + handleHalf;
                        svgPath.a = (slider.outerWidth() - currentLeft) / 2 + currentLeft + handleHalf + ((slider.outerWidth() - currentLeft) / 2) * (1 - modify);
                    }

                    svgPath.x = currentLeft + handleHalf;
                    svgPath.y = moveY * modify + 42;

                    handle.css('--y', moveY * modify);

                }
            });

        });

        function getPoint(point, i, a, smoothing) {
            let cp = (current, previous, next, reverse) => {
                    let p = previous || current,
                        n = next || current,
                        o = {
                            length: Math.sqrt(Math.pow(n[0] - p[0], 2) + Math.pow(n[1] - p[1], 2)),
                            angle: Math.atan2(n[1] - p[1], n[0] - p[0])
                        },
                        angle = o.angle + (reverse ? Math.PI : 0),
                        length = o.length * smoothing;
                    return [current[0] + Math.cos(angle) * length, current[1] + Math.sin(angle) * length];
                },
                cps = cp(a[i - 1], a[i - 2], point, false),
                cpe = cp(point, a[i - 1], a[i + 1], true);
            return `C ${cps[0]},${cps[1]} ${cpe[0]},${cpe[1]} ${point[0]},${point[1]}`;
        }

        function getPath(update, before, after, width) {
            let smoothing = .16,
                points = [
                    [0, 42],
                    [before <= 0 ? 0 : before, 42],
                    update,
                    [after >= width ? width : after, 42],
                    [width, 42]
                ],
                d = points.reduce((acc, point, i, a) => i === 0 ? `M ${point[0]},${point[1]}` : `${acc} ${getPoint(point, i, a, smoothing)}`, '');
            return `<path d="${d}" />`;
        }

        function setCSSVars(slider) {
            let handle = slider.find('.ui-slider-handle');
            slider.css({
                '--l': handle.eq(0).position().left + handle.eq(0).outerWidth() / 2,
                '--r': slider.outerWidth() - (handle.eq(1).position().left + handle.eq(1).outerWidth() / 2)
            });
        }
    </script>

</body>

</html>