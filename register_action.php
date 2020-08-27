<?php
	include ('connect.php');
	
	/*$hostname="localhost"; //hostname
	$username="root"; //username for database
	$password=""; //database password
	$dbname="transcript"; //database name
	
	@$connect = mysql_connect($hostname,$username,$password) or die("Error Connecting"); //make connection
	mysql_select_db($dbname); //select database*/
     
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
  		$roll=$_POST['roll'];
  		$branch=$_POST['branch'];
  		$year=$_POST['year_of_pass'];
  		$name=$_POST['name_full'];
  		$present_addr=$_POST['present_addr'];
  		$permanent_addr=$_POST['permanent_addr'];
  		$email=$_POST['email_id'];
  		$telR=$_POST['telR'];
		$telM=$_POST['telM'];
		$status=$_POST['present_status'];
		$pass=$_POST['password'];
		$directsy=$_POST['directsy'];
		/*if(isset($_POST['directsy']==1))
		{
			$directsy='Y';
		}
		else
		{
			$directsy='N';
		}*/
		$otp= "0";
		$pattern = $_POST['pattern'];
		
		
		$sql="INSERT into student value('$roll','$branch',$year,'$name','$present_addr','$permanent_addr','$email','$telR','$telM','$status','$pass','$otp','$pattern','$directsy')";
  		$qury=mysqli_query($connect,$sql);
		
		
		if(!$qury)
 	 	{	 
   				echo "<script> alert('Roll Number already exists / Something went wrong');</script>";
   				header("refresh:0 ;url=index.php"); 
  		}
  		
		else
  		{
				$sqln="insert into application_complete values ('$roll',0,0,0,0,0,0,0,0)";
				mysqli_query($connect,$sqln);
				$sqls="insert into current_status values('$roll',0)";
				mysqli_query($connect,$sqls);
				
				$sqld="insert into student_documents(`roll`) values ('$roll')";
				mysqli_query($connect,$sqld);
				
				echo "<script language='javascript'>alert('New Student Registered Successfully');</script>";
				header("refresh:0 ;url=index.php"); 
			
				
				
				
  		}
	}	
    else
    {
        echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Registraion Failed</h3></center>
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