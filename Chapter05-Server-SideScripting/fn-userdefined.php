<!DOCTYPE html>
<html>
<head>
    <title>User-defined Function</title>
</head>
<body>

    <h1>User-defined Function</h1>
    <p><?php welcomeMsg(); ?></p>
    <p><?php echo greet('Ahmad'); ?></p>
    <p><?php echo printDetails("2029243123", "CS251"); ?></p>
    <p><?php echo greet2(); ?></p>


    <?php 
        function welcomeMsg() {
            echo "Welcome to user-defined function.";
        }

        function greet($name) {
            $str = "Happy Holiday $name!";
            return $str;
        }

        function printDetails($matricno, $program) {
            $str = "Your matric no: $matricno<br>";
            $str .= "Program Code: $program";
            return $str;
        }

        // function with Default Argument Value
        function greet2($name="Guest") {
            $str = "Happy Holiday $name!";
            return $str;
        }
        
    ?>

</body>

</html>