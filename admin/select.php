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


$sql="SELECT * FROM course_table WHERE pattern = '".$pattern1."' AND branch = '".$branch1."' AND sem = '".$sem1."'";
$output = '';
$result = mysqli_query($connect,$sql);

$output .= '<div class="class="box box-danger" style="width:50%"">  
           				<table class="table table-bordered">  
           		<tr>
           			<th colspan=13 ><center>Entered Data</center> </th>
           		<tr>
				<tr>
					<th>Srno</th>
					<th>Subject</th>
					<th>Lec week</th>
					<th>Prac week</th>
					<th>Tw Max</th>
					<th>Tw Min</th>
					<th>Th Max</th>	
					<th>Th Min</th>
					<th>Pr Max</th>
					<th>Pr Min</th>	
					<th>Or Max</th>
					<th>Or Min</th>
					<th>Ia Max</th>	
					<th>Ia Min</th>		
				</tr>';
if(mysqli_num_rows($result)>0)
{				
	while($row = mysqli_fetch_array($result)) {
    	$output .=	'<tr>
    					 
						<td>' . $row["SRNO"] . '</td> 
    					 
						<td class="subject" data-id13="'.$row["SRNO"].'" contenteditable>' .  $row["subject"]  . '</td>
    					
    					<td class="lec_week" data-id1="'.$row["SRNO"].' " contenteditable>' . $row["lec_week"] . '</td>
    					<td class="prac_week" data-id2="'.$row["SRNO"].' " contenteditable>' . $row["prac_week"] . '</td>
    					<td class="twmax" data-id3="'.$row["SRNO"].' " contenteditable>' . $row["twmax"] . '</td>
    					<td class="twmin" data-id4="'.$row["SRNO"].' " contenteditable>' . $row["twmin"] . '</td>
    					<td class="thmax" data-id5="'.$row["SRNO"].' " contenteditable>' . $row["thmax"] . '</td>
    					<td class="thmin" data-id6="'.$row["SRNO"].' " contenteditable>' . $row["thmin"] .'</td>
    					<td class="prmax" data-id7="'.$row["SRNO"].' " contenteditable>' . $row["prmax"] .'</td>
    					<td class="prmin" data-id8="'.$row["SRNO"].' " contenteditable>' . $row["prmin"] . '</td>
    					<td class="ormax" data-id9="'.$row["SRNO"].' " contenteditable>' . $row["ormax"] . '</td>
    					<td class="ormin" data-id10="'.$row["SRNO"].' " contenteditable>'. $row["ormin"] . '</td>
    					<td class="iamax" data-id11="'.$row["SRNO"].'" contenteditable>'. $row["iamax"] . '</td>    	
    					<td class="iamin" data-id12="'.$row["SRNO"].'" contenteditable>'. $row["iamin"] . '</td>

	    </tr>';
	}
}
else
{
	$output .='<tr>
					<td colspan="4">Data not found or All Fileds Not selected</td>

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
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                    // alert(data);  
					 console.log(data);
                }  
           });  
      } 
    
      $(document).on('blur', '.lec_week', function(){  
           var id = $(this).data("id1");  
           var matter = $(this).text();  
           edit_data(id, matter, "lec_week");  
      });

            $(document).on('blur', '.prac_week', function(){  
           var id = $(this).data("id2");  
           var matter = $(this).text();  
           edit_data(id, matter, "prac_week");  
      });

           $(document).on('blur', '.twmax', function(){  
           var id = $(this).data("id3");  
           var matter = $(this).text();  
           edit_data(id, matter, "twmax");  
      });       

          $(document).on('blur', '.twmin', function(){  
           var id = $(this).data("id4");  
           var matter = $(this).text();  
           edit_data(id, matter, "twmin");  
      });       

           $(document).on('blur', '.thmax', function(){  
           var id = $(this).data("id5");  
           var matter = $(this).text();  
           edit_data(id, matter, "thmax");  
      });

           $(document).on('blur', '.thmin', function(){  
           var id = $(this).data("id6");  
           var matter = $(this).text();  
           edit_data(id, matter, "thmin");  
      });
      	$(document).on('blur', '.prmax', function(){  
           var id = $(this).data("id7");  
           var matter = $(this).text();  
           edit_data(id, matter, "prmax");  
      });

          $(document).on('blur', '.prmin', function(){  
           var id = $(this).data("id8");  
           var matter = $(this).text();  
           edit_data(id, matter, "prmin");  
      });  	
           $(document).on('blur', '.ormax', function(){  
           var id = $(this).data("id9");  
           var matter = $(this).text();  
           edit_data(id, matter, "ormax");  
      });
          $(document).on('blur', '.ormin', function(){  
           var id = $(this).data("id10");  
           var matter = $(this).text();  
           edit_data(id, matter, "ormin");  
      });
           $(document).on('blur', '.iamax', function(){  
           var id = $(this).data("id11");  
           var matter = $(this).text();  
           edit_data(id, matter, "iamax");  
      });
           $(document).on('blur', '.iamin', function(){  
           var id = $(this).data("id12");  
           var matter = $(this).text();  
           edit_data(id, matter, "iamin");  
      });
	    $(document).on('blur', '.subject', function(){  
           var id = $(this).data("id13");  
           var matter = $(this).text();  
           edit_data(id, matter, "subject");  
      });
          
	});  
</script>
</body>
</html>

