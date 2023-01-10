<?php
    require_once 'db_connect.php';

    $sql = "SELECT productLine, textDescription FROM productlines";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<h1>Read Operation - Fit data into table</h1>

<?php 
    if (mysqli_num_rows($result) > 0) {

        //Print html table
        echo "<table border=1>";

        //Print table header
        echo "  <tr>";
        echo "      <th>productLine</td>";
        echo "      <th>textDescription</td>";
        echo "  </tr>";

        //Print table rows based on records
        foreach($result as $row) {
            echo "<tr>";
            echo "  <td>" . $row["productLine"] . "</td>";
            echo "  <td>" . substr($row["textDescription"], 0, 25) . "...</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    else {
        echo "0 result.";
    }
?>

</body>
</html>

<?php
    //close db connection
    mysqli_close($conn);
?>