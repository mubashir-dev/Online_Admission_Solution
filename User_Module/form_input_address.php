<?php
require "header.php";
require "../Supporting_Files/connection.php";
error_reporting(0);
$reg_id=$_SESSION["reg_id"];
$sql="SELECT *FROM address where reg_id='$reg_id'";
$fire=mysqli_query($con,$sql);
if($fire)
{

	$data=mysqli_num_rows($fire);
	if($data!=1)
	{


?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Admission System
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Supporting_Files/css/bootstrap.css">
	<style type="text/css">
	body
	{
		background: url();
	}
		.my_form
		{
			width: 750px;
		//	margin:0 auto;
			margin-top:60px;
			border:0px solid black;
		}
		.btn
		{
			border-radius: 0px;
			color:black;
			font-weight: bold;
			font-family: Agency Fb;
			font-size: 1.5em;
			line-height: 20px;
		}
		label
		{
			//font-weight: normal;
			font-family: Agency Fb;
			font-size: 1.5em;
			line-height:15px;

		}
		@media(max-width: 550px)
		{
			.my_form
		{
			width: 100%;
			margin:0 auto;
			margin-top:10px;
			border:0px solid black;
		}
		.btn
		{
			margin-top: 10px;
		}
		}
	</style>
</head>

<body>
	<div class="container" id="my_area">
		<!--<div class="bg-success">
		<h3 >Address Information</h3></div> -->
	<form class="form-horizontal my_form" method="POST" enctype="multipart/form-data" action="">
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> Province</label>
		<div class="col-md-8">
			<select class="form-control" id="Province" name="Province">
				<option value="">Select</option>
				<option value="Kpk">KPK</option>
				<option value="Balochistan">Balochistan</option>
				<option value="Punjab">Punjab</option>
				<option value="Sindh">Sindh</option>
				<option value="Ajk">Ajk</option>
				<option value="Giglit Baltistan">Giglit Baltistan</option>
			</select>
		</div>
		</div><div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Domicile</label>
		<div class="col-md-8">
				<select class="form-control" id="Domicile" name="Domicile">
				<option value="">Select</option>
				<option value="Kpk">KPK</option>
				<option value="Balochistan">Balochistan</option>
				<option value="Punjab">Punjab</option>
				<option value="Sindh">Sindh</option>
				<option value="Ajk">Ajk</option>
				<option value="Giglit Baltistan">Giglit Baltistan</option>
			</select>
				</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">City</label>
		<div class="col-md-8">
		<input type="text" name="city_name" placeholder="City" class="form-control" id="city">
		</div></div>
		
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">House No</label>
		<div class="col-md-8">
			<input type="text" name="house_no" placeholder="House No" class="form-control" id="house_no">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Street No</label>
		<div class="col-md-8">
				<input type="text" name="Street" placeholder="Street No " class="form-control" id="Street_No">
		</div>
		</div>
		<div class="form-group">
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="Cancel" class="form-control btn btn-danger">	
			</div>
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="Save" class="form-control btn btn-success" id="address">
			</div>
		</div>
	</form>
	</div>
<script src="../Supporting_Files/js/JQurey.js"></script>
<script>
$("document").ready(function()
{
$("#address").click(function(event)
{
event.preventDefault();
var province_name=$("#Province").val();
var Domicile_name=$("#Domicile").val();
var house_no =$("#house_no").val();
var street_no =$("#Street_No").val();
var city =$("#city").val();
var save="save";
if(province_name == "")
{
alert("Please Select Your Province");
$("#Province").css("border-color","red");
return false;	
}
else if(Domicile_name =="")
{
	alert("Select Your Domicile");
	$("#Domicile").css("border-color","red");
	return false;
}
else if(province_name != Domicile_name)
{
	alert("Province and Domicile must be same");
	return false;
}
else if(city =="")
{
	alert("Provide City Name");
	$("#city").css("border-color","red");
	return false;
}

else if(house_no == "")
{
	alert("Provide house Number");
	$("#house_no").css("border-color","red");
	return false;
} else if(street_no=="")
{
	alert("Please Enter Your Street No");
					$("#street_no").css("border-color","red");
	return false;
}
else 
{
	$.ajax
	({
	url:"catch_user_address.php",
	method:"POST",
	data:{save:save,Province:province_name,Domicile:Domicile_name,city_name:city,house_no:house_no,Street:street_no},
	success:function(resp)
	{	
	$("#my_area").html(resp);
	},
	error:function(resp)
	{
	$("#my_area").html(resp);	
    }
	});
}
});
});
</script>
<script src="../Supporting_Files/js/bootstrap.js"></script>	
<script  type="text/javascript" src="Validation_Files/validate.js"></script>
<?php
}
else
{
echo "<div class='jumbotron text-center bg-success'style= 'width:350px;margin:0 auto;margin-top:150px; background-color:none;'><i class='glyphicon glyphicon-ok' style='font-size:3.5em;color:green'></i><br>

Successfully Saved</div>";
}
}
else
{
	echo "Error Occured";
}
?>
</body>
</html>