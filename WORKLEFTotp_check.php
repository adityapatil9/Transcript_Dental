<script>
checkPwd = function () {
    var str = document.getElementById('new_password').value;
    if (str.length < 6) {
        alert("Password too short");
        return ("too_short");
    } else if (str.length > 50) {
        alert("Password too long");
        return ("too_long");
    } else if (str.search(/\d/) == -1) {
        alert("Please Enter Number in Password ");
        return ("no_num");
    } else if (str.search(/[a-zA-Z]/) == -1) {
        alert("Please Enter Letter in Password ");
        return ("no_letter");
    } else if (str.search(/[^a-zA-Z0-9\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:]/) != -1) {
        alert("Password bad_char");
        return ("Password bad_char");
    }
    alert("PASSWORD OKAY!!");
    return ("ok");
}
</script>
<?php

include('connect.php');
if(isset($_POST['submit_forgot_password']))
{
	$roll = $_POST['roll'];
	$email = $_POST['email'];
	$otp = $_POST['otp'];
	$new_password = $_POST['new_password'];
	$confirm_new_password = $_POST['confirm_new_password'];
	$otp = $_POST['otp'];
	$sql="SELECT * FROM student WHERE roll = '$roll' AND email_id='$email'";
	$res=mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($res);
	$otp_db = $row['otp'];
	if(strcmp($otp ,$otp_db) == 0)
	{
			echo "<script type='text/javascript'>alert('OTP Match');</script>";
					if(strcmp($new_password, $confirm_new_password) == 0 )
					{
					echo "<script type='text/javascript'>alert('Passwords Match');</script>";
					$sql_update = "UPDATE `student` SET `password`='$new_password',`otp`='NULL' WHERE roll = '$roll'";
					$res_update = mysqli_query($connect,$sql_update);
					if($res_update == true)
					{
					echo "<script type='text/javascript'>alert('Update Successful.. Login to continue');</script>";
					header("refresh:1; url=index.php");
					}
					else
					{
					echo "<script type='text/javascript'>alert('Something went wrong.. Try again');</script>";	
					}
			}
			
	}
}

else
{
?>
<form action="" method="post">
<!-- <form onclick="checkPwd"> -->
<br>
<label>Roll Number : </label>

<input type="text" name="roll" value="" required/>
<br>
<br>
<label>Enter your Email ID : </label>

<input type="email" name="email" value="" required/>
<br>
<label>Enter your OTP (sent to your registered Email ID) : </label>

<input type="text" name="otp" value="" required placeholder="OTP is case-sensitive"/>
<br>

<label>Enter your New Pasword : </label>
<input type="password" name="new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<br>

<label>Confirm your New Password : </label>
<input type="password" name="confirm_new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<br>

<input type="submit" name="submit_forgot_password"/>
</form>
<?php	
}

?>

