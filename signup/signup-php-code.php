<?php
    include '../database/database.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $dateOfBirth = $_POST["dob"];
    $gender = $_POST["gender"];
    $department = $_POST["department"];
    $picture = $_POST["profile_picture"];
    $address = $_POST["address"];

    $sql = "INSERT INTO Users VALUES(NULL, '$name', '$password', '$email', '$dateOfBirth', '$gender', '$department', '$picture', '$address', NULL)";

    // echo $sql;
     $db_response = $connection->query($sql);

    if ($db_response === true) {
        echo "<script>alert('Record Inserted');</script>";
        header("Location: http://127.0.0.1/profilepage/login/login-page.php");
    } else {
        echo "<script>alert('Record not Inserted');</script>";
    }
?>
