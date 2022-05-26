<?php
    include 'opendb.php';
    session_start(); 

    if (isset($_GET['idSP'])){
        $idSP = $_GET['idSP'];  
    }

    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
    $qty = (isset($_GET['qty'])) ? $_GET['qty'] : 1 ;
    echo $action;
    // session_destroy();
    // die(); 

    $query = mysqli_query($conn, " SELECT * FROM sanpham WHERE idSP = '$idSP' ");

    if($query){
        $product = mysqli_fetch_assoc($query); 
    }
    
    $item = [
        // 'idSP' => $product['idSP'],
        'anh' => $product['sp-Img'],
        'ten' => $product['tenSP'],
        'gia' => $product['donGia'],
        'qty' => $qty,
    ];

    //add cart
    if($action == 'add'){
        if(isset($_SESSION['cart'][$idSP])){
            $_SESSION['cart'][$idSP]['qty'] += $qty;
        }
        else{
            $_SESSION['cart'][$idSP] = $item ;
        }
    }

    //update cart
    if($action == 'update'){
        $_SESSION['cart'][$idSP]['qty'] = $qty;
    }
    //remove cart
    if($action == 'delete'){
        unset($_SESSION['cart'][$idSP]);
    }
    $_SESSION['cart'][$idSP]= $item;

    // var_dump($item);
    // header('location: cart.php');
    echo "<pre>";
    print_r($_SESSION['cart']); 
?>

