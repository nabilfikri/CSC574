<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    require_once 'db_connect.php';

    $prodLine = $_SESSION['delete-id'];

    //Prepare SQL query
    $sql = "DELETE from productlines WHERE productLine = '$prodLine'";

    //Send SQL query to MYSQL
    // if (mysqli_query($conn, $sql)) {
    //     //check if the query affect on expected one row
    //     if(mysqli_affected_rows($conn) == 1){
    //         echo "Record deleted successfully";
    //     }
    //     else {
    //         echo "None of the record deleted";
    //     }
    // }
    // else {
    //     echo "Error deleting record: " . $sql . "<br>" . mysqli_error($conn);
    // }

    session_destroy();
    
    //Close db connection
    mysqli_close($conn);
}
?>