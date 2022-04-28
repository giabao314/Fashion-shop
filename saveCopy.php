<?php
include 'opendb.php';
session_start();
if ($_POST['type'] == 1) {
    $ho = $_POST['ho'];
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $duplicate = mysqli_query($conn, "select * from taikhoan where email='$email'");
    // echo('alo');
    if (mysqli_num_rows($duplicate) > 0) {
        echo json_encode(array("statusCode" => 201));
    } else {
        $sql = "INSERT INTO `taikhoan`( `ho`, `ten`, `email`, `matkhau`) 
        VALUES ('$ho','$ten','$email',md5('$matkhau'))";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo json_encode(array("statusCode" => 201));
        }
    }
    mysqli_close($conn);
} else if ($_POST['type'] == 2) {
    $email1 = $_POST['elog'];
    $matkhau1 = $_POST['mklog'];
    $check = mysqli_query($conn, "SELECT * FROM taikhoan WHERE email='$email1' AND matkhau=md5($matkhau1)");
    // 
    if (mysqli_num_rows($check) > 0) {
        // echo ("$email1 $matkhau1");
        // echo('alo');
        $_SESSION['elog'] = $email1;
        echo json_encode(array("statusCode" => 200));
    } 
    else {
        echo json_encode(array("statusCode" => 201));
    }
    mysqli_close($conn);
}
