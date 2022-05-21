<?php 
    //call db param
    include ('database.php');
    //connect to database
    $conn = mysqli_connect($hostName, $userName, $password, $dbName);
    if(!$conn) {
        showError($conn);
    }
    
?>