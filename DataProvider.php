<?php 
    class DataProvider {
        public static function executeQuery($sql) {
            include ('db.php');
            //Tao ket noi db
            if(!($conn = mysqli_connect($hostName, $userName, $password))) {
                echo"khong ket noi voi db!";
            }
            if(!(mysqli_select_db($conn, $dbName))) {
                echo"loi khong chon duoc db";
            }
            if(!(mysqli_query($conn, "set names 'utf8'"))) {
                echo"loi truy van tieng viet";
            }
            if(!($result = mysqli_query($sql, $conn))) {
                echo "loi truy van";
            }
            if(!(mysqli_close($conn))) {
                echo "loi dong ket noi";
            }
            return $result;
        }

        public static function noReExQuery($sql) {
            include ('db.php');
            //ket noi db
            if(!($conn = mysqli_connect($hostName, $userName, $password))) {
                echo"khong ket noi voi db!";
            }
            if(!(mysqli_select_db($conn, $dbName))) {
                echo"loi khong chon duoc db";
            }
            if(!(mysqli_query($conn, "set names 'utf8'"))) {
                echo"loi truy van tieng viet";
            }
            if(!($result = mysqli_query($sql, $conn))) {
                echo "loi truy van";
            }
            if(!(mysqli_close($conn))) {
                echo "loi dong ket noi";
            }
        }
    }

?>