<?php 
    session_start();
    $_SESSION['update-id'] = 'Super Car';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    Update for Product Line: <?= $_SESSION['update-id'] ?> <br><br>
    <form action="update-using-form.php" method="post">
        New Product Line Name: <br> <input type="text" name="prodLine"> <br><br>
        Description: <br> <textarea name="desc" cols="20" rows="3"></textarea> <br> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>