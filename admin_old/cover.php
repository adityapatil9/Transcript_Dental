<?php
include('header_admin.php');
?>
  
<div class="container">

<form class="form-horizontal" id="form1" name='cover_letter' method="POST" width="50%" action='coverprint.php'>
<div class="form-group">
	<center><h3><strong>PRINT COVER LETTER</strong></h3></center><br><br>
  <label class="control-label col-sm-4" >ENTER ROLL NUMBER OF THE STUDENT : </label>
  <div class="col-sm-6">
     <input type="text" class="form-control" name='roll' placeholder="13CE1067" required minlength=8 maxlength=8>
   <br></div>
   <label class="control-label col-sm-4" >STARTING YEAR : </label>
  <div class="col-sm-6">
     <input type="text" class="form-control" name='start_year' placeholder="2006" required >
  <br> </div>
   <label class="control-label col-sm-4" >OUTWARD NUMBER : </label>
  <div class="col-sm-6">
     <input type="text" class="form-control" name='outward' placeholder="011" required >
   <br></div>
   <label class="control-label col-sm-4" >CHECKED BY : </label>
  <div class="col-sm-6">
     <input type="text" class="form-control" name='checkedby' placeholder="Mr. Ravi" required >
   <br></div>
  </div>
  <br><br>
  <center>
   <button type="submit" style="margin-left:12%" class="button"  name="cover">SUBMIT</button>
 </center>
  
</form>
</div>

