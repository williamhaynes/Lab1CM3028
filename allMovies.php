
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: hype_
 * Date: 10/10/2016
 * Time: 14:47
 */
    // connect to server and sel ect database
    $db = new mysqli(
    "us-cdbr-azure-southcentral-f.cloudapp.net",
    "b21eaed643e4cb",
    "4756773b",
    "wjh0001db");
    // test if connection was established, and print any errors
    if($db->connect_errno){
    die("Connectfailed['.$db->connect_error.']");
    };

    $sql_query = "SELECT * FROM marvelmovies";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        echo"<p>" . $row['title'] . "</p>";
    }
    $result->close();
    $db->close();

        ?>
</body>
</html>
