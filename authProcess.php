<?php
include 'opendb.php';
session_start();
if ($_POST['type'] == 1) 
{
    // $ho = $_POST['ho'];
    $tenTK = $_POST['tenTK'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $checkEmail = mysqli_query($conn, "select * from taikhoan where email='$email'");
    if (mysqli_num_rows($checkEmail) > 0) 
    {
        echo json_encode(array("statusCode" => 201));
    } 
    else {
        $sql = "INSERT INTO taikhoan (tenTK, email, password, idQuyen) 
        VALUES ('$tenTK','$email',md5($pass), '3')";
        if (mysqli_query($conn, $sql))
        {
            echo json_encode(array("statusCode" => 200));
        } 
        else 
        {
            echo($sql . mysqli_error($conn));
            echo json_encode(array("statusCode" => 201));
        }
    }
    mysqli_close($conn);
}

else if ($_POST['type'] == 2) 
{
    $email1 = $_POST['elog'];
    $pass1 = $_POST['plog'];
    $check = mysqli_query($conn, "SELECT * FROM taikhoan WHERE email='$email1' AND password=md5($pass1)");
    if (mysqli_num_rows($check) > 0) {
        // echo ("$email1 $matkhau1");
        // echo('alo');
        $row_signIn = mysqli_fetch_array($check);
        $_SESSION['elog'] = $row_signIn['email'];
        // $_SESSION['plog'] = $row_signIn['password'];
        $_SESSION['signIn_name'] = $row_signIn['tenTK'];
        $_SESSION['signIn_id'] = $row_signIn['idTK'];
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 201));
    }
    mysqli_close($conn);
}
