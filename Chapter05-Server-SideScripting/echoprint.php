<!DOCTYPE html>

<head>
    <title>Hello PHP!</title>
</head>
<body>
<?php
  echo "<h1>Hello World!</h1>";
  echo "This ", "string ", "was ", "made ", "with multiple parameters.";

  $txt1 = "Learn PHP";
  $x = 5;
  $y = 4;
  
  echo "<h1>" . $txt1 . "</h1>";
  echo $x + $y; 
?>

<?php
  print "<h1>Hello World!</h1>";

  $txt1 = "Learn PHP";
  $x = 5;
  $y = 4;
  
  print "<h1>" . $txt1 . "</h1>";
  print $x + $y;
?>

</body>
</html>