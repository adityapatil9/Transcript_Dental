<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Received Requests
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<STYLE type="text/css" media="print">




@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</STYLE>

</head>

<body >
<div class="box">
<?php
	
	$roll = $_SESSION["roll"];
	$sql_student_total = "SELECT * FROM student_total_rev WHERE roll='$roll' ORDER BY sem ASC";
	//echo $sql_student_total;
	$res_student_total = mysqli_query($connect, $sql_student_total);
	$count_student_total = mysqli_num_rows($res_student_total);
	
	$roll = $_SESSION['roll'];
	$sql_name = "SELECT * FROM student WHERE roll='$roll'";
	$res_name = mysqli_query($connect, $sql_name);
	$row_name = mysqli_fetch_array($res_name);
	$name = $row_name['name_full'];
	$directsy=$row_name['directsy'];
	echo "<center>MARKS ENTERED FOR ".$count_student_total.' SEMESTERS</center>';
	
	$sem_roman = array('','I', 'II', 'III','IV','V','VI','VII','VIII');

	//FOR OVERALL RECORD OF THE STUDENT
	$i=0;
	$seat = array();
	$pattern = array();
	$year = array();
	$sem = array();
	$total_coursecredits = array();
	$total_creditsearned = array();
	$total_cxg = array();
	$remark = array();
	$passinone=array();
	
	//FOR SEMESTER TABLES
	$subject = array();
	$coursecredits_th = array();
	$coursecredits_tw = array();
	$grade_ese = array();
	$grade_op = array();
	$grade_or = array();
	$grade_ia = array();
	$gradepoints_tw = array();
	$overall_ese = array();
	$overall_tw = array();
	$creditsearned_th = array();
	$creditsearned_tw = array();
	$gradepoints_th = array();
	$gradepoints_tw = array();
	$cxg_th = array();
	$cxg_tw = array();
	$pointer_sgpi = array();
	$pointer_cgpi = array();
	$total_creditsearned_th = 0;
	$total_creditsearned_tw = 0;
	
	echo "<center>ENTRIES RECORDED FOR FOLLOWING SEMESTERS : ";
	while($row_student_total = mysqli_fetch_array($res_student_total))
	{
		$passinone[$i]=$row_student_total['passinone'];
		$seat[$i] = $row_student_total['seat'];
		$branch = $row_student_total['branch'];
		$pointer_sgpi[$i] = $row_student_total['pointer_sgpi'];
		$pointer_cgpi[$i] = $row_student_total['pointer_cgpi'];
		switch($branch)
		{
			case 'CE': $branch_nm="COMPUTER ENGINEERING";
			          
			break;
			case 'IT' :$branch_nm="INFORMATION TECHNOLOGY";
			
			break;
			case 'IN' :$branch_nm="INSTRUMENTATION";
			
			break;
			case 'ET' :$branch_nm="ELECTRONICS AND TELECOMMUNICATION";
		
			break;
			case 'EL' :$branch_nm="ELECTRONICS ENGINEERING";
		
			break;
		}

		$pattern[$i] = $row_student_total['pattern'];
		$year[$i] = $row_student_total['year'];
		$sem[$i] = $row_student_total['sem'];
		$remark[$i] = $row_student_total['remark'];
		echo $sem[$i]." ";	
		$i++;
	}
	echo "</center>";
	//PRINT BUTTON
	
	$arr = array('FIRST YEAR', 'SECOND YEAR', 'THIRD YEAR', 'FOURTH/FINAL YEAR');
	
	if($directsy=='N')
	{
		$yr=0;
	}
	else
	{
		$yr=1;
		echo "<center>DIRECT SECOND YEAR</center><br>";
	}
	?>
   
	<div id='marksheet' style="margin:7%">
	<?php
	ob_start();
	// CREATING TABLES
	
	//echo "<center><b><u>ROLL NUMBER -> ".$roll."</center></b></u>";
	
	for($i=0; $i<$count_student_total; $i++)
	{
		if($i%2==1) // FOR PRINTING 2 semesters on 1 Page
		{
			
			echo '<div style="page-break-after:always; margin-bottom:0">';
		}
		else
		{
			$total_obtained =0;
			$total_actual =0;
			echo '<br><b><center><h4>UNIVERSITY OF MUMBAI<br>';
			echo $arr[$yr++].'<br>';
		echo $branch_nm;
			echo'</b><br></h4></center>';
		}
		
		echo '<b><h4><center>SEMESTER - '.$sem_roman[$sem[$i]].'</b></h4></center>';
		if($i%2==0)
		{
			echo '</h4><p><b>STUDENT\'S NAME : </b>'.$name,'</p>';	
		}
		echo "<div ><div style='float:left;display:inline-block'> <b>UNIVERSITY OF MUMBAI SEAT NO : </b>".$seat[$i]."</div><div style='float:right;display:inline-block'><b> DATE OF PASSING : </b>".$year[$i].'</div></div>';
		//MAKING BASIC STRUCTURE OF TABLE
	?>
            <center>
            <br>
            <table border="1" width="100%">
            
            <tr>
                <td rowspan="3" style="font-size:11px;width:25%; text-align:center"> COURSE TITLE</td>
                <td rowspan="2" colspan="2"  style="font-size:9px; width:10%; text-align:center"> COURSE CREDITS</td>
                <td rowspan="1" colspan="7" style="font-size:9px; width:35%; text-align:center"> GRADE</td>
				
                <td rowspan="2" colspan="2"  style="font-size:9px; width:10%; text-align:center"> CREDITS EARNED (C)</td>
                <td rowspan="2" colspan="2" style="font-size:11px;text-align:center; width:10%"> GRADE POINTS (G)</td>
                <td rowspan="2" colspan="2" style="font-size:11px;text-align:center; width:10%"> C X G </td>
            </tr>
            
            <tr style="font-size:10px"> 
                
                <td rowspan="2" style="font-size:9px; width:5%; text-align:center">ESE </td>
                <td rowspan="2" style="font-size:9px; width:5%; text-align:center">OP </td>
                <td rowspan="2" style="font-size:9px; width:5%; text-align:center">OR </td>
                <td rowspan="2" style="font-size:9px; width:5%; text-align:center">IA </td>
                <td rowspan="2" style="font-size:9px; width:5%; text-align:center">TW </td>
                <td rowspan="1" colspan="2" style="font-size:9px; width:10%; text-align:center"> OVERALL </td>
				
            </tr>    
                
			<!-- THIRD ROW-->
            <tr>
				<td style="font-size:9px; width:5%; text-align:center">TH </td>
                <td style="font-size:9px; width:5%; text-align:center">TW/P </td>
				
				
				
				<td style="font-size:9px; width:5%; text-align:center">ESE </td>
                <td style="font-size:9px; width:5%; text-align:center">TW </td>
				
				
				
				<td style="font-size:9px; width:5%; text-align:center">TH </td>
                <td style="font-size:9px; width:5%; text-align:center">TW/P </td>
                
				<td style="font-size:9px; width:5%; text-align:center">TH </td>
                <td style="font-size:9px; width:5%; text-align:center">TW </td>
                
				<td style="font-size:9px; width:5%; text-align:center">TH </td>
                <td style="font-size:9px; width:5%; text-align:center">TW </td>
				
			</tr>
			            
           
        <?php 		
		$sql_course_table = "SELECT * FROM course_table_rev WHERE branch='$branch' AND pattern='$pattern[$i]' AND sem=$sem[$i]";
		//echo $sql_course_table;
		$res_course_table = mysqli_query($connect, $sql_course_table);
		
		$sql_elective_subjectname="SELECT * from course_table_rev where branch='$branch' AND pattern='$pattern[$i]' AND sem=$sem[$i] And subject like 'Elective%'";
		$res_elective_subjectname=mysqli_query($connect,$sql_elective_subjectname);
		$row_elective_subjectname=mysqli_fetch_array($res_elective_subjectname);
		$electivename=$row_elective_subjectname[3];
		//echo $electivename;
		$sql_elective_subjectnamenew="SELECT * from elective where roll='$roll' and sem=$sem[$i]";
		$res_elective_subjectnamenew=mysqli_query($connect,$sql_elective_subjectnamenew);
		$row_elective_subjectnamenew=mysqli_fetch_array($res_elective_subjectnamenew);
		$electivenamenew=$row_elective_subjectnamenew[2];
		//echo $electivenamenew;
		
		$j=0;
		while($row_course_table = mysqli_fetch_array($res_course_table))
		{
			$subject[$j] = $row_course_table['subject'];
			$coursecredits_th[$j] = $row_course_table['coursecredits_th'];
			$coursecredits_tw[$j] = $row_course_table['coursecredits_tw'];
			
			
			
			$sql_student_marks = "SELECT * FROM student_marks_rev WHERE seat=$seat[$i] AND roll='$roll' AND branch='$branch' AND pattern='$pattern[$i]' AND subject='$subject[$j]' ";
			//echo $sql_student_marks;
			$res_student_marks = mysqli_query($connect, $sql_student_marks);
			$row_student_marks = mysqli_fetch_array($res_student_marks);
			
			$grade_ese[$j] = $row_student_marks['grade_ese'];
			$grade_op[$j] = $row_student_marks['grade_op'];
			$grade_or[$j] = $row_student_marks['grade_or'];
			$grade_ia[$j] = $row_student_marks['grade_ia'];
			$grade_tw[$j] = $row_student_marks['grade_tw'];
			$overall_ese[$j] = $row_student_marks['overall_ese'];
			$overall_tw[$j] = $row_student_marks['overall_tw'];
			$creditsearned_th[$j]  = $row_student_marks['creditsearned_th'];
			$creditsearned_tw[$j]  = $row_student_marks['creditsearned_tw'];
			$gradepoints_th[$j] = $row_student_marks['gradepoints_th'];
			$gradepoints_tw[$j] = $row_student_marks['gradepoints_tw'];
			$cxg_th[$j] = $row_student_marks['cxg_th'];
			$cxg_tw[$j] = $row_student_marks['cxg_tw'];
			
			
			
			//PRINTING THE SUBJECTS WITH MIN MAX AND OBTAINED MARKS
			echo '<tr><td align="center" style="font-size:9px"> ';
			if($subject[$j]==$electivename)
			{
				echo $electivenamenew;
			}
			else
			{
				echo $subject[$j];
			}
			echo ' </td>';
			
			echo '<td align="center" style="font-size:9px;padding:5px"> '.$coursecredits_th[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$coursecredits_tw[$j].' </td>';
			
			echo '<td align="center" style="font-size:9px"> '.$grade_ese[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$grade_op[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$grade_or[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$grade_ia[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$grade_tw[$j].' </td>';
			
			echo '<td align="center" style="font-size:9px"> '.$overall_ese[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$overall_tw[$j].' </td>';
			
			echo '<td align="center" style="font-size:9px"> '.$creditsearned_th[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$creditsearned_tw[$j].' </td>';
			
			echo '<td align="center" style="font-size:9px"> '.$gradepoints_th[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$gradepoints_tw[$j].' </td>';
					
			echo '<td align="center" style="font-size:9px; padding:5px" > '.$cxg_th[$j].' </td>';
			echo '<td align="center" style="font-size:9px; padding:5px"> '.$cxg_tw[$j].' </td>';		
			
			
			$j++;
		}// END OF WHILE COURSE TABLE ROW TABLE
		
		
		echo '<tr>';
		
		
		echo '<td align="center" style="font-size:9px; padding:5px"><center>TOTAL</center> </td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$coursecredits_th_total = 0;
			for($k=0; $k<$j; $k++)
			{
				if($coursecredits_th[$k] > 0)
					$coursecredits_th_total += $coursecredits_th[$k];
			}
			echo $coursecredits_th_total;
		echo '</b></td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$coursecredits_tw_total = 0;
			for($k=0; $k<$j; $k++)
			{
				if($coursecredits_tw[$k] > 0)
					$coursecredits_tw_total += $coursecredits_tw[$k];
			}
			echo $coursecredits_tw_total;
		echo '</b></td>';
		
		echo '<td></td>';
		echo '<td></td>';
		echo '<td></td>';
		echo '<td></td>';
		echo '<td></td>';
		echo '<td></td>';
		echo '<td></td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$coursecredits_th_total = 0;
			for($k=0; $k<$j; $k++)
			{
				if($coursecredits_th[$k] > 0)
					$coursecredits_th_total += $coursecredits_th[$k];
			}
			echo $coursecredits_th_total;
		echo '</b></td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$coursecredits_tw_total = 0;
			for($k=0; $k<$j; $k++)
			{
				if($coursecredits_tw[$k] > 0)
					$coursecredits_tw_total += $coursecredits_tw[$k];
			}
			echo $coursecredits_tw_total;
		echo '</b></td>';
		
		echo '<td></td>';
		echo '<td></td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$cxg_th_total = 0;
			for($k=0; $k<$j; $k++)
			{
				if($cxg_th[$k] > 0)
					$cxg_th_total += $cxg_th[$k];
			}
			echo $cxg_th_total;
		echo '</b></td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$cxg_tw_total = 0;
			for($k=0; $k<$j; $k++)
			{
				if($cxg_tw[$k] > 0)
					$cxg_tw_total += $cxg_tw[$k];
			}
			echo $cxg_tw_total;
		echo '</b></td>';
		
		echo '</tr>';
		
		
		
		
		
		echo "<tr></tr>";
		
		echo "<br><tr>";
		//$max_total_marks[$i] = $total_twmax + $total_thmax + $total_ormax + $total_iamax+$total_prmax;	
		
		echo ' </table>
            </center><br>';

		//echo "<tr>";
		//$row_student_total = mysqli_fetch_array($res_student_total);
	


		echo '<span style="display:inline-block; width:20% ;"></span>';	echo "SGPI: ".$pointer_sgpi[$i];	echo '<span style="display:inline-block; width:50% ;"></span>';	
	//if($i==4||$i==5||$i==7)
		
			if($i==7)
		{
		echo "CGPI: ".$pointer_cgpi[$i];
		}
		
	
		
		if($i==5 && $directsy=='Y')
		{
		echo "CGPI: ".$pointer_cgpi[$i];
		}
		//echo "</tr>";
			
		
		
		
		//CHECK IF PASS IN ONE ATTEMPT
         if($passinone[$i]==1)
         {
         	$hastag='#';
         }
         else
         {
         	$hastag='';

         }
		
		
		//echo "<div style='display:inline-block; float:right'>PERCENTAGE = ".number_format($percentage[$i],2).'%</div>';
	
		
		
		if($i%2 == 1)
		{
			//echo '<br><br><div style="float:left;display:inline-block">TOTAL OF SEMESTER '.$sem_roman[($sem[$i]-1)].' & '.$sem_roman[$sem[$i]].' = '.$total_obtained.'/'.$total_actual.'</div>'; 
			//echo '<div style="float:right;display:inline-block;margin:0%;padding:0%">PERCENTAGE = '.number_format((float)$total_obtained*100/$total_actual,2).'%</div><br>';
			echo "<br>";
			if($remark[$i]!='' || $remark[$i]!=NULL)
				echo "<br><b>REMARKS : ".$remark[$i].'</b>';
			echo "<br>";
			echo "<br><center><p style='font-size:9px'>LEGENDS USED : Lec-Lecture, ESE-End Sem Exam, OP-Oral & Practical, OR-Oral, IA- Internal Assesment, TH-Theory, TW-Termwork, P-Practical, SGPI-Semester Grade Performance Index, CGPI-Cummulative Grade Performance Index, --Not Applicable </p></center>";
			echo "</div>";
		}
		
	}// END OF FOR LOOP FOR TABLES
	
// END OF ELSE
$_SESSION['contents'] = ob_get_contents();
$_SESSION['roll'] = $roll;
ob_flush();
?>
</div>



<script>
function printPage(id) {
    //var html='<html><center><br><img src="../logo.png"/></center><br>';
	var html;
    html+= document.getElementById(id).innerHTML;
    html+="</html>";
	
	//var newhtml = html;
	//html.style.fontSize = "xx-large";
    var printWin = window.open('','','left=0,top=0,width=1200,height=800,toolbar=1,scrollbars=1,status =1');
    printWin.document.write(html);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();
}
</script>
</div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>