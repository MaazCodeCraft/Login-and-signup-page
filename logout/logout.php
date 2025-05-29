<?php 
    session_start();
    $_SESSION["user-logged-in"] = "no";
    if($_COOKIE["remember_me_key"]){
        $timestamp = time();
        $expiry = $timestamp - 1000;
        setcookie("remember_me_key", "soifjslfnlksgl", $expiry, "/");
    }
    header("Location: http://127.0.0.1/profilepage/login/login-page.php");
?>