<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Authentication</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <script src="bootstrap/jquery-2.2.3.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition login-page">
<?php
	//echo 'Starting session';
	session_start();
	include ('connect.php');

	if($_SERVER["REQUEST_METHOD"] == "POST")	
	{	
		$userid = $_POST['userid'];
		$pass=$_POST['password'];
		//$password = openssl_encrypt($pass,'aes128',$cy_string, true,$initialization_vector);
		//$_SESSION['username'] = $userid;
		//$_SESSION['password']=$password;
	
	// CHECKING IF ADMIN
	//echo substr($userid, 0, 5);
	if( strcmp(substr($userid, 0, 5) , 'admin') == 0)
	{
		echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Authenticating</h3></center>
    <!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <center>Please Wait</center>
  </div></div>';
  
    
		$sql_admin = "SELECT * FROM admin WHERE userid = '$userid'";
		$res_admin = mysqli_query($connect,$sql_admin);
		$row_admin = mysqli_fetch_array($res_admin);
		//echo $row_admin['password'];
		if(strcmp($row_admin['password'],($pass)) == 0)
		{
			$_SESSION['admin'] = $userid;
			$_SESSION['level'] = 0;
			//$_SESSION['adminpassword'] = $password;
			header("refresh:0 ;url=admin/");
		}
		else
		{
			?>
			<script language="javascript"> alert("No user found with such username and password combination.. Please try again..");</script>
			<?php
			header("refresh:0 ;url=index.php");
		}
	}
	
	
	// CHECKING IF STUDENT
	else
	{
		echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  <div class="box-header with-border">
    <center><h3 class="box-title">Authenticating</h3></center>
    <!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
   <center>Please Wait</center>
  </div></div>';
		$sql_student = "SELECT * FROM `student` WHERE `roll`='$userid'";
		$res_student = mysqli_query($connect,$sql_student);
		$row_student=mysqli_fetch_array($res_student);
		
		
		
		//echo $sql_student;
		if(mysqli_num_rows($res_student) > 0 && strcmp($row_student['password'], $pass)==0)
		{
			$_SESSION['roll'] = $userid;
			$_SESSION['username'] = $userid;
			$_SESSION['branch'] = $row_student['branch'];
			$_SESSION['pattern'] = $row_student['pattern'];
			$_SESSION['level']=1;
			$_SESSION['directsy']=$row_student['directsy'];
			//$_SESSION['appl_status']=$row_student['appl_status'];
			
			header("refresh:0 ;url=student/");
		}
		else
		{
			echo '<script language="javascript"> alert("No user found with such username and password combination.. Please try again..");</script>';
			//header("refresh:0 ;url=index.php");
		}
	}
	
	}
?>
</body>
</html>
