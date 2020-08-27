<?php
include 'header.php';
$roll=$_SESSION['roll'];
//echo $roll;
echo $roll;
$_SESSION['zip'] = new ZipArchive();
$zip = $_SESSION['zip'];
$filename = $url."\Documents\Transcript\Unverified/$roll/$roll.zip";
//echo $filename."<br>";
if ($_SESSION['zip']->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("Cannot open <$filename>\n");
}

addtozip("sem1",$roll);
addtozip("sem2",$roll);
addtozip("sem3",$roll);
addtozip("sem4",$roll);
addtozip("sem5",$roll);
addtozip("sem6",$roll);
addtozip("sem7",$roll);
addtozip("sem8",$roll);
addtozip("passport",$roll);
addtozip("gregmat",$roll);
addtozip("payment",$roll);


echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$_SESSION['zip']->close();

echo "<center>Submit Successful</center>";
//header('Location:index.php');


function addtozip($filep,$roll)
{
	if (file_exists ( "../Documents/Transcript/Unverified/$roll/$filep.pdf"))
	{
		$_SESSION['zip']->addFile("../Documents/Transcript/Unverified/$roll/$filep.pdf","$filep.pdf");
	}
}
?>