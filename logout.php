<?php
    session_start();
    unset($_SESSION["elog"]);
    unset($_SESSION["mklog"]);
    header("Location:#");
?>