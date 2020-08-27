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
	<div class = "box box-danger" style="width:50%"><center>
	<br><h1>Download Received Documents</h1><hr><!--<input type="button" class="btn btn-danger" value="PRINT" onclick="PrintDiv();"></input></center><div>~!-->
		<?php
		$roll=$_SESSION['roll'];
		echo "<center>Roll Number : ".strtoupper($roll).'</center><br>';
		$_SESSION['path'] = $url."\Documents\Transcript\Unverified\\$roll\\$roll.zip";
		?>
		<input type="button" class="btn btn-danger" value="DOWNLOAD" onclick="window.location='download.php'" />
		<?php
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
			//echo "<a target='_blank' href='../Documents/Transcript/Unverified/$roll/$roll.zip' ><button class='btn btn-danger'>DOWNLOAD ZIP</button></a><br><br>";
			/*
			$string = "C:\wamp\www\\transcript\Documents\Transcript\Unverified\\$roll\\$roll.zip";
			echo "<a target='_blank' href='$string' ><button class='btn btn-danger'>DOWNLOAD ZIP</button></a><br><br>";
			$_SESSION['email_contents'] = ob_get_contents();
			$_SESSION['roll'] = $roll;
			echo '</div>';
			ob_flush();
			*/
			
			
			
			/*
			header('Content-Description: File Transfer');
			header('Content-Type: application/force-download');
			header("Content-Disposition: attachment; filename=\"" . basename($roll) . "\";");
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($roll));
			ob_clean();
			flush();
			$string = "C:\wamp\www\\transcript\Documents\Transcript\Unverified\\$roll\\$roll.zip";
			readfile($string); //showing the path to the server where the file is to be download
			exit;
			*/
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

   </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      

   

   <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</html>