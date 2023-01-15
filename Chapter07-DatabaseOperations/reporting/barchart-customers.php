<?php
    //Establish connection to MySQL
    require_once '../db_connect.php';

    //Prepare SQL query
    $sql = "SELECT country, count(country) as Counts from customers GROUP BY country";

    //Send SQL query to MYSQL
    $result = mysqli_query($conn, $sql);

    //Close db connection
    mysqli_close($conn);

?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Counts'],
          <?php
            if (mysqli_num_rows($result) > 0) {
              //Iterate over each record
              foreach($result as $row) {
                  echo "['" . $row["country"] . "', " . $row["Counts"] . "], ";
              }
            }
            else {
              echo "0 result.";
            }
          ?>

        ]);

        var options = {
          chart: { 
            title: 'Customer From Various Countries',
            
          },
          legend: { position: "none" },
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 450px; height: 300px;"></div>
  </body>
</html>
