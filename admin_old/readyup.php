<?php
   /*if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   */
?>
<html>
   <body>
      
 <?php 
  include 'header_admin.php';
 
  $_SESSION['roll'] = $_POST['roll'];?>
  <div class="row">
  <div class="col-md-8 col-md-offset-2">    
  <form method='post' enctype='multipart/form-data' action='upload.php'>
  <center>
  <h1>Upload Files</h1><br>
   <?php echo '<center>Roll : '.$_POST['roll'].'</center><br>';?>
  <table class="table table-striped">
 <tr> <td> Sem1: </td><td><input type='file' name='sem1'></td> </tr> 
	<tr> <td>Sem2: </td><td><input type='file' name='sem2'></td> </tr> 
	<tr> <td>Sem3: </td><td><input type='file' name='sem3'></td> </tr> 
	<tr> <td>Sem4: </td><td><input type='file' name='sem4'></td> </tr> 
	<tr> <td>Sem5: </td><td><input type='file' name='sem5'></td> </tr> 
	<tr> <td>Sem6:</td><td> <input type='file' name='sem6'></td> </tr> 
	<tr> <td>Sem7:</td><td> <input type='file' name='sem7'></td> </tr> 
	<tr> <td>Sem8:</td><td> <input type='file' name='sem8'></td> </tr> 
	<tr> <td>Transcript : </td><td><input type='file' name='transcript'></td> </tr>
  <tr> <td>Cover Letter : </td><td> <input type='file' name='coverletter'></td> </tr>
     </table> </center></div> <br><br></div>
    <br><br>
 
    <center>
      <div="row"><button type='submit' class="button" value="Upload">Upload</button></div></center>
      
   </body>
</html>