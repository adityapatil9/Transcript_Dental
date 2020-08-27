<?php

include 'header.php';

?>
<?php

//session_start();
include '/../connect.php';
$roll=$_SESSION['roll'];
$sql1="select * from student where `roll`='$roll'";

$res=mysqli_query($connect,$sql1);
while($row=mysqli_fetch_array($res))
{
	$dept=$row['branch'];
	$name = $row['name_full'];
	$email = $row['email_id'];
	$mno = $row['telM'];
	$rno = $row['telR'];
	$pre_addr = $row['present_addr'];
	$per_addr = $row['permanent_addr'];
	$cur_stat = $row['present_status'];
	$admin_type = $row['directsy'];
	$pattern = $row['pattern'];
	$year = $row['year_of_pass'];
	echo '<script> alert("Please Ensure that you fill ALL the fields in the update form"); </script>';
}
?>


<html>
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transcript RAIT | Edit Profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <script src="bootstrap/jquery-2.2.3.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

 

</head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="index.php"><b>Edit Profile</a>
      </div>

      <div class="register-box-body">
        <form action="edit_action.php" method="post">
          <div class="form-group has-feedback">
            <input  type="text" class="form-control" name ="roll" placeholder="<?php echo $roll; ?>" disabled>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="name_full" value="<?php echo $name; ?>" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		   <div class="form-group has-feedback">
            <input type="email" class="form-control" name ="email_id" value="<?php echo $email; ?>" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
		  
		   <div class="form-group has-feedback">
            <input type="tel" name="telM" class="form-control" value="<?php echo $mno; ?>" max="10000000000" min="7000000000" required>
            <span class="glyphicon  glyphicon-phone form-control-feedback"></span>
          </div>
		  
          <div class="form-group has-feedback">
            <input type="tel" name="telR" class="form-control" value="<?php echo $rno; ?>" max="10000000000" min="7000000000" required>
            <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
          </div>
          
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="present_addr" value="<?php echo $pre_addr; ?>" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
		  
		    <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="permanent_addr" value="<?php echo $per_addr; ?>" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="present_status" value="<?php echo $cur_stat; ?>" required>
            <span class="glyphicon glyphicon-play form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
            <input  type="text" class="form-control" name ="branch" value="<?php echo $dept; ?>" disabled>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		 <!-- <div class="form-group has-feedback">
           <select class="form-control" name="branch" id="branch" required>
          <option value="" disabled selected>Select Department</option>
          <option value="CE">Computer Engineering</option>
		  <option value="IT">Information Technology</option>
		  <option value="IN">Instrumentation</option>
          <option value="EL">Electronics</option>
		  <option value="ET">Electronics and Telecommunication</option>
    	</select>
          </div> -->
		  
		  <div class="form-group has-feedback">
           <select class="form-control" name="directsy"  required>
		   
          <option value=""/>SELECT IF DIRECT SECOND YEAR (Yes for Diploma Students)(Yes/No)</option>
          <option value="N">No</option>
		  <option value="Y">Yes</option>
		  </select>
		  </div>
		  
		   <div class="form-group has-feedback">
           <select class="form-control" name="pattern"  required>
          <option />SELECT YOUR PATTERN</option>
          <option value="REV2012">REV 2012</option>
		  <option value="OLD2007">OLD 2007</option>
          <option value="OLD2002">OLD 2002</option>
		  <option value="OLD2000">OLD 2000</option>
		  <option value="OLD1999">OLD 1999</option>
		  <option value="OLD1998">OLD 1998</option>
		  <option value="OLD1997">OLD 1997</option>
		  <option value="OLD1996">OLD 1996</option>
		  <option value="OLD1995">OLD 1995</option>
		  <option value="OLD1994">OLD 1994</option>
		  <option value="OLD1993">OLD 1993</option>
		  <option value="OLD1992">OLD 1992</option>
		  <option value="OLD1991">OLD 1991</option>
		  <option value="OLD1990">OLD 1990</option>
		  <option value="OLD1989">OLD 1989</option>
		  <option value="OLD1988">OLD 1988</option>
		  </select>
		  </div>
		  
		  <div class="form-group has-feedback">
            <input type="number" name="year_of_pass" class="form-control" value="<?php echo $year;?>" placeholder="Year of Passing" min="1980" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
		  
		  
		 
		 
		  
		   
		 
		  
		  
		  
         
              <button type="submit" name="submit" class="btn bg-navy btn-block btn-flat">Save</button>
            
        </form>
<br>
        
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
<?php 
include 'footer.php';
?>    

