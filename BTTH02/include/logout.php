<?php
    session_start();
    if(isset($_SESSION['isLoginAdmin'])){
        unset($_SESSION['isLoginAdmin']);
    }
    if(isset($_SESSION['isLoginClient'])){
        unset($_SESSION['isLoginClient']);
    }
    header("Location:../index.php");
?>