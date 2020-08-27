<?php
session_start();
include('../connect.php');
$all_array=array();
$all_array=$_SESSION['all_array'];

$sub_num=$_SESSION['sub_num'];

$thob=array();
$twob=array();
$prob=array();
$orob=array();
$iaob=array();
$thob=$_SESSION['thob'];
$twob=$_SESSION['twob'];
$prob=$_SESSION['prob'];
$orob=$_SESSION['orob'];
$iaob=$_SESSION['iaob'];


//VALUES FOR DB



$passinone=$_SESSION['passinone'];
$seat=$_SESSION['seat'];
$year=$_SESSION['year'];
$sem=$_SESSION['sem'];
$remark=$_SESSION['remark'];
$branch=$_SESSION['branch'];
$pattern=$_SESSION['pattern'];

$roll=$_SESSION['roll'];

$semname='sem'.$sem;

$sql=array();
for ($i=0;$i<$sub_num;$i++){
$sql[$i]="insert into student_marks values (".$seat.",'".$roll."','".$branch."','".$pattern."','".$year."',".$sem.",'".$all_array[$i][0]."',".$all_array[$i][21].",".$all_array[$i][22].",".$all_array[$i][23].",".$all_array[$i][24].",".$all_array[$i][25].")  ON DUPLICATE KEY UPDATE thob='".$thob[$i]."',twob='".$twob[$i]."',prob='".$prob[$i]."',orob='".$orob[$i]."',iaob='".$iaob[$i]."',year='$year'";
//echo $sql[$i];
mysqli_query($connect,$sql[$i]);

}
if($_SESSION['sem']%2==0)
{
	
	$sql1="insert into student_total values (".$seat.",'".$roll."','".$branch."','".$pattern."','".$year."',".$sem.",'".$_SESSION['total_ob']."','".$_SESSION['percent']."','$remark',$passinone) ON DUPLICATE KEY UPDATE total='".$_SESSION['total_ob']."',percentage='".$_SESSION['percent']."',year='$year',remark='$remark',passinone=$passinone";

}
else
{	
	$sql1="insert into student_total values (".$seat.",'".$roll."','".$branch."','".$pattern."','".$year."',".$sem.",'".$_SESSION['total_ob']."','".$_SESSION['percent']."',NULL,$passinone) ON DUPLICATE KEY UPDATE total='".$_SESSION['total_ob']."',percentage='".$_SESSION['percent']."',year='$year',remark=NULL,passinone=$passinone";
}//echo $sql1;
//echo $sql1;
mysqli_query($connect,$sql1);

$sql2="update application_complete set `$semname`=1 where `roll`='".$roll."'";
mysqli_query($connect,$sql2);

if($sem==7||$sem==8||$sem==6)
{
	$elective=$_SESSION['elective'];
	$sqlelec="insert into elective values('$roll',$sem,'$elective') on DUPLICATE KEY UPDATE electivename='$elective'";
	mysqli_query($connect,$sqlelec);
}

echo "<script language='javascript'>alert('Marks Entered Successfully');</script>";
header("refresh:0 ;url=index.php"); 

?>
<body class="hold-transition login-page">
</body>
