<!DOCTYPE html>

<head>
    <title>PHP Arrays</title>
</head>
<body>

    <h1>PHP Arrays</h1>
    <?php
        $cars = array("Proton", "Perodua", "Toyota");

        // Alternatively:
        // $cars[0] = "Proton";
        // $cars[1] = "Perodua";
        // $cars[2] = "Toyoya";

        $arrlength = count($cars);

        for($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
    ?>

</body>
</html>