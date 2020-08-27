<?php
session_start();
include('../connect.php');
$all_array=array();
$all_array=$_SESSION['all_array'];

$sub_num=$_SESSION['sub_num'];




//VALUES FOR DB



$passinone=$_SESSION['passinone'];
$seat=$_SESSION['seat'];
$year=$_SESSION['year'];
$sem=$_SESSION['sem'];
$remark=$_SESSION['remark'];
$branch=$_SESSION['branch'];
$pattern=$_SESSION['pattern'];

$total_coursecredits=$_SESSION['total_coursecredits'];
$total_creditsearned=$_SESSION['total_creditsearned'];
$total_cxg=$_SESSION['total_cxg'];

$cgpi=$_SESSION['cgpi'];
$sgpi=$_SESSION['sgpi'];
$roll=$_SESSION['roll'];

$semname='sem'.$sem;

$sql=array();
for ($i=0;$i<$sub_num;$i++){
$sql[$i]="insert into student_marks_rev values (".$seat.",'".$roll."','".$branch."','".$pattern."','".$year."',".$sem.",'".$all_array[$i][0]."',
'".$all_array[$i][1]."','".$all_array[$i][2]."','".$all_array[$i][3]."','".$all_array[$i][4]."','".$all_array[$i][5]."','".$all_array[$i][6]."','".$all_array[$i][7]."',
'".$all_array[$i][8]."','".$all_array[$i][9]."','".$all_array[$i][10]."','".$all_array[$i][11]."','".$all_array[$i][12]."','".$all_array[$i][13]."',
'".$all_array[$i][14]."','".$all_array[$i][15]."')  
ON DUPLICATE KEY UPDATE grade_ese='".$all_array[$i][3]."',grade_op='".$all_array[$i][4]."',grade_or='".$all_array[$i][5]."',grade_ia='".$all_array[$i][6]."',grade_tw='".$all_array[$i][7]."',
overall_ese='".$all_array[$i][8]."',overall_tw='".$all_array[$i][9]."',creditsearned_th='".$all_array[$i][10]."',creditsearned_tw='".$all_array[$i][11]."',
gradepoints_th='".$all_array[$i][12]."',gradepoints_tw='".$all_array[$i][13]."',cxg_th='".$all_array[$i][14]."',cxg_tw='".$all_array[$i][15]."',year='$year',seat='$seat'";
//echo $sql[$i];
mysqli_query($connect,$sql[$i]);

}
if($_SESSION['sem']%2==0)
{
	
	$sql1="insert into student_total_rev values (".$seat.",'".$roll."','".$branch."','".$pattern."','".$year."',".$sem.",
	'".$total_coursecredits."','".$total_creditsearned."','".$total_cxg."','".$sgpi."','".$cgpi."','$remark',$passinone) ON DUPLICATE KEY UPDATE 
	total_coursecredits='".$total_coursecredits."',total_creditsearned='".$total_creditsearned."',total_cxg='".$total_cxg."',pointer_sgpi='$sgpi',pointer_cgpi='$cgpi',seat='$seat',year='$year',remark='$remark',passinone=$passinone";

}
else
{	
	$sql1="insert into student_total_rev values (".$seat.",'".$roll."','".$branch."','".$pattern."','".$year."',".$sem.",
	'".$total_coursecredits."','".$total_creditsearned."','".$total_cxg."','".$sgpi."','".$cgpi."',NULL,$passinone) ON DUPLICATE KEY UPDATE 
	total_coursecredits='".$total_coursecredits."',total_creditsearned='".$total_creditsearned."',total_cxg='".$total_cxg."',pointer_sgpi='$sgpi',pointer_cgpi='$cgpi',seat='$seat',year='$year',remark=NULL,passinone=$passinone";
}//echo $sql1;
//echo $sql1;
mysqli_query($connect,$sql1);

$sql2="update application_complete set `$semname`=1 where `roll`='".$roll."'";
mysqli_query($connect,$sql2);

if($sem==7||$sem==8||$sem==6)
{
	$elective=$_SESSION['elective'];
	$sqlelec="insert into elective values('$roll',$sem,'$elective') on DUPLICATE KEY UPDATE electivename='$elective'";
	echo $sqlelec;
	mysqli_query($connect,$sqlelec);
}

echo "<script language='javascript'>alert('Marks Entered Successfully');</script>";
header("refresh:0 ;url=index.php"); 

?>
<body class="hold-transition login-page">
</body>
