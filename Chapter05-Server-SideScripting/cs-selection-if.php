<!DOCTYPE html>
<html>
<head>
    <title>Selection Control Structure</title>
</head>
<body>

    <h1>Selection Control Structure (if)</h1>

    <?php
        $time = 15;

        if ($time < 10) {
            $greeting = "Good morning";
        } 
        elseif ($time < 20) {
            $greeting = "Good day";
        } 
        else {
            $greeting = "Good evening";
        }
        echo "<p>" . $greeting . "</p>";
    ?>

</body>

</html>