<?php 
    session_start();
    if (!isset($_POST["login"]) || !isset($_POST["senha"])){
        header("Location:login.php");
        exit();
    }   
    if (!$_POST["login"]="admin" || !$_POST["senha"]="1234"){
        header("Location:login.php");
        exit();
    }
    $_SESSION["login"]="admin";
    header("Location:main.php")
?>