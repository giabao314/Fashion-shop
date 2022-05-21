<?php
include('opendb.php');
// so sp trong 1 trang
$limit = 6;

// set sp trong 1 Trang
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $limit;

if (isset($_POST['search-item'])) {
    $search_item = $_POST['search-item'];
    $sql_product = mysqli_query($conn, "SELECT * FROM sanpham, loaisp WHERE (sanpham.idLoaiSP = loaisp.idLoaiSP) AND (sanpham.tenSP LIKE '%$search_item%') ORDER BY sanpham.idSP DESC");
} else {
    $sql_product = mysqli_query($conn, "SELECT * FROM sanpham, loaisp WHERE sanpham.idLoaiSP = loaisp.idLoaiSP ORDER BY idSP DESC");
}
if (isset($_POST["search-item"])) {
?>
    <h2>TỪ khóa tìm kiếm : <?php echo($_POST['search-item']) ?></h2>
<?php
}
?>

<!-- $sql_product = mysqli_query($conn, "SELECT * FROM sanpham, loaisp WHERE sanpham.idLoaiSP = loaisp.idLoaiSP ORDER BY idSP DESC LIMIT $start_from, $limit"); -->
?>
<div class="row product-item-content">
    <?php
    while ($row_product = mysqli_fetch_array($sql_product)) {
    ?>
        <div class="col-product">
            <figure class="product-header">
                <a href="productDetail.php">
                    <img src="./assets/img/product/<?php echo $row_product['anhSP'] ?>" alt="Product image" class="product-img">
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
                    <a href="cart.php" class="btn-product-cart">
                        <i class='bx bx-cart-add'></i>
                        <span> Thêm vào giỏ</span>
                    </a>
                </div>
            </figure>
            <div class="product-content">
                <div class="product-cat">
                    <a href="./product/?category=<?php echo $row_product['idLoaiSP'] ?>"><?php echo $row_product['tenLoaiSP'] ?></a>
                </div>
                <h3 class="product-title">
                    <a href=""><?php echo $row_product['tenSP'] ?></a>
                </h3>
                <div class="product-price">
                    <span><?php echo number_format($row_product['donGia']) . '$' ?></span>
                </div>
            </div>
        </div>
        
    <?php
    }
    ?>

</div>