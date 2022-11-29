<!DOCTYPE html>
<html>
<head>
    <title>Repetition Control Structures</title>
</head>

<body>
    <h1>Repetition Control Structures</h1>

    <h3>while Structure</h3>
    <?php
      $x = 1; 

      while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
      }
    ?>

    <h3>do..while Structure</h3>
    <?php 
      $x = 1; 

      do {
        echo "The number is: $x <br>";
        $x++;
      } while ($x <= 5);
    ?>

    <h3>for Structure</h3>
    <?php 
      for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
      }
    ?>

</body>

</html>