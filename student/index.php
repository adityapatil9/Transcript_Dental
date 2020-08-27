<?php
include 'header.php';
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Student Home
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

         
		 
		 <?php
		$roll=$_SESSION['roll'];
		$sql="select * from current_status where `roll`='$roll'";
		$res=mysqli_query($connect,$sql);
		while($row=mysqli_fetch_array($res))
		{
			//echo $row[1];
			if ($row[1]==0)
		{
			echo '<div class="box box-danger" style="width:50%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Application Status</h3></center>
    <!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <center>Filling in Details</center>
  </div></div>';
		}
		 else if ($row[1]==1)
		{
			echo '<div class="box box-danger" style="width:50%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Application Status</h3></center>
    <!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <center>Pending Verification</center>
  </div></div>';
		}
		else if ($row[1]==2)
		{
			echo '<div class="box box-danger" style="width:50%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Application Status</h3></center>
    <!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <center>Verification Done</center>
  </div></div>';
		}
		else 
		{
			echo '<div class="box box-danger" style="padding:2%;margin-top:10%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Application Status</h3></center>
    <!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <center>Transcript Generated : Check your email!</center>
   <BR>
   <center>Downloading certificate is mandatory for Validation of Digital Signature.</center>
  </div></div>';
			echo "<center><a href=' http://103.101.233.162:81/transcript/Documents/Transcript/Verified/$roll/transcript.pdf'>Download Transcript</a>";
			echo "<br><br><a href=' http://103.101.233.162:81/transcript/Documents/Transcript/Verified/$roll/coverletter.pdf'>Download CoverLetter</a>";
			echo "<br><br><a href=' http://103.101.233.162:81/transcript/Documents/Transcript/Verified/certificate_principal.cer'>Download Certificate</a></center>";
		}
		}
		 ?>
		 
		 
		 
		 
		 

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>
