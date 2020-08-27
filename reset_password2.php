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
  <!--JS for checking if password and confirm password are same. -->
	<script type="text/javascript">
		function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	</script>
</head>
<body class="hold-transition login-page">
<?php
include 'connect.php';
session_start();
$mail=$_SESSION['otpmail'];  
$otptest=$_POST['otp'];    
$query="SELECT * FROM student WHERE email_id = '$mail'";
$queryfired=mysqli_query($connect,$query);
$row_student=mysqli_fetch_array($queryfired);  //Getting data from student;
if($queryfired!=true)
{
	echo "<br><center><h3>Error connecting to DB</h3></center>";
}
else
{

$_SESSION['rollno']=$row_student['roll'];

if($otptest==$row_student['otp'])
{
echo '
<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  <div class="box-header with-border">
  <center><h3 class="box-title">RESET PASSWORD</h3></center><!-- /.box-tools -->
  </div>
  <div class="box-body">
  <form method="POST" action="reset_password3.php" required>
    <center><input type="password" name="password" id="password" class="form-control" placeholder="Enter new password : " required></center><br>
    <center><input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm your password " required></center><br>
    <button type="submit" class="btn bg-olive btn-block btn-flat" onclick="return Validate()" >Reset Password</button>
    </form>
  </div>
</div>
';
}

}
?>

</body>
</html>