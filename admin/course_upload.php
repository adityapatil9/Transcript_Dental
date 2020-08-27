<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Import Course Data
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<?php

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
			$count = mysqli_num_rows(mysqli_query($connect,$query_already_present));
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
				$sql = mysqli_query($connect,$query);
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
<div class="box box-danger" style="width:50%">
<form  name="import" method="post" enctype="multipart/form-data">
      
	  <center> <div ><h2> Select CSV File</h2><hr>
<br>
    	<input type="file" name="file" /><br>
		
        <input type="submit" class="btn btn-danger" name="submit" value="UPDATE" ><br><br></center>
	   </div>
</form></div>
     </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>