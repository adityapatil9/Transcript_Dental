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
$sem = $_GET['sem'];

$_SESSION['sem']=$sem;
$branch=$_SESSION['branch'];
$pattern=$_SESSION['pattern'];

$roll=$_SESSION['roll'];

$coursetable_array=array();
$main_array=array();

$ob_grade_ese=array();
$ob_grade_op=array();
$ob_grade_or=array();
$ob_grade_ia=array();
$ob_grade_tw=array();
$ob_overall_ese=array();
$ob_overall_tw=array();
$ob_creditsearned_th=array();
$ob_creditsearned_tw=array();
$ob_gradepoints_th=array();
$ob_gradepoints_tw=array();
$ob_cxg_th=array();
$ob_cxg_tw=array();

$i=0;

$sql="select * from course_table_rev where sem=".$sem." and branch='".$branch."' and pattern='".$pattern."'";
//echo $sql;
$result=mysqli_query($connect,$sql);
$sub_num=mysqli_num_rows($result);

$_SESSION['sub_num']=$sub_num;

while($row=mysqli_fetch_array($result))
{
	$coursetable_array[$i][0]=$row['subject'];//subject
	$main_array[$i][0]=$row['subject'];
	//echo $row['subject'];
	$sqlob="select * from student_marks_rev where subject='".$row['subject']."' and roll='".$roll."'";
	//echo $sqlob;
	$resultob=mysqli_query($connect,$sqlob);
	$num_resultob=mysqli_num_rows($resultob);
	
	//If marks are not entered previously then initialize all data cells to 0.
	if($num_resultob==0)
	{
		$seat="";
		$year="";
		$ob_grade_ese[$i]="";
		$ob_grade_op[$i]="";
		$ob_grade_or[$i]="";
		$ob_grade_ia[$i]="";
		$ob_grade_tw[$i]="";
		$ob_overall_ese[$i]="";
		$ob_overall_tw[$i]="";
		$ob_creditsearned_th[$i]="";
		$ob_creditsearned_tw[$i]="";
		$ob_gradepoints_th[$i]="";
		$ob_gradepoints_tw[$i]="";
		$ob_cxg_th[$i]="";
		$ob_cxg_tw[$i]="";
	}
	
	//If marks are previously entered, then fetch them into this array
	while($rowob=mysqli_fetch_array($resultob))
	{
		$seat=$rowob['seat'];
		$year=$rowob['year'];
		
		$ob_grade_ese[$i]=$rowob['grade_ese'];
		$ob_grade_op[$i]=$rowob['grade_op'];
		$ob_grade_or[$i]=$rowob['grade_or'];
		$ob_grade_ia[$i]=$rowob['grade_ia'];
		$ob_grade_tw[$i]=$rowob['grade_tw'];
		$ob_overall_ese[$i]=$rowob['overall_ese'];
		$ob_overall_tw[$i]=$rowob['overall_tw'];
		$ob_creditsearned_th[$i]=$rowob['creditsearned_th'];
		$ob_creditsearned_tw[$i]=$rowob['creditsearned_tw'];
		$ob_gradepoints_th[$i]=$rowob['gradepoints_th'];
		$ob_gradepoints_tw[$i]=$rowob['gradepoints_tw'];
		$ob_cxg_th[$i]=$rowob['cxg_th'];
		$ob_cxg_tw[$i]=$rowob['cxg_tw'];
	}
	//Init the course_table details in coursetable_array
	$coursetable_array[$i][1]=$row['coursecredits_th'];//coursecredits_th
	$coursetable_array[$i][2]=$row['coursecredits_tw'];//coursecredits_tw
	$coursetable_array[$i][3]=$row['grade_ese'];
	$coursetable_array[$i][4]=$row['grade_op'];
	$coursetable_array[$i][5]=$row['grade_or'];
	$coursetable_array[$i][6]=$row['grade_ia'];
	$coursetable_array[$i][7]=$row['grade_tw'];
	//echo $main_array[$i][0];
	
	$i++;
}?>
<div>

<form method="POST" width="50%"  action="confirmvaluerev.php">
	
<center>
  
     <input type="text" class="form-control" name='seat' placeholder="Enter Seat Number" value="<?php echo $seat;?>" required >
   </center>
<br>
   <center>
  
     <input type="text" class="form-control" name='year' placeholder="Year of Passing (May 2013)" value="<?php echo $year;?>" required >
   </center>
   <br>
   <?php
   if($sem=='7'||$sem=='8')
   {	echo '   <center>
  
     <input type="text" class="form-control" name="elective" placeholder="Elective Name (As will appear on marksheet)" value="" required >
   </center>
   <br>';}
   ?>
   <center>
  
  	<select class="form-control" name="passinone">
  		<option value="1">Pass in One Attempt</option>
  		<option value="0">More than One Attempt</option>
     </select>
   </center>
<br>

<?php


   if ($sem%2==0)
   {
	   echo '
   <center>
  
     <input type="text" class="form-control" name="remark" placeholder="Remark for Year (SUCCESSFUL/ UNSUCCESSFUL)" required >
  </center>
   <br>';}
   ?>
   <br>
<b><center> Note: Enter - into field, which is not applicable<center></b><br>

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
for($j=0;$j<$i;$j++)
{
	
	echo '<tr>';
	
	echo '<td>'.$coursetable_array[$j][0].'</td>'; //SUBJECT
	echo '<td>'.$coursetable_array[$j][1].'</td>'; //CREDITS TH
	echo '<td>'.$coursetable_array[$j][2].'</td>'; //CREDITS TW
	
	
	if($coursetable_array[$j][3]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_grade_ese[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px"  name="ob_grade_ese[]" type="text" value="'.$ob_grade_ese[$j].'" required></input></td>';
	}
	
	if($coursetable_array[$j][4]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_grade_op[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_grade_op[]" type="text" value="'.$ob_grade_op[$j].'" required></input></td>';
	}
	
	if($coursetable_array[$j][5]=="-")
	{
		echo '<td><input style="width:30px" name="ob_grade_or[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_grade_or[]" type="text" value="'.$ob_grade_or[$j].'" required></input></td>';
	}
	
	if($coursetable_array[$j][6]=="-")
	{
		echo '<td><input style="width:30px" name="ob_grade_ia[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_grade_ia[]" type="text" value="'.$ob_grade_ia[$j].'" required></input></td>';
	}
	if($coursetable_array[$j][7]=="-")
	{
		echo '<td><input style="width:30px" name="ob_grade_tw[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_grade_tw[]" type="text" value="'.$ob_grade_tw[$j].'" required></input></td>';
	}
	//OVERALL ESE AND TW
	echo '<td><input style="width:30px" name="ob_overall_ese[]" type="text" value="'.$ob_overall_ese[$j].'" required></input></td>';
	echo '<td><input style="width:30px" name="ob_overall_tw[]" type="text" value="'.$ob_overall_tw[$j].'" required></input></td>';
	
	if($coursetable_array[$j][1]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_creditsearned_th[]" type="text" value="-" readonly></input></td>';
		
	}
	else
	{
		echo '<td><input style="width:30px"  name="ob_creditsearned_th[]" type="text" value="'.$ob_creditsearned_th[$j].'" required></input></td>';
		
	}
	if($coursetable_array[$j][2]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_creditsearned_tw[]" type="text" value="-" readonly></input></td>';
		
	}
	else
	{
		echo '<td><input style="width:30px"  name="ob_creditsearned_tw[]" type="text" value="'.$ob_creditsearned_tw[$j].'" required></input></td>';
		
	}
	if($coursetable_array[$j][1]=="-")
	{
		
		echo '<td><input  style="width:30px" name="ob_gradepoints_th[]" type="text" value="-" readonly></input></td>';
		
	}
	else
	{
		
		echo '<td><input style="width:30px" name="ob_gradepoints_th[]" type="text" value="'.$ob_gradepoints_th[$j].'" required></input></td>';
	}
	if($coursetable_array[$j][2]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_gradepoints_tw[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_gradepoints_tw[]" type="text" value="'.$ob_gradepoints_tw[$j].'" required></input></td>';
	}
	if($coursetable_array[$j][1]=="-")
	{
		
		echo '<td><input  style="width:30px" name="ob_cxg_th[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		
		echo '<td><input style="width:30px" name="ob_cxg_th[]" type="text" value="'.$ob_cxg_th[$j].'" required></input></td>';
	}
	if($coursetable_array[$j][2]=="-")
	{
		
		echo '<td><input  style="width:30px" name="ob_cxg_tw[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		
		echo '<td><input style="width:30px" name="ob_cxg_tw[]" type="text" value="'.$ob_cxg_tw[$j].'" required></input></td>';
	}
	//echo '<td><input style="width:30px" name="ob_creditsearned_th[]" type="text" value="'.$ob_creditsearned_th[$j].'" ></input></td>';
	//echo '<td><input style="width:30px" name="ob_creditsearned_tw[]" type="text" value="'.$ob_creditsearned_tw[$j].'" ></input></td>';
	
	
	
	
	
	
	
	echo '</tr>';
}




$_SESSION['coursetable_array']=$coursetable_array;
?>
</table>
<br><br>

</div>
<center>
  
     <input type="text" class="form-control" name='sgpi' placeholder="SGPI Pointer (Eg: 8.5)" value="" required >
   </center>
   <br>
<center>
  
     <input type="text" class="form-control" name='cgpi' placeholder="CGPI Pointer (Eg: 8.5)" value="">
   </center>
   <br>
<center><input type="submit" class="btn btn-danger" value="Confirm" name="submit">
</center>

</form>
</div> 
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php
include 'footer.php';
?>
