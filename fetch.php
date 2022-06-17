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
if (isset($_POST["action"])) {
    $limit = 6;
    $page = 1;
    if ($_POST['page'] > 1) {
        $start = (($_POST['page'] - 1) * $limit);
        $page = $_POST['page'];
    } else {
        $start = 0;
    }
    $query = "SELECT * FROM sanpham, loaisp WHERE (sanpham.idLoaiSP = loaisp.idLoaiSP)";
    if ($_POST['query'] != '') {
        $query .= ' AND (sanpham.tenSP LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%")';
    }
    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= " AND (sanpham.donGia BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "')";
    }
    if (isset($_POST["brand"])) {
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= " AND (loaisp.tenLoaiSP IN('" . $brand_filter . "'))";
    }

    $query .= ' ORDER BY sanpham.idSP ASC ';

    $filter_query = $query . 'LIMIT ' . $start . ', ' . $limit . '';

    $statement = $connect->prepare($query);
    $statement->execute();
    $total_data = $statement->rowCount();

    $statement = $connect->prepare($filter_query);
    $statement->execute();
    $result = $statement->fetchAll();

    $output = '
    <label>Total Records: ' . $total_data . '</label>
    <div class="row product-item-content">';
    if ($total_data > 0) {
        foreach ($result as $row) {
            // echo($row['idSP']);
            $output .= '
            <div class="col-product">
                <figure class="product-header">
                    <a href="productDetail.php">
                        <img src="./assets/img/product/' . $row["anhSP"] . '" alt="Product image" class="product-img">
                    </a>
                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expand">
                            <i class=\'bx bx-heart\'></i>
                            <span>Yêu thích</span>
                        </a>
                        <a href="#" class="btn-product-icon btn-quickview btn-expand">
                            <i class=\'bx bxs-binoculars\'></i>
                            <span>Xem nhanh</span>
                        </a>
                        <a href="#" class="btn-product-icon btn-compare btn-expand">
                            <i class=\'bx bx-shuffle\'></i>
                            <span>So sánh</span>
                        </a>
                    </div>
                    <div class="product-action">
                        <a href="cart.php" class="btn-product-cart">
                            <i class=\'bx bx-cart-add\'></i>
                            <span> Thêm vào giỏ</span>
                        </a>
                    </div>
                </figure>
                <div class="product-content">
                    <div class="product-cat">
                        <a href="./product/?category=' . $row["idLoaiSP"] . '">' . $row["tenLoaiSP"] . '</a>
                    </div>
                    <h3 class="product-title">
                        <a href="">' . $row["tenSP"] . '</a>
                    </h3>
                    <div class="product-price">
                        <span>' . number_format($row['donGia']) . '$' . '</span>
                    </div>
                </div>
            </div>
        ';
        }
    } else {
        $output .= '
        <label>Lỗi: Không tìm thấy sản phẩm!</label>
    ';
        echo ("không tìm thấy sản phẩm!");
        die();
    }

    $output .= '
</div>
<div class="clearfix">
    <ul class="pagination">
';

    $total_links = ceil($total_data / $limit);

    $previous_link = '';

    $next_link = '';

    $page_link = '';

    // echo($total_links);

    if ($total_links > 6) {
        if ($page < 7) {
            for ($count = 1; $count <= 7; $count++) {
                $page_array[] = $count;
            }
            $page_array[] = '...';
            $page_array[] = $total_links;
        } else {
            $end_limit = $total_links - 7;
            if ($page > $end_limit) {
                $page_array[] = 1;
                $page_array[] = '...';

                for ($count = $end_limit; $count <= $total_links; $count++) {
                    $page_array[] = $count;
                }
            } else {
                $page_array[] = 1;
                $page_array[] = '...';
                for ($count = $page - 1; $count <= $page + 1; $count++) {
                    $page_array[] = $count;
                }
                $page_array[] = '...';
                $page_array[] = $total_links;
            }
        }
    } else {
        for ($count = 1; $count <= $total_links; $count++) {
            $page_array[] = $count;
        }
    }
    try {
        for ($count = 0; $count < count($page_array); $count++) {
            if (!$total_data == 0) {
                if ($page == $page_array[$count]) {
                    $page_link .= '
                    <li class="page-item active">
                        <a href="#" class="page-link">' . $page_array[$count] . '
                            <span class="sr-only">
                                (current)
                            </span>
                        </a>
                    </li>
                    ';
                    $previous_id = $page_array[$count] - 1;
                    if ($previous_id > 0) {
                        $previous_link = '
                        <li class="page-item">
                            <a href="javascript:void(0)" class="page-link" data-page_number="' . $previous_id . '">
                                Trước
                            </a>
                        </li>';
                    } else {
                        $previous_link = '
                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                Trước
                            </a>
                        </li>
                        ';
                    }

                    $next_id = $page_array[$count] + 1;

                    if ($next_id > $total_links) {
                        $next_link = '
                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                Sau
                            </a>
                        </li>
                        ';
                    } else {
                        $next_link = '
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" data-page_number="' . $next_id . '">
                                    Sau
                                </a>
                            </li>
                        ';
                    }
                } else {
                    if ($page_array[$count] == '...') {
                        $page_link .= '
                            <li class="page-item disabled">
                                <a class="page-link" href="#">
                                ...
                                </a>
                            </li>
                        ';
                    } else {
                        $page_link .= '
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" data-page_number="' . $page_array[$count] . '">
                                    ' . $page_array[$count] . '
                                </a>
                            </li>
                        ';
                    }
                }
            }
        }
        $output .= $previous_link . $page_link . $next_link;
        $output .= '</ul></div>';
        echo $output;
    } catch (Exception $e) {
        die("Lỗi: " . $e->getMessage());
    }
}
?>
<script>
    $(document).ready(function() {
        $(".btn-product-cart").on('click', function() {
            var idSP = $_POST['idSP'];
            alert(idSP);
            $.ajax({
                url: "giohang.php",
                method: "POST",
                data: {
                    idSP: idSP
                },
                success: function(dataResult) {
                    alert("Thêm thành Công!");
                }
            });
        });
    });
</script>