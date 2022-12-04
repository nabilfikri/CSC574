<html>

<head>
    <title>POST Request Demo</title>
</head>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Full Name: <input type="text" name="fname"> <br>
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>

</body>
</html>