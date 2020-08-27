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
$all_array=array();
$all_array=$_SESSION['all_array'];
//print_r($all_array);

//echo 
$sub_num=$_SESSION['sub_num'];
$_SESSION['sub_num']=$sub_num;

$thob=$_POST['thob'];
$_SESSION['thob_sum']=array_sum($thob);
$twob=$_POST['twob'];
$_SESSION['twob_sum']=array_sum($twob);
$prob=$_POST['prob'];
$_SESSION['prob_sum']=array_sum($prob);
$orob=$_POST['orob'];
$_SESSION['orob_sum']=array_sum($orob);
$iaob=$_POST['iaob'];
$_SESSION['iaob_sum']=array_sum($iaob);


$tharray=array(0,0,0);
$twarray=array(0,0,0);
$prarray=array(0,0,0);
$orarray=array(0,0,0);
$iaarray=array(0,0,0);
$twarray=$_SESSION['twarray'];
$tharray=$_SESSION['tharray'];
$prarray=$_SESSION['prarray'];
$orarray=$_SESSION['orarray'];
$iaarray=$_SESSION['iaarray'];

$_SESSION['twob']=$twob;
$_SESSION['thob']=$thob;
$_SESSION['prob']=$prob;
$_SESSION['orob']=$orob;
$_SESSION['iaob']=$iaob;


$_SESSION['total_ob']=$_SESSION['thob_sum']+$_SESSION['twob_sum']+$_SESSION['prob_sum']+$_SESSION['orob_sum']+$_SESSION['iaob_sum'];

$percent=((float)$_SESSION['total_ob']/(float)$_SESSION['total_max'])*100;
$percent=round($percent,2);


$_SESSION['percent']=$percent;

?>
<div>
<form method="POST" action="insertvalue.php">
<center>
<?php
echo "<p>Seat Number : ";
echo $_POST['seat'];
echo "<br><br>";
echo "Passing Year : ";
echo $_POST['year'];
echo "<br><br>";
if($_SESSION['sem']==7||$_SESSION['sem']==8||$_SESSION['sem']==6)
{
	echo "Elective Name : ";
	echo $_POST['elective'];
	echo "<br><br>";
}
echo "No of Attempts : ";
$passinone= $_POST['passinone'];
if($passinone==1)
{
	echo "Pass in One Attempt";
}
else
{
	echo "More than One Attempt";
}
echo "<br><br>";
if ($_SESSION['sem']%2==0)
{
		echo "Remark : ";
		echo $_POST['remark'];
		$_SESSION['remark']=$_POST['remark'];
}
else
{
	$_SESSION['remark']='NULL';
}
echo "</p><br>";
$_SESSION['passinone']=$_POST['passinone'];
$_SESSION['seat']=$_POST['seat'];
$_SESSION['year']=$_POST['year'];
if(isset($_POST['elective']))
	$_SESSION['elective']=$_POST['elective'];
?>

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
for($i=0;$i<$sub_num;$i++)
{
	echo '<tr>';
	
	for($k=0;$k<=4;$k++)
	{
		echo '<td>'.$all_array[$i][$k].'</td>';
	}
	
	echo  '<td>'.$twob[$i].'</td>';
	$all_array[$i][21]=$twob[$i];
	
	for($k=5;$k<=6;$k++)
	{
		echo '<td>'.$all_array[$i][$k].'</td>';
	}	
	echo  '<td>'.$thob[$i].'</td>';
		$all_array[$i][22]=$thob[$i];
	for($k=7;$k<=8;$k++)
	{
		echo '<td>'.$all_array[$i][$k].'</td>';
	}	
	echo  '<td>'.$prob[$i].'</td>';
		$all_array[$i][23]=$prob[$i];
	for($k=9;$k<=10;$k++)
	{
		echo '<td>'.$all_array[$i][$k].'</td>';
	}	
	echo  '<td>'.$orob[$i].'</td>';
		$all_array[$i][24]=$orob[$i];
	for($k=11;$k<=12;$k++)
	{

		echo '<td>'.$all_array[$i][$k].'</td>';
	}	
	echo  '<td>'.$iaob[$i].'</td>';
	$all_array[$i][25]=$iaob[$i];
	//unset($_SESSION['all_array']);
	$_SESSION['all_array']=$all_array;
	echo '</tr>';
	
}	
?>
<tr>
<td>Total</td>
<?php
echo '<td>'.$_SESSION['lec_total'].'</td>';
echo '<td>'.$_SESSION['prac_total'].'</td>';
echo '<td>'.$twarray[0].'</td>';
echo '<td>'.$twarray[1].'</td>';
echo '<td>'.$_SESSION['twob_sum'].'</td>';
echo '<td>'.$tharray[0].'</td>';
echo '<td>'.$tharray[1].'</td>';
echo '<td>'.$_SESSION['thob_sum'].'</td>';
echo '<td>'.$prarray[0].'</td>';
echo '<td>'.$prarray[1].'</td>';
echo '<td>'.$_SESSION['prob_sum'].'</td>';
echo '<td>'.$orarray[0].'</td>';
echo '<td>'.$orarray[1].'</td>';
echo '<td>'.$_SESSION['orob_sum'].'</td>';
echo '<td>'.$iaarray[0].'</td>';
echo '<td>'.$iaarray[1].'</td>';
echo '<td>'.$_SESSION['iaob_sum'].'</td>';

$_SESSION['tharray']=$tharray;
$_SESSION['twarray']=$twarray;
$_SESSION['prarray']=$prarray;
$_SESSION['orarray']=$orarray;
$_SESSION['iaarray']=$iaarray;
?>
</tr>
<tr>
<td colspan='6'>Total = <?php echo $_SESSION['total_ob'];?>/<?php echo $_SESSION['total_max'];?></td> 

<td colspan='12'>Percentage = <?php echo htmlspecialchars($percent);?></td>


</tr>
</table><br><br></div>
<br>
<center><input type="submit" class="btn bg-navy" value="Submit" name="submit">
</form>
</div> 

		
		
		
		
		
		  </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      


<?php
include 'footer.php';
?>