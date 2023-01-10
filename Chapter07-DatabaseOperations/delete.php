<?php
//Establish connection to MySQL
require_once 'db_connect.php';

//Prepare SQL query
$sql = "DELETE from productlines WHERE productLine = 'Super Car'";

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

//Close db connection
mysqli_close($conn);
?>