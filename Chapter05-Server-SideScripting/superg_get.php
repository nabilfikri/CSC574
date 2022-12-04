<!DOCTYPE html>

<head>
    <title>GET Request Demo</title>
</head>
<body>
    <h4>Pass data thru link (Query String)</h4>
    <p><a href="superg_get_process.php?firstname=Nabil&lastname=Fikri">Send GET Request</a></p>

    <h4>Pass data using HTML form (GET)</h4>
    <form action="superg_get_process.php" method="get">
        First Name: <input type="text" name="firstname"> <br><br>
        Last Name: <input type="text" name="lastname"> <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>