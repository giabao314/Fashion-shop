<?php 
include "../opendb.php";
if(isset($_POST['capnhatdonhang'])){
	$xuly = $_POST['xuly'];
	$idHD = $_POST['idHD_xuly'];
	$sql_update_donhang = mysqli_query($conn,"UPDATE hoadon SET tinhTrang='$xuly' WHERE idHD='$idHD'");
	$sql_update_giaodich = mysqli_query($conn,"UPDATE cthoadon SET tinhTrang='$xuly' WHERE idHD='$idHD'");
}

?>
<?php
	if(isset($_GET['xoadonhang'])){
		$idHD = $_GET['xoadonhang'];
		$sql_delete = mysqli_query($conn,"DELETE FROM hoadon WHERE idHD='$idHD'");
		header('Location:xulydonhang.php');
	} 
	if(isset($_GET['xacnhanhuy'])&& isset($_GET['idHD'])){
		$huydon = $_GET['xacnhanhuy'];
		$idHD = $_GET['idHD'];
	}else{
		$huydon = '';
		$idHD = '';
	}
	$sql_update_donhang = mysqli_query($conn,"UPDATE hoadon SET tinhtrang='$huydon' WHERE idHD='$idHD'");
	$sql_update_giaodich = mysqli_query($conn,"UPDATE cthoadon SET tinhtrang='$huydon' WHERE idHD='$idHD'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đơn hàng</title>
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
	      <li class="nav-item active">
	        <a class="nav-link" href="xulydonhang.php">Đơn hàng <span class="sr-only">(current)</span></a>
	      </li> 
	    </ul>
	  </div>
	</nav><br><br>
	<div class="conntainer-fluid">
		<div class="row ">
		<?php
				if(isset($_GET['quanly'])=='xemdonhang'){
					$idHD = $_GET['idHD'];
					$sql_chitiet = mysqli_query($conn,"SELECT * FROM cthoadon,sanpham WHERE cthoadon.idSP=sanpham.idSP AND cthoadon.idHD='$idHD'");
					?>
				<div class="col-md-7">
				<p><h4>Xem chi tiết đơn hàng</h4></p>
			<form action="" method="POST">
				<table class="table table-bordered ">
					<tr>
						<th>Thứ tự</th>
						<th>Mã hàng</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th>Tổng tiền</th>

						<!-- <th>Quản lý</th> -->
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_chitiet)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_donhang['idSP']; ?></td>
						<td><?php echo $row_donhang['tenSP']; ?></td>
						<td><?php echo $row_donhang['soLuong']; ?></td>
						<td><?php echo number_format($row_donhang['donGia']).'$'; ?></td>
						<td><?php echo number_format($row_donhang['soLuong']*$row_donhang['donGia']).'$'; ?></td>
						<input type="hidden" name="idSP_xuly" value="<?php echo $row_donhang['idSP'] ?>">
						<input type="hidden" name="idHD_xuly" value="<?php echo $row_donhang['idHD'] ?>">

						<!-- <td><a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&idSP=<?php echo $row_donhang['idSP'] ?>">Xem đơn hàng</a></td> -->
					</tr>
					 <?php
					} 
					?> 
				</table>

				<select class="form-control" name="xuly">
					<option value="1">Đã xử lý | Giao hàng</option>
					<option value="0">Chưa xử lý</option>
				</select><br>

				<input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
			</form>
				</div>  
			<?php
			}else{
				?> 
				
				<div class="col-md-3">
				</div>  
				<?php
			} 
			
				?> 
			<div class="col-md-5">
				<h4>Liệt kê đơn hàng</h4>
				<?php
				$sql_select = mysqli_query($conn,"SELECT * FROM sanpham,khachhang,hoadon WHERE hoadon.idKH=khachhang.idKH GROUP BY idHD "); 
				?> 
				<table class="table table-bordered ">
					<tr>	
						<th>Thứ tự</th>
						<th>Mã hàng</th>
						<th>Tình trạng đơn hàng</th>
						<th>Tên khách hàng</th>
						<th>Ngày đặt</th>
						<th>Hủy đơn</th>
						<th>Quản lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_donhang['idHD']; ?></td>
						<td><?php
							if($row_donhang['tinhTrang']==0){
								echo 'Chưa xử lý';
							}else{
								echo 'Đã xử lý';
							}
						?></td>
						<td><?php echo $row_donhang['tenKH']; ?></td>
						<td><?php echo $row_donhang['ngayDat'] ?></td>
						<td><?php if($row_donhang['tinhTrang']==0){ }elseif($row_donhang['tinhTrang']==1){
							echo '<a href="xulydonhang.php?quanly=xemdonhang&idHD='.$row_donhang['idHD'].'&xacnhanhuy=2">Xác nhận hủy đơn</a>';
						}else{
							echo 'Đã hủy';
						} 
						?></td>

						<td><a href="?xoadonhang=<?php echo $row_donhang['idHD'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&idHD=<?php echo $row_donhang['idHD'] ?>">Xem </a></td>
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