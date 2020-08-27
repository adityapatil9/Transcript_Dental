<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transcript RAIT | Reset Password</title>
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
        <a href="index.php"><b>RAIT TRANSCRIPT</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Enter details to reset your password</p>
        <form  method = "POST" action = "reset_password1.php">
          <div class="form-group has-feedback">
            <input type="text" name="roll" class="form-control" placeholder="Roll No/User Id" required>
            <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Registered Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
         
          <div class="social-auth-links text-center">
          
		      <button type="submit" class="btn bg-olive btn-block btn-flat">Reset Password</button>
          
            </div><!-- /.social-auth-links -->

        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

	</body>
	</html>