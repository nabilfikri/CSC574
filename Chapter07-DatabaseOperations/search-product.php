<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>
<body>
    <h1>Search Products</h1>
    <p>Enter keywords:</p>
    <form action="search-product.php" method="post">
        <input type="text" name="search_query">
        <input type="submit" value="Search">
    </form>
    <br><br><br>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$sch_qry = $_POST["search_query"];

//Establish connection to MySQL
require_once 'db_connect.php';

$sql = "SELECT productName, productDescription, quantityInStock, MSRP 
        FROM products
        WHERE productDescription 
        LIKE '%$sch_qry%'";

//Send SQL query to MYSQL
$result = mysqli_query($conn, $sql);

//Check if MySQL returns any result
if (mysqli_num_rows($result) > 0) {
    echo "<h3>Search Results</h3>";

    //Print html table
    echo "<table border=1>";

    //Print table header
    echo "  <tr>";
    echo "      <th>Product Name</td>";     
    echo "      <th>Description</td>";
    echo "      <th>Stock</td>";
    echo "      <th>Price</td>";
    echo "  </tr>";

    //Print table rows based on records
    foreach($result as $row) {
        echo "<tr>";
        echo "  <td>" . $row["productName"] . "</td>";
        echo "  <td>" . $row["productDescription"] . "</td>";
        echo "  <td>" . $row["quantityInStock"] . "</td>";
        echo "  <td>" . $row["MSRP"] . "</td>";
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