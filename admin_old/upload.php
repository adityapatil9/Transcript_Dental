<?php

include'header_admin.php';
$rollno=$_SESSION['roll'];
if(isset($_FILES['sem1']))
{
	uploadfile("sem1",$rollno);
}
if(isset($_FILES['sem2']))
{
	uploadfile("sem2",$rollno);
}
if(isset($_FILES['sem3']))
{
	uploadfile("sem3",$rollno);
}
if(isset($_FILES['sem4']))
{
	uploadfile("sem4",$rollno);
}
if(isset($_FILES['sem5']))
{
	uploadfile("sem5",$rollno);
}
if(isset($_FILES['sem6']))
{
	uploadfile("sem6",$rollno);
}
if(isset($_FILES['sem7']))
{
	uploadfile("sem7",$rollno);
}
if(isset($_FILES['sem8']))
{
	uploadfile("sem8",$rollno);
}
if(isset($_FILES['transcript']))
{
	uploadfile("transcript",$rollno);
}
if(isset($_FILES['coverletter']))
{
	uploadfile("coverletter",$rollno);
}

function uploadfile($sem,$rollno)
{
	$file=$_FILES[$sem];
	$filename=$sem;
	
	
	//FILE PROPERTIES
	$file_name=$file['name'];
	$file_tmp=$file['tmp_name'];
	$file_size=$file['size'];
	$file_error=$file['error'];
	$file_ext=explode('.',$file_name);
	$file_ext=strtolower(end($file_ext));
	$allowed=array('pdf');
	if(in_array($file_ext,$allowed))
	{
		if($file_error===0)
		{
			
			//$songname=$_POST['songname'];
			//$cat_name=$_POST['categoryname'];
			//$artistname=$_POST['artistname'];
			   
			//preg_replace('/\s+/', '', $rollno).;
			$file_name_new=$filename.'.'.$file_ext;
			$file_dest='C:/xampp/htdocs/transcript/Documents/Transcript/Verified/'.$rollno.'/'.$file_name_new;
			$filepath="C:/xampp/htdocs/transcript/Documents/Transcript/Verified/".$rollno;
			
			if ( ! is_dir($filepath)) {
				mkdir($filepath);
			}
			if(move_uploaded_file($file_tmp,$file_dest)){
				echo '"'.$filename.'"'.' was successfully uploaded.<br>';
				
				
				$sql="INSERT INTO `admin_documents`( `rollno`, `$sem`) VALUES ('$rollno','$file_dest') on Duplicate key update `$sem`='".$file_dest."'" ;
				//echo $sql.'<br>';
				//INSERT INTO table (id, name, age) VALUES(1, "A", 19) ON DUPLICATE KEY UPDATE    name="A", age=19
				mysql_query($sql);
				echo "<script language='javascript'>alert('Files Uploaded Successfully');</script>";
				header("refresh:0 ;url=index.php");
				}
			
		}
	}
}
?>