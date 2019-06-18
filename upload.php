<?php
if(isset($_POST['b1']))
{
//$file=$_FILES['file'];
	$filename=$_FILES['file']['name'];
	$filename1=$_FILES['file']['tmp_name'];
	$size=$_FILES['file']['size'];
	$error=$_FILES['file']['error'];
	$filename4=$_FILES['file']['type'];
	$extension=explode('.',$filename);
	$fext=strtolower(end($extension));
	
	//echo $fext;
	//echo $_FILES['file']['tmp_name'];
	$location='./uploads/'.$filename;
	move_uploaded_file($filename1,$location);
	
}
else
{
	echo"error";
}

?>