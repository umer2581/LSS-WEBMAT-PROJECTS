<?php
error_reporting(0);
    session_start();
    if($_SESSION['Admin']=="")
    {
        echo "<script> window.location='index.php'; </script>";
    }

?>