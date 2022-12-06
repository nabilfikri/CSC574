<!DOCTYPE HTML>  
<html>
<head></head>
<body>
    <?php 
        if($_GET['answer'] == 'yes'){
            header("Location: ./redirect-yes.php");
            exit;
        }
        else if($_GET['answer'] == 'no'){
            header("Location: ./redirect-no.php");
            exit;
        }
    ?>
</body>
</html>