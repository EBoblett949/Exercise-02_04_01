<!doctype html>
<html>
<head>
    <!-- 
        Project 02_04_02
        Author: Eli Boblett
        Date: 10.03.18 
        Paycheck.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
    // these are the variables for time worked and wages, as well as overtime and overtime wage
        $hrWork = $_POST['hrWork'];
        $wage = $_POST['wage'];
        $overtimeWage = ($wage / 2);
        $overtime = ($hrWork - 40);

        // this if checks for letters in the text fields and tells the user to resubmit if it contains letters
            if(preg_match("/[a-z]/i", $hrWork) || preg_match("/[a-z]/i", $wage)){
                echo "Please enter a number for both fields<br>";
                echo "You can get back to the form <a href=\"Paycheck.html\">here</a>.";
            }
            // else there are no letters in the field
            else {
                // if overtime it adds the overtime pay to the normal pay
                if ($hrWork > 40) {
                    echo "The workers pay should be: $" . number_format((($hrWork * $wage) + ($overtime * $overtimeWage)), 2) . "<br>";
                    echo "You can check another paycheck <a href=\"Paycheck.html\">here</a>.";
                }
                // else it calculates the regular pay
                else {
                    echo "The workers pay should be: $" . number_format(($hrWork * $wage), 2) . "<br>";
                    echo "You can check another paycheck <a href=\"Paycheck.html\">here</a>.";
                }
            }
    ?>
</body>
</html>