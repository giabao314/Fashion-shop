<?php 
    class DataProvider {
        public static function executeQuery($sql) {
            include ('db.php');
            //Tao ket noi db
            if(!($conn = mysqli_connect($hostName, $userName, $password))) {
                showError($conn);
            }
            if(!(mysqli_select_db($conn, $dbName))) {
                showError($conn);
            }
            if(!(mysqli_query($conn, "set names 'utf8'"))) {
                showError($conn);
            }
            if(!($result = mysqli_query($conn, $sql))) {
                showError($conn);
            }
            if(!(mysqli_close($conn))) {
                showError($conn);
            }
            return $result;
        }

        public static function noReExQuery($sql) {
            include ('db.php');
            //ket noi db
            if(!($conn = mysqli_connect($hostName, $userName, $password))) {
                showError($conn);
            }
            if(!(mysqli_select_db($conn, $dbName))) {
                showError($conn);
            }
            if(!(mysqli_query($conn, "set names 'utf8'"))) {
                showError($conn);
            }
            if(!($result = mysqli_query($conn, $sql))) {
                showError($conn);
            }
            if(!(mysqli_close($conn))) {
                showError($conn);
            }
        }
    }

?>