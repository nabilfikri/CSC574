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
            if(isset($_SESSION["loggedin"]) == true) {
              if($_SESSION["loggedin"] = "yes") {?> 
                <li><a href="account.php">My Account</a></li>
      <?php 
              }
            } ?>
      <li><a href="about.php">About Us</a></li>
      <?php if(isset($_SESSION["loggedin"]) == true) {
              if($_SESSION["loggedin"] == "yes") { ?>
                <li style="float:right"><a href="./signout.php">Sign Out</a></li>
      <?php   }
            } 
            else { ?>
              <li style="float:right"><a href="./signin.php">Sign In</a></li>
      <?php } ?>
  </ul>

  <!-- <?php echo var_dump($_SESSION); ?> -->

  <?php
    if(isset($_SESSION["message"]) == true) {
      echo '<p>' . $_SESSION["message"] . '</p>';
      unset($_SESSION["message"]);
    }
  ?>

