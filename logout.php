<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["matKhau"]);
    header("Location:login.php");
?>