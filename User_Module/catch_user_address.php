<?php
session_start();
if(isset($_SESSION["reg_id"]))
{
$reg_id=$_SESSION["reg_id"];
require "../Supporting_Files/connection.php";
if (isset($_POST["save"]))
{
 $province_name=$_POST["Province"];
 $domicile_area=$_POST["Domicile"];
 $city_name=$_POST["city_name"];
 $house_no=$_POST["house_no"];
 $Street_no=$_POST["Street"];
$sql="INSERT INTO address 
(reg_id,Province,City,Domicile,Housee_No,Street_Sector_etc) VALUES($reg_id,'$province_name','$city_name','$domicile_area','$house_no','$Street_no')";
$fire=mysqli_query($con,$sql);
if($fire)
{
echo "<div class='alert alert-success' style='width:500px;border-radius:none;margin-top:100px'><p><strong>Your Data Recieve Successfully</p></strong></div>";

}
else
{
echo "<div class='alert alert-success' style='width:500px;border-radius:0px;margin-top:100px'><p><strong>Failed :$sql</p></strong></div>";
}
}
else
{
	echo "Access Denied";
}
}
else
{
	header("Location:user_log_in.php");

}
?>