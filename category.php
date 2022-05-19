<?php
include('opendb.php');
$sql_category_soLuong = mysqli_query($conn, 'SELECT sanpham.idLoaiSP,SUM(sanpham.slTonKho) as sum,loaisp.tenLoaiSP FROM sanpham,loaisp WHERE sanpham.idLoaiSP=loaisp.idLoaiSP GROUP BY idLoaiSP ASC');
// if($category)
// echo("ket noi thanh cong!");
// echo $category;
?>

<div id="widget-collapse" class="category collapse show">
    <?php
    while ($row_category = mysqli_fetch_array($sql_category_soLuong)) {
    ?>
        <a href="./product.php/?category=<?php echo $row_category['idLoaiSP']?>" class="filter-item">
            <div class="filter-name">
                <?php echo $row_category['tenLoaiSP'] ?>
            </div>
            <div class="filter-query">
            <span class="item-count"><?php echo $row_category['sum'] ?></span>
        </div>
        </a>
    <?php
    }
    ?>


    <!-- <a href="./product.php/?category=ao" class="filter-item">
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
    </a> -->
</div>