<?php
include '../opendb.php';
if (isset($_POST["from_date"], $_POST["to_date"], $_POST['filter_type'])) {
     $query = "  SELECT * FROM hoadon,sanpham,cthoadon,loaisp WHERE hoadon.idHD=cthoadon.idHD AND cthoadon.idSP=sanpham.idSP AND loaisp.idLoaiSP=sanpham.idLoaiSP AND tenLoaiSP = '" . $_POST['filter_type'] . "'  AND ngayDat BETWEEN '" . $_POST["from_date"] . "' AND '" . $_POST["to_date"] . "' ";
}
$output = '';
$result = mysqli_query($conn, $query);
$output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th>Tên sản phẩm</th>  
                     <th>Loại sản phẩm</th>  
                     <th>Số lượng bán</th>    
                </tr>  
      ';
if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_array($result)) {
          $output .= '  
                     <tr>  
                          <td>' . $row["tenSP"] . '</td>  
                          <td>' . $row["tenLoaiSP"] . '</td>  
                          <td>' . $row["soLuong"] . '</td>  
                     </tr>  
                ';
     }
} else {
     $output .= '  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           ';
}
$output .= '</table>';
echo $output;
