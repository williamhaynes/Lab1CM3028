
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
    }
    // create a SQL query as a string
    $sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%l aser%' ";
    // execute the SQL query
    $result = $db->query($sql_query);
    // iterate over $resul t obj ect one $row at a time
    // use fetch_array() to return an associ ative array
    while($row = $result->fetch_array()){
     // print out fiel ds from row of data
     echo "<p>" . $row['superheroName' ] . "</p>";
    }
    $result->close();
     // close connection to database
     $db->close();

        ?>
</body>
</html>
