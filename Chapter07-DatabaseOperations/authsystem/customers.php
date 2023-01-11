<?php require_once './header.php'; ?>

<?php
    //if user not logged in, redirect user to signin.php
    if(!isset($_SESSION["loggedin"])){
        header("location: signin.php");
        exit;
    }
?>

<h1>Customers</h1>

<p>Content for customers</p>

<?php require_once './footer.php'; ?>