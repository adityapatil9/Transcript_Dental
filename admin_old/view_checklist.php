<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Uploaded Documents Checklist</title>
</head>

<body>



<?php

include ('header_admin.php');

if(!isset($_SESSION['roll']))
{
	if(isset($_POST['checklist']))
	$roll = $_POST['roll'];
}
else
	$roll = $_SESSION['roll'];

$_SESSION['roll'] = $roll;
$status_array = array('Not Filled', 'Pending for Verification', 'Verified');
$sql_status = "SELECT * FROM current_status WHERE roll='$roll'";
$res_status = mysql_query($sql_status);
$row_status = mysql_fetch_array($res_status);

if(mysql_num_rows($res_status) < 1)
{
	echo "<script>alert('NO SUCH APPLICATION FOUND');</script>";
	echo "<script>
			window.location = 'check_docs.php';
		</script>";
}
else
{
echo "<br> APPLICATION STATUS ->".$status_array[$row_status['status']];


$sql = "SELECT * FROM student_documents WHERE roll = '$roll'";
//echo $sql;
$res = mysql_query($sql);
$row = mysql_fetch_array($res);


//Number of documents = 9 + 1 roll no; so total 10 columns
$cols = 12;

$fields[] = array();

for($i=0; $i<$cols; $i++)
{
		$fields[$i] = mysql_field_name($res, $i);
}
?>
<form action="" method="POST">
<center><div class="table-responsive col-md-10 col-md-offset-1" >
<table  class="table">

0
<?php
for($i=0; $i<$cols; $i++)
{
	echo
	"<tr>
		<td>";
			echo $fields[$i];
	echo"
		</td>
		
		<td>";
			if($row[$i]==NULL || $row[$i]=='')
			{	
				echo "Document not found";
				echo "<input type='checkbox' name='chkbox_".$i."' >".$row[$i];
			}
			else if($i == 0)
				echo $roll;
			else if($i != 0)
				echo "<input type='checkbox' name='chkbox_".$i."' >".$row[$i];
	echo"
		</td>
	</tr>";

}

echo "</table><br><br></div>";

echo "<input type='submit' class='button' value='SEND NOTIFICATION TO STUDENT' name='send_email'>";
echo "</form><center>";

}// END OF ELSE

?>


<?php

if(isset($_POST['send_email']))
{
	$arr = array();
	$flag = TRUE;

	for($i=1; $i<$cols; $i++)
	{
		$string = 'chkbox_'.$i;
		if(!isset($_POST[$string]))
		{
			$arr[] = $i;
			$flag = FALSE;
		}
	}
	
	$sql = "SELECT * FROM student WHERE roll='$roll'";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	
	$to = $row['email_id'];
	$headers = 'From: eattendance2015@gmail.com' . "\r\n" .
    'Reply-To: eattendance2015@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	if($flag)
	{
		$subject = "Document Verification Successful";
		$sql = "UPDATE `current_status` SET `status`=2 WHERE roll='$roll'";
		mysql_query($sql);
		$message = "All the submitted documents have been verified successfully. Your transcript will be E-Mailed to you shortly.";
	}
	else	
	{
		$subject = "Document Verification Unsuccessful";
		$sql = "UPDATE `current_status` SET `status`=0 WHERE roll='$roll'";
		mysql_query($sql);
		$message = "The following documents have been rejected. Please try uploading again.\n";
		for($i=0; $i<sizeof($arr); $i++)
		$message.=$fields[$arr[$i]];
		$message."\n\n";
	}
	
	
	if(mail($to, $subject, $message, $headers))
		echo "<script> alert('MAIL SENT SUCCESSFULLY'); </script>";
	else
		echo "<script> alert('MAIL NOT SENT.. PLEASE TRY AGAIN'); </script>";
	
	

	unset($_SESSION['roll']);
	
	echo "<script>
    window.location = 'check_docs.php';
</script>";
}



?>
</body>
</html>

