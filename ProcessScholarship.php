<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_04_01
        Author: Eli Boblett
        Date: 09.26.18 
        ProcessScholarship.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Scholarship</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Process Scholarship</h2>
    <?php
       $firstName = stripcslashes($_POST['fName']);
       $lastName = stripcslashes($_POST['lName']);
       echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
    ?>
</body>
</html>