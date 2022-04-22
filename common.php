<?php 
    // session_start();

    function isLogined() {
        echo('@: ' . $_SESSION['tenTK']);
        if(empty($_SESSION['tenTK']))
            return false;
        return true;
    }
?>
