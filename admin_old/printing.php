<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/form.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="..\js/bootstrap.min.js"></script>
  <script src="../css/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/header.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">

<STYLE type="text/css" media="print">

	

table {
        font-size:100%;
    }

table tr td {
		align:"center";
 }
 
@media print {
.noPrint {
    display:none;
  }
}
</STYLE>


<script>
function myFunction() {
    window.print();
}
</script>

</head>
<body>
<?php
session_start();
$contents = $_SESSION['contents'];


echo '<title>'. $_SESSION["roll"].'_transcript </title>';
//echo '<center class="noPrint"> <input type="button" value="Print" onclick="window.print();"></input></center>';



echo $contents;




?>

<script>
myFunction();
</script>
</body>
</html>