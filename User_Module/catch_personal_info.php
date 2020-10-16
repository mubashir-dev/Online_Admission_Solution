<?php
session_start();
require "../Supporting_Files/connection.php";
if(isset($_SESSION["reg_id"]))
{
$reg_id=$_SESSION["reg_id"];
$f_name=$_POST["First_name"];
$l_name=$_POST["Last_name"];
$father_name=$_POST["Father_name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$file=$_FILES["pic"];
$file_name=$_FILES["pic"]["name"];
//print_r($_FILES["pic"]);
$dob=$_POST["dob"];
$contact_no=$_POST["Contact_no"];
$pic_id=uniqid(rand());
$file_size=$_FILES["pic"]["size"];
$file_temp=$_FILES["pic"]["tmp_name"];
$final_dest="../Images/Users_Images/"."-".$pic_id."-".$f_name."-".$file_name;
$file_ext=explode('.',$_FILES["pic"]["name"]);
//print_r($file_ext);
if(($file_ext[1] == "jpg" || "jpeg" || "png") && ($file_size <= 200000))
{
	$move=move_uploaded_file($file_temp,$final_dest);
	if($move)
	{
		$sql="INSERT INTO  personal_info (reg_id,first_name,last_name,father_name,Age, gender,DOB,photo_path,contact_no)
 VALUES ($reg_id,'$f_name','$l_name','$father_name',$age,'$gender','$dob','$final_dest','$contact_no')";
		$fire=mysqli_query($con,$sql);
//		echo $fire;
	if($fire)
	{
	echo "<div class='alert alert-success' style='width:500px;border-radius:none;margin-top:100px'><p><strong>Your Data Recieve Successfully</p></strong></div>";
	}
	else
	{
echo "<div class='alert alert-success' style='width:500px;border-radius:none;margin-top:100px'><p><strong>Failed :</p></strong></div>";
	}
	}
	else
	{
		echo "File Not Uploaded";
		header("refresh:2;url:form_input_user.php");
	}
}
		else
		{
			echo "<script>alert('Only jpg jpeg and png files are allowdd');</script>";
		}
}
else
{
header("Location:user_log_in.php");
}

?>