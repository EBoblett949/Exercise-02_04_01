<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_04_01
        Author: Eli Boblett
        Date: 09.26.18 
        Superglobals.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Superglobals</h2>
    <?php
        echo "<h3>Superglobal Array \$_SERVER[]</h3>";
        echo "<p>The name of the current script is:" , $_SERVER["SCRIPT_NAME"] , "</p><br>";
        echo "<p>This script was executed with the following server software: " , $_SERVER["SERVER_SOFTWARE"] , "</p><br>";
        echo "<p>This script was requested with the following server protocol: " , $_SERVER["SERVER_PROTOCOL"] , "</p><br>";
        echo "<p>This script was running on the following server name: " , $_SERVER["SERVER_NAME"] , "</p><br>";
        echo "<p>This script was running on the following server address: " , $_SERVER["SERVER_ADDR"] , "</p><br>";
        echo "<p>This script was running with the following gateway interface: " , $_SERVER["GATEWAY_INTERFACE"] , "</p><br>";
        echo "<p>This script was running with the following request method: " , $_SERVER["REQUEST_METHOD"] , "</p><br>";
    ?>
</body>
</html>