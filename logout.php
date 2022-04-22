<?php 
    session_start();

    $_SESSION['tenTK'] = NULL;
    switch($_REQUEST['url']) {
        case 1:
            header('Location:index.php');
            break;
        case 2:
            header('Location:session.php');
            break;
    }
?>