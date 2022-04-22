<?php
session_start();

require('common.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minh hoa session</title>
</head>

<body>
    <?php
    if (isLogined()) {

    ?>
        ban da dang nhap voi username = <?php echo ($_SESSION['tenTK']) ?>. Nhan vao <a href="logout.php?url=1">day</a> de log out va tro ve trang login.php
    <?php
    }
    else {
        ?>
        ban chua dang nhap. nhan vao <a href="index.php">day</a> de dang nhap
        <?php
    }
    ?>
</body>

</html>