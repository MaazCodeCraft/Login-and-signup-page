<?php 
    session_start();
    $_SESSION["user-logged-in"] = "no";
    header("Location: http://127.0.0.1/profilepage/login/login-page.php");
?>