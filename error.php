<?php 
    function showError( ) {
        die("Error " . mysqli_errno() . " : " . mysqli_error());
    }
?>