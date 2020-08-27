<?php
session_start();

/*require_once("../dompdf/dompdf_config.inc.php");
$html = $_SESSION['email_contents'];
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$attachment = $dompdf->stream("transcript.pdf");
*/

/*
require("../html2pdf/html2pdf.class.php"); 
$content = $_SESSION['email_contents'];

    //require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
*/
/*
TCPDF
require_once('../tcpdf/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 049');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 049', PDF_HEADER_STRING);

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
$pdf->SetFont('helvetica', '', 10);

$pdf->AddPage();

$html = '<h1>Image alignments on HTML table</h1>
<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
<tr><td><img src="images/logo_example.png" border="0" height="41" width="41" /></td></tr>
<tr style="text-align:left;"><td><img src="images/logo_example.png" border="0" height="41" width="41" align="top" /></td></tr>
<tr style="text-align:center;"><td><img src="images/logo_example.png" border="0" height="41" width="41" align="middle" /></td></tr>
<tr style="text-align:right;"><td><img src="images/logo_example.png" border="0" height="41" width="41" align="bottom" /></td></tr>
<tr><td style="text-align:left;"><img src="images/logo_example.png" border="0" height="41" width="41" align="top" /></td></tr>
<tr><td style="text-align:center;"><img src="images/logo_example.png" border="0" height="41" width="41" align="middle" /></td></tr>
<tr><td style="text-align:right;"><img src="images/logo_example.png" border="0" height="41" width="41" align="bottom" /></td></tr>
</table>';;

$pdf->writeHTML($html, true, 0, true, 0);

$pdf->lastPage();
$pdf->Output('example_049.pdf', 'I');
*/
?>
?>

<?php
	include('../connect.php');

//session_start();
				//$string = $_SESSION['email_contents']; 
				$roll = $_POST['roll'];
				
				$sql_query_email = 'SELECT * FROM `student` WHERE roll="'.$roll.'"';
				$result_email = mysql_query($sql_query_email);
				$row_email = mysql_fetch_array($result_email);
				$email_student = $row_email['email_id'];
					
			
				$date = date("Y-m-d");
				$sql = "INSERT INTO approved VALUES ('$roll','$date')";
				$res = mysql_query($sql);
				$sql = "UPDATE `current_status` SET `status`=3 WHERE roll='$roll'";
				mysql_query($sql);
			
				$Content = "http://10.0.0.4:8800/transcript/Documents/Transcript/Verified/$roll/transcript.pdf";
				$Content.= "<br>\n \n http://10.0.0.4:8800/transcript/Documents/Transcript/Verified/$roll/coverletter.pdf";
				$Content.= "<br> http://10.0.0.4:8800/transcript/Documents/Transcript/Verified/certificate_principal.cer";
				$to = $email_student;
				$subject = "Transcript - ".date("d-m-Y");
				$txt = "TRANSCRIPT SUMMARY  ";
				$headers = "From: RAIT TRANSCRIPT " .'transcript.rait@gmail.com'. "\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				//$headers .="Content-Disposition: attachment; filename=\'".$attachment."'\"\r\n\r\n";

				if($to == NULL || $to=="")
					echo "<script type='text/javascript'>alert('PLEASE FILL IN CORRECT EMAIL ID.. REDIRECTING TO HOMEPAGE');</script>";
				else if(mail($to,$subject,$Content,$headers))
					echo "<script type='text/javascript'>alert('TRANSCRIPT EMAIL SENT.. REDIRECTING TO HOMEPAGE');</script>";
				else
					echo "<script type='text/javascript'>alert('TRANSCRIPT EMAIL NOT SENT.. PLEASE TRY AGAIN');</script>";
			
				header("refresh:0; url = index.php");
?>
