<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_04_01
        Author: Eli Boblett
        Date: 09.26.18 
        NumberForm.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Form</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Number Form</h2>
    <?php
        $displayForm = true;
        $number = "";
        // tells if a user has submitted the form before
        if (isset($_POST['submit'])) {
            $number = $_POST['number'];
            if (is_numeric($number)) {
                $displayForm = false;
            }
            else {
                echo "<p>You need to enter a numeric value.</p>\n";
                $displayForm = true;
            }
        }
        if ($displayForm) {
    ?>
            <form name="numberForm" action="NumberForm.php" method="post">
                <p>
                    Enter a number: <input type="text" name="number" value="<?php echo "$number"; ?>">
                </p>
                <p>
                    <input type="reset" value="Clear Form">&nbsp;&nbsp;
                    <input type="submit" name="submit" value="Send Form">
                </p>
            </form>
    <?php
        }
        else {
            echo "<p>Thank you for entering a number.</p>\n";
            echo "<p> Your number, $number, squared is " . ($number * $number) . ".</p>\n";
            echo "<p><a href=\"NumberForm.php\">Try Again?<a></p>\n";
        }
    ?>
</body>
</html>