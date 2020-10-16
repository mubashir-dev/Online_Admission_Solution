<?php
require "../Supporting_Files/connection.php";
if(isset($_POST["create"]))
{
$username=$_POST["username"];
$email=$_POST["e_mail"];
$password=$_POST["password"];
$flag=0;
$type="user";
$sql="INSERT INTO log_in (username,email,password,flag,type) VALUES('$username','$email','$password',0,'$type')";
if(mysqli_query($con,$sql))
{
echo "<div class='alert alert-success'><i class='glyphicon glyphicon-ok' style='font-size:3.5em;color:green'></i> Account Created Successfully Now Login </div>";	
}
else
{
echo "<div class='alert alert-danger'><i class='glyphicon glyphicon-alert' style='font-size:3.0em;color:green'></i> Account Not Created Try Again</div>";}

}
else
{
	echo "Access Denied";
}



?>