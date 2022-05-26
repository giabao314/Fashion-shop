<?php
    include 'opendb.php';
    session_start();

    if (isset($_GET['id'])){
        $id = $_GET['id'];  
    }

    // session_destroy();
    // die();

    $query = mysqli_query($conn, "SELECT * FROM sanpham WHERE idSP = $id");

    if($query){
        $product = mysqli_fetch_assoc($query); 
    }
    
    $item = [
        'anh' => $product['sp-Img'],
        'ten' => $product['tenSP'],
        'gia' => $product['donGia'],
        'qty' => 1,
    ];

    $_SESSION['cart'][$id] = $item;

    //add cart
    //update cart
    //remove cart
?>