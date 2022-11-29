<!DOCTYPE html>
<html>
<head>
    <title>Date Functions</title>
</head>
<body>

    <h1>Date Functions</h1>

    <h3>date()</h3>
    <!-- syntax: date(format,timestamp) -->
    <?php
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("d/m/Y") . "<br>";
        echo "Today is " . date("l") . "<br>";
        echo "The time is " . date("h:i:sa");
    ?>

    <h3>date_default_timezone_set()</h3>
    <?php
        date_default_timezone_set("Asia/Kuala_Lumpur");
        // date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa");
    ?>

    <h3>mktime()</h3>
    <!-- Syntax: mktime(hour, minute, second, month, day, year) -->
    <?php
        $d=mktime(11, 14, 54, 8, 12, 2026);
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>

    <h3>strtotime()</h3>
    <?php
        $d=strtotime("10:30pm April 15 2027");
        echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("tomorrow");
        echo "Tomorrow is " . date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("next Saturday");
        echo "Next saturday is " . date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("+3 Months");
        echo "Three months from now is " . date("Y-m-d h:i:sa", $d) . "<br>";
    ?>

</body>

</html>