<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_04_01
        Author: Eli Boblett
        Date: 09.26.18 
        ProcessScholarship2.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Scholarship 2</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Process Scholarship 2</h2>
    <?php
        $errorCount = 0;
        function displayRequired($fieldName) {
            echo "The field \"$fieldName\" is required!<br>\n";
        }
       
        function validateInput($data, $fieldName) {
            global $errorCount;
            if (empty($data)) {
                displayRequired($fieldName);
                ++$errorCount;
                $retval = "";
            }
            else {
                $retval = trim($data);
                $retval = stripslashes($retval);
                return $retval;
            }
        }

        function redisplayForm($firstName, $lastName) {
    ?>

        <h2 style="text-align: center">Scholarship Form 2</h2>
        <form name="scholarship" action="ProcessScholarship2.php" method="post">
        <p>First name: <input type="text" name="fName" value="<?php echo "$firstName"?>"></p>
        <p>Last name: <input type="text" name="lName" value="<?php echo "$lastName"?>"></p>
        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" value="Send Form">
        </p>
        </form>

    <?php
        }
        $firstName = validateInput($_POST['fName'], "First Name");
        $lastName = validateInput($_POST['lName'], "Last Name");
        if ($errorCount > 0) {
            echo "$errorCount error(s): Please re-enter the information below.<br>\n";
            redisplayForm($firstName, $lastName);
        }
        else {
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        }
    ?>
</body>
</html>