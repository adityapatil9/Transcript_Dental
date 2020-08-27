<?php
  include 'connect.php';
  session_start();
  $roll = $_SESSION['k'];
  
     
    if (isset($_POST['submit']))
    {
      $year=$_POST['year_of_pass'];
      $name=$_POST['name_full'];
      $present_addr=$_POST['present_addr'];
      $permanent_addr=$_POST['permanent_addr'];
      $email=$_POST['email_id'];
      $telR=$_POST['telR'];
    $telM=$_POST['telM'];
    $status=$_POST['present_status'];
    $directsy=$_POST['directsy'];
    $pattern = $_POST['pattern'];
    
    //$sql="UPDATE student value SET name_full='$name', email_id='$email', present_addr='$present_addr', permanent_addr='$permanent_addr', year_of_pass='$year', telR='$telR', telM='$telM', present_status='$status', directsy='$directsy' WHERE roll='$roll' ";
      $qury=mysqli_query($connect,"UPDATE student value SET name_full='$name', email_id='$email', present_addr='$present_addr', permanent_addr='$permanent_addr', year_of_pass='$year', telR='$telR', telM='$telM', present_status='$status', directsy='$directsy' WHERE roll='$roll' ");
    
    
    if(!$qury)
    {  
          echo "<script> alert('Something went wrong');</script>";
          //header("refresh:0 ;url=index.php"); 
      }
      
    else
      {
        
        echo "<script language='javascript'>alert('Profile Updated!');</script>";
        //ob_end_flush();
        header("refresh:0 ;url=index.php"); 
      
        
        
        
      }
  } 
    else
    {
        echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Updation Failed</h3></center>
    <!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <center>Try Again</center>
  </div></div>';
    }
?>
<html>
<body class="hold-transition login-page">
</body>
</html>