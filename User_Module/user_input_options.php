<?php
require "header.php";
?>
<?php
require "../Supporting_Files/connection.php";
$reg_id=$_SESSION["reg_id"];
$sql="SELECT *FROM course where reg_id ='$reg_id'";
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	body
	{
		background: url();
	}
		.my_form
		{
			width: 750px;
			//margin:0 auto;
			margin-top:100px;
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
	<!--	<div class="bg-success">
		<h3 >Admission Choices Information</h3></div>-->
	<form class="form-horizontal my_form" method="POST" action="">	
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Chooice One</label>
		<div class="col-md-8">
			<select class="form-control" id="choice_one" name="choice_one" style="border-radius: 0px;">
				<option value="">Select Option One</option>
				<option value="BS Computer Science">BS Computer Science</option>
				<option value="BS Software Engineering">BS Software Engineering</option>
			    <option value="BS Mlt">BS MLT</option>				
			    <option value="BS Micobiology">BS MICROBIOLOGY</option>				
				<option value="BS English">BS English</option>				
				<option value="BS Mathematics">BS Mathematics</option>
			</select>
		</div>

	</div>
	<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Department</label>
		<div class="col-md-8">
			<select class="form-control" id="dep_one" name="dep_one" style="border-radius: 0px;" disabled="disabled">
				<option value="">Department</option>
				<option value="IT">Information Technology</option>
				<option value="IT">Information Technology</option>
			    <option value="MLT">MLT</option>				
			    <option value="Micobiology">MICROBIOLOGY</option>		
				<option value="English">English</option>				
				<option value="Mathematics">Mathematics</option>
			</select>
		</div>
	</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Chooice Two</label>
		<div class="col-md-8">
			<select class="form-control" id="choice_two" name="choice_two" style="border-radius: 0px;">
				<option value="">Select Option Two</option>
				<option value="BS Computer Science">BS Computer Science</option>
				<option value="BS Software Engineering">BS Software Engineering</option>
			    <option value="BS Mlt">BS MLT</option>				
			    <option value="BS Micobiology">BS MICROBIOLOGY</option>			
				<option value="BS English">BS English</option>				
				<option value="BS Mathematics">BS Mathematics</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Department</label>
		<div class="col-md-8">
			<select class="form-control" id="dep_two" name="dep_two" style="border-radius: 0px;" disabled="disabled">
				<option value="">Department</option>
				<option value="IT">Information Technology</option>
				<option value="IT">Information Technology</option>
			    <option value="MLT">MLT</option>				
			    <option value="Micobiology">MICROBIOLOGY</option>		
				<option value="English">English</option>				
				<option value="Mathematics">Mathematics</option>
			</select>
		</div>
	</div>
		<div class="form-group">
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="Cancel" class="form-control btn btn-danger">	
			</div>
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="choice" value="Save" class="form-control btn btn-success" id="choice">
			</div>
		</div>
	</form>


	</div>

<script src="../Supporting_Files/js/JQurey.js"></script>
<script>
	$("document").ready(function()
	{
			var Department_one;

	$("#choice_one").change(function()
	{var dep_one;

dep_one=$(this).val()		//console.log();
		if(dep_one =="BS Computer Science")
		{
		$("select[name='dep_one']").val("IT");
		Department_one="Information Technology";
		}
		else  if(dep_one =="BS Software Engineering")
		{
		$("select[name='dep_one']").val("IT");
		Department_one="Information Technology";
		}
		else  if(dep_one =="BS Mlt")
		{
		$("select[name='dep_one']").val("MLT");
		Department_one="MLT";
		}
		else if(dep_one =="BS Micobiology")
		{
		$("select[name='dep_one']").val("Micobiology");
		Department_one="Micobiology";
		}
		else if(dep_one =="BS English")
		{
		$("select[name='dep_one']").val("English");
		Department_on="English";
		}
		else if(dep_one =="BS Mathematics")
		{
		$("select[name='dep_one']").val("Mathematics");
		Department_one="Mathematics";
		}
		else
		{
		$("select[name='dep_two']").val("");	
		}


	});
	var Department_two;
	$("#choice_two").change(function()
	{
		var dep_two;
		dep_two=$(this).val();
		if(dep_two =="BS Computer Science")
		{
			$("select[name='dep_two']").val("IT");
			Department_two="Information Technology";
		}
		else  if(dep_two =="BS Software Engineering")
		{
			$("select[name='dep_two']").val("IT");
			Department_two="Information Technology";		}
		else  if(dep_two =="BS Mlt")
		{
			$("select[name='dep_two']").val("MLT");
			Department_two="MLT";
		}
		else if(dep_two =="BS Micobiology")
		{
			$("select[name='dep_two']").val("Micobiology");
			Department_two="Micobiology";
		}
		else if(dep_two =="BS English")
		{
			$("select[name='dep_two']").val("English");
			Department_two="English";
		}
		else if(dep_two =="BS Mathematics")
		{
			$("select[name='dep_two']").val("Mathematics");
			Department_two="Mathematics";
		}
		else
		{
		$("select[name='dep_one']").val("");	
		}

	});
//var dep_one=$("#dep_one").val();
//var dep_two=$("#dep_two").val();
//alert(dep_one+dep_two);
//		console.log("\n\n "+dep_two+dep_two);

	$("#choice").click(function(event)
	{	event.preventDefault();

		var ch_one=$("#choice_one").val();
		var ch_two=$("#choice_two").val();
		var choice="choice";
		//console.log(ch_one+"\n"+ch_two);
if(ch_one == "")
{
	alert("Please Slect One Option");
	return false;
}
else if(ch_two == "")
{
	alert("Please Select Second Option");
	return false;
}
else if(ch_one == ch_two)
{
	alert("Both Choices are same");
	return false;
}
else
{

	$.ajax(
	{
				url:"catch_options.php",
				method:"post",
				data:{choice:choice,choice_one:ch_one,Department_one:Department_one,choice_two:ch_two,Department_two:Department_two},
				success:function(resp)
				{
					//console.log(resp);
					$("#my_area").html(resp);
				},
				error:function(resp)
				{
					console.log(resp);

				}	
})
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
