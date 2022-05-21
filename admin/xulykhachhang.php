<?php
	include('../opendb.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khách hàng</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      
	       <li class="nav-item">
	        <a class="nav-link" href="xulykhachhang.php">Khách hàng</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav><br><br>
	<div class="conntainer-fluid">
		<div class="row">
			
			<div class="col-md-12">
				<h4>Khách hàng</h4>
				<?php
				$sql_select_khachhang = mysqli_query($conn,"SELECT * FROM khachhang,hoadon,loaikh WHERE khachhang.idKH=hoadon.idKH AND khachhang.idLoaiKH=loaikh.idLoaiKH GROUP BY hoadon.idHD ORDER BY khachhang.idKH DESC"); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Thứ tự</th>
						<th>Họ khách hàng</th>
						<th>Tên khách hàng</th>
						<th>Số điện thoại</th>
						<th>Địa chỉ</th>
						<th>Loại ưu tiên</th>
						<th>Quản lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_khachhang = mysqli_fetch_array($sql_select_khachhang)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>						
						<td><?php echo $row_khachhang['hoKH']; ?></td>
						<td><?php echo $row_khachhang['tenKH']; ?></td>
						<td><?php echo $row_khachhang['sdt']; ?></td>
						<td><?php echo $row_khachhang['diaChiGiao']; ?></td>
						<td><?php echo $row_khachhang['tenLoaiKH'] ?></td>						
						<td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['idHD'] ?>">Xem giao dịch</a></td>
					</tr>
					 <?php
					} 
					?> 
				</table>
			</div>

			<div class="col-md-12">
				<h4>Liệt kê lịch sử đơn hàng</h4>
				<?php
				if(isset($_GET['khachhang'])){
					$idHD = $_GET['khachhang'];
				}else{
					$idHD = '';
				}
				$sql_select = mysqli_query($conn,"SELECT * FROM cthoadon,hoadon,khachhang,sanpham WHERE cthoadon.idSP=sanpham.idSP AND khachhang.idKH=hoadon.idKH AND cthoadon.idHD=hoadon.idHD AND cthoadon.idHD = '$idHD' ORDER BY cthoadon.idHD DESC"); 
				?> 
				<table class="table table-bordered ">
					<tr>
						<th>Thứ tự</th>
						<th>Mã Hoá Đơn</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Ngày đặt</th>	
						<th>Tình trạng</th>					
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;						
					?> 
					<tr>
						<td><?php echo $i; ?></td>						
						<td><?php echo $row_donhang['idHD']; ?></td>					
						<td><?php echo $row_donhang['tenSP']; ?></td>						
						<td><?php echo $row_donhang['soLuong'] ?></td>						
						<td><?php echo $row_donhang['ngayDat']?></td>	
						<td><?php echo $row_donhang['tinhTrang'] ?></td>		
					</tr>
					 <?php
					} 
					?> 
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>