<?php 
require "../Supporting_Files/connection.php";
if(isset($_POST["action"]))
{
$id=$_POST["id"];
$date=date("H:D:Y");
$query_type=$_POST["qurey_type"];
$query_statement=$_POST["query_statement"];
$sql="INSERT INTO query_write_users(reg_id,Query_Type,Qurey_Statement,status,date) VALUES($id,'$query_type','$query_statement',0,'$date')";
if(mysqli_query($con,$sql))
{

echo "<div class='alert alert-success' style='border-radius:0px;margin-top:50px'><p>Qurey Successfully Submitted</p></div>";	
}
else
{
echo "<div class='alert alert-success' style='border-radius:0px;margin-top:50px'><p>Failed Submitted 
$sql</p></div>";	
}


}
else
{
	echo "Access Denied";
}

?>