<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Print Cover Letter
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
	<div class="box box-danger" style="width:50%">

<form  id="form1" name='cover_letter' method="POST"  action='coverprint.php'>
<div >
	<center><h3><strong>PRINT COVER LETTER</strong></h3></center><br><br>

  <div class="register-box-body">
     <div class="form-group has-feedback">
            <input type="text" name="roll" class="form-control" placeholder="Roll Number" required>
            
          </div>
   <br>
    <div class="form-group has-feedback">
            <input type="number" name="start_year" class="form-control" placeholder="Start Year(2006)" required>
            <span class="glyphicon glyphicon-number form-control-feedback"></span>
          </div>
   <br>
    <div class="form-group has-feedback">
            <input type="text" name="outward" class="form-control" placeholder="Transcript Outward" required>
            <span class="glyphicon glyphicon-number form-control-feedback"></span>
          </div>
   <br>
   
    <div class="form-group has-feedback">
            <input type="text" name="checkedby" class="form-control" placeholder="Mr. Ravi" required>
            <span class="glyphicon glyphicon-number form-control-feedback"></span>
          </div>
   <br>
   
   <div class="form-group has-feedback">
            <input type="text" name="verifiedby" class="form-control" placeholder="Mr. Vijay Patil" required>
            <span class="glyphicon glyphicon-number form-control-feedback"></span>
          </div>
   <br>
   
   
  <center>
   <button type="submit"  class="btn btn-danger"  name="cover">SUBMIT</button>
 </center>
  
</form>
</div>

     </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>