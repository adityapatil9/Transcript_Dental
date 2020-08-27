<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transcript RAIT | Register</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <script src="bootstrap/jquery-2.2.3.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

 
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="index.php"><b>RAIT TRANSCRIPT</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register</p>
        <form action="register_action.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="roll" placeholder="Roll Number" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
          <div class="form-group has-feedback">
            <input type="password" name="c_pass" class="form-control" placeholder="Retype password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="name_full" placeholder="Full Name (First Middle Last)" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		   <div class="form-group has-feedback">
            <input type="email" class="form-control" name ="email_id" placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
		  
		   <div class="form-group has-feedback">
            <input type="tel" name="telM" class="form-control" placeholder="Mobile Number" max="10000000000" min="7000000000" required>
            <span class="glyphicon  glyphicon-phone form-control-feedback"></span>
          </div>
		  
          <div class="form-group has-feedback">
            <input type="tel" name="telR" class="form-control" placeholder="Residence Number" max="10000000000" min="7000000000" required>
            <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
          </div>
          
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="present_addr" placeholder="Present Address" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
		  
		    <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="permanent_addr" placeholder="Permanent Address" required>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name ="present_status" placeholder="Current Status (Student/Working)" required>
            <span class="glyphicon glyphicon-play form-control-feedback"></span>
          </div>
		  
		  
		  <div class="form-group has-feedback">
           <select class="form-control" name="branch" id="branch" required>
          <option value="" disabled selected>Select Department</option>
          <option value="CE">Computer Engineering</option>
		  <option value="IT">Information Technology</option>
		  <option value="IN">Instrumentation</option>
          <option value="EL">Electronics</option>
		  <option value="ET">Electronics and Telecommunication</option>
    	</select>
          </div>
		  
		  <div class="form-group has-feedback">
           <select class="form-control" name="directsy"  required>
          <option value="" disabled selected>Admission Type</option>
          <option value="N">First Year</option>
		  <option value="Y">Direct Second Year</option>
		  </select>
		  </div>
		  
		   <div class="form-group has-feedback">
           <select class="form-control" name="pattern"  required>
          <option value="" disabled selected>Select Pattern</option>
          <option value="REV2012">REV 2012</option>
		  <option value="OLD2007">OLD 2007</option>
          <option value="OLD2002">OLD 2002</option>
		  <option value="OLD2000">OLD 2000</option>
		  <option value="OLD1999">OLD 1999</option>
		  <option value="OLD1998">OLD 1998</option>
		  <option value="OLD1997">OLD 1997</option>
		  <option value="OLD1996">OLD 1996</option>
		  <option value="OLD1995">OLD 1995</option>
		  <option value="OLD1994">OLD 1994</option>
		  <option value="OLD1993">OLD 1993</option>
		  <option value="OLD1992">OLD 1992</option>
		  <option value="OLD1991">OLD 1991</option>
		  <option value="OLD1990">OLD 1990</option>
		  <option value="OLD1989">OLD 1989</option>
		  <option value="OLD1988">OLD 1988</option>
		  </select>
		  </div>
		  
		  <div class="form-group has-feedback">
            <input type="number" name="year_of_pass" class="form-control" placeholder="Year of Passing (Eg: 2008)" min="1980" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
		  
		  
		 
		 
		  
		   
		 
		  
		  
		  
         
              <button type="submit" class="btn bg-navy btn-block btn-flat">Register</button>
            
        </form>
<br>
        
        <center><a href="index.php" class="text-center">Already Registered? Log in</a></center>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

   !-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
