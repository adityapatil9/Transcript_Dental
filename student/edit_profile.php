
<html>
<head>

<title>EDIT STUDENT PROFILE</title>
</head>
<?php
include ('header_student.php');

$roll_no=$_SESSION['rollno'];	
$es1=mysql_query("Select * from student where rollno='$roll_no'");
$res1=mysql_fetch_array($es1);


?>

<body>
<div class="container">
   <form  class="form-horizontal" action="change_profile.php" method="post" name="student_edit" >
                   
				   <div class="form-group">
				   <label class="control-label col-sm-4">ROLL&nbsp;&nbsp;NO :</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="rollno"  value="<?php echo $res1 ['roll'];?>" readonly />
					
					</div>
                    </div>
					
					<div class="form-group">
				   <label class="control-label col-sm-4">BRANCH:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="branch"  value="<?php echo htmlspecialchars($res1 ['name']);?>" required />
					</div>
                    </div>
					
					<div class="form-group">
				   <label class="control-label col-sm-4">YEAR OF PASSING:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="year" id="year" value="<?php echo htmlspecialchars($res1 ['year_of_pass']);?>" readonly required />
					</div>
                    </div>

					<div class="form-group">
				   <label class="control-label col-sm-4">FULL NAME</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="name" id="name" value="<?php echo htmlspecialchars($res1 ['name_full']);?>" required />
					</div>
                    </div> 
					
				
					<div class="form-group">
				   <label class="control-label col-sm-4">PRESENT ADDRESS:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="addr" id="addr" value="<?php echo htmlspecialchars($res1 ['present_addr']);?>" required />
					</div>
                    </div> 
						<div class="form-group">
				   <label class="control-label col-sm-4">PERMANENT ADDRESS:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="paddr" id="paddr" value="<?php echo htmlspecialchars($res1 ['permanent_addr']);?>" required />
					</div>
                    </div> 
	
					<div class="form-group">
				   <label class="control-label col-sm-4">EMAIL:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="email" id="email" value="<?php echo htmlspecialchars($res1 ['email_id']);?>" required />
					</div>
                    </div> 
	
		           <div class="form-group">
				   <label class="control-label col-sm-4">Residence Telephone:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="telR" id="telR" value="<?php echo htmlspecialchars($res1 ['telR']);?>" required />
					</div>
                    </div> 
					
					<div class="form-group">
				   <label class="control-label col-sm-4">Mobile Number:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="telR" id="telM" value="<?php echo htmlspecialchars($res1 ['telM']);?>" required />
					</div>
                    </div> 
					
					<div class="form-group">
				   <label class="control-label col-sm-4">Present Status:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="present_status" id="present_status" value="<?php echo htmlspecialchars($res1 ['present_status']);?>" required />
					</div>
                    </div>
					
					<div class="form-group">
				   <label class="control-label col-sm-4">Password:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="password" id="password" value="<?php echo htmlspecialchars($res1 ['password']);?>" required />
					</div>
                    </div> 
					<div class="form-group">
				   <label class="control-label col-sm-4">Pattern:</label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="pattern" id="pattern" value="<?php echo htmlspecialchars($res1 ['pattern']);?>" required />
					</div>
                    </div> 
					
					<div class="form-group">
				   <label class="control-label col-sm-4">Direct Second Year? </label>
				   <div class="col-sm-6">
					<input class="form-control" type="text" name="directsy" id="directsy" value="<?php echo htmlspecialchars($res1 ['directsy']);?>" required />
					</div>
                    </div> 
					
					<br>
					<center>
					<button type="submit" class='btn btn-danger' name="edit_profile" value="update">UPDATE</button><br><br>
					
   </form>
   
   <input type="button" onclick="window.location='../password_reset/' " value='CHANGE PASSWORD' class='btn btn-info'>

   </div>
</body>
</html>