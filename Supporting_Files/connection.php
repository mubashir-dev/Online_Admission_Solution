<?php
$local="localhost";
$user="root";
$pass="";
$db="online_admission_system";
$con = mysqli_connect($local,$user,$pass,$db);
	if($con)
	{

	}
	else
	{
		echo "Failed To Connnect".mysqli_connect_error($con);
	}


?>