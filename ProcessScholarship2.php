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

        $firstName = validateInput($_POST['fName'], "First Name");
        $lastName = validateInput($_POST['lName'], "Last Name");
        if ($errorCount > 0) {
            echo "$errorCount error(s): Please use the \"Back\" button to re-enter the data.<br>\n";
        }
        else {
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        }
    ?>
</body>
</html>