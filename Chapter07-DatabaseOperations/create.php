<?php
    //Establish connection to MySQL
    require_once 'db_connect.php';

    //Prepare SQL query
    $sql = "INSERT into productlines (productLine, textDescription) 
            VALUES 
            ('Super Car', 
            'Exotic car - is a loosely defined description of street-legal, high-performance sports cars.')";

    //Send SQL query to MYSQL
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    //Close db connection
    mysqli_close($conn);
?>