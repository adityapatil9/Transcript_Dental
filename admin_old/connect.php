<?php

	$hostname="localhost"; //hostname
	$username="root"; //username for database
	$password=""; //database password
	$dbname="transcript"; //database name
	
	@$connect = mysql_connect($hostname,$username,$password) or die("Error Connecting"); //make connection
	mysql_select_db($dbname); //select database
     
	//echo  "dfd";
?>

<?php
	/*$hostname="localhost"; //hostname
	$username="root"; //username for database
	$password=""; //database password
	$dbname="transcript"; //database name
	
	@$connect = mysql_connect($hostname,$username,$password) or die("Error Connecting"); //make connection
	mysql_select_db($dbname); //select database*/

?>