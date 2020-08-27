<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VIEW SENT TRANSCRIPTS</title>
</head>

<body>
<?php
include('header_admin.php');
include('../connect.php');
$sql = "SELECT * FROM approved";
$res = mysql_query($sql);

echo '<center><div class="table-responsive col-md-10 col-md-offset-1"><table  class="table">'; // start a table tag in the HTML
echo "<tr><th> ROLL NUMBER </th><th> DATE APPROVED</th><th> VIEW SENT TRANSCRIPT</th></tr>";

while($row = mysql_fetch_array($res))
{   //Creates a loop to loop through results
echo "<tr><td>" . $row['roll'] . "</td><td>" . $row['date_approved'] . "</td><td>" . "<a href='http://10.0.0.4:8800/transcript/Documents/Transcript/Verified/".$row['roll']."/transcript.pdf '>TRANSCRIPT </a>" . "</td></tr>"; 
}

echo "</table></div></center>"; //Close the table in HTML


?>
</body>
</html>