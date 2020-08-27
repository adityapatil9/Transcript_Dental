<?php

session_start();
$file = $_SESSION['roll'].'.zip';
/*
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
*/

$zip_file = $_SESSION['path'];
 
header('Content-type: application/zip');
header('Content-disposition: filename="'.  $_SESSION['roll']. '.zip"');
header('Content-length:'. filesize($zip_file));
readfile($zip_file);
exit();

?>