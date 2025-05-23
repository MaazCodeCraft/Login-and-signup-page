<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "ProfileLogin";

$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}

$email = $_POST["email"];
$password = $_POST["pass"];

$sql = ("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
$result = $connection->query($sql);

// print_r (result);

if ($result->num_rows > 0) {
    header("Location: http://127.0.0.1/profilepage/profile/profile.php");
} else {
    header("Location: http://127.0.0.1/profilepage/login/login-page.php.?error=1");
}
?>
