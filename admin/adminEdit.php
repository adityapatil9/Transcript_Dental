<!DOCTYPE html>
<html>
<?php
include 'header.php';
?>

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Live Edit
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<head>
	<style>

	form { 
		margin: 0 auto; 
		width:250px;
	}
	p{
		text-align: center;
	}
	</style>
	<title>Edit</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/jquery-2.2.3.min.js"></script>

</head>
<body>
<br/>
<div class="box box-danger" style="width:100%">

      
	  <center> <div ><h2> Edit Courses </h2></div><hr>
	<form>
	<!--select pattern-->
	<br/>
<div class="form-group">
  <label for="pattern">Select Pattern:</label>
  <select id="pattern" name="pattern" class="form-control">
  <option value="">--Pattern--</option>
  <option value="OLD2002">OLD2002</option>
  <option value="REV2012">REV2012</option>
  </select>
  </div>
  <br/><br/>
 	<!--select branch-->
<div class="form-group">
  <label for="Branch">Select Branch:</label>
  <select id="branch" name="branch" class="form-control">
  <option value="">--Branch--</option>
  <option value="CE">CE</option>
  <option value="Extc">Extc</option>
   </select>
 </div>

   <br/><br/>
   <!--select sem-->
<div class="form-group">
  <label for="semester">Select Semester:</label>
  <select id="semester" name="semester" class="form-control">
  <option value="">--Semester--</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  </select>
  </div>
  <br/><br/>
  	<center><input id="submit" type="button" value="Submit" class="class="btn btn-danger""></center>
	</form>
	<div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <br />  
                     <div id="edit_live"></div>                 
                </div>  
</div>              
</section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<script type="text/javascript">
	
	$(document).ready(function(){
			
	
		$("#submit").click(function() {
				var pattern = $( "#pattern option:selected" ).text();
				if(pattern=="OLD2002") { var file= "select.php";}
				else {  var file= "selectRev.php";}
				var branch = $( "#branch option:selected" ).text();
				var sem = $( "#semester option:selected" ).text();
				// Returns successful data submission message when the entered information is stored in database.
				//var dataString = 'pattern='+ pattern + '&branch='+ branch + '&sem='+ sem;
					$("form").hide();
					$.ajax({
					url:file,
					method:"POST",
					dataType:"html",
					data:{pattern:pattern, branch:branch, sem:sem},
					success:function(data){
						$('#edit_live').html(data);
					}		
				});
				});

	});
	
</script>
  <!-- Main Footer -->
      <?php
	  include 'footer.php';
	  ?>
</body>
</html>