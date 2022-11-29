<!DOCTYPE html>
<html>
<head>
    <title>Pre-defined Function - Numbers</title>
</head>
<body>

    <h1>Pre-defined Function - Numbers</h1>

    <h3>is_int()</h3>
    <?php
        $x = 5985;
        var_dump(is_int($x));

        $x = 59.85;
        var_dump(is_int($x));
    ?>

    <h3>is_int()</h3>
    <?php
        $x = 5985;
        var_dump(is_int($x));
        echo "<br>";
        $x = 59.85;
        var_dump(is_int($x));
    ?>

    <h3>is_float()</h3>
    <?php
        $x = 10.365;
        var_dump(is_float($x));
    ?>

    <h3>is_nan()</h3>
    <?php 
        $x = acos(8);
        var_dump(is_nan($x));
    ?>

    <h3>is_numeric()</h3>
    <?php
        $x = 5985;
        var_dump(is_numeric($x));        
    ?>

</body>

</html>