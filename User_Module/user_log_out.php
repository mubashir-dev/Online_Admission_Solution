<?php
session_start();
require_once"../Supporting_Files/connection.php";
$reg_id=$_SESSION["reg_id"];
$sql="UPDATE  log_in SET flag=0 where reg_id='$reg_id'";
if(mysqli_query($con,$sql))
{
session_unset();
session_destroy();
header("Location:user_log_in.php");
}

?>