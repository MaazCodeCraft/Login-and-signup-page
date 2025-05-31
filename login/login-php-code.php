<?php
include '../database/database.php';
session_start();
$email = $_POST["email"];
$password = $_POST["pass"];

$sql = ("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
$result = $connection->query($sql);

// print_r (result);

if ($result->num_rows > 0) {
    $_SESSION["user-logged-in"] = "yes";

    $user_id = 0;
    while($row = $result->fetch_assoc()){
        $_SESSION["user-id"] = $user_id = $row["ID"];
        $_SESSION["user-name"] = $row["fullName"];
        $_SESSION["user-email"] = $row["email"];
        $_SESSION["user-gender"] = $row["gender"];
        $_SESSION["user-dob"] = $row["dateOfBirth"]; 
        $_SESSION["user-address"] = $row["address"]; 
        $_SESSION["user-dept"] = $row["department"]; 
    }
    // check if user enable Remember me
        if($_POST["remember_me"] == "on"){
            // Generate a random key
            $timestamp = time();
            $remember_key = hash('sha256', $user_id."_".$timestamp);  // md5($user_id."_".$timestamp)
            $expiry = $timestamp + (60 * 60 * 24 * 10); // for 10 day
            // Set Cookie
            setcookie("remember_me_key", $remember_key, $expiry, "/");
            $query = "UPDATE users SET remember_login_key = '$remember_key' WHERE ID = $user_id";
            $connection->query($query);
        }
    header("Location: http://127.0.0.1/profilepage/profile/profile-page.php");
    // echo "done";
} else {
    header("Location: http://127.0.0.1/profilepage/login/login-page.php.?error=1");
}
?>
