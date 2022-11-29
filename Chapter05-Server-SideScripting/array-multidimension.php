<!DOCTYPE html>

<head>
    <title>PHP Arrays (multi-dimension)</title>
</head>
<body>

    <h1>PHP Arrays (multi-dimension)</h1>

    <?php
        $cars = array (
            array("Proton",22,18),
            array("Perodua",15,13),
            array("Toyota",5,2),
            array("Honda",17,15)
          );
    ?>

    <h3>Access using index</h3>
    <?php
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    ?>
    
    <h3>Access Using Looping Structure</h3>
    <?php
        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
              echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
        }

    ?>

</body>
</html>