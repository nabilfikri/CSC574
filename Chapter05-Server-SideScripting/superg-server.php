<!DOCTYPE html>

<head>
    <title>Hello PHP!</title>
</head>
<body>
    <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
    ?>
</body>
</html>