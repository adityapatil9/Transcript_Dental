<html>




 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transcript RAIT | Admin Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
     <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
					
					<li><a href="course_upload.php" >COURSE UPLOAD</a></li>
					<li><a href="../forgot_password.php" >PASSWORD</a></li>
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

