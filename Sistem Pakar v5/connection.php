<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = "imagescan";

    $conn = mysqli_connect($host, $username, $password, $databasename);
    $query = "SELECT * FROM dataimage";
    if (!$conn) {
        echo "Connection Failed!";
        exit();
    }
?>