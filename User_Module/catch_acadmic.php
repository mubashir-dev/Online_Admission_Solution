<?php
require "../Supporting_Files/connection.php";
session_start();
$reg_id=$_SESSION["reg_id"];
if(isset($_POST["academic"]))
{
$ssc_marks=$_POST["ssc_marks"];
$ssc_board=$_POST["scc_board"];
$hssc_marks=$_POST["Hssc_Marks"];
$hssc_board=$_POST["hssc_board"];
$sql="INSERT INTO academic_details(reg_id,ssc_marks,ssc_board,inter_marks,	inter_board) VALUES($reg_id,$ssc_marks,'$ssc_board',$hssc_marks,'$hssc_board')";
if(mysqli_query($con,$sql))
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
	echo "Access Denied";
}
?>