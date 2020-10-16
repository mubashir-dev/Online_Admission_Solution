<?php
require "../Supporting_Files/connection.php";
session_start();
$reg_id=$_SESSION["reg_id"];
if(isset($_POST["choice"]))
{
$choice_one=$_POST["choice_one"];
$choice_two=$_POST["choice_two"];
$dep_one=$_POST["Department_one"];
$dep_two=$_POST["Department_two"];
//echo $choice_one ."\n".$choice_two;
$sql="INSERT INTO course (reg_id,option_one,Department_one,option_two,Department_two) VALUES($reg_id,'$choice_one','$dep_one','$choice_two','$dep_two')";
if(mysqli_query($con,$sql))
{
	echo "<div class='alert alert-success' style='width:500px;border-radius:none;margin-top:100px'><p><strong>Your Data Recieve Successfully</p></strong></div>";
	//echo "Successfully ";
}
else
{
echo "<div class='alert alert-success' style='widith:500px;border-rad'><p class=''>Failed To Send Data</p></div>";
//echo "Failed To Store Data";	
}

}
else
{
	echo "Access Denied";
}


?>