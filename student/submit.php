<?php
include 'header.php';
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Submit Application
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<div class="box box-danger"><br>
         <?php
$roll=$_SESSION['roll'];
$flag=0;
//check if all marksheets are filled;

$sqlcheck="select * from application_complete where `roll`='$roll'";
//echo $sqlcheck;
$res=mysqli_query($connect, $sqlcheck);
while($row=mysqli_fetch_array($res))
{
	$i=1;
	while($i<9)
	{
		if($row[$i]==0)
		{
			$flag=$flag+1;
			echo "<center>Details not filled for Semester ".$i."<br></center>";
		
		}
		$i++;
	}
}
echo "<br>";
//Check if all documents are uploaded

$sqldoc="select * from student_documents where `roll`='$roll'";
$res=mysqli_query($connect, $sqldoc);
while($row=mysqli_fetch_array($res))
{
	$i=1;
	while($i<12)
	{
		if($row[$i] == NULL || $row[$i] == '')
		{

			$flag=$flag+1;
			if($i<9)
			{
				echo "<center>Document not uploaded for Semester ".$i."<br></center>";
			}
			else
			{
				
				if($i==9)
				{
					echo "<br>";
					echo "<center>GRE/GMAT Scorecard not uploaded"."<br></center>";
				}
				else if($i==10)
				{
					echo "<center>Passport not uploaded"."<br></center>";
				}
				else
				{
					echo "<center>Payment Proof not uploaded"."<br></center>";
					echo "<br>";
				}
			}
			
		}
		$i++;
	}
}
$totalsteps=19;
$remainingsteps=$totalsteps-$flag;


//echo "REMAINING STEPS ".$remainingsteps;
//echo "FLAG ".$flag;

echo "<br><center>Progress : <progress class='red' value=$remainingsteps max=$totalsteps></progress></center><br>";


echo "<center>Are you sure you want to really submit your application?<br>";
echo "<br><a href='confirmsubmit.php'><button class='btn btn-danger'>Yes, I am sure</button></a></center><br>";
/*if($flag==0)
{
	echo "Your Application Has Been Sent";
	$sqlstatus="update current_status set `status`=1 where `roll`='$roll'";
	
	$qury=mysql_query($sqlstatus);
		if(!$qury)
 	 	{	 
   				echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		
		else
  		{
				echo "Successful";	
				//header('Location:../index.php');
		}
}*/


?>
</div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>
