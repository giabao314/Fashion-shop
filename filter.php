<?php
try {
    $host = "localhost";
    $dbname = "fashionshop";
    $username = "root";
    $password = "";
    $connect = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
} catch (PDOException $e) {
    die("Lỗi : " . $e->getMessage());
}

$query_sql = "SELECT sanpham.idLoaiSP, count(idSP) as sum, loaisp.tenLoaiSP FROM sanpham,loaisp WHERE sanpham.idLoaiSP=loaisp.idLoaiSP GROUP BY loaisp.idLoaiSP ASC";
$statement = $connect->prepare($query_sql);
$statement->execute();
$result = $statement->fetchAll();
?>
<div id="widget-collapse" class="category collapse show">
    <?php
    foreach ($result as $row) {
    ?>
        <a href="#" class="filter-item">
            <div class="filter-name">
            <?php echo $row['tenLoaiSP'] . " " ?> <span class="item-count">(<?php echo ($row['sum']) ?>)</span>
            </div>
            <div class="filter-query">
            <input type="checkbox" class="brand-selector brand" value="<?php echo $row['tenLoaiSP'] ?>">
                
            </div>
        </a>
    <?php
    }
    ?>
</div>