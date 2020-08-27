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


if(isset($_SESSION['roll']))
	unset($_SESSION['roll']);


	echo '
<form class="form-horizontal"id="form1" name="check_docs" method="POST" width="50%" action="view_checklist.php">
<div class="form-group">
	<center><h3><strong>Enter Roll Number for Verification</strong></h3></center><hr>
 
  
     <input type="text" class="form-control" name="roll" placeholder="13CE0000" style="width:50%" required>

  </div>
  
  <center>
   <button type="submit"  class="btn btn-danger  style="width:50%" name="checklist" >SUBMIT</button>
 </center>
  
</form><br>
 ';

$sql ="SELECT * FROM current_status WHERE status=1";
$res =mysqli_query($connect,$sql);
if(mysqli_num_rows($res) == 0)
{
	echo '<center><h3>NO PENDING REQUESTS</h3></center>';
}
else
{
	echo "<center> <h3>PENDING REQUESTS</h3>";
	while($row = mysqli_fetch_array($res))
	{
		echo $row['roll'].'<br>';
	}
	echo "</center>";
}
?><br>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     <div>

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>