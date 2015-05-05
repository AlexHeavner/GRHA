<?php

//ENTER YOUR DATABASE CONNECTION INFO BELOW:
$hostname="198.71.225.60:3306";
$database="GHRA";
$username="ghra";
$password="cathyliu!";

//Connection to database
$db_server = mysql_connect($hostname, $username, $password);
if(!$db_server) die("Unable to connect to MySQL: " .mysql_error());

mysql_select_db($database) or die("Unable to select database: ".mysql_error());

?>