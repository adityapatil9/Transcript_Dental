<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Sent Transcripts
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		<div class="box box-danger" style="width:50%">
<?php

$sql = "SELECT * FROM approved";
$res = mysqli_query($connect,$sql);

echo '<center><div class="table-responsive"><table  class="table">'; // start a table tag in the HTML
echo "<tr><th> ROLL NUMBER </th><th> DATE APPROVED</th><th> VIEW SENT TRANSCRIPT</th></tr>";

while($row = mysqli_fetch_array($res))
{   //Creates a loop to loop through results
echo "<tr><td>" . strtoupper($row['roll']) . "</td><td>" . $row['date_approved'] . "</td><td>" . "<a href='http://10.0.0.4:8800/transcript/Documents/Transcript/Verified/".$row['roll']."/transcript.pdf '>TRANSCRIPT </a>" . "</td></tr>"; 
}

echo "</table></div></center>"; //Close the table in HTML


?></div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>