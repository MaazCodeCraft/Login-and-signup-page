<?php 
    session_start();
    if ($_SESSION["user-logged-in"] != "yes"){
        header("Location: http://127.0.0.1/profilepage/login/login-page.php");
        return 0;
    }
?>

<html>
    <style>
        body {
            font-family: "arial";
        }
    </style>
    <body>
        <h1>Welcome <?php echo $_SESSION["user-name"];?></h1>
        <a href="/profilepage/accountDetail.php">Account Detail</a>
        <button><a href="/profilepage/logout/logout.php">Logout</a></button>
    </body>
</html>