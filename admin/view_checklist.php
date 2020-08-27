<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Verify Uploaded Documents
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		<div class = "box box-danger" style="width:50%"><center>

<?php


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
$res_status = mysqli_query($connect, $sql_status);
$row_status = mysqli_fetch_array($res_status);
///echo $sql_status;
if(mysqli_num_rows($res_status) < 1)
{
	echo "<script>alert('NO SUCH APPLICATION FOUND');</script>";
	/*
	echo "<script>
			window.location = 'check_docs.php';
		</script>";/
	*/
}
else
{
//echo "<br> APPLICATION STATUS ->".$status_array[$row_status['status']];


$sql = "SELECT * FROM student_documents WHERE roll = '$roll'";
//echo $sql;
$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);


//Number of documents = 9 + 1 roll no; so total 10 columns
$cols = 12;

$fields[] = array();

for($i=0; $i<$cols; $i++)
{
		$fields[$i] = mysqli_fetch_field_direct($res, $i)->name;
}
?>
<form action="" method="POST">
<center><div class="table-responsive col-md-10 col-md-offset-1" >
<table  class="table">


<?php
for($i=0; $i<$cols; $i++)
{
	echo
	"<tr>
		<td>";
			echo strtoupper($fields[$i]);
	echo"
		</td>
		
		<td>";
			if($row[$i]==NULL || $row[$i]=='')
			{	
				echo "<input type='checkbox' name='chkbox_".$i."' >".$row[$i];
				echo "        Document not found";
			}
			else if($i == 0)
				echo strtoupper($roll);
			else if($i != 0)
				echo "<input type='checkbox' name='chkbox_".$i."' >        ".$row[$i];
	echo"
	         
		</td>
	</tr>";

}

echo "<tr><td colspan='2'>Reason for rejection <br> <center><textarea name='txtmsg' rows='3' cols='80' id='txtmsg'>  </textarea></td></center></tr>";
echo "</table></div>";

echo "<input type='submit' class='btn btn-danger' value='VERIFY AND SEND NOTIFICATION TO STUDENT' name='send_email'><br><br>";
echo "</form><center>";

}// END OF ELSE

?>


<?php
//$str=$_POST['txtmsg'];
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
	$res = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($res);
	
	$to = $row['email_id'];
	$headers = 'From: eattendance2015@gmail.com' . "\r\n" .
    'Reply-To: eattendance2015@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	if($flag)
	{   
		$subject = "Document Verification Successful";
		$sql = "UPDATE `current_status` SET `status`=2 WHERE roll='$roll'";
		mysqli_query($connect, $sql);
		$message = "All the submitted documents have been verified successfully. Your transcript will be E-Mailed to you shortly.";
	}
	else	
	{
	
		$subject = "Document Verification Unsuccessful";
		$sql = "UPDATE `current_status` SET `status`=0 WHERE roll='$roll'";
		mysqli_query($connect, $sql);
		$message = "The following documents have been rejected. Please try uploading again.\n ";
		for($i=0; $i<sizeof($arr); $i++)
		$message.="\n".strtoupper($fields[$arr[$i]]);
		$message."\n\n RAIT Transcript";
		$message.= "\n\nReason for rejection -> ".$_POST['txtmsg'];
	}
	
	
	if(mail($to, $subject, $message, $headers))
		echo "<script> alert('MAIL SENT SUCCESSFULLY'); </script>";
	else
		echo "<script> alert('MAIL NOT SENT.. PLEASE TRY AGAIN'); </script>";
	
	

	unset($_SESSION['roll']);
	
	echo "<script>
    window.location = 'index.php';
</script>";
}



?>
    </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     <div>

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>