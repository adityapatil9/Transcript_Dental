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
	<form action='check.php' method="POST">
	<br/>
	
<div class="form-group">
  <label for="roll">Enter roll number:</label>
  <input type="text" name="roll"> 
 
  <br>
  <br>
  
 </div>
  	<center><input  type="submit" value="Submit" class="class="btn btn-danger""></center>
	</form>
	



</section><!-- /.content -->
      </div><!-- /.content-wrapper -->

 <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</body>
</html>