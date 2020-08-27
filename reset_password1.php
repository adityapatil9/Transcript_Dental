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
session_start();
include('connect.php');
$email=$_POST['email'];
$roll = $_POST['roll'];
$sql="SELECT * FROM student WHERE roll = '$roll' AND email_id = '$email'";
$res=mysqli_query($connect,$sql);
if($res != true)
{
	echo "Error connecting in DB";
}
$count=mysqli_num_rows($res);
if($count==0)
{
	echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  	<div class="box-header with-border">
    <center><h3 class="box-title">Password Reset Failed</h3></center>
    <!-- /.box-tools -->
  	</div><!-- /.box-header -->
 	<div class="box-body">
 	<center>
 	Maybe you entered the wrong combination <br>
  	of your Roll no. and your registered email id !
  	</center>
  	</div>
 	<div class="box-body">
   	<center>Try again <a href="forgot_password.php">Forgot Password</a></br></center>
  	</div>
  	</div>';

}

else
{
	echo "<br><br><center><h2>OTP has been sent to your registered Email ID:</h2></center><br> ";
	$generated_password = substr(md5(rand(999,999999)),0,8);
	//echo $generated_password. "</br>";
	$sql_db = "UPDATE `student` SET `otp`='".$generated_password."' WHERE roll = '$roll'";
	$res=mysqli_query($connect,$sql_db);
	if($res != true)
	{
	echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
  	<div class="box-header with-border">
    <center><h3 class="box-title">Problem With OTP</h3></center>
    <!-- /.box-tools -->
  	</div><!-- /.box-header -->
  	<div class="box-body">
   	<center>Try again <a href="forgot_password.php">Forgot Password</a></br></center>
 	</div></div>';
	}
	

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'transcript.rait@gmail.com';        // SMTP username
$mail->Password = 'bdiv@rait15';                      // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('sender@gmail.com', 'Sender');    //Sender;
$mail->addAddress($email,'Student');     // Add a recipient;--

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Transcript RAIT | Reset Password ";
$mail->Body    = "Your new OTP is : ". $generated_password;
$mail->AltBody = "From: Transcript";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<div class="box" style="width:33%;margin-left:33%;margin-top:10%">
 	<div class="box-header with-border">
    <center><h3 class="box-title">Password Reset</h3></center>
    <!-- /.box-tools -->
  	</div><!-- /.box-header -->
  	<div class="box-body">
  	<center>Message has been sent check your email !</center>
  	</div>
  	<div class="box-body">
   	<center><a href="otp_check.php">Continue to fill OTP</a><br></center>
   	<center><a href="index.php">Sign In With New Password</a><br></center>
  	</div></div>';
  	$_SESSION['otpmail']=$email;
}

}

?>
</body>
</html>