<?php 
    session_start();
    if (isset($_SESSION["user-logged-in"]) && $_SESSION["user-logged-in"] == "yes"){
        header("Location: http://127.0.0.1/profilepage/profile/profile-page.php");
        return 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>

    <form class="form-container" method="post" action="login-php-code.php">
        <h1>Login Form</h1>

        <?php if (isset($_GET["error"])): ?>
            <?php $errorCode = $_GET["error"];?>
            <?php if($errorCode):?>
                <h4 style = "color: red">Invalid username or password</h4>
            <?php endif;?>
        <?php endif;?>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required>

        <input type="submit" class="submit-btn" value="Apply">
        <p><a href="../index.php">Click For Signup</a></p>
    </form>
</body>
</html>
