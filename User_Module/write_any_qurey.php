
<?php
require_once"../Supporting_Files/connection.php";
require "header.php";
?><?php
$reg_id=$_SESSION["reg_id"];
$sql="SELECT first_name,last_name FROM personal_info where reg_id='$reg_id'";
$fire=mysqli_query($con,$sql); 
while($data=mysqli_fetch_assoc($fire))
{
	$first_name=$data["first_name"];
	$last_name=$data["last_name"];
}

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
		.my_form
		{
			width: 750px;
			//margin:0 auto;
			margin-top:60px;
			border:0px solid black;
		}
		.my_form input,select,textarea
		{
			border-radius: 0px;
		}
		select
		{
			border-radius: 0px;
		}
		textarea
		{
			border-radius: 0px;
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
	<div class="container" id="Mian_Area">
		<div class="panel-default" style="border:0px solid red;margin-top: 10px">
			
		</div>
		<!--<div class="bg-success">
		<h3 >Personal Information</h3></div> -->
		<form class="form-horizontal my_form" method="POST" enctype="multipart/form-data" action="">
		<div class="form-group">
			<input type="number" name="id" id="Reg_id" value="<?php echo $reg_id;?>" hidden="hidden">

		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> First Name</label>
		<div class="col-md-8">
			<input type="text" name="First_name" placeholder="First Name" class="form-control" id="f_name" value="<?php echo $first_name ?>" disabled="disabled">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> Last Name</label>
		<div class="col-md-8">
			<input type="text" name="Last_name" placeholder="Last Name" class="form-control" id="l_name" value="<?php echo $last_name ?>" disabled="disabled">
		</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 col-md-offset-2 control-label">Qurey Type</label>
			<div class="col-md-8">
			<select style="border-radius: 0px" class="form-control" id="Query_type" name="qurey_type">
				<option value="">Select Your Qurey Type</option>
				<option value="IT">IT </option>
				<option value="Admission Process">Admission Process</option>
				<option value="Password Recovery">Password Recovery</option>
				<option value="Gernerting Test Slip">Gernerting Test Slip</option>
				<option value="Fee Payment Issue">Fee Payment Issue</option> -->
				<option value="other">Other</option>
			</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 col-md-offset- control-label"> Type Your Qurey</label>
			<div class="col-md-8">
			<textarea  style="border-radius: 0px" id="qurey_stat" name="Q_state" class="form-control" placeholder="Write Your Qurey Here" cols="45" rows="10"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="Reset" class="form-control btn btn-danger">	
			</div>
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="Send" class="form-control btn btn-success" id="submit">
			</div>
		</div>
	</form>
	</div>

<script src="../Supporting_Files/js/JQurey.js"></script>
<script src="../Supporting_Files/js/bootstrap.js"></script>	
<script type="text/javascript">
	$(document).ready(function()
	{
	$("#submit").click(function(eve)
	{
			var qurey_type=$("#Query_type").val();
	var query_statement=$("#qurey_stat").val();
	var test=$("#test").val();
var action="Query";
var id=$("#Reg_id").val();
		eve.preventDefault();
		if(qurey_type == "")
		{
			alert("Please Provide Your Query Type")
			$("#Query_type").css("border-color","red");
			return false;
		}
		else if(query_statement == "")
		{
			alert("Please Provide Your Query Statement")
			$("#qurey_stat").css("border-color","red");
			return false;			
		}
		else
		{
			console.log(qurey_type+"\n"+query_statement);
		
		$.ajax({
			url:"serve_user_query.php",
			method:"POST",
			data:{action:action,id:id,qurey_type:qurey_type,query_statement:query_statement},
			success:function(resp)
			{
				$(".panel-default").html(resp).fadeOut(3000);
				$(".panel-default").delay(3500).load(true);
			/*	$("#Mian_Area").html('<form class="form-horizontal my_form" method="POST" enctype="multipart/form-data" action=""><div class="form-group"><input type="number" name="id" id="Reg_id" value="<?php echo $reg_id;?>" hidden="hidden"></div><div class="form-group"><label class="col-md-2 col-md-offset-2 control-label"> First Name</label><div class="col-md-8"><input type="text" name="First_name" placeholder="First Name" class="form-control" id="f_name" value="<?php echo $first_name ?>" disabled="disabled"></div></div><div class="form-group"><label class="col-md-2 col-md-offset-2 control-label"> Last Name</label>	<div class="col-md-8"><input type="text" name="Last_name" placeholder="Last Name" class="form-control" id="l_name" value="<?php echo $last_name ?>" disabled="disabled"></div></div><div class="form-group"><label class="col-md-2 col-md-offset-2 control-label">Qurey Type</label><div class="col-md-8"><select style="border-radius: 0px" class="form-control" id="Query_type" name="qurey_type"><option value="">Select Your Qurey Type</option><option value="IT">IT </option><option value="Admission Process">Admission Process</option><option value="Password Recovery">Password Recovery</option><option value="Gernerting Test Slip">Gernerting Test Slip</option><option value="Fee Payment Issue">Fee Payment Issue</option> --><option value="other">Other</option></select></div></div><div class="form-group"><label class="col-md-4 col-md-offset- control-label"> Type Your Qurey</label><div class="col-md-8"><textarea  style="border-radius: 0px" id="qurey_stat" name="Q_state" class="form-control" placeholder="Write Your Qurey Here" cols="45" rows="10"></textarea></div></div>	<div class="form-group"><div class="col-md-2 col-md-offset-4"><input type="submit" name="save" value="Cancel" class="form-control btn btn-danger"></div><div class="col-md-2 col-md-offset-4"><input type="submit" name="save" value="Send" class="form-control btn btn-success" id="submit"></div></div></form>'	
			);*/
					console.log(resp);
			},
			error:function(resp)
			{
			$(".panel-default").html(resp).fadeOut(3000);

				/*$("#Mian_Area").html('<form class="form-horizontal my_form" method="POST" enctype="multipart/form-data" action=""><div class="form-group"><input type="number" name="id" id="Reg_id" value="<?php echo $reg_id;?>" hidden="hidden"></div><div class="form-group"><label class="col-md-2 col-md-offset-2 control-label"> First Name</label><div class="col-md-8"><input type="text" name="First_name" placeholder="First Name" class="form-control" id="f_name" value="<?php echo $first_name ?>" disabled="disabled"></div></div><div class="form-group"><label class="col-md-2 col-md-offset-2 control-label"> Last Name</label>	<div class="col-md-8"><input type="text" name="Last_name" placeholder="Last Name" class="form-control" id="l_name" value="<?php echo $last_name ?>" disabled="disabled"></div></div><div class="form-group"><label class="col-md-2 col-md-offset-2 control-label">Qurey Type</label><div class="col-md-8"><select style="border-radius: 0px" class="form-control" id="Query_type" name="qurey_type"><option value="">Select Your Qurey Type</option><option value="IT">IT </option><option value="Admission Process">Admission Process</option><option value="Password Recovery">Password Recovery</option><option value="Gernerting Test Slip">Gernerting Test Slip</option><option value="Fee Payment Issue">Fee Payment Issue</option> --><option value="other">Other</option></select></div></div><div class="form-group"><label class="col-md-4 col-md-offset- control-label"> Type Your Qurey</label><div class="col-md-8"><textarea  style="border-radius: 0px" id="qurey_stat" name="Q_state" class="form-control" placeholder="Write Your Qurey Here" cols="45" rows="10"></textarea></div></div>	<div class="form-group"><div class="col-md-2 col-md-offset-4"><input type="submit" name="save" value="Cancel" class="form-control btn btn-danger"></div><div class="col-md-2 col-md-offset-4"><input type="submit" name="save" value="Send" class="form-control btn btn-success" id="submit"></div></div></form>'	
			);*/
			console.log(resp);	
			}

		})
		console.log("All Clear");

		}

	});
	});
</script>
<script  type="text/javascript" src="Validation_Files/validate.js"></script>
</body>
</html>
