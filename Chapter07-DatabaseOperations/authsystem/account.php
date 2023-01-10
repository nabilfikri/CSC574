<?php
    // session_start();

    // if user not logged in, redirect user to signin.php
    // if(!isset($_SESSION["loggedin"])){
    //     header("location: signin.php");
    //     exit;
    // }
?>

<?php require_once './header.php'; ?>

<h1>My Account</h1>

<p>Account Details:</p>

Name: <?php echo $_SESSION["fullname"] ?> <br><br>
Username: <?php echo $_SESSION["username"] ?>

<?php //TODO: retrieve user information from DB ?>

<?php require_once './footer.php'; ?>