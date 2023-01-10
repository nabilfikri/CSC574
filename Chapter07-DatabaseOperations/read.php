<?php
    //Establish connection to MySQL
    require_once 'db_connect.php';

    //Prepare SQL query
    $sql = "SELECT productLine, textDescription FROM productlines";

    //Send SQL query to MYSQL
    $result = mysqli_query($conn, $sql);

    //Check if MySQL returns any result
    if (mysqli_num_rows($result) > 0) {
        //Iterate over each record
        foreach($result as $row) {
            echo "productLine: " . $row["productLine"] 
            . " | textDescription: " . substr($row["textDescription"], 0, 25) . "...<br>";
        }
    }
    //If MySQL did not return any result
    else {
        echo "0 result.";
    }

    //Close db connection
    mysqli_close($conn);
?>