<html>
<head>
<title>ABC</title>


<script>

function printPage(id) {
    var html='<html><center><img src="../logo.png" width="248" height="95"/></center>';
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
	include ('header_admin.php');
	if(!isset($_POST['cover']))
	{
		echo "<script> alert('Please fill Roll Number of student.. '); </script>";
	}
	else
	{
		
		//roll no. of student
		$roll1 = $_POST['roll'];
		echo '<script>document.title = "'.$roll1.'_coverletter";</script>';
		?>
		
	<?php

		$outward=$_POST['outward'];
		$checkedby=$_POST['checkedby'];
 		$sql="select * from student where roll = '$roll1'";
		$sql_row=@mysql_query($sql);
		$num_rows = mysql_num_rows($sql_row);
		if($num_rows > 0)
		{
			while($sql_res=@mysql_fetch_array($sql_row))
			{
				//student full name
				$name =  $sql_res['name_full'];
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
					case 'IN' :$branch="Instrumentation";
					break;
					case 'ET' :$branch="Electronics and Telecommunication";
					break;
					case 'EN' :$branch="Electronics";
					break;
				}

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
					echo '<center><h4><b><u>TRANSCRIPT</u><br><br>

UNIVERSITY OF MUMBAI<br>
BACHELOR OF ENGINEERING<br>

<u>'.$branch.'</u></b></h4></center><br><br>
<table border=0><b>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name					</td> <td> &nbsp; : '.$name.'</td></tr>    
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll No. 				</td> <td> &nbsp; : '.$roll1.'</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Period of Study			</td> <td> &nbsp; : '.$starting_year.' – '.$passing_year.'</td></tr>

</b></table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Transcript issued for Semester : III to VIII</b>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Award system and other relevant information about the University</b><br>
<ul>
<br>
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

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RAIT/Transcript/SS/Exam/'.$outward.'<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issued on:   '.date("d/m/Y") .'<br><br>
     
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:  	'.$checkedby.'
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

<u>'.$branch.'</u></b></h4></center><br><br>
<table border=0><b>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name					</td> <td> &nbsp; : '.$name.'</td></tr>    
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll No. 				</td> <td> &nbsp; : '.$roll1.'</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Period of Study			</td> <td> &nbsp; : '.$starting_year.' – '.$passing_year.'</td></tr>
</b></table>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Award system and other relevant information about the University</b><br>
<ul>
<br>
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

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RAIT/Transcript/SS/Exam/'.$outward.'<br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issued on:  '.date("d/m/Y") .'<br><br>
     
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:  	'.$checkedby.'
</div>';
				}
			}
		}
		
		else
		{
			echo "<script> alert('student not found.. '); </script>";
		}
	}	
?>
<center><div class="no-print" ><input type="button" class="button" value="Print Cover letter"  onClick="window.print();" ></input></div></center>

</body>
</html>

