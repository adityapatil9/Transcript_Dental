<!DOCTYPE html>
<?php
session_start();
include '/../connect.php';
$roll=$_SESSION['roll'];
$sql1="select * from student where `roll`='$roll'";

$res=mysqli_query($connect,$sql1);
while($row=mysqli_fetch_array($res))
{
	$name_full=$row['name_full'];
}
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transcript RAIT | Student Home</title>
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
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-red-light sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>RAIT</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">RAIT TRANSCRIPT</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left">
              <center><p><?php echo $name_full;?></p>
              <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a></center>
            
          </div></div>

          <!-- search form (Optional) 
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Student Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
           
		   

		   
		   
		   
		   
            <li class="treeview">
              <a href="#"><i class="fa fa-pencil"></i> <span>Enter Marks</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
			  
			  <?php
			  

$sql="select * from current_status where `roll`='$roll'";
$res=mysqli_query($connect,$sql);

if($_SESSION['pattern']=='REV2012')
{
	while($row=mysqli_fetch_array($res))
	{
		if($row[1]==0)
		{
			if($_SESSION['directsy']=='N')
			{
				echo '<li><a href="marksheetrev.php?sem=1"> <span>Semester 1</span></a></li>';
				echo '<li><a href="marksheetrev.php?sem=2"><span>Semester 2</span></a></li>';
			}
			echo '<li><a href="marksheetrev.php?sem=3">Semester 3</a></li>';
			echo '<li><a href="marksheetrev.php?sem=4">Semester 4</a></li>';
			echo '<li><a href="marksheetrev.php?sem=5">Semester 5</a></li>';
			echo '<li><a href="marksheetrev.php?sem=6">Semester 6</a></li>';
			echo '<li><a href="marksheetrev.php?sem=7">Semester 7</a></li>';
			echo '<li><a href="marksheetrev.php?sem=8">Semester 8</a></li>';
		}
	}
}
else
{
	while($row=mysqli_fetch_array($res))
	{
		if($row[1]==0)
		{
			if($_SESSION['directsy']=='N')
			{
				echo '<li><a href="marksheet.php?sem=1"> <span>Semester 1</span></a></li>';
				echo '<li><a href="marksheet.php?sem=2"><span>Semester 2</span></a></li>';
			}
			echo '<li><a href="marksheet.php?sem=3">Semester 3</a></li>';
			echo '<li><a href="marksheet.php?sem=4">Semester 4</a></li>';
			echo '<li><a href="marksheet.php?sem=5">Semester 5</a></li>';
			echo '<li><a href="marksheet.php?sem=6">Semester 6</a></li>';
			echo '<li><a href="marksheet.php?sem=7">Semester 7</a></li>';
			echo '<li><a href="marksheet.php?sem=8">Semester 8</a></li>';
		}
	}
}
		?>
		
               
              </ul>
            </li>
      <li><a href="student_edit.php"><i class="fa fa-pencil-square-o"></i> <span>Edit Profile</span></a></li>
	  <?php
	 
		if($_SESSION['pattern']!='REV2012')
		{
			echo '<li><a href="mark.php"><i class="fa fa-pencil-square-o"></i> <span>View Entered Marks</span></a></li>';
		}
		else
		{
				echo '<li><a href="mark_rev.php"><i class="fa fa-pencil-square-o"></i> <span>View Entered Marks</span></a></li>';
		}
	  
		?>
		<li><a href="ready_upload.php"><i class="fa fa-upload"></i> <span>Upload Documents</span></a></li>
			<li><a href="submit.php"><i class="fa fa-check"></i> <span>Submit Application</span></a></li>
			  <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
