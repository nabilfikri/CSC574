<!DOCTYPE html>

<?php session_start(); ?>

<html>
<head>
    <title>Sessions Demo</title>
</head>
<body>

    <h1>Navigation Menu</h1>
    <ul>
        <li><a href="session-set.php">Set Session Page</a></li>
        <li><a href="session-modify.php">Modify Session Page</a></li>
        <li><a href="session-first.php">First Page</a></li>
        <li><a href="session-second.php">Second Page</a></li>
        <li><a href="session-third.php">Third Page</a></li>
        <li><a href="session-unset.php">Unset Session Page</a></li>
        <li><a href="session-destroy.php">Destroy Session Page</a></li>
    </ul>

    <h1>Session Tracking with PHP Sessions</h1>

    <h3>Third Page</h3>

    <p><b>Session id:</b> <?php echo session_id(); ?> </p>

    <?php
        if(isset($_SESSION["userId"])) {
            echo "Userd ID: " . $_SESSION["userId"] . "<br>"
                    . "Status: " . $_SESSION["status"] . "<br>";
        }
        else {
            echo "Session is not set.<br>";
        }
        // print_r($_SESSION);
    ?>

</body>
</html>