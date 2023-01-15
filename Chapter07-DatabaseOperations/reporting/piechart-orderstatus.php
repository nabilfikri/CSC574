<?php
    //Establish connection to MySQL
    require_once '../db_connect.php';

    //Prepare SQL query
    $sql = "SELECT status, count(status) as Counts from orders GROUP BY status";

    //Send SQL query to MYSQL
    $result = mysqli_query($conn, $sql);
    
    //Close db connection
    mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      // Define the chart to be drawn.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Element');
      data.addColumn('number', 'Percentage');
      data.addRows([
        <?php
          if (mysqli_num_rows($result) > 0) {
            //Iterate over each record
            foreach($result as $row) {
                echo "['" . $row["status"] . "', " . $row["Counts"] . "], ";
            }
          }
          else {
            echo "0 result.";
          }
        ?>
      ]);

      // Set chart options
      var options = {'title':'Order Status',
                       'width':400,
                       'height':300};

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
      chart.draw(data, options);
    }
  </script>
</head>

<body>
      
  <!-- Identify where the chart should be drawn. -->
  <div id="myPieChart"/>
</body>

</html>