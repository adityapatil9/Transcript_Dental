<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Upload Digitally Signed Documents
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<?php


if(isset($_SESSION['roll']))
	unset($_SESSION['roll']);



		echo '<div class="box box-danger" style="width:50%">
<form id="form1" name="check_docs" method="POST" width="100%" action="readyup.php">
  <div class="register-box-body">
	<center><h3><strong>UPLOAD DOCUMENTS</strong></h3></center><br><br>
  <div class="form-group has-feedback">
            <input type="text" name="roll" class="form-control" placeholder="Roll Number" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
   <br>
  </div>
  
  <center>
   <button type="submit"  class="btn btn-danger"  name="checklist" >SUBMIT</button>
 </center>
  
</form><br><br>
 ';


$sql ="SELECT * FROM current_status WHERE status=2 ";
$res =mysqli_query($connect,$sql);
if(mysqli_num_rows($res) == 0)
{
	echo '<center><h3>NO PENDING REQUESTS</h3><br></center>';
}
else
{
	echo "<center> <h3>PENDING REQUESTS</h3><br>";
	while($row = mysqli_fetch_array($res))
	{
		echo $row['roll'].'<br>';
	}
	echo "</center>";
}


?></div>
      </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>