<?php

session_start();
$roll=$_POST['roll'];

$url = "C:\\xampp\htdocs\\transcript";

//CAN COMMENT OUT BELOW

	$hostname="localhost"; //hostname
	$username="root"; //username for database
	$password=""; //database password
	$dbname="transcript"; //database name
	//$dbnamerev="transcriptrev";
	$connect=mysqli_connect($hostname,$username,$password,$dbname);
$sql = "SELECT  status FROM current_status WHERE roll='$roll'";// takes current status from DB
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($result);
$num_rows = mysqli_num_rows($result);
if($num_rows==0)
{echo "<script language='javascript'>alert('Roll no not found');</script>";
header("refresh:0 ;url=adminEdit_status1.php"); 
	
}
else
{
$_SESSION['roll']=$roll;
header("refresh:0; url=current_status.php");
}
?>