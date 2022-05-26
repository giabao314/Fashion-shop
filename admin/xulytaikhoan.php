<?php
include('../opendb.php');

if (isset($_GET['xoa'])) {
    $xoa = $_GET['xoa'];
    $sql_xoa = mysqli_query($conn, "DELETE FROM taikhoan WHERE idTK='$xoa'");
} elseif (isset($_GET['xoadanhmuc'])) {
    $xoadanhmuc = $_GET['xoadanhmuc'];
    $sql_xoa = mysqli_query($conn, "DELETE FROM quyendanhmuc WHERE idQDM='$xoadanhmuc'");
} elseif (isset($_POST['capnhaptaikhoan'])) {
    $id_update = $_POST['id_update'];
    $tenTK = $_POST['tenTK'];
    $quyen = $_POST['quyen'];
    mysqli_query($conn, "UPDATE taikhoan SET tenTK='$tenTK', idQuyen='$quyen' WHERE idTK='$id_update'");
} elseif (isset($_POST['themquyen'])) {
    $quyen = $_POST['idQuyen'];
    $danhmuc = $_POST['idDM'];
    $id = $_POST['idQDM'];
    mysqli_query($conn, "INSERT INTO quyendanhmuc (idQuyen,idDM,idQDM) values ('$quyen','$danhmuc',$id)");
}
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
    <style>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="xulytaikhoan.php">Tài khoản</a>
                </li>

            </ul>
        </div>
    </nav><br><br>
    <div class="conntainer-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Quản lý tài khoản</h4>
                <?php
                $sql_select_taikhoan = mysqli_query($conn, "SELECT * FROM taikhoan,quyen WHERE taikhoan.idQuyen = quyen.idQuyen ");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Quyền hiện tại</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row_taikhoan = mysqli_fetch_array($sql_select_taikhoan)) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row_taikhoan['tenTK']; ?></td>
                            <td><?php echo $row_taikhoan['password']; ?></td>
                            <td><?php echo $row_taikhoan['email']; ?></td>
                            <td><?php echo $row_taikhoan['tenQuyen']; ?></td>
                            <td><a href="?xoa=<?php echo $row_taikhoan['idTK'] ?>">Xóa</a> || <a href="?quanly=capnhat&capnhat_id=<?php echo $row_taikhoan['idTK'] ?>">Cập nhật</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

            <?php
            if (isset($_GET['quanly']) == 'capnhatquyendanhmuc') {
                $id_capnhat = $_GET['capnhat_id'];
                $sql_capnhat = mysqli_query($conn, "SELECT * FROM taikhoan WHERE idTK='$id_capnhat'");
                $row_capnhat = mysqli_fetch_array($sql_capnhat);
                $id_category_1 = $row_capnhat['idTK'];
            ?>
                <div class="col-md-12">
                    <h4>Cập nhật tài khoản<nav></nav>
                    </h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-5">
                                <label>Tên tài khoản</label>
                                <input type="text" class="form-control" name="tenTK" value="<?php echo $row_capnhat['tenTK'] ?>"><br>
                                <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['idTK'] ?>">
                            </div>
                            <div class="col-md-5">
                                <label>Quyền</label>
                                <?php
                                $sql_danhmuc = mysqli_query($conn, "SELECT * FROM quyen ORDER BY idQuyen DESC");
                                ?>
                                <select name="quyen" class="form-control">
                                    <?php
                                    while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
                                        if ($id_category_1 == $row_danhmuc['idQuyen']) {
                                    ?>
                                            <option selected value="<?php echo $row_danhmuc['idQuyen'] ?>"><?php echo $row_danhmuc['tenQuyen'] ?></option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="<?php echo $row_danhmuc['idQuyen'] ?>"><?php echo $row_danhmuc['tenQuyen'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <input type="submit" name="capnhaptaikhoan" value="Cập nhật tài khoản" class="btn btn-default">
                        </div>
                    </form>
                </div>
            <?php
            }
            ?>
            <div class="col-md-12">
                <h4>Phân quyền</h4>
                <?php
                $sql_select = mysqli_query($conn, "SELECT * FROM quyendanhmuc,quyen,danhmuc WHERE quyen.idQuyen = quyendanhmuc.idQuyen AND danhmuc.idDM = quyendanhmuc.idDM");
                ?>
                <table class="table table-bordered ">
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tên quyền</th>
                        <th>Danh mục</th>
                        <th>Xoá</th>
                    </tr>
                    <?php
                    while ($row_tk = mysqli_fetch_array($sql_select)) {
                    ?>
                        <tr>
                            <td><?php echo $row_tk['idQDM']; ?></td>
                            <td><?php echo $row_tk['tenQuyen']; ?></td>
                            <td><?php echo $row_tk['tenDM']; ?></td>
                            <td><a href="?xoadanhmuc=<?php echo $row_tk['idQDM'] ?>">Xóa</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="col-md-12">
                <h4 height="100" width="80">Thêm quyền</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Số thứ tự</label>
                            <input type="text" class="form-control" name="idQDM" placeholder="Số thứ tự"><br>
                        </div>
                        <div class="col-md-5">
                            <label>Quyền</label>
                            <?php
                            $sql_quyen = mysqli_query($conn, "SELECT * FROM quyen ORDER BY idQuyen DESC");
                            ?>
                            <select name="idQuyen" class="form-control">
                                <option value="0">-----Chọn quyền-----</option>
                                <?php
                                while ($row_quyen = mysqli_fetch_array($sql_quyen)) {
                                ?>
                                    <option value="<?php echo $row_quyen['idQuyen'] ?>"><?php echo $row_quyen['tenQuyen'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label>Danh mục</label>
                            <?php
                            $sql_danhmuc = mysqli_query($conn, "SELECT * FROM danhmuc ORDER BY idDM DESC");
                            ?>
                            <select name="idDM" class="form-control">
                                <option value="0">-----Chọn danh mục-----</option>
                                <?php
                                while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
                                ?>
                                    <option value="<?php echo $row_danhmuc['idDM'] ?>"><?php echo $row_danhmuc['tenDM'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <input type="submit" name="themquyen" value="Thêm quyền" class="btn btn-default">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>