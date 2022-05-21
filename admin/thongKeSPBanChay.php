<?php
include '../opendb.php';
$query = "SELECT sanpham.*,YEAR(hoadon.ngayDat) as year,cthoadon.*,hoadon.* FROM sanpham,hoadon,cthoadon WHERE sanpham.idSP=cthoadon.idSP AND hoadon.idHD=cthoadon.idHD;";
$result = mysqli_query($conn, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
    echo $row['year'];
    $chart_data .= "{ ngayDat:'".$row['year']."', slBan:'".$row['slBan']."', ngayDat:".$row['tenSP']."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Thống kê</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

 </head>
 <body>
  <br /><br />
  <div class="container">
   <h2 align="center">Thống kê loại sản phẩm</h2>
   <!-- <input id="datepicker1" value="" name="ngaybd" width="276" />
   <input id="datepicker2" value="" name="ngaykt" width="276" />
   <script>
        $('#datepicker1').datepicker();
        $('#datepicker2').datepicker();
    </script> -->
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['slBan'],
 labels:['slBan'],
 hideHover:'auto',
 stacked:true
});
</script>