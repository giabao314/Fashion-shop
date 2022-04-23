<?php 
    function showError($conn) {
        die("Error " . mysqli_errno($conn) . " : " . mysqli_error($conn));
    }
?>