<?php
	include('header_admin.php');
	include('connect.php');

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
	
	echo '<table class="table" style="width:50%">';

  	echo '<br><tr><h1>View Recieved Requests</h1></tr><br><br><tr>';
	echo '<td>#</td>';
    echo '<td>&nbsp &nbsp ROLL NUMBER</td>';
	$count = 1;
	while(($row = @mysql_fetch_array($res)) && ($n != 0))
	{
		$roll = $row['roll'];
		
		echo '<tr>';
		echo '<td>'.$count.'</td>';
		//set cookie for roll
		//setcookie("roll",$roll, time()+86400);
    	echo '<td><form method = "POST" action = "document_lists.php"><div class="col-md-3"><input type="submit" class="btn btn-link" name = "roll" value="'.$roll.'"></div></form></td>';
		echo '</tr>';
		$n--;
		$count++;
	}
	echo '</tr>';
	echo '</table>';
	echo'<center>';
?>

