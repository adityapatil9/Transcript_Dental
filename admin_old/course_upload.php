<html>
<head>
<title> UPLOAD COURSE </title>
</head>
<body>
<?php
include ('header_admin.php');
if(isset($_POST["submit"]))
{
	$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		$course_array = array();
		while(($filesop = fgetcsv($handle, 50000, ",")) !== false)
		{
			$branch = $filesop[0];
			$pattern = $filesop[1];
			$sem = $filesop[2];
			$subject = $filesop[3];
			$lec_week = $filesop[4];
			$prac_week = $filesop[5];
			$tw_max = $filesop[6];
			$tw_min = $filesop[7];
			$th_max = $filesop[8];
			$th_min = $filesop[9];
			$pr_max = $filesop[10];
			$pr_min = $filesop[11];
			$or_max = $filesop[12];
			$or_min = $filesop[13];
			$ia_max = $filesop[14];
			$ia_min = $filesop[15];
			
			
			// CHECKING IF COURSE ALREADY PRESENT
			$query_already_present = "SELECT * FROM course_table WHERE branch = '$branch' AND pattern='$pattern' AND sem='$sem' AND subject='$subject'";
			//echo $query_already_present;
			$count = mysql_num_rows(mysql_query($query_already_present));
			if($count == 0)
			{
				for($k=0; $k<15; $k++)
				{
					if($filesop[$k]== NULL || $filesop[$k]=='')
						$filesop[$k] == 0;
				}
				
				//REASSIGNING AFTER CHECKING OF NULL VALUES
				$branch = $filesop[0];
				$pattern = $filesop[1];
				$sem = $filesop[2];
				$subject = $filesop[3];
				$lec_week = $filesop[4];
				$prac_week = $filesop[5];
				$tw_max = $filesop[6];
				$tw_min = $filesop[7];
				$th_max = $filesop[8];
				$th_min = $filesop[9];
				$pr_max = $filesop[10];
				$pr_min = $filesop[11];
				$or_max = $filesop[12];
				$or_min = $filesop[13];
				$ia_max = $filesop[14];
				$ia_min = $filesop[15];
				
				
				$query = "INSERT INTO `course_table`(`branch`, `pattern`, `sem`, `subject`, `lec_week`, `prac_week`, `twmax`, `twmin`, `thmax`, `thmin`, `prmax`, `prmin`, `ormax`, `ormin`, `iamax`, `iamin`) VALUES ('$branch', '$pattern', $sem, '$subject', $lec_week, $prac_week, $tw_max, $tw_min, $th_max, $th_min, $pr_max, $pr_min, $or_max, $or_min, $ia_max, $ia_min)";
				//echo $query;
				$sql = mysql_query($query);
				$c = $c + 1;
			}
			else
			{
				$course_array[] = $branch." - ".$pattern." - ".$sem." - ".$subject;
			}
		}
		
			$count = sizeof($course_array);
			if($count == 0)
			{
				echo "You database has imported successfully. You have inserted ". $c ." records";
			}
			else
			{
				echo '<script type="text/javascript"> alert("'.$count.' ENTRIES ALREADY PRESENT");</script>';
				echo "ENTRIES ALREADY PRESENT";
				for($i=0;$i<$count; $i++)
				{
					echo "<br>".$course_array[$i]; 
				}
			}
}


?>

<form class="form-horizontal" name="import" method="post" enctype="multipart/form-data">
       <div class="well" style="padding:3%;width:50%;margin-left:25%">
	  <center> <div >

    	<input type="file" name="file" /><br><br><br>
		
        <input type="submit" class="button" name="submit" value="UPDATE" ></center>
	    </div></div>
</form>

</body>
</html>