<?php

include('templates/_header.php');

// Connect to database server
mysql_connect("localhost", "user", "sesame") or die (mysql_error ());

// Select database
mysql_select_db("mydatabase") or die(mysql_error());

// SQL query
$strSQL = "SELECT * FROM people";

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);

// Loop the recordset $rs
// Each row will be made into an array ($row) using mysql_fetch_array
while($row = mysql_fetch_array($rs)) {

    // Write the value of the column FirstName (which is now in the array $row)
    echo $row['FirstName'] . "<br />";

}


include('templates/_footer.php');

?>