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
	$sql_student_total = "SELECT * FROM student_total WHERE roll='$roll' ORDER BY sem ASC";
	$res_student_total = mysqli_query($connect,$sql_student_total);
	$count_student_total = mysqli_num_rows($res_student_total);
	
	//set cookie for roll
	//setcookie("roll",$roll, time()+3600);

	$roll = $_SESSION['roll'];
	$sql_name = "SELECT * FROM student WHERE roll='$roll'";
	$res_name = mysqli_query($connect,$sql_name);
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
	$total = array();
	$percentage = array();
	$remark = array();
	$passinone=array();
	//FOR SMESTER TABLES
	$subject = array();
	$lec_week = array();
	$prac_week = array();
	$twmax = array();
	$twmin = array();
	$thmax = array();
	$thmin = array();
	$prmax = array();
	$prmin = array();
	$ormax = array();
	$ormin = array();
	$iamax = array();
	$iamin = array();
	$twob = array();
	$thob = array();
	$prob=array();
	$orob = array();
	$iaob = array();
	$max_total_marks = array();
	
	echo "<center>ENTRIES RECORDED FOR FOLLOWING SEMESTERS : ";
	while($row_student_total = mysqli_fetch_array($res_student_total))
	{
		$passinone[$i]=$row_student_total['passinone'];
		$seat[$i] = $row_student_total['seat'];
		$branch = $row_student_total['branch'];
		switch($branch)
		{
			case 'CE': $branch_nm="COMPUTER ENGINEERING";
			          
			break;
			case 'IT' :$branch_nm="INFORMATION TECHNOLOGY ENGINEERING";
			
			break;
			case 'IN' :$branch_nm="INSTRUMENTATION ENGINEERING";
			
			break;
			case 'ET' :$branch_nm="ELECTRONICS AND TELECOMMUNICATION ENGINEERING";
		
			break;
			case 'EL' :$branch_nm="ELECTRONICS ENGINEERING";
		
			break;
		}





		$pattern[$i] = $row_student_total['pattern'];
		$year[$i] = $row_student_total['year'];
		$sem[$i] = $row_student_total['sem'];
		$total[$i] = $row_student_total['total'];
		$percentage[$i] = $row_student_total['percentage'];
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
	<center class="no-print"> <input type="button" class="btn btn-danger" style="width:50%" value="Print Transcripts" onclick="window.open('printing.php');"></input></center>
    <br>
   
	<div id='marksheet' style="margin:7%">
	<?php
	ob_start();
	// CREATING TABLES
	
	//echo "<center><b><u>ROLL NUMBER -> ".$roll."</center></b></u>";
	
	for($i=0; $i<$count_student_total; $i++)
	{
		if($i%2==1) // FOR PRINTING 2 semesters on 1 Page
		{
			
			echo '<div style="page-break-after:always; margin-bottom:0"><br>';
		}
		else
		{
			$total_obtained =0;
			$total_actual =0;
			echo '<b><center><h4>UNIVERSITY OF MUMBAI<br><br>';
			echo $arr[$yr++].'<br><br>';
		echo $branch_nm;
			echo'</b><br><br></h4></center>';
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
                <td rowspan="2" style="font-size:11px;width:25%; text-align:center"> SUBJECTS</td>
                <td rowspan="2" style="font-size:9px; width:7%; text-align:center"> LECTS & TUTS / WEEK</td>
                <td rowspan="2" style="font-size:9px; width:7%; text-align:center"> PRACS / WEEK</td>
                <td colspan="3" style="font-size:11px;text-align:center; width:12%;"> TERM WORK</td>
                <td colspan="3" style="font-size:11px;text-align:center; width:12%"> THEORY</td>
                <td colspan="3" style="font-size:11px;text-align:center; width:12%"> PRACTICAL</td>
				<td colspan="3" style="font-size:11px;text-align:center; width:12%"> ORAL</td>
                <td colspan="3" style="font-size:11px;text-align:center; width:12%"> INTERNAL ASSESMENT</td>
            </tr>
            
            <tr style="font-size:10px">
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
				
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
            </tr>
			            
           
        <?php 		
		$sql_course_table = "SELECT * FROM course_table WHERE branch='$branch' AND pattern='$pattern[$i]' AND sem=$sem[$i]";
		//echo $sql_course_table;
		$res_course_table = mysqli_query($connect,$sql_course_table);
		
		$sql_elective_subjectname="SELECT * from course_table where branch='$branch' AND pattern='$pattern[$i]' AND sem=$sem[$i] And subject like 'Elective%'";
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
			$lec_week[$j] = $row_course_table['lec_week'];
			$prac_week[$j] = $row_course_table['prac_week'];
			$twmax[$j] = $row_course_table['twmax'];
			$twmin[$j] = $row_course_table['twmin'];
			$thmax[$j] = $row_course_table['thmax'];
			$thmin[$j] = $row_course_table['thmin'];
			$prmax[$j] = $row_course_table['prmax'];
			$prmin[$j] = $row_course_table['prmin'];
			$ormax[$j] = $row_course_table['ormax'];
			$ormin[$j] = $row_course_table['ormin'];
			$iamax[$j] = $row_course_table['iamax'];
			$iamin[$j] = $row_course_table['iamin'];
			
			
			$sql_student_marks = "SELECT * FROM student_marks WHERE seat=$seat[$i] AND roll='$roll' AND branch='$branch' AND pattern='$pattern[$i]' AND subject='$subject[$j]' ";
			//echo $sql_student_marks;
			$res_student_marks = mysqli_query($connect,$sql_student_marks);
			$row_student_marks = mysqli_fetch_array($res_student_marks);
			$twob[$j] = $row_student_marks['twob'];
			$thob[$j] = $row_student_marks['thob'];
			$prob[$j] = $row_student_marks['prob'];
			$orob[$j] = $row_student_marks['orob'];
			$iaob[$j] = $row_student_marks['iaob'];
			
			
			//PRINTING THE SUBJECTS WITH MIN MAX AND OBTAINED MARKS
			//echo '<tr><td align="center" style="font-size:9px"> '.$subject[$j].' </td>';
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
			echo '<td align="center" style="font-size:9px;padding:5px"> '.$lec_week[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$prac_week[$j].' </td>';
			
			if($twmax[$j] == 0 && $twmin[$j] == 0 )
			{
				$twob[$j] ='-';
				$twmin[$j] = '-';
				$twmax[$j] = '-';
			}
			echo '<td align="center" style="font-size:9px"> '.$twmax[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$twmin[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> <b>'.$twob[$j].'</b> </td>';
			
			if($thmax[$j] == 0 && $thmin[$j] == 0)
			{
				$thob[$j] ='-';
				$thmin[$j] = '-';
				$thmax[$j] = '-';
			}
			echo '<td align="center" style="font-size:9px"> '.$thmax[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$thmin[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> <b>'.$thob[$j].'</b> </td>';
			
			if($prmax[$j] == 0 && $prmin[$j] == 0)
			{
				$prob[$j] ='-';
				$prmin[$j] = '-';
				$prmax[$j] = '-';
			}
			echo '<td align="center" style="font-size:9px"> '.$prmax[$j].' </td>';
			echo '<td align="center"  style="font-size:9px"> '.$prmin[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> <b>'.$prob[$j].'</b> </td>';
			
			if($ormax[$j] == 0 && $ormin[$j] == 0)
			{
				$orob[$j] ='-';
				$ormin[$j] = '-';
				$ormax[$j] = '-';
			}
			echo '<td align="center" style="font-size:9px"> '.$ormax[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$ormin[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> <b>'.$orob[$j].'</b> </td>';
			
			if($iamax[$j] == 0 && $iamin[$j] == 0)
			{
				$iaob[$j] ='-';
				$iamin[$j] = '-';
				$iamax[$j] = '-';
			}
			echo '<td align="center" style="font-size:9px"> '.$iamax[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> '.$iamin[$j].' </td>';
			echo '<td align="center" style="font-size:9px"> <b>'.$iaob[$j].'</b> </td></tr>';
						
			$j++;
		}// END OF WHILE COURSE TABLE ROW TABLE
		
		
		echo '<tr>';
		
		echo '<td align="center" style="font-size:9px">';
			echo 'Total';
		echo '</td>';
		
		echo '<td align="center"  style="font-size:9px">';
			$total_lec_week = 0;
			for($k=0; $k<$j; $k++)
			{
				if($lec_week[$k] > 0)
					$total_lec_week += $lec_week[$k];
			}
			echo $total_lec_week;
		echo '</td>';
		
		echo '<td align="center"  style="font-size:9px">';
			$total_prac_week = 0;
			for($k=0; $k<$j; $k++)
			{
				if($prac_week[$k] > 0)
					$total_prac_week += $prac_week[$k];
			}
			echo $total_prac_week;
		echo '</td>';
		
		echo '<td align="center"  style="font-size:9px">';
			$total_twmax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($twmax[$k] > 0)
					$total_twmax+= $twmax[$k];
			}
			echo $total_twmax;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px"> ';
			$total_twmin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($twmin[$k] > 0)
					$total_twmin+= $twmin[$k];
			}
			echo $total_twmin;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$total_twob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($twob[$k] > 0)
					$total_twob+= $twob[$k];
			}
			echo $total_twob;
		echo '</b></td>';
		
		
		//FOR THEORY
		echo '<td align="center" style="font-size:9px">';
			$total_thmax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($thmax[$k] > 0)
					$total_thmax+= $thmax[$k];
			}
			echo $total_thmax;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px">';
			$total_thmin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($thmin[$k] > 0)
					$total_thmin+= $thmin[$k];
			}
			echo $total_thmin;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$total_thob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($thob[$k] > 0)
					$total_thob+= $thob[$k];
			}
			echo $total_thob;
		echo '</b></td>';
		
		//FOR PRACTICAL
		echo '<td align="center" style="font-size:9px">';
			$total_prmax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($prmax[$k] > 0)
					$total_prmax+= $prmax[$k];
			}
			echo $total_prmax;
		echo '</td>';
		echo '<td align="center" style="font-size:9px">';
			$total_prmin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($prmin[$k] > 0)
					$total_prmin+= $prmin[$k];
			}
			echo $total_prmin;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$total_prob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($prob[$k] > 0)
					$total_prob+= $prob[$k];
			}
			echo $total_prob;
		echo '</b></td>';
		
		//FOR ORAL 
		echo '<td align="center" style="font-size:9px">';
			$total_ormax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($ormax[$k] > 0)
					$total_ormax+= $ormax[$k];
			}
			echo $total_ormax;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px">';
			$total_ormin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($ormin[$k] > 0)
					$total_ormin+= $ormin[$k];
			}
			echo $total_ormin;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$total_orob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($orob[$k] > 0)
					$total_orob+= $orob[$k];
			}
			echo $total_orob;
		echo '</b></td>';
		
		
		//FOR IA
		echo '<td align="center" style="font-size:9px">';
			$total_iamax = 0;
			for($k=0; $k<$j; $k++)
			{
				if($iamax[$k] > 0)
					$total_iamax+= $iamax[$k];
			}
			echo $total_iamax;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px">';
			$total_iamin = 0;
			for($k=0; $k<$j; $k++)
			{
				if($iamin[$k] > 0)
					$total_iamin+= $iamin[$k];
			}
			echo $total_iamin;
		echo '</td>';
		
		echo '<td align="center" style="font-size:9px"><b>';
			$total_iaob = 0;
			for($k=0; $k<$j; $k++)
			{
				if($iaob[$k] > 0)
					$total_iaob+= $iaob[$k];
			}
			echo $total_iaob;
		echo '</b></td>';
		
		
		echo '</tr>';
		
		echo "<tr></tr>";
		
		echo "<br><tr>";
		$max_total_marks[$i] = $total_twmax + $total_thmax + $total_ormax + $total_iamax+$total_prmax;	
		
		echo ' </table>
            </center><br>';

		
		
		
		//CHECK IF PASS IN ONE ATTEMPT
         if($passinone[$i]==1)
         {
         	$hastag='#';
         }
         else
         {
         	$hastag='';

         }

		
		echo "<div style='display:inline-block; float:left'>TOTAL OF SEMESTER ".$sem_roman[$sem[$i]]." : ".$total[$i]." / ".($max_total_marks[$i]).' '.$hastag.'</div>'; 
		
		
		echo "<div style='display:inline-block; float:right'>PERCENTAGE = ".number_format($percentage[$i],2).'%</div>';
		
		$total_obtained += $total[$i];
		$total_actual += $max_total_marks[$i];
		
	
		
		
		if($i%2 == 1)
		{
			echo '<br><br><div style="float:left;display:inline-block">TOTAL OF SEMESTER '.$sem_roman[($sem[$i]-1)].' & '.$sem_roman[$sem[$i]].' = '.$total_obtained.'/'.$total_actual.'</div>'; 
			echo '<div style="float:right;display:inline-block;margin:0%;padding:0%">PERCENTAGE = '.number_format((float)$total_obtained*100/$total_actual,2).'%</div><br>';
			if($remark[$i]!='' || $remark[$i]!=NULL)
				echo "<br><b>REMARKS : ".$remark[$i].'</b>';
			echo "<br><center><p style='font-size:9px'>LEGENDS USED : Lec: Lecture, Prac: Practicals, Min: Minimum, Max: Maximum, Obt:  Obtained, #: Passed in One attempt, Engg: Engineering, Tuts: Tutorials, *: Grace Marks, P: Passed, $: Carried Over </p></center>";
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