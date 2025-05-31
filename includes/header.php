<?php
include '../database/database.php';
session_start();

if(!isset($_SESSION["user-logged-in"]) || $_SESSION["user-logged-in"] != "yes"){
    if($_COOKIE["remember_me_key"]){
        
        $cookie_value = $_COOKIE["remember_me_key"];
        $query = "SELECT * FROM users WHERE remember_login_key = '$cookie_value'";
        $db_response = $connection->query($query);

        while($row = $db_response->fetch_assoc()){
            $_SESSION["user-id"] = $user_id = $row["ID"];
            $_SESSION["user-name"] = $row["fullName"];
        }
    }else{
        header("Location: http://127.0.0.1/profilepage/login/login-page.php");
    }
}


?>
<html>
    <body>
        <div class="header">Government Degree College Lahor Swabi</div>
        <nav class="menu">
            <div class="menu_item"><a href="/profilepage/profile/profile-page.php">Profile</a></div>
            <div class="menu_item"><a href="/profilepage/setting/setting.php">Settings</a></div>
            <div class="menu_item"><a href="/profilepage/logout/logout.php">Logout</a></div>
        </nav>