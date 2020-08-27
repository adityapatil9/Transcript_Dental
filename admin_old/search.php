<?php
include('header_admin.php');
?>
  
<div class="container">

<form class="form-horizontal"id="form1" name='search_form'method="POST" width="50%" action='searched_record.php'>
<div class="form-group">
	<center><h3><strong>SEARCH FOR STUDENT TRANSCRIPT REQUESTS</strong></h3></center><br><br>
  <label class="control-label col-sm-4" >ENTER ROLL NUMBER OF THE STUDENT : </label>
  <div class="col-sm-6">
     <input type="text" class="form-control" name='roll' placeholder="13CE1067" required minlength=8 maxlength=8>
   </div>
  </div>
  <br><br>
  <center>
   <button type="submit" style="margin-left:12%" class="button"  name='search' >SUBMIT</button>
 </center>
  
</form>
</div>




