<!DOCTYPE html>
<html>
<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Live Edit
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<head>
	<style>

	form { 
		margin: 0 auto; 
		width:250px;
	}
	p{
		text-align: center;
	}
	</style>
	<title>Edit</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/jquery-2.2.3.min.js"></script>

</head>
<body>
<br/>
<div class="box box-danger" style="width:100%">

      
	  <center> <div ><h2> Edit status </h2></div><hr>
	  
	  
	   <div><h3>Current status<h3>
	   <?php
	   $connect = mysqli_connect("localhost","root","","transcript");
	$roll = $_SESSION["roll"];  
	$sql = "SELECT  status FROM current_status WHERE roll='$roll'";// takes current status from DB
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($result);
$num_rows = mysqli_num_rows($result);
if($num_rows==0)
{
	header("Location: adminEdit_status1.php"); 
}
else{
	if(mysqli_query($connect, $sql))  
	{ 
     if($row["status"]==0)
		{echo"FILLING";}
	 if($row["status"]==1)
		{echo"PENDING";}
	 if($row["status"]==2)
		{echo"VERIFIED";}
	 if($row["status"]==3)
		{echo"TRANSCRIPT SENT";}
 	}  }
	  ?>
	  </div>
	<form action='edit_status.php' method="POST">
	
	
<div class="form-group">

  <label for="status">Select status:</label>
  <select  name="status" class="form-control">
  <option value="">--status--</option>
  <option value="0">FILL</option>
  <option value="1">PENDING</option>
  <option value="2">VERIFIED</option>
  <option value="3">MAIL SENT</option>
   </select>
 </div>
  <input type="hidden" name="roll" value=<?php echo $_SESSION["roll"]?>>
  	<center><input  type="submit" value="Submit" class="class="btn btn-danger""></center><br>
	</form>
	



</section><!-- /.content -->
      </div><!-- /.content-wrapper -->

 <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</body>
</html>