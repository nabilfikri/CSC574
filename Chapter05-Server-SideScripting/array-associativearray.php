<!DOCTYPE html>

<head>
    <title>PHP Arrays</title>
</head>
<body>

    <h1>PHP Arrays (Asscociative Array)</h1>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        // alternatively
        // $age['Peter'] = "35";
        // $age['Ben'] = "37";
        // $age['Joe'] = "43";

        echo "Peter is " . $age['Peter'] . " years old.";
    ?>

    <h3>Access using foreach</h3>
    <?php
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    ?>

</body>
</html>