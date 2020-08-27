<?php
include 'header.php';
?>
<style>
input:read-only { 
    background-color: #eee;
}
</style>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Enter Marks
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
		<?php


//session_unset();
//session_destroy();
$all_array=array();

//print_r($all_array);
$_SESSION['sgpi']=$_POST['sgpi'];
$_SESSION['cgpi']=$_POST['cgpi'];
//echo 
$sub_num=$_SESSION['sub_num'];
$_SESSION['sub_num']=$sub_num;
$coursetable_array=$_SESSION['coursetable_array'];
/*$thob=$_POST['thob'];
$_SESSION['thob_sum']=array_sum($thob);
$twob=$_POST['twob'];
$_SESSION['twob_sum']=array_sum($twob);
$prob=$_POST['prob'];
$_SESSION['prob_sum']=array_sum($prob);
$orob=$_POST['orob'];
$_SESSION['orob_sum']=array_sum($orob);
$iaob=$_POST['iaob'];
$_SESSION['iaob_sum']=array_sum($iaob);*/


$ob_grade_ese=$_POST['ob_grade_ese'];
$ob_grade_op=$_POST['ob_grade_op'];
$ob_grade_or=$_POST['ob_grade_or'];
$ob_grade_ia=$_POST['ob_grade_ia'];
$ob_grade_tw=$_POST['ob_grade_tw'];
$ob_overall_ese=$_POST['ob_overall_ese'];
$ob_overall_tw=$_POST['ob_overall_tw'];
$ob_creditsearned_th=$_POST['ob_creditsearned_th'];
$ob_creditsearned_tw=$_POST['ob_creditsearned_tw'];
$ob_gradepoints_th=$_POST['ob_gradepoints_th'];
$ob_gradepoints_tw=$_POST['ob_gradepoints_tw'];
$ob_cxg_th=$_POST['ob_cxg_th'];
$ob_cxg_tw=$_POST['ob_cxg_tw'];

?>
<div>
<form method="POST" action="insertvaluerev.php">
<center>
<?php

//print_r($ob_grade_ese);
echo "<p>Seat Number : ";
echo $_POST['seat'];
echo "<br><br>";
echo "Passing Year : ";
echo $_POST['year'];
echo "<br><br>";
if($_SESSION['sem']==7||$_SESSION['sem']==8)
{
	echo "Elective Name : ";
	echo $_POST['elective'];
	$_SESSION['elective']=$_POST['elective'];
	echo "<br><br>";
}
echo "No of Attempts : ";
$passinone= $_POST['passinone'];
if($passinone==1)
{
	echo "Pass in One Attempt";
}
else
{
	echo "More than One Attempt";
}
echo "<br><br>";
if ($_SESSION['sem']%2==0)
{
		echo "Remark : ";
		echo $_POST['remark'];
		$_SESSION['remark']=$_POST['remark'];
}
else
{
	$_SESSION['remark']='NULL';
}
echo "</p><br>";
$_SESSION['passinone']=$_POST['passinone'];
$_SESSION['seat']=$_POST['seat'];
$_SESSION['year']=$_POST['year'];

$total_coursecredits=0;
$total_creditsearned=0;
$total_cxg=0;
?>

<div class="table-responsive box box-body">
<table  class="table" border="1">
	<tr>
		<td rowspan="3"> SUBJECTS</td>
		<td colspan="2"> COURSE CREDITS</td>
		<td colspan="7">GRADE</td>
		<td colspan="2">CREDITS EARNED (C)</td>
		<td colspan="2">GRADE POINTS (G)</td>
		<td colspan="2">C X G</td>
	</tr>
            
	<tr>
		<td rowspan="2">TH</td>
		<td rowspan="2">TW/P</td>
		
		<td rowspan="2">ESE</td>
		<td rowspan="2">OP</td>
		<td rowspan="2">OR</td>
		<td rowspan="2">IA</td>
		<td rowspan="2">TW</td>
		<td rowspan="1" colspan="2">OVERALL</td>
		
		<td rowspan="2">TH</td>
		<td rowspan="2">TW/P</td>
		<td rowspan="2">TH</td>
		<td rowspan="2">TW</td>
		<td rowspan="2">TH</td>
		<td rowspan="2">TW</td>
	</tr>
	<tr>
		<td>ESE</td>
		<td>TW</td>
	</tr>
            
<?php
for($j=0;$j<$sub_num;$j++)
{
	echo '<tr>';
	
	echo '<td>'.$coursetable_array[$j][0].'</td>'; //SUBJECT
	$all_array[$j][0]=$coursetable_array[$j][0];
	echo '<td>'.$coursetable_array[$j][1].'</td>'; //CREDITS TH
	$all_array[$j][1]=$coursetable_array[$j][1];
	echo '<td>'.$coursetable_array[$j][2].'</td>'; //CREDITS TW
	$all_array[$j][2]=$coursetable_array[$j][2];

	echo '<td>'.$ob_grade_ese[$j].'</td>';
	$all_array[$j][3]=$ob_grade_ese[$j];
	
	echo '<td>'.$ob_grade_op[$j].'</td>';
	$all_array[$j][4]=$ob_grade_op[$j];
	
	echo '<td>'.$ob_grade_or[$j].'</td>';
	$all_array[$j][5]=$ob_grade_or[$j];
	
	echo '<td>'.$ob_grade_ia[$j].'</td>';
	$all_array[$j][6]=$ob_grade_ia[$j];
	
	echo '<td>'.$ob_grade_tw[$j].'</td>';
	$all_array[$j][7]=$ob_grade_tw[$j];

	echo '<td>'.$ob_overall_ese[$j].'</td>';
	$all_array[$j][8]=$ob_overall_ese[$j];
	
	echo '<td>'.$ob_overall_tw[$j].'</td>';
	$all_array[$j][9]=$ob_overall_tw[$j];
	
	echo '<td>'.$ob_creditsearned_th[$j].'</td>';
	$all_array[$j][10]=$ob_creditsearned_th[$j];
	
	echo '<td>'.$ob_creditsearned_tw[$j].'</td>';
	$all_array[$j][11]=$ob_creditsearned_tw[$j];
	
	echo '<td>'.$ob_gradepoints_th[$j].'</td>';
	$all_array[$j][12]=$ob_gradepoints_th[$j];
	
	echo '<td>'.$ob_gradepoints_tw[$j].'</td>';
	$all_array[$j][13]=$ob_gradepoints_tw[$j];
	
	echo '<td>'.$ob_cxg_th[$j].'</td>';
	$all_array[$j][14]=$ob_cxg_th[$j];
	
	echo '<td>'.$ob_cxg_tw[$j].'</td>';
	$all_array[$j][15]=$ob_cxg_tw[$j];
	
	echo '</tr>';

//CALCULATION OF TOTAL CREDITS
	
	$total_coursecredits=$total_coursecredits+(float)$coursetable_array[$j][1]+(float)$coursetable_array[$j][2];
	$total_creditsearned=$total_creditsearned+(float)$ob_creditsearned_th[$j]+(float)$ob_creditsearned_tw[$j];
	$total_cxg=$total_cxg+(float)$ob_cxg_th[$j]+(float)$ob_cxg_tw[$j];
	
	
	
	
}	

//unset($_SESSION['all_array']);
	$_SESSION['all_array']=$all_array;
	$_SESSION['total_coursecredits']=$total_coursecredits;
	$_SESSION['total_creditsearned']=$total_creditsearned;
	$_SESSION['total_cxg']=$total_cxg;
	
?>


<tr>
		<td></td>
		<td colspan="2"><?php echo htmlspecialchars($total_coursecredits);?></td>
		<td colspan="7">-</td>
		<td colspan="2"><?php echo htmlspecialchars($total_creditsearned);?></td>
		<td colspan="2">-</td>
		<td colspan="2"><?php echo htmlspecialchars($total_cxg);?></td>
</tr>



</table><br><br></div>
<br>
<center><input type="submit" class="btn bg-navy" value="Submit" name="submit">
</form>
</div> 

		
		
		
		
		
		  </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      


<?php
include 'footer.php';
?>