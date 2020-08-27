<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<?php
$connect = mysqli_connect("localhost","root","","transcript");

$pattern1 = $_POST['pattern'];
$branch1 = $_POST['branch'];
$sem1 =  $_POST['sem'];	


$sql="SELECT * FROM course_table_rev WHERE pattern = '".$pattern1."' AND branch = '".$branch1."' AND sem = '".$sem1."'";
$output = '';
$result = mysqli_query($connect,$sql);
$output .= '<div class="box box-danger" style="width:50%">  
           				<table class="table table-bordered">  
           		<tr>
           			<th colspan=13 ><center>Entered Data</center> </th>
           		<tr>
				<tr>
					<th>Srno</th>
					<th>Subject</th>
					<th>Course Credits Th</th>
					<th>Course Credits Tw</th>
					<th>Grade Ese</th>
					<th>Grade Op</th>
					<th>Grade Or</th>	
					<th>Grade Ia</th>
					<th>Grade Tw</th>	
				</tr>';
if(mysqli_num_rows($result)>0)
{				
	while($row = mysqli_fetch_array($result)) {
    	$output .=	'<tr>
						<td>' . $row["SRNO"] . '</td> 
    					 
						<td class="subject" data-id8="'.$row["SRNO"].'" contenteditable>' .  $row["subject"]  . '</td>
    					
    					<td class="coursecredits_th" data-id1="'.$row["SRNO"].'" contenteditable>' . $row["coursecredits_th"] . '</td>
    					<td class="coursecredits_tw" data-id2="'.$row["SRNO"].' " contenteditable>' . $row["coursecredits_tw"] . '</td>
    					<td class="grade_ese" data-id3="'.$row["SRNO"].' " contenteditable>' . $row["grade_ese"] . '</td>
    					<td class="grade_op" data-id4="'.$row["SRNO"].' " contenteditable>' . $row["grade_op"] . '</td>
    					<td class="grade_or" data-id5="'.$row["SRNO"].' " contenteditable>' . $row["grade_or"] . '</td>
    					<td class="grade_ia" data-id6="'.$row["SRNO"].' " contenteditable>' . $row["grade_ia"] .'</td>
    					<td class="grade_tw" data-id7="'.$row["SRNO"].' " contenteditable>' . $row["grade_tw"] .'</td>
	    </tr>';
	}
}
else
{
	$output .='<tr>
					<td colspan="8"><center>Data not found or All Fileds Not selected</center></td>
				</tr>';
}

$output .='</table>
	<center><button type="button" id="btn_back" class="class="btn btn-danger"">Go to Main Menu</button></center>
	</div>';
echo $output;
?>				
<script type="text/javascript">
		$(document).ready(function(){

		$('#btn_back').click( function(){ 
				location.reload();
		}); 

			function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"editRev.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                    // alert(data);
					console.log(data);
                }  
           });  
      } 
    
      $(document).on('blur', '.coursecredits_th', function(){  
           var id = $(this).data("id1");  
           var matter = $(this).text();  
           edit_data(id, matter, "coursecredits_th");  
      });

            $(document).on('blur', '.coursecredits_tw', function(){  
           var id = $(this).data("id2");  
           var matter = $(this).text();  
           edit_data(id, matter, "coursecredits_tw");  
      });

           $(document).on('blur', '.grade_ese', function(){  
           var id = $(this).data("id3");  
           var matter = $(this).text();  
           edit_data(id, matter, "grade_ese");  
      });       

          $(document).on('blur', '.grade_op', function(){  
           var id = $(this).data("id4");  
           var matter = $(this).text();  
           edit_data(id, matter, "grade_op");  
      });       

           $(document).on('blur', '.grade_or', function(){  
           var id = $(this).data("id5");  
           var matter = $(this).text();  
           edit_data(id, matter, "grade_or");  
      });

           $(document).on('blur', '.grade_ia', function(){  
           var id = $(this).data("id6");  
           var matter = $(this).text();  
           edit_data(id, matter, "grade_ia");  
      });
      	$(document).on('blur', '.grade_tw', function(){  
           var id = $(this).data("id7");  
           var matter = $(this).text();  
           edit_data(id, matter, "grade_tw");  
      });
	  
	  $(document).on('blur', '.subject', function(){  
           var id = $(this).data("id8");  
           var matter = $(this).text();  
           edit_data(id, matter, "subject");  
      });
	  
	  
	});  
</script>
</body>
</html>
