<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
  <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="customers.php">Customers</a></li>
      <?php //only display this menu if user is logged in 
            if($_SESSION["loggedin"] == true) { ?>
              <li><a href="account.php">My Account</a></li>
      <?php } ?>
      <li><a href="about.php">About Us</a></li>
      <?php if($_SESSION["loggedin"] == true) { ?>
              <li style="float:right"><a href="./signout.php">Sign Out</a></li>
      <?php } 
            else { ?>
              <li style="float:right"><a href="./signin.php">Sign In</a></li>
      <?php } ?>
  </ul>

  <?php
    echo '<p>' . $_SESSION["message"] . '</p>';
    $_SESSION["message"] = null;
  ?>
