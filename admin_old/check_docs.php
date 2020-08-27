<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Check Uploaded Documents</title>
</head>

<body>
<?php

include ('header_admin.php');
if(isset($_SESSION['roll']))
	unset($_SESSION['roll']);


	echo '<div class="container">
<form class="form-horizontal"id="form1" name="check_docs" method="POST" width="50%" action="view_checklist.php">
<div class="form-group">
	<center><h3><strong>CHECK UPLOADED DOCUMENTS</strong></h3></center><br><br>
  <label class="control-label col-sm-4" >ENTER ROLL NUMBER OF THE STUDENT : </label>
  <div class="col-sm-6">
     <input type="text" class="form-control" name="roll" placeholder="13CE1067" required minlength=8 maxlength=8>
   </div>
  </div>
  <br><br>
  <center>
   <button type="submit" style="margin-left:12%" class="button"  name="checklist" >SUBMIT</button>
 </center>
  
</form><br><br>
</div> ';

$sql ="SELECT * FROM current_status WHERE status=1";
$res =mysql_query($sql);
if(mysql_num_rows($res) == 0)
{
	echo '<center><h3>NO PENDING REQUESTS</h3></center>';
}
else
{
	echo "<center> <h3>PENDING REQUESTS</h3><br>";
	while($row = mysql_fetch_array($res))
	{
		echo $row['roll'].'<br>';
	}
	echo "</center>";
}
?>
</body>
</html>