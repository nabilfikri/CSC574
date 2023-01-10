<?php 
    session_start();
    $_SESSION['delete-id'] = 'Super Car';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="delete-using-form.php" method="post">
        Are you sure to delete product line <?= $_SESSION['delete-id'] ?>? <br><br>
        <input type="submit" value="Yes">
        <input type="button" value="Cancel" onclick="history.back()">
    </form>
</body>
</html>