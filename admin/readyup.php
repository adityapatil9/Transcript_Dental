<?php
include 'header.php';
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Upload Documents
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<div class="box box-danger ">
         

  
<?php
 
  $_SESSION['roll'] = $_POST['roll'];?>
 
  <form method='post' enctype='multipart/form-data' action='upload.php'>
  <center>
  <h1>Upload Files</h1><br>
   <?php echo '<center>Roll : '.$_POST['roll'].'</center><br>';?>
   <table class="table" style="text-align:center">
   <col style="width:50%" span="2" />
 <!--<tr> <td> Semester 1</td><td><input type='file' name='sem1'></td> </tr> 
	<tr> <td>Semester 2</td><td><input type='file' name='sem2'></td> </tr> 
	<tr> <td>Semester 3</td><td><input type='file' name='sem3'></td> </tr> 
	<tr> <td>Semester 4</td><td><input type='file' name='sem4'></td> </tr> 
	<tr> <td>Semester 5</td><td><input type='file' name='sem5'></td> </tr> 
	<tr> <td>Semester 6</td><td> <input type='file' name='sem6'></td> </tr> 
	<tr> <td>Semester 7</td><td> <input type='file' name='sem7'></td> </tr> 
	<tr> <td>Semester 8</td><td> <input type='file' name='sem8'></td> </tr> !-->
	<tr> <td>Transcript : </td><td><input type='file' name='transcript'></td> </tr>
  <tr> <td>Cover Letter : </td><td> <input type='file' name='coverletter'></td> </tr>
       <tr ><td  colspan="2"><center><button type='submit' class="btn btn-danger" value="Upload">Upload</button></center></td><tr>
	 <br>
		     </table>
	</form>	 
		 
		 </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>
