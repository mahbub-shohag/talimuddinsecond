<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$database="wwwuddin_db";
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password);
mysql_select_db($database) or die( "Unable to select database");
?>