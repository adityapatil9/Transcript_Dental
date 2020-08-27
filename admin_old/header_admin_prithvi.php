<html>
<head>
<meta charset="utf-8">
<title></title>


<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/form.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="..\js/bootstrap.min.js"></script>
  <script src="../css/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/header.css">

</head>

<body>
<?php
session_start();
if(!isset($_SESSION['admin']))
//if(isset($_SESSION['admin']))
{
	echo "<script> alert('Please login with correct credentials.. ') </script>";
	header("url : ../");
}
else
{
include('../connect.php');
?>
<center ><div style="padding:25px;">
                
                <img  src="../logo.png" alt="RAIT LOGO">
                </div>
                </center>
                <nav class="navbar navbar-default" >
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><label style="font-size:24px; color:#800000; float:left" align="left"><?php echo 'Welcome, Admin' ?></label></a>
    </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

                
                
                    <li><a href="index.php" >HOME</a></li>
					<li><a href="transcript_list.php">VIEW REQUESTS</a></li>
                    <li><a href="check_docs.php">VERIFY REQUESTS</a></li>
					<li><a href="upload_signed.php" >UPLOAD</a></li>
					<li><a href="send_transcript.php" >SEND TRANSCRIPT</a></li>
					<li><a href="view.php" >VIEW SENT</a></li>
					<li><a href="../forgot_password.php" >CHANGE PASSWORD</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../logout.php" style="float:right"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                </ul>
        </div>
    </div>
</div>
</nav>
<?php
	
}

?>

</body>
</html>

