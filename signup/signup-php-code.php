<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "Pak@1947";
    $database = "ProfileLogin";

    $connection = new mysqli($host, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection Failed: " . $connection->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $dateOfBirth = $_POST["dob"];
    $gender = $_POST["gender"];
    $department = $_POST["department"];
    $picture = $_POST["profile_picture"];
    $address = $_POST["address"];

    $sql = "INSERT INTO Users VALUES(NULL, '$name', '$password', '$email', '$dateOfBirth', '$gender', '$department', '$picture', '$address')";

    // echo $sql;
     $db_response = $connection->query($sql);

    if ($db_response === true) {
        echo "<script>alert('Record Inserted');</script>";
    } else {
        echo "<script>alert('Record not Inserted');</script>";
    }
?>
