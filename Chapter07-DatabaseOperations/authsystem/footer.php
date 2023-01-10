<p style="text-align: center">
    <?php if($_SESSION["loggedin"] == true) { ?>
        <small>You are logged in as <a href="account.php">(<?=$_SESSION["username"] ?>)</a></small>
    <?php } ?>
</p>

<div style="text-align: center">&copy; <?= date("Y") ?> Auth Demo Sdn. Bhd.</div>
</body>
</html>