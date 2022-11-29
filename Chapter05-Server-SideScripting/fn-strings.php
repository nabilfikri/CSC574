<!DOCTYPE html>
<html>
<head>
    <title>Pre-defined Function - Strings</title>
</head>
<body>

    <h1>Pre-defined Function - Strings</h1>
    
    <h3>strlen()</h3>
    <?php
        echo strlen("Hello world!"); // outputs 12
    ?>

    <h3>str_word_count()</h3>
    <?php
        echo str_word_count("Hello world!"); // outputs 2
    ?>

    <h3>strpos()</h3>
    <?php
        echo strpos("Hello world!", "world"); // outputs 6
    ?>

    <h3>str_replace</h3>
    <?php
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
    ?>

</body>

</html>