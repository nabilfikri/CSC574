<!DOCTYPE html>

<?php
    $cookie_name = "matricno";
?>

<html>
<head>
    <title>Cookies Demo</title>
</head>
<body>

    <h1>Navigation Menu</h1>
    <ul>
        <li><a href="cookie-set.php">Set Cookies Page</a></li>
        <li><a href="cookie-first.php">First Page</a></li>
        <li><a href="cookie-second.php">Second Page</a></li>
        <li><a href="cookie-third.php">Third Page</a></li>
        <li><a href="cookie-delete.php">Delete Cookies Page</a></li>
    </ul>

    <h1>Session Tracking with PHP Cookies</h1>

    <h3>First Page</h3>

    <?php
        $cookie_name = "matricno";

        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>

</body>
</html>