<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    require_once 'db_connect.php';

    $productLine = $_POST['prodLine'];
    $description = $_POST['desc'];
    $update_id = $_SESSION['update-id'];

    //Prepare SQL query
    $sql = "UPDATE productlines
            SET productLine='$productLine', textDescription='$description'
            WHERE productLine='$update_id'";

    //Send SQL query to MYSQL
    // if (mysqli_query($conn, $sql)) {
    //     //check if the query affect on expected one row
    //     if(mysqli_affected_rows($conn) == 1){
    //         echo "Record updated successfully";
    //     }
    //     else {
    //         echo "None of the record updated";
    //     }
    // }
    // else {
    //     echo "Error updating record: " . $sql . "<br>" . mysqli_error($conn);
    // }

    session_destroy();
    
    //Close db connection
    mysqli_close($conn);
}
?>