<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documents</title>
</head>
<body>
	<?php
			include('header_admin.php');
	?>
	<div class = "row"><center><!--<input type="button" class="button" value="PRINT" onclick="PrintDiv();"></input></center><div>~!-->
		<?php
		$roll=$_SESSION['roll'];
			/*//echo '<br><br><br><br><br><br>';
			ob_start();
			//window.print()
			$roll = $_COOKIE["roll"];

			$count = 0;
			echo '<div id = "divToPrint">';
			$files=8;
			while($files > $count)
			{	
				$count++;
				//echo '<div class="col-md-6" align = "center"><img src="C:/xampp/htdocs/transcript/Documents/Transcript/Unverified/'.$roll.'/doc'.$count.'.jpg" align="center" height="600px" width="500px" style="padding-		bottom:20px"></div>';
				echo "<br><a target='_blank' href='../Documents/Transcript/Unverified/$roll/sem".$count.".pdf' ><button class='button'>SEMESTER $count</button></a>";
			}
			//echo "<br>";
			echo "<br><a target='_blank' href='../Documents/Transcript/Unverified/$roll/gregmat.pdf' ><button class='button'>GRE / GMAT</button></a>";
			echo "<br><a target='_blank' href='../Documents/Transcript/Unverified/$roll/passport.pdf' ><button class='button'>PASSPORT</button></a>";
			echo "<br><a target='_blank' href='../Documents/Transcript/Unverified/$roll/payment.pdf' ><button class='button'>PAYMENT DETAILS</button></a>";*/
			echo "<br><a target='_blank' href='../Documents/Transcript/Unverified/$roll/$roll.zip' ><button class='button'>DOWNLOAD ZIP</button></a>";
			$_SESSION['email_contents'] = ob_get_contents();
			$_SESSION['roll'] = $roll;
			echo '</div>';
			ob_flush();
	?>
	<!--
 <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=700,height=700');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
 -->
</body>
</html>
