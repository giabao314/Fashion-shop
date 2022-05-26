<?php
include '../opendb.php';
$output = '';
$order = $_POST["order"];
if ($order == 'desc') {
     $order = 'asc';
} else {
     $order = 'desc';
}
$query = "SELECT * FROM cthoadon,hoadon,loaisp,sanpham WHERE hoadon.idHD=cthoadon.idHD AND cthoadon.idSP=sanpham.idSP AND loaisp.idLoaiSP=sanpham.idLoaiSP ORDER BY " . $_POST["column_name"] . " " . $_POST["order"] . "";
$result = mysqli_query($conn, $query);
$output .= '  
 <table class="table table-bordered">  
      <tr>  
           <th><a class="column_sort" id="tenSP" data-order="' . $order . '" href="#">Tên sản phẩm</a></th>  
           <th><a class="column_sort" id="tenLoaiSP" data-order="' . $order . '" href="#">Loại sản phẩm</a></th>  
           <th><a class="column_sort" id="soLuong" data-order="' . $order . '" href="#">Số lượng bán</a></th>  
      </tr>  
 ';
while ($row = mysqli_fetch_array($result)) {
     $output .= '  
      <tr>  
           <td>' . $row["tenSP"] . '</td>  
           <td>' . $row["tenLoaiSP"] . '</td>  
           <td>' . $row["soLuong"] . '</td>  
      </tr>  
      ';
}
$output .= '</table>';
echo $output;
