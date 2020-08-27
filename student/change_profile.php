<?php
include ('../connect.php');
if(isset($_POST['edit_profile']))
{
$rollno=$_POST['rollno'];	
$name=$_POST['name'];	
$dept=$_POST['dept'];	
//$mnm=$_POST['mnm'];	
$phno=$_POST['phno'];	
$year=$_POST['year'];
$addr=$_POST['addr'];	
$email=$_POST['email'];

$sql_update = "UPDATE `student` SET `name`='$name',`dept`='$dept',`phno`='$phno',`year`='$year',`addr`='$addr',`email`='$email' WHERE rollno='$rollno'";
echo $sql_update;
if(mysql_query($sql_update))
{
echo '<script> alert("PROFILE UPDATE SUCCESSFUL"); window.location="index.php" </script>';
}
else
{
echo '<script> alert("PROFILE UPDATE UNSUCCESSFUL... PLEASE TRY AGAIN"); window.location="edit_profile.php" </script>';
}


}


?>