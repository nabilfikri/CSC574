<!DOCTYPE html>
<html>
<head>
    <title>Selection Control Structure (switch)</title>
</head>

<body>
    <h1>Selection Control Structure (switch)</h1>

    <?php
        $favcolor = "green";

        switch ($favcolor) {
          case "red":
            echo "Your favorite color is red!";
            break;
          case "blue":
            echo "Your favorite color is blue!";
            break;
          case "green":
            echo "Your favorite color is green!";
            break;
          default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
    ?>

</body>

</html>