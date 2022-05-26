<?php
include '../opendb.php';
$query = "SELECT * FROM hoadon,sanpham,cthoadon,loaisp WHERE hoadon.idHD=cthoadon.idHD AND cthoadon.idSP=sanpham.idSP AND loaisp.idLoaiSP=sanpham.idLoaiSP";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Thống kê sản phẩm</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css" />
</head>

<body>
    <br /><br />
    <div class="container">
        <h2 align="center">Lọc dữ liệu</h2>
        <div class="row container">
            <div class="col-md-3">
                <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
            </div>
            <div class="col-md-3">
                <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
            </div>
            <div class="col-md-3">
                <?php
                $sql_loaisp = mysqli_query($conn, "SELECT DISTINCT tenLoaiSP  FROM hoadon,sanpham,cthoadon,loaisp WHERE hoadon.idHD=cthoadon.idHD AND cthoadon.idSP=sanpham.idSP AND loaisp.idLoaiSP=sanpham.idLoaiSP");
                ?>
                <select name="filter_type" id="filter_type" class="form-control">
                    <option value="0">All</option>
                    <?php
                    while ($row_loaisp = mysqli_fetch_array($sql_loaisp)) {
                    ?>
                        <option value="<?php echo $row_loaisp['tenLoaiSP'] ?>"><?php echo $row_loaisp['tenLoaiSP'] ?></option>
                    <?php
                    }
                    ?>
                </select><br>
            </div>
            <div class="col-md-3">
                <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />
            </div>
        </div>
        <br />
        <div id="order_table">
            <table class="table table-bordered">
                <tr>
                    <th><a class="column_sort" id="tenSP" data-order="desc" href="#">Tên sản phẩm</a></th>
                    <th><a class="column_sort" id="tenLoaiSP" data-order="desc" href="#">Loại sản phẩm</a></th>
                    <th><a class="column_sort" id="soLuong" data-order="desc" href="#">Số lượng bán</a></th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["tenSP"]; ?></td>
                        <td><?php echo $row["tenLoaiSP"]; ?></td>
                        <td><?php echo $row["soLuong"]; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <br>
        <?php
        $sql_top = mysqli_query($conn, "SELECT * FROM hoadon,sanpham,cthoadon,loaisp WHERE hoadon.idHD=cthoadon.idHD AND cthoadon.idSP=sanpham.idSP AND loaisp.idLoaiSP=sanpham.idLoaiSP AND soLuong =(SELECT MAX(soLuong) FROM cthoadon ) ");
        ?>
        <?php
        while ($row_top = mysqli_fetch_array($sql_top)) {
        ?>
            <h2>Sản phẩm <?php echo $row_top['tenSP'] ?> bán chạy nhất với số lượng bán là <?php echo $row_top['soLuong'] ?> thuộc loại <?php echo $row_top['tenLoaiSP'] ?></h2>
        <?php
        }
        ?>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $.datepicker.setDefaults({
            dateFormat: 'yy-mm-dd'
        });
        $(function() {
            $("#from_date").datepicker();
            $("#to_date").datepicker();
        });
        $(document).on('click', '.column_sort', function() {
            var column_name = $(this).attr("id");
            var order = $(this).data("order");
            var arrow = '';
            if (order == 'desc') {
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';
            } else {
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';
            }
            $.ajax({
                url: "sort.php",    
                method: "POST",
                data: {
                    column_name: column_name,
                    order: order
                },
                success: function(data) {
                    $('#order_table').html(data);
                    $('#' + column_name + '').append(arrow);
                }
            })
        });
        $('#filter').click(function() {
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            var filter_type = $('#filter_type').val();
            var order = $(this).data("order");
            if (from_date != '' && to_date != '' && filter_type != '') {
                $.ajax({
                    url: "filter.php",
                    method: "POST",
                    data: {
                        from_date: from_date,
                        to_date: to_date,
                        order: order,
                        filter_type: filter_type
                    },
                    success: function(data) {
                        $('#order_table').html(data);
                    }
                });
            } else if (from_date != '' && to_date != '' && filter_type == '') {
                alert("Please Select Both Filter Option");
            } else if (from_date == '' && to_date == '' && filter_type != '') {
                alert("Please Select Date ");
            } else {
                alert("Please Select Date And Select Both Filter Option");
            }
        });
    });
</script>