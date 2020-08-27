<?php
	$connect = mysqli_connect("localhost","root","","transcript");
	$id = $_POST["id"];  
 	$text = $_POST["text"];  
 	$column_name = $_POST["column_name"];
	$sql = "UPDATE course_table SET ".$column_name."='".$text."' WHERE srno='".$id."'";// changes subject to srno
	$result = mysqli_query($connect,$sql);
	if(mysqli_query($connect, $sql))  
	{  
    	 echo 'Data Updated'; 
    	 echo  $id." ".$text." ".$column_name;
 	}  
?>