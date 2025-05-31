<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "Pak@1947";
    $database = "ProfileLogin";

    $connection = new mysqli($host, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection Failed: " . $connection->connect_error);
    }
?>