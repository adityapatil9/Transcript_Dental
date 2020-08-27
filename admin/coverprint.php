<?php
	include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div  class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header no-print">
          <h1>
            Print Cover Letter
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
	<div  id='printing' style="width:100%">

<script>

function printPage(id) {
	
   var html='<html><img src="../raitlogosnip2.jpg" width="200" height="80" alt="RAIT LOGO"/>';
   // var html='';
	html+= document.getElementById(id).innerHTML;
    html+="</html>";
    var printWin = window.open('','','left=0,top=0,width=1000,height=1000,toolbar=1,scrollbars=1,status =1');
    printWin.document.write(html);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();
}
</script>


<STYLE type="text/css" media="print">

	
table {
        font-size:80%;
    }

@media print
{    
    .no-print, .no-print *
    {
        display: none ;
    }
}
</STYLE>


</head>
<body>
<?php

	/*
	name,roll,starting_year to last_year.
	*/
	
	if(!isset($_POST['cover']))
	{
		echo "<script> alert('Please fill Roll Number of student.. '); </script>";
	}
	else
	{
		
		//roll no. of student
		$roll1 = $_POST['roll'];
		echo '<script>document.title = "'.strtoupper($roll1).'_coverletter";</script>';
		?>
		
	<?php

		$outward=$_POST['outward'];
		$checkedby=$_POST['checkedby'];
		$verifiedby=$_POST['verifiedby'];
 		$sql="select * from student where roll = '$roll1'";
		$sql_row=@mysqli_query($connect,$sql);
		$num_rows = mysqli_num_rows($sql_row);
		if($num_rows > 0)
		{
			while($sql_res=@mysqli_fetch_array($sql_row))
			{
				//student full name
				$name =  $sql_res['name_full'];
				$pattern = $sql_res['pattern'];
				//year of passing
				$passing_year=$sql_res['year_of_pass'];
				$starting_year=$_POST['start_year'];
				$branch = $sql_res['branch'];
				switch($branch)
				{
					case 'CE': $branch="Computer Engineering";
					break;
					case 'IT' :$branch="Information Technology";
					break;
					case 'IN' :$branch="Instrumentation Engineering";
					break;
					case 'ET' :$branch="Electronics and Telecommunication Engineering";
					break;
					case 'EL' :$branch="Electronics Engineering";
					break;
				}
				$branch= strtoupper($branch);

				if($pattern != 'REV2012')
				{
					
					if($sql_res['directsy'] == 'Y')
					{
						/*$sql1="select * from student_total where roll = '$roll1'";
						$sql_row1=@mysql_query($sql1);
						while($sql_res1=@mysql_fetch_array($sql_row1))
						{
							//year of passing
							$starting_year=$sql_res1['year'];
						}*/
						?>
						<div id="letter" class="container-fluid">
						<?php
						echo '<center><h4><b><u>TRANSCRIPT</u><br>

						UNIVERSITY OF MUMBAI<br>
						BACHELOR OF ENGINEERING<br>

						<u>'.$branch.'</u></b></h4></center><br>
						<table border= 0 margin = 0><b>
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name					</td> <td> &nbsp; : '.$name.'</td></tr>    
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll No. 				</td> <td> &nbsp; : '.strtoupper($roll1).'</td></tr>
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Period of Study			</td> <td> &nbsp; : '.$starting_year.' – '.$passing_year.'</td></tr>

						</b></table>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Transcript issued for Semester : III to VIII</b>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Award system and other relevant information about the University</b><br>
						<ul>
						<li>	Medium of Instruction		:     English<br></li>
						<li>	Duration of Course		:     4 Years<br></li>
						<li>	Each academic year consists of two semester terms and the whole program thus consists of eight semesters.<br></li>
						<li>	Duration of lectures	           :      1 Hour<br></li>
						<li>	Course work is prescribed by University of Mumbai <br></li>
						<li>	All exams are set and graded by the University of Mumbai <br></li>
						<li>	Class is awarded at the end of each academic year as per the following range of absolute marks obtained:<br></li>
							<table border=0>
							<tr><td>Pass Class						</td> <td> &nbsp;:	40% and above but below 50%</td></tr>  
							<tr><td>Second Class					</td> <td> &nbsp;:	50% and above but below 60%</td></tr>  
							<tr><td>First Class 					</td> <td> &nbsp;: 	60% and above but below 70%</td></tr>  
							<tr><td>First Class with Distinction	</td> <td> &nbsp;:	70% and above</td></tr>  
						</table>

						<p>The minimum marks for passing in each subject are 40% of the maximum marks using the following guidelines:<br>
						I	Distinction, First and Second Class is awarded only if the student has cleared all subjects in both semester terms in one and the same sitting.
						II	The Class in First, Second and Third year is awarded by considering the aggregate marks of both the semesters of that year.<br> However, the award of class in Final year is based on the aggregate marks of V, VI, VII and VIII semesters (i.e. aggregate of the Final Year marks).</p>
						<li>	G.P.A (Grade Point Average) is not the achievement index for the student’s academic performance in the University of Mumbai.<br></li>
						<li>     Legends used : Lec: Lecture, Prac: Practicals, Min: Minimum, Max: Maximum, Obt: Obtained<br></li>
						<li>	Note: First Year Exempted, since completed 3 years Diploma from MSBTE / AUTONOMOUS  </li>
						</ul>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RAIT/Transcript/SS/Exam/'.$outward.'<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issued on:   '.date("d/m/Y") .'<br>
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:  	'.$checkedby.'
						<br>
				        Verified by:  	'.$verifiedby.'
						</div>';
					}
				
					else
					{
						/*$sql1="select * from student_total where roll = '$roll1'";
						$sql_row1=@mysql_query($sql1);
						while($sql_res1=@mysql_fetch_array($sql_row1))
						{
							//year of passing
							$starting_year=$sql_res1['year'];
						}*/
						
						echo '<div class="container-fluid">
						<center><h4><b><u>TRANSCRIPT</u><br>
						<br>
						UNIVERSITY OF MUMBAI<br>
						BACHELOR OF ENGINEERING<br>
						<u>'.$branch.'</u></b></h4></center>
						<table border=0><b>
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name					</td> <td> &nbsp; : '.$name.'</td></tr>    
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll No. 				</td> <td> &nbsp; : '.strtoupper($roll1).'</td></tr>
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Period of Study			</td> <td> &nbsp; : '.$starting_year.' – '.$passing_year.'</td></tr>
						</b></table>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Award system and other relevant information about the University</b><br>
						<ul>
						<li>	Medium of Instruction		:     English<br></li>
						<li>	Duration of Course		:     4 Years<br></li>
						<li>	Each academic year consists of two semester terms and the whole program thus consists of eight semesters.<br></li>
						<li>	Duration of lectures	           :      1 Hour<br></li>
						<li>	Course work is prescribed by University of Mumbai <br></li>
						<li>	All exams are set and graded by the University of Mumbai <br></li>
						<li>	Class is awarded at the end of each academic year as per the following range of absolute marks obtained:<br></li>
							<table border=0>
							<tr><td>Pass Class						</td> <td> &nbsp;:	40% and above but below 50%</td></tr>  
							<tr><td>Second Class					</td> <td> &nbsp;:	50% and above but below 60%</td></tr>  
							<tr><td>First Class 					</td> <td> &nbsp;: 	60% and above but below 70%</td></tr>  
							<tr><td>First Class with Distinction	</td> <td> &nbsp;:	70% and above</td></tr> 
						</table>

						<p>The minimum marks for passing in each subject are 40% of the maximum marks using the following guidelines:<br>
						I	Distinction, First and Second Class is awarded only if the student has cleared all subjects in both semester terms in one and the same sitting.
						II	The Class in First, Second and Third year is awarded by considering the aggregate marks of both the semesters of that year.<br> However, the award of class in Final year is based on the aggregate marks of VII and VIII semesters (i.e. aggregate of the Final Year marks).</p>
						<li>	G.P.A (Grade Point Average) is not the achievement index for the student’s academic performance in the University of Mumbai.<br></li>
						<li>     Legends used : Lec: Lecture, Prac: Practicals, Min: Minimum, Max: Maximum, Obt: Obtained<br></li>
						</ul>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RAIT/Transcript/SS/Exam/'.$outward.'<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issued on:  '.date("d/m/Y") .'<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:  	'.$checkedby.'
						<br>
						Verified by:  	'.$verifiedby.'
						</div>';
					}
				}
				else
				{
					//PUT REVISED COURSE-WORK HERE
					$sql_total_rev = "SELECT * FROM student_total_rev WHERE roll='$roll1' ORDER BY sem DESC LIMIT 1";
					$res_total_rev = mysqli_query($connect, $sql_total_rev);
					$sem = mysqli_fetch_array($res_total_rev)['sem'];
					$sem_roman = array('','I', 'II', 'III','IV','V','VI','VII','VIII');
					$sem = $sem_roman[$sem];
					if($sql_res['directsy'] == 'Y')
					{
						/*$sql1="select * from student_total where roll = '$roll1'";
						$sql_row1=@mysql_query($sql1);
						while($sql_res1=@mysql_fetch_array($sql_row1))
						{
							//year of passing
							$starting_year=$sql_res1['year'];
						}*/
						?>
						<div id="letter" class="container-fluid">
						<?php
						echo '<center><h3><b>TRANSCRIPT</h3><h4>UNIVERSITY OF MUMBAI<br>
						BACHELOR OF ENGINEERING<br>
						IN<br>

						<u>'.$branch.'</u></b></h4></center><br>
						<table border=0><b>
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Name</b>					</td> <td> &nbsp; <b>:&nbsp;'.$name.'</b></td></tr>    
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Roll No. 			</b>	</td> <td> &nbsp; <b>: '.strtoupper($roll1).'</b></td></tr>
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Period of Study		</b>	</td> <td> &nbsp; <b>: '.$starting_year.' – '.$passing_year.'</b></td></tr>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Transcript issued for Semester : III to '.$sem.'</b></td></tr></b>
						</b></table>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Award system and other relevant information about the University</b><br>
						<ul>
						<li>	Medium of Instruction		:     English<br></li>
						<li>	Duration of Course		:     4 Years<br></li>
						<li>	Each academic year consists of two semester terms and the whole program thus consists of eight semesters.<br></li>
						<li>	Duration of lectures	           :      1 Hour<br></li>
						<li>	Course work is prescribed by University of Mumbai <br></li>
						<li>	All examination papers are set and provided by the University of Mumbai.<br></li>

						<li>	Letter grades and their equivalent grade points are as follows:<br></li>
						
							<table border=0 width=100%>
							<tr><td><b>Percentage of Marks Obtained</b>        </td> <td> &nbsp;<b>Letter Grade</b> </td><td><b>Grade Point</b></td><td><b>Performance</b></td></tr>
							<tr><td>80.00 and above						</td> <td> &nbsp;O </td><td>10</td><td>Outstanding</td></tr>   
							<tr><td>75.00 and 79.99						</td> <td> &nbsp;A </td><td>9</td><td>Excellent</td></tr> 
							<tr><td>70.00 and 74.99						</td> <td> &nbsp;B </td><td>8</td><td>Very Good</td></tr> 
							<tr><td>60.00 and 69.99						</td> <td> &nbsp;C </td><td>7</td><td>Good</td></tr> 
							<tr><td>50.00 and 59.99						</td> <td> &nbsp;D </td><td>6</td><td>Fair</td></tr> 
							<tr><td>45.00 and 49.99						</td> <td> &nbsp;E </td><td>5</td><td>Average</td></tr> 
							<tr><td>40.00 and 44.99						</td> <td> &nbsp;P </td><td>4</td><td>Pass</td></tr> 
							<tr><td>Less than 40.00						</td> <td> &nbsp;F </td><td>0</td><td>Fail</td></tr> 
							
						</table>

						<br>ESE: End Semester exam, OP: oral and practical, OR: Oral, IA: Internal Assessment, TH: Theory, TW: Term Work, P: Practical 
						<br>

						SGPI: Semester Grade Performance Index, CGPI: Cumulative Grade Performance Index.<br>
                        Note: First Year Exempted, since completed 3 years Diploma from MSBTE / AUTONOMOUS  <br>

						RAIT/Transcript/SS/Exam/'.$outward.'<br>
						Issued on:   '.date("d/m/Y") .'<br>
						Checked by:  	'.$checkedby.'
						<br>
	
                        Verified by:  	'.$verifiedby.'
						</div>';
					}
					else
					{
						/*$sql1="select * from student_total where roll = '$roll1'";
						$sql_row1=@mysql_query($sql1);
						while($sql_res1=@mysql_fetch_array($sql_row1))
						{
							//year of passing
							$starting_year=$sql_res1['year'];
						}*/
						?>
						<div id="letter" class="container-fluid">
						<?php
						echo '<center><h3><b>TRANSCRIPT</h3><h4>UNIVERSITY OF MUMBAI<br>
						BACHELOR OF ENGINEERING<br>
						IN<br>

						<u>'.$branch.'</u></b></h4></center><br>
						<table border=0><b>
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Name</b>					</td> <td> &nbsp; <b>:&nbsp;'.$name.'</b></td></tr>    
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Roll No. 			</b>	</td> <td> &nbsp; <b>: '.strtoupper($roll1).'</b></td></tr>
						<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Period of Study		</b>	</td> <td> &nbsp; <b>: '.$starting_year.' – '.$passing_year.'</b></td></tr>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Transcript issued for Semester : I to '.$sem.'</b></td></tr></b>
						</b></table>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Award system and other relevant information about the University</b><br>
						<ul>
						<li>	Medium of Instruction		:     English<br></li>
						<li>	Duration of Course		:     4 Years<br></li>
						<li>	Each academic year consists of two semester terms and the whole program thus consists of eight semesters.<br></li>
						<li>	Duration of lectures	           :      1 Hour<br></li>
						<li>	Course work is prescribed by University of Mumbai <br></li>
						<li>	All examination papers are set and provided by the University of Mumbai.<br></li>
						<li>	Letter grades and their equivalent grade points are as follows:<br></li>
						<br>
							<table border=0 width=100%>
							<tr><td><b>Percentage of Marks Obtained</b>        </td> <td> &nbsp;<b>Letter Grade</b> </td><td><b>Grade Point</b></td><td><b>Performance</b></td></tr>
							<tr><td>80.00 and above						</td> <td> &nbsp;O </td><td>10</td><td>Outstanding</td></tr>   
							<tr><td>75.00 and 79.99						</td> <td> &nbsp;A </td><td>9</td><td>Excellent</td></tr> 
							<tr><td>70.00 and 74.99						</td> <td> &nbsp;B </td><td>8</td><td>Very Good</td></tr> 
							<tr><td>60.00 and 69.99						</td> <td> &nbsp;C </td><td>7</td><td>Good</td></tr> 
							<tr><td>50.00 and 59.99						</td> <td> &nbsp;D </td><td>6</td><td>Fair</td></tr> 
							<tr><td>45.00 and 49.99						</td> <td> &nbsp;E </td><td>5</td><td>Average</td></tr> 
							<tr><td>40.00 and 44.99						</td> <td> &nbsp;P </td><td>4</td><td>Pass</td></tr> 
							<tr><td>Less than 40.00						</td> <td> &nbsp;F </td><td>0</td><td>Fail</td></tr> 
							
						</table>

						<br>ESE: End Semester exam, OP: oral and practical, OR: Oral, IA: Internal Assessment, TH: Theory, TW: Term Work, P: Practical 
						<br>

						SGPI: Semester Grade Performance Index, CGPI: Cumulative Grade Performance Index.<br>


						RAIT/Transcript/SS/Exam/'.$outward.'<br>
						Issued on:   '.date("d/m/Y") .'<br>
						Checked by:  	'.$checkedby.'
						<br>
                        Verified by:  	'.$verifiedby.'
						
						</div>';
					}

					
				}
			}
		}
		
		else
		{
			echo "<script> alert('student not found.. '); </script>";
		}
	}	
?>
<center><div class="no-print" ><input type="button" class="btn btn-danger" value="Print Cover letter"  onClick='printPage("printing");' ></input></div><br><br></center>
</div>

     </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>
