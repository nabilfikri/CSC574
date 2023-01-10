<?php
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "classicmodels";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>