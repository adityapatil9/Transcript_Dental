<?php
session_START();
include '../connect.php';
$roll=$_SESSION['roll'];
$sqlstatus="update current_status set `status`=1 where `roll`='$roll'";
	
	$qury=mysqli_query($connect,$sqlstatus);
		if(!$qury)
 	 	{	 
   				echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		
		else
  		{
				echo "Successful";	
				header('Location:doc_zip.php');
				//echo "<script></script>"
		}
		
?>