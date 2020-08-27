<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Approve Transcripts</title>
</head>

<body>
<?php
	include ('header_admin.php');
	$roll = $_SESSION['roll'];
	$sql_student_total = "SELECT * FROM student_total WHERE roll='$roll'";
	$res_student_total = mysql_query($sql_student_total);
	$count_student_total = mysql_num_rows($res_student_total);
	
	//set cookie for roll
	//setcookie("roll",$roll, time()+3600);
	$roll = $_SESSION['roll'];

	echo "<center>MARKS ENTERED FOR ".$count_student_total.' SEMESTERS</center>';
	
	//FOR OVERALL RECORD OF THE STUDENT
	$i=0;
	$seat = array();
	$pattern = array();
	$year = array();
	$sem = array();
	$total = array();
	$percentage = array();
	$remark = array();
	
	//FOR SMESTER TABLES
	$subject = array();
	$lec_week = array();
	$prac_week = array();
	$twmax = array();
	$twmin = array();
	$thmax = array();
	$thmin = array();
	$opmax = array();
	$opmin = array();
	$iamax = array();
	$iamin = array();
	$twob = array();
	$thob = array();
	$opob = array();
	$iaob = array();
	$max_total_marks = array();
	
	echo "<center>ENTRIES RECORDED FOR FOLLOWING SEMESTERS : ";
	while($row_student_total = mysql_fetch_array($res_student_total))
	{
		$seat[$i] = $row_student_total['seat'];
		$branch = $row_student_total['branch'];
		$pattern[$i] = $row_student_total['pattern'];
		$year[$i] = $row_student_total['year'];
		$sem[$i] = $row_student_total['sem'];
		$total[$i] = $row_student_total['total'];
		$percentage[$i] = $row_student_total['percentage'];
		$remark[$i] = $row_student_total['remark'];
		echo $sem[$i]." ";	
		$i++;
	}echo "</center><br>";
	
	//PRINT BUTTON
	?>
	<center> <input type="button" class="button" value="Print Transcripts" onclick="window.print();"></input></center>
    <br>
   
	
	<?php
	ob_start();
	// CREATING TABLES
	for($i=0; $i<$count_student_total; $i++)
	{
		//MAKING BASIC STRUCTURE OF TABLE
	?>
            <center>
            <div id="ts_summary">
            <br><br>
            <table border="1">
            
           
            <tr>
            	<td colspan="15"><center><h3><strong>SEMSTER <?php echo htmlspecialchars($sem[$i]);?></strong></h3></center></td>
            </tr>
            
            <tr>
                <th rowspan="2"> SUBJECTS</th>
                <th rowspan="2"> LECTS & TUTS / WEEK</th>
                <th rowspan="2"> PRACS / WEEK</th>
                <th colspan="3"> TERM WORK</th>
                <th colspan="3"> THEORY</th>
                <th colspan="3"> ORAL + PRACTICALS </th>
                <th colspan="3" > INTERNAL ASSESMENT</th>
            </tr>
            
            <tr>
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
            </tr>
			            
           
        <?php 		
		$sql_course_table = "SELECT * FROM course_table WHERE branch='$branch' AND pattern='$pattern[$i]' AND sem=$sem[$i]";
		//echo $sql_course_table;
		$res_course_table = mysql_query($sql_course_table);
		$j=0;
		while($row_course_table = mysql_fetch_array($res_course_table))
		{
			$subject[$j] = $row_course_table['subject'];
			$lec_week[$j] = $row_course_table['lec_week'];
			$prac_week[$j] = $row_course_table['prac_week'];
			$twmax[$j] = $row_course_table['twmax'];
			$twmin[$j] = $row_course_table['twmin'];
			$thmax[$j] = $row_course_table['thmax'];
			$thmin[$j] = $row_course_table['thmin'];
			$opmax[$j] = $row_course_table['opmax'];
			$opmin[$j] = $row_course_table['opmin'];
			$iamax[$j] = $row_course_table['iamax'];
			$iamin[$j] = $row_course_table['iamin'];
			
			
			$sql_student_marks = "SELECT * FROM student_marks WHERE seat=$seat[$i] AND roll='$roll' AND branch='$branch' AND pattern='$pattern[$i]' AND subject='$subject[$j]' ";
			//echo $sql_student_marks;
			$res_student_marks = mysql_query($sql_student_marks);
			$row_student_marks = mysql_fetch_array($res_student_marks);
			$twob[$j] = $row_student_marks['twob'];
			$thob[$j] = $row_student_marks['thob'];
			$opob[$j] = $row_student_marks['opob'];
			$iaob[$j] = $row_student_marks['iaob'];
			
			
			//PRINTING THE SUBJECTS WITH MIN MAX AND OBTAINED MARKS
			echo '<tr><td> '.$subject[$j].' </td>';
			
			echo '<td> '.$lec_week[$j].' </td>';
			echo '<td> '.$prac_week[$j].' </td>';
			
			echo '<td> '.$twmax[$j].' </td>';
			echo '<td> '.$twmin[$j].' </td>';
			echo '<td> '.$twob[$j].' </td>';
			
			echo '<td> '.$thmax[$j].' </td>';
			echo '<td> '.$thmin[$j].' </td>';
			echo '<td> '.$thob[$j].' </td>';
			
			echo '<td> '.$opmax[$j].' </td>';
			echo '<td> '.$opmin[$j].' </td>';
			echo '<td> '.$opob[$j].' </td>';
			
			echo '<td> '.$iamax[$j].' </td>';
			echo '<td> '.$iamin[$j].' </td>';
			echo '<td> '.$iaob[$j].' </td></tr>';
			
			
			
			$j++;
		}// END OF WHILE COURSE TABLE ROW TABLE
		
		
		echo '<tr>';
		
		echo '<td>';
			echo 'TOTAL';
		echo '</td>';
		
		echo '<td>';
			$total_lec_week = 0;
			for($k=0; $k<$j; $k++)
			{
				if($lec_week[$k] > 0)
					$total_lec_week += $lec_week[$k];
			}
			echo $total_lec_week;
		echo '</td>';
		
		echo '<td>';
			$total_prac_week = 0;
			for($k=0; $k<$j; $k++)
			{
				if($prac_week[$k] > 0)
					$total_prac_week += $prac_week[$k];
			}
			echo $total_prac_week;
		echo '</td>';
		
		echo '<td>';
			$total_twmax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($twmax[$k] > 0)
					$total_twmax+= $twmax[$k];
			}
			echo $total_twmax;
		echo '</td>';
		
		echo '<td>';
			$total_twmin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($twmin[$k] > 0)
					$total_twmin+= $twmin[$k];
			}
			echo $total_twmin;
		echo '</td>';
		
		echo '<td>';
			$total_twob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($twob[$k] > 0)
					$total_twob+= $twob[$k];
			}
			echo $total_twob;
		echo '</td>';
		
		
		//FOR THEORY
		echo '<td>';
			$total_thmax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($thmax[$k] > 0)
					$total_thmax+= $thmax[$k];
			}
			echo $total_thmax;
		echo '</td>';
		
		echo '<td>';
			$total_thmin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($thmin[$k] > 0)
					$total_thmin+= $thmin[$k];
			}
			echo $total_thmin;
		echo '</td>';
		
		echo '<td>';
			$total_thob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($thob[$k] > 0)
					$total_thob+= $thob[$k];
			}
			echo $total_thob;
		echo '</td>';
		
		//FOR ORAL AND PRACTICAL
		echo '<td>';
			$total_opmax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($opmax[$k] > 0)
					$total_opmax+= $opmax[$k];
			}
			echo $total_opmax;
		echo '</td>';
		
		echo '<td>';
			$total_opmin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($opmin[$k] > 0)
					$total_opmin+= $opmin[$k];
			}
			echo $total_opmin;
		echo '</td>';
		
		echo '<td>';
			$total_opob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($opob[$k] > 0)
					$total_opob+= $opob[$k];
			}
			echo $total_opob;
		echo '</td>';
		
		
		//FOR IA
		echo '<td>';
			$total_iamax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($iamax[$k] > 0)
					$total_iamax+= $iamax[$k];
			}
			echo $total_iamax;
		echo '</td>';
		
		echo '<td>';
			$total_iamin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($iamin[$k] > 0)
					$total_iamin+= $iamin[$k];
			}
			echo $total_iamin;
		echo '</td>';
		
		echo '<td>';
			$total_iaob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($iaob[$k] > 0)
					$total_iaob+= $iaob[$k];
			}
			echo $total_iaob;
		echo '</td>';
		
		
		echo '</tr>';
		
		echo "<tr></tr>";
		
		echo "<br><tr>";
		$max_total_marks[$i] = $total_twmax + $total_thmax + $total_opmax + $total_iamax;	
		
		echo "<td colspan='7'>";
		echo "PERCENTAGE = ".$percentage[$i];
		echo "</td>";
		
		echo "<td colspan='8'>";
		echo "TOTAL OF SEMESTER ".$sem[$i]." : ".$total[$i]." / ".($max_total_marks[$i]); 
		echo "</td>";
		
		echo "</tr>";
		
		
		echo ' </table>
            </div>
            </center>';
		
	}// END OF FOR LOOP FOR TABLES
	
// END OF ELSE
$_SESSION['email_contents'] = ob_get_contents();
$_SESSION['roll'] = $roll;
ob_flush();
?>

<script>
function printPage(id) {
    var html='<html><center><br><img src="../logo.png" width="248" height="95"/></center><br>';
    html+= document.getElementById(id).innerHTML;
    html+="</html>";
    var printWin = window.open('','','left=0,top=0,width=1000,height=500,toolbar=1,scrollbars=1,status =1');
    printWin.document.write(html);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();
}
</script>

<?php
		
?>
</body>
</html>
