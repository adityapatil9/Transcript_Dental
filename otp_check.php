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
include('connect.php');
session_start();
?>
<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
 	<div class="box-header with-border">
    <center><h3 class="box-title">RESET PASSWORD</h3></center><!-- /.box-tools -->
  	</div><!-- /.box-header -->

  	<div class="box-body">
  	<form method="POST" action="reset_password2.php" required>
  	<center><input type="text" name="otp" class="form-control" placeholder="Enter OTP" required></center><br>
  	<button type="submit" class="btn bg-olive btn-block btn-flat">Reset Password</button>
  	</form>
  	</div>
</div>

<?php
$mail=$_SESSION['otpmail'];
?>
</body>
</html>