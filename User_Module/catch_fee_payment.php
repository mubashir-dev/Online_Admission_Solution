<?php
require "../Supporting_Files/connection.php";
if(isset($_POST["payment"]))
{
$challan_no=$_POST["challan_no"];
$fee_amount=$_POST["fee_amount"];
$date_challan=$_POST["date_challan"];
$sql="INSERT INTO fee_payment (reg_id,bank_challan,fee_amount,date) VALUES(reg_id,'$challan_no','$fee_amount','$date_challan')";
if(mysqli_query($con,$sql))
{
	echo "Success";
}
else
{
	echo "Failed";
}

}
else
{
	echo "Access Denied";
}



?>