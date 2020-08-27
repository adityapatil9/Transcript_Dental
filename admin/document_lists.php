<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Received Requests
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<?php
	echo '<div class="box box-danger" style="width:50%">';
	echo '<center><br><h1>Download Received Documents</h1></center><br>';
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
		$sql_is_rev = "SELECT * FROM student WHERE roll='$roll1'";
		$is_rev = mysqli_fetch_array(mysqli_query($connect, $sql_is_rev))['pattern'];
		if($is_rev == 'REV2012')
			$string = "marksheet_rev.php";
		else
			$string = "marksheet.php";
	}

	echo "<center>Roll Number : ".strtoupper($roll1).'</center>';
	?>
<hr>
<form action = '<?php echo $string;?>' method = "POST">
	<div class = "form-group">
		<center> <input type="submit" class="btn btn-danger" style="width:20%" value="Entered Marks" onclick = "marksheet.php"></input></center><br>
	</div>
</form>
<form action = "document_result.php" method = "POST">
	<div class = "form-group">
		<center> <input type="submit" class="btn btn-danger"  value="Uploaded Documents" onclick = "document_result.php"></input></center><br>
	</div>
</form>


   </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>