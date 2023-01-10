<?php
    session_start();
    
    //if user not logged in, redirect user to signin.php
    if(!isset($_SESSION["loggedin"])){
        header("location: signin.php");
        exit;
    }
?>

<?php require_once './header.php'; ?>

<h1>Customers</h1>

<p>Content for customers</p>

<?php require_once './footer.php'; ?>