<?php
session_start();
$host = "127.0.0.1";
$username = "root";
$password = "Pak@1947";
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
    $_SESSION["user-logged-in"] = "yes";

    while($row = $result->fetch_assoc()){
        $_SESSION["user-id"] = $row["ID"];
        $_SESSION["user-name"] = $row["fullName"];
        $_SESSION["user-email"] = $row["email"];
        $_SESSION["user-gender"] = $row["gender"];
        $_SESSION["user-dob"] = $row["dateOfBirth"]; 
        $_SESSION["user-address"] = $row["address"]; 
        $_SESSION["user-dept"] = $row["department"]; 
    }
    header("Location: http://127.0.0.1/profilepage/profile/profile-page.php");
    // echo "done";
} else {
    header("Location: http://127.0.0.1/profilepage/login/login-page.php.?error=1");
}
?>
