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
		<?php

echo '<div class="box box-danger" style="width:50%">';
	$n = 0;
	$query="select roll FROM current_status where status = '1'";
	$res=@mysql_query($query);
	while($row = @mysql_fetch_array($res))
	{
		$n++;
	}

	$query="select roll FROM current_status where status = '1'";
	$res=@mysql_query($query);
	echo'<center>';
	
	echo '<table class="table">';

  	echo '<br><tr><h1>View Received Requests</h1></tr><br><br><tr>';
	
    echo '<td><CENTER> ROLL NUMBER</td>';
	$count = 1;
	while(($row = @mysql_fetch_array($res)) && ($n != 0))
	{
		$roll = $row['roll'];
		
		echo '<tr>';
		
		//set cookie for roll
		//setcookie("roll",$roll, time()+86400);
    	echo '<td><form method = "POST" action = "document_lists.php"><CENTER><input type="submit"  style="width:20%" class="btn btn-danger" name = "roll" value="'.$roll.'"></CENTER></form></td>';
		echo '</tr>';
		$n--;
		$count++;
	}
	echo '</tr>';
	echo '</table>';
	
	echo'<center>';
	echo '</div>';
	
?>


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>