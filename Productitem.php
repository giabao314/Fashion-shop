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
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/Productitem.css">

    <title>Document</title>
</head>

<body>
    <?php include('header.php'); ?>

    <div class="container-fuild ">
        <div class="row">
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row m-1">
                                <img src="./assets/img/slider/slider-1.jpg" alt="">
                            </div>
                            <div class="row m-1">
                                <img src="./assets/img/slider/slider-1.jpg" alt="">
                            </div>
                            <div class="row m-1">
                                <img src="./assets/img/slider/slider-1.jpg" alt="">
                            </div>
                            <div class="row m-1">
                                <img src="./assets/img/slider/slider-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <img src="./assets/img/slider/slider-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <h1 class="product-title">Beige metal hoop tote bag</h1>
                    <div class="ratings-container">

                    </div>
                    <div class="product-price">
                        <a>$75.00</a>
                    </div>
                    <!-- <div class="product-content">
<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.</p>
                        </div>  
                        <div class="product-filter-color">
                            <label>Color:</label>
                            <div class="color-item">
                                <a href="#" class="active" style="background-color: rgb(51, 51, 51);"></a>
                                <a href="#" class="" style="background-color: rgb(51, 153, 204);"></a>
                                <a href="#" class="" style="background-color: rgb(102, 153, 51);"></a>
                                <a href="#" class="" style="background-color: rgb(204, 51, 51);"></a>
                            </div>
                        </div> -->
                    <br>
                    <div class="product-filter-size">
                        <label>Size:</label>
                        <div class="size-item">
                            <select name="size" class="form-control">
                                <option value="">Select a size</option>
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                                <option value="Extra Large">Extra Large</option>
                                <option value="Extra Small">Extra Small</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="product-filter-qty">
                        <label>Qty:</label>
                        <input type="number" value="0" min="0" max="100" step="1">
                    </div>
                    <br>
                    <div class="product-cart">
                        <!-- <a type="button" class="btn" value="submit"><i class='bx bxs-cart'></i><span>Add to cart</span></a> -->
                        <button href="#" class="btn btn-outline-warning btn-block col-5">
                            <i class='bx bxs-cart'></i>
                            <span>Add to cart</span>
                        </button>
                    </div>
                    <br>
                    <div class="product-footer">
                        <div class="cat">
                            <span>Category:</span>
                            <span><a href="">Women</a></span>
                        </div>
                        <div class="social">
                            <span class="social-label">Share:</span>
                            <a href="#" class="social-icon"><i class='bx bxl-facebook'></i></a>
                            <a href="#" class="social-icon"><i class='bx bxl-twitter'></i></a>
                            <a href="#" class="social-icon"><i class='bx bxl-instagram-alt'></i></a>
                            <a href="#" class="social-icon"><i class='bx bxl-youtube'></i></a>
                            <a href="#" class="social-icon"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script>
        $("input[type='number']").inputSpinner()
        $(".buttons-only").inputSpinner({
            buttonsOnly: true
        })
    </script>
</body>
<!-- MDB -->

</html>