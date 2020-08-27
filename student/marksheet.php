<?php
include 'header.php';
?>
<style>
input:read-only { 
    background-color: #eee;
}
</style>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Enter Marks
            <!--<small>Optional description</small>!-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
		<?php


//session_unset();
//session_destroy();
$sem= $_GET['sem'];

$_SESSION['sem']=$sem;
$branch=$_SESSION['branch'];
$pattern=$_SESSION['pattern'];

$roll=$_SESSION['roll'];
//echo $sql;

//Initialize arrays
$tharray=array(0,0,0);
$twarray=array(0,0,0);
$prarray=array(0,0,0);
$orarray=array(0,0,0);
$iaarray=array(0,0,0);
$thob=array();
$twob=array();
$prob=array();
$orob=array();
$iaob=array();
$seat="";
$year="";
$total_max=0;
$lec_total=0;
$prac_total=0;
$all_array=array();

$i=0;


$sql="select * from course_table where sem=".$sem." and branch='".$branch."' and pattern='".$pattern."'";
//echo $sql;
$result=mysqli_query($connect,$sql);
$sub_num=mysqli_num_rows($result);
$_SESSION['sub_num']=$sub_num;

while($row=mysqli_fetch_array($result))
{
	$all_array[$i][0]=$row['subject'];//subject
	$sqlob="select * from student_marks where subject='".$row['subject']."' and roll='".$roll."'";
	//echo $sqlob;
	$resultob=mysqli_query($connect,$sqlob);
	$num_resultob=mysqli_num_rows($resultob);
	
	//If marks are not entered previously then initialize all data cells to 0.
	if($num_resultob==0)
	{
		$seat="";
		$year="";
		$twob[$i]=0;
		$thob[$i]=0;
		$prob[$i]=0;
		$orob[$i]=0;
		$iaob[$i]=0;
	}
	
	//If marks are previously entered, then fetch them into this array
	while($rowob=mysqli_fetch_array($resultob))
	{
		$seat=$rowob['seat'];
		$year=$rowob['year'];
		
		$twob[$i]=$rowob['twob'];
		$thob[$i]=$rowob['thob'];
		$prob[$i]=$rowob['prob'];
		$orob[$i]=$rowob['orob'];
		$iaob[$i]=$rowob['iaob'];
	}
	//print_r($orob);
	//Populate arrays with details from course_table
	
	/*echo $all_array[0][5];
	echo $all_array[1][5];
	echo $all_array[2][5];
	echo $all_array[3][5];
	echo $all_array[4][5];
	echo $all_array[5][5];
	echo $all_array[6][5];
	echo $all_array[7][5];*/
	
	$all_array[$i][1]=$row['lec_week'];//lec_week
	$all_array[$i][2]=$row['prac_week'];//prac_week

	$all_array[$i][3]=$row['twmax'];//twmax
	$all_array[$i][4]=$row['twmin'];//twmin

	$all_array[$i][5]=$row['thmax'];//thmax
	$all_array[$i][6]=$row['thmin'];//thmin
    $all_array[$i][7]=$row['prmax'];//prmax
    $all_array[$i][8]=$row['prmin'];//prmax
    $all_array[$i][9]=$row['ormax'];//ormax
	$all_array[$i][10]=$row['ormin'];//ormin
    $all_array[$i][11]=$row['iamax'];//iamax
	$all_array[$i][12]=$row['iamin'];//iamin
	
	/*$all_array[$i][7]=$row['ormax'];//opmax
	$all_array[$i][8]=$row['ormin'];//opmin
	$all_array[$i][9]=$row['iamax'];//iamax
	$all_array[$i][10]=$row['iamin'];//iamin*/
	
	//print_r($all_array);
	
	$twarray[0]+=$all_array[$i][3];
	$twarray[1]+=$all_array[$i][4];
	$tharray[0]+=$all_array[$i][5];
	//print_r($tharray);
	$tharray[1]+=$all_array[$i][6];
	$prarray[0]+=$all_array[$i][7];
	$prarray[1]+=$all_array[$i][8];
	$orarray[0]+=$all_array[$i][9];
	$orarray[1]+=$all_array[$i][10];
	$iaarray[0]+=$all_array[$i][11];
	$iaarray[1]+=$all_array[$i][12];
	/*$oparray[0]+=$all_array[$i][7];
	$oparray[1]+=$all_array[$i][8];
	$iaarray[0]+=$all_array[$i][9];
	$iaarray[1]+=$all_array[$i][10];*/
	$lec_total+=$all_array[$i][1];
	$prac_total+=$all_array[$i][2];
	$total_max+=$all_array[$i][3]+$all_array[$i][5]+$all_array[$i][7]+$all_array[$i][9]+$all_array[$i][11];
	
	//print_r($all_array);
	if(($all_array[$i][3]==0)&&($all_array[$i][4]==0))
	{
		$all_array[$i][15][0]=0;
	}
	else
	{
		$all_array[$i][15][0]=1;
	}
	if(($all_array[$i][5]==0)&&($all_array[$i][6]==0))
	{
		$all_array[$i][16][0]=0;
	}
	else
	{
		$all_array[$i][16][0]=1;
	}	
	if(($all_array[$i][7]==0)&&($all_array[$i][8]==0))
	{
		$all_array[$i][17][0]=0;
	}
	else
	{
		$all_array[$i][17][0]=1;
	}
	if(($all_array[$i][9]==0)&&($all_array[$i][10]==0))
	{
		$all_array[$i][18][0]=0;
	}
	else
	{
		$all_array[$i][18][0]=1;
	}
	if(($all_array[$i][11]==0)&&($all_array[$i][12]==0))
	{
		$all_array[$i][19][0]=0;
	}
	else
	{
		$all_array[$i][19][0]=1;
	}			
	$i++;
}
//print_r($thob);
//echo $all_array[0][0];

//print_r($all_array);

//CHECK ALL THE CONDITIONS FOR NA
$_SESSION['total_max']=$total_max;


?>

<div>

<form method="POST" width="50%"  action="confirmvalue.php">
	
<center>
  
     <input type="text" class="form-control" name='seat' placeholder="Enter Seat Number" value="<?php echo $seat;?>" required >
   </center>
<br>
   <center>
  
     <input type="text" class="form-control" name='year' placeholder="Year of Passing (November 2013)" value="<?php echo $year;?>" required >
   </center>
   <br>
   <?php
   if($sem=='7'||$sem=='8'||$sem=='6')
   {	echo '   <center>
  
     <input type="text" class="form-control" name="elective" placeholder="Elective Name (As will appear on marksheet OR enter - if not applicable)" value="" required >
   </center>
   <br>';}
   ?>
   <center>
  
  	<select class="form-control" name="passinone">
  		<option value="1">Pass in One Attempt</option>
  		<option value="0">More than One Attempt</option>
     </select>
   </center>
<br>
   <?php
   if ($sem%2==0)
   {
	   echo '
   <center>
  
     <input type="text" class="form-control" name="remark" placeholder="Remark for Year (FIRST CLASS/SECOND CLASS)" required >
  </center>
   <br>';}
   ?>
   <br>


<div class="table-responsive box box-body">
<table  class="table" border="1">

            
            
            
            <tr>
                <td rowspan="2"> SUBJECTS</td>
                <td rowspan="2"> LECTS & TUTS / WEEK</td>
                <td rowspan="2"> PRACS / WEEK</td>
                <td colspan="3"> TERM WORK</td>
                
                <td colspan="3"> THEORY</td>
                
                <td colspan="3"> PRACTICAL</td>
                <td colspan="3"> ORAL</td>
                <td colspan="3" > INTERNAL ASSESMENT</td>
            </tr>
            
            <tr>
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
                <td>MAX </td>
                <td>MIN </td>
                <td>OBT </td>
                
            </tr>
            
<?php
for($j=0;$j<$i;$j++)
{
	echo '<tr>';
	
	for($k=0;$k<=4;$k++)
	{
		echo '<td>'.$all_array[$j][$k].'</td>';
	}
	
	if($all_array[$j][15][0]==1){
		echo '<td><input style="width:50px" name="twob[]" type="number" value="'.$twob[$j].'" max='.$all_array[$j][3].' min=0></input></td>';
	}
	else
	{
		echo '<td><input style="width:50px" name="twob[]" type="number" value=0 readonly></input></td>';
	}
	
	for($k=5;$k<=6;$k++)
	{
		//echo "hello ".$j." * ".$k;
		echo '<td>'.$all_array[$j][$k].'</td>';
	}	
	if($all_array[$j][16][0]==1){
		echo '<td><input style="width:50px" name="thob[]" type="number"  value="'.$thob[$j].'" max='.$all_array[$j][5].' min=0></input></td>';
	}
	else
	{
		echo '<td><input style="width:50px" name="thob[]" type="number" value=0 readonly></input></td>';
	}
	
	
	for($k=7;$k<=8;$k++)
	{
		echo '<td>'.$all_array[$j][$k].'</td>';
	}	
	if($all_array[$j][17][0]==1){
		echo '<td><input style="width:50px" name="prob[]" type="number"  value="'.$prob[$j].'" max='.$all_array[$j][7].' min=0></input></td>';
	}
	else
	{
		echo '<td><input style="width:50px" name="prob[]" type="number" value=0 readonly></input></td>';
	}
	
	for($k=9;$k<=10;$k++)
	{
		echo '<td>'.$all_array[$j][$k].'</td>';
	}	
	if($all_array[$j][18][0]==1){
		echo '<td><input style="width:50px" name="orob[]" type="number"  value="'.$orob[$j].'" max='.$all_array[$j][9].' min=0></input></td>';
	}
	else
	{
		echo '<td><input style="width:50px" name="orob[]" type="number" value=0 readonly></input></td>';
	}

	
	
	for($k=11;$k<=12;$k++)
	{

		echo '<td>'.$all_array[$j][$k].'</td>';
	}	
	if($all_array[$j][19][0]==1){
		echo '<td><input style="width:50px" name="iaob[]" type="number"  value="'.$iaob[$j].'" max='.$all_array[$j][11].' min=0></input></td>';
	}
	else
	{
		echo '<td><input style="width:50px" name="iaob[]" type="number" value=0 readonly></input></td>';
	}
	echo '</tr>';
	//unset($_SESSION['all_array']);
	$_SESSION['all_array']=$all_array;
}
?>
<tr>
<td>Total</td>
<?php
$_SESSION['lec_total']=$lec_total;
$_SESSION['prac_total']=$prac_total;
echo '<td>'.$lec_total.'</td>';
echo '<td>'.$prac_total.'</td>';
echo '<td>'.$twarray[0].'</td>';
echo '<td>'.$twarray[1].'</td>';
echo '<td>'.$twarray[2].'</td>';
echo '<td>'.$tharray[0].'</td>';
echo '<td>'.$tharray[1].'</td>';
echo '<td>'.$tharray[2].'</td>';
echo '<td>'.$prarray[0].'</td>';
echo '<td>'.$prarray[1].'</td>';
echo '<td>'.$prarray[2].'</td>';
echo '<td>'.$orarray[0].'</td>';
echo '<td>'.$orarray[1].'</td>';
echo '<td>'.$orarray[2].'</td>';
echo '<td>'.$iaarray[0].'</td>';
echo '<td>'.$iaarray[1].'</td>';
echo '<td>'.$iaarray[2].'</td>';

$_SESSION['tharray']=$tharray;
$_SESSION['twarray']=$twarray;
$_SESSION['orarray']=$orarray;
$_SESSION['prarray']=$prarray;
$_SESSION['iaarray']=$iaarray;


?>
</tr>
</table>
<br><br><br><br>

</div>

<center><input type="submit" class="btn btn-danger" value="Confirm" name="submit">
</center>

</form>
</div> 


		
		
		
		
		
		  </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      


<?php
include 'footer.php';
?>