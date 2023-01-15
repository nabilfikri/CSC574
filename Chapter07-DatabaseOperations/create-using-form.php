<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        require_once 'db_connect.php';

        $productLine = $_POST['prodLine'];
        $description = $_POST['desc'];


        //Prepare SQL query
        $sql = "INSERT into productlines (productLine, textDescription) VALUES ('$productLine', '$description')";

        //Send SQL query to MYSQL
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        //Close db connection
        mysqli_close($conn);

    }
?>