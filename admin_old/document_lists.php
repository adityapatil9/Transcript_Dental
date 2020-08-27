<?php
	include('header_admin.php');
	//include('maksheet.php');
	
	//include('document_result.php');
	if(!isset($_POST['roll']))
	{
		echo "<script> alert('Invalid Roll Number of student.. '); </script>";
		//header("Location : search.php");
		echo "<script type='text/javascript'>window.location.href = 'verify.php';</script>";
	}
	
	else
	{
		$roll1 = $_POST['roll'];
		$_SESSION['roll']=$_POST['roll'];
		//setcookie("roll",$roll1, time()+86400);
	}
?>
<form action = "marksheet.php" method = "POST">
	<div class = "form-group">
		<center> <input type="submit" class="button" value="Entered Marks" onclick = "marksheet.php"></input></center><br>
	</div>
</form>
<form action = "document_result.php" method = "POST">
	<div class = "form-group">
		<center> <input type="submit" class="button" value="Uploaded Documents" onclick = "document_result.php"></input></center><br>
	</div>
</form>
