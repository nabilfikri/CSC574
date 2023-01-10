<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>
<body>
    <h1>Search Customers</h1>
    <p>Enter customer id:</p>
    <form action="search-customer.php" method="post">
        <input type="text" name="search_query">
        <input type="submit" value="Search">
    </form>
    <br><br><br>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $sch_qry = $_POST["search_query"];

        //Establish connection to MySQL
        require_once 'db_connect.php';

        //Prepare SQL query
        $sql = "SELECT customerNumber, customerName, contactFirstName, contactLastName
                FROM customers 
                WHERE customerNumber = '$sch_qry'";

        //Send SQL query to MYSQL
        $result = mysqli_query($conn, $sql);

        //Check if MySQL returns any result
        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Search Results</h3>";

            //Print html table
            echo "<table border=1>";

            //Print table header
            echo "  <tr>";
            echo "      <th>Customer No.</td>";
            echo "      <th>Customer Name</td>";
            echo "      <th>Contact First Name</td>";
            echo "      <th>Contact Last Name</td>";
            echo "  </tr>";

            //Print table rows based on records
            foreach($result as $row) {
                echo "<tr>";
                echo "  <td>" . $row["customerNumber"] . "</td>";
                echo "  <td>" . $row["customerName"] . "</td>";
                echo "  <td>" . $row["contactFirstName"] . "</td>";
                echo "  <td>" . $row["contactLastName"] . "</td>";

                echo "</tr>";
            }

            echo "</table>";
        }
        //If MySQL did not return any result
        else {
            echo "0 result.";
        }
    }
?>

</body>
</html>