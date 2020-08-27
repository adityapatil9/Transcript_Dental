<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Profile</title>
</head>
<?php
include 'header.php';
?>
<body>
	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
Edit Student Details
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>
<form  class="form-horizontal" action="checkrollno.php" method="post" name="student_edit" >
                   
				   <div class="form-group">
				   <label class="control-label col-sm-4">ROLL&nbsp;&nbsp;NO :</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="rollno" />
					
					</div>
                    </div>
                <br>
					<center>
					<button type="submit" class='btn btn-danger' name="edit_profile" value="submit">submit</button><br><br></body>
</html>