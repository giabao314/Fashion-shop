<?php
include 'opendb.php';
session_start();
if ($_POST['type'] == 1) {
    extract($_POST);
    $duplicate = mysqli_query($conn, "SELECT * FROM taikhoan WHERE email = '$txtEmail'");
    // echo ('alo');
    if (mysqli_num_rows($duplicate) > 0) {
        echo json_encode(array("statusCode" => 201));
    } else {
        $sql = "INSERT INTO `taikhoan`( `ho`, `ten`, `email`, `matKhau`) 
            VALUES ('$txtHo', '$txtTen', '$txtEmail', '$txtPass')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo json_encode(array("statusCode" => 201));
        }
    }
    mysqli_close($conn);
}
if ($_POST['type'] == 2) {
    extract($_POST);
    $check = mysqli_query($conn, "SELECT * FROM taikhoan 
        WHERE email = '$txtEmail' 
        -- AND matKhau = md5('$txtPass')
        ");
    // echo(mysqli_num_rows($check));
    if (mysqli_num_rows($check) > 0) {
        // $row = mysqli_fetch_array($sql);
        // if(is_array($row)) {
        // $_SESSION["maTK"] = $row['maTK'];
        $_SESSION['email'] = $txtEmail;
        // $_SESSION["matKhau"] = $row['matKhau'];
        // $_SESSION["ho"] = $row['ho'];
        // $_SESSION["ten"] = $row['ten'];
        echo json_encode(array("statusCode" => 200));
        // }
    } else {
        echo json_encode(array("statusCode" => 201));
    }
    mysqli_close($conn);
}
