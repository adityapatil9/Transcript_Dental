<?php
/*
Security Trial Coder !
Warning : Every page of reset_password1.php, reset_password2.php, reset_password3.php and otp_check.php contains session variables to allow only valid users to change their passwords.
Thus, every page is linked to another. 
(Suggestion : Note when changing values and names in code !)
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
  	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
include 'connect.php';
session_start();
$rollno=$_SESSION['rollno'];
$passwordnew=$_POST['password'];
$query="UPDATE `student` SET password='$passwordnew' WHERE roll='$rollno'";
$queryfire=mysqli_query($connect,$query);
echo "$queryfire";
if($queryfire==true)
{
	echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  <div class="box-header with-border">
  <center><h3 class="box-title">Your password has been set successfully !</h3></center><!-- /.box-tools -->
  </div>
  <div class="box-body">
  <center><a href="index.php">Sign In with new password !</center>
  </div>
  </div>';
}
else
{
	echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  <div class="box-header with-border">
  <center><h3 class="box-title">There was a problem with resetting your password !</h3></center><!-- /.box-tools -->
  </div>
  <div class="box-body">
  <center><a href="forgot_password.php">Try again !</center>
  </div>
  </div>
  ';
}
?>
</body>
</html>