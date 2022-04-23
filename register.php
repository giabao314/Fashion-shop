<?php
extract($_POST);
include('opendb.php');
$sql = mysqli_query($conn, "SELECT * FROM taikhoan WHERE email = '$txtEmail'");
if (mysqli_num_rows($sql) > 0) {
    echo ('Email đã tồn tại!');
    exit;
} else if (isset($_POST['btnSignUp'])) {
    $file = rand(1000, 100000) . "-" . $_FILES['txtFile']['name'];
    $file_loc = $_FILES['txtFile']['tmp_name'];
    $folder = "upload/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    if (move_uploaded_file($file_loc, $folder . $final_file)) {
        echo(md5($txtPass));
        // $txtPass = $_POST['txtPass'];
        $query = "INSERT INTO taikhoan(ho, ten, email, matKhau, file ) VALUES ('$txtHo', '$txtTen', '$txtEmail', md5($txtPass), '$final_file')";
        $sql = mysqli_query($conn, $query) or die("Không thể truy vấn!");
        header("Location: index.php?status=success");
    } else {
        echo "Lỗi, hãy thử lại!";
    }
}
