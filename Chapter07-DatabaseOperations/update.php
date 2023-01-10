<?php
//Establish connection to MySQL
require_once 'db_connect.php';

//Prepare SQL query   
$sql = "UPDATE productlines
        SET textDescription='Supercars commonly serve as the flagship model within a vehicle manufacturers line-up.'
        WHERE productLine='Super Car'";

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

//Close db connection
mysqli_close($conn);
?>