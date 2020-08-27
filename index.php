<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transcript RAIT | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <script src="bootstrap/jquery-2.2.3.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
       
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
	 
        <a href="index.php"><b>RAIT  TRANSCRIPT </b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
	   <center><img src="raitlogosnip.jpg"/><br></center><br>
        <p class="login-box-msg">Sign in to start your session</p>
        <form  method = "POST" action = "authenticate.php">
          <div class="form-group has-feedback">
            <input type="text" name="userid" class="form-control" placeholder="Roll No/User Id" required>
            <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
              
            <!-- /.col -->
          </div>
        

        <div class="social-auth-links text-center">
		<button type="submit" class="btn bg-maroon btn-block btn-flat">Sign In</button>
		<br>
          <p>- OR -</p>
		  <a href="register.php" class="btn btn-block  bg-navy btn-flat"> Register Now</a>
          <a href="forgot_password.php" class="btn btn-block bg-olive btn-flat"> Forgot Password</a>
          
		  <button class="btn btn-block btn-facebook btn-flat"  data-toggle="modal" data-target="#myModal101"> Payment Details</a>
          <!--
		  <a href="#" class="btn btn-block btn-google btn-flat"> Pay Online</a>!
		  -->
		  <button class="btn btn-block btn-google btn-flat" data-toggle="modal" data-target="#myModal102"> Contact Details</a>
        </div><!-- /.social-auth-links -->

        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

	
	
	
	<div class="modal fade" id="myModal101" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Payment Details</h4>
      </div>
      <div class="modal-body">
        <b>Payment Information</b><br><br>
        1)The transcript charges are as follows:<br> 
              Rs 1000/- for Digitally Signed Transcript.<br><br>

        2) Please make the payment on the<br>
           Saving Bank Account No. 017010100000191.<br> 
           RTGS – NEFT: MCBL 0960017<br><br>

        3)Name of the Bank : The Mahanagar Co.Op Bank Ltd,<br>
          Plot No. 5, Sector-1, <br>
          Opposite D.Y. Patil College Nerul,<br>
          Navi Mumbai – 400 706<br>
          Maharashtra – India <br><br><br>
		  
		4) For Online Payment visit <a href="http://118.102.168.162:81/raitpay/"> www.rait.ac.in </a>

          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal102" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Details</h4>
      </div>
      <div class="modal-body">
        <b>Contact Information</b><br><br>
        Emaild id : alumni@rait.ac.in<br>
		Technical Team : transcript.rait@gmail.com<br>
		                 <!--9821954080 <br>-->
		Admin Team: 022 27709574/ 022 27709505
        
          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>
	
	
    
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    
  </body>
</html>
