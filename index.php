<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PDO Practice 2</title>
</head>
<body>
    <?php
        include "config.php";
        include "connect.php";

        if($QUERY_METHOD=="PDO"){
            include "pdo_query.php";
        }
        if($QUERY_METHOD=="MySQLi"){
            include "MySQLi_query.php";
            //echo "The default request is MySQLi";
        }   
    ?>
</body>
</html>