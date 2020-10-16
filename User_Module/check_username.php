<?php
require "../Supporting_Files/connection.php";
if(isset($_POST["check"]))
{
$user_name=$_POST["username"];
$sql="SELECT *FROM log_in WHERE username='$user_name'";
$fire=mysqli_query($con,$sql);
	$rows=mysqli_num_rows($fire);
	if($rows > 0)
	{
echo "<span class='text-danger' style='font-family:Agency Fb;font-size:1.3em'>username not available</span>";
	}
	else
	{
		echo "";
	}

}
else
{
	header("Location:user_log_in.php");
}



?>