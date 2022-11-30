<!DOCTYPE html>

<head>
    <title>Ternary and Null coalescing</title>
</head>
<body>

    <h1>Ternary and Null Coalescing</h1>

    <?php
        $number = 10;
        $result = ($number > 0) ? "Positive Number" : "Negative Number";
        echo $result;

        echo "<br>";

        $string = "This is my string";
        $result = $string ?? "Default value";
        echo $result;
    ?>


</body>
</html>