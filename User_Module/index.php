<?php
require "header.php";
require "../Supporting_Files/connection.php";
error_reporting(0);
$reg_id=$_SESSION["reg_id"];
$sql="SELECT *FROM personal_info where reg_id='$reg_id'";
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
	#Personal
	{
		background-color: blue;
	}
		.my_form
		{
			width: 750px;
			//margin:0 auto;
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
		<h3 >Personal Information</h3></div> -->
	<form class="form-horizontal my_form" method="POST" enctype="multipart/form-data" action="" id="myform">
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> First Name</label>
		<div class="col-md-8">
			<input type="text" name="First_name" placeholder="First Name" class="form-control" id="f_name">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> Last Name</label>
		<div class="col-md-8">
			<input type="text" name="Last_name" placeholder="Last Name" class="form-control" id="l_name">
		</div></div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> Father Name</label>
		<div class="col-md-8">
			<input type="text" name="Father_name" placeholder="Father Name" class="form-control" id="father_name">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> Age</label>
		<div class="col-md-8">
			<input type="NUMBER" name="age" placeholder="Age" class="form-control" min="17" max="25" id="age">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> Gender </label>
		<div class="col-md-8">
			<label class="radio-inline">
			<input type="radio" name="gender" value="Male" class="" id="gender"> Male
		    </label>
			<label class="radio-inline">
			<input type="radio" name="gender" value="Female" id="gender"> Female
			</label>
			<label class="radio-inline">
			<input type="radio" name="gender" value="Other" id="gender">Other
		    </label>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Choose Photo</label>
		<div class="col-md-8">
			<input type="file" name="pic"  class="form-control" id="pic">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Date of Birth</label>
		<div class="col-md-8">
			<input type="date" name="dob"  class="form-control" id="dob">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Contact No </label>
		<div class="col-md-8">
			<input type="Number" name="Contact_no"  class="form-control" id="contact_no">
		</div>
		</div>
		<div class="form-group">
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="Cancel" class="form-control btn btn-danger">	
			</div>
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="save" class="form-control btn btn-success" id="submit">
			</div>
		</div>
	</form>

	</div>
<script src="../Supporting_Files/js/JQurey.js"></script>
<script>
$("document").ready(function(){
$("#myform").on("submit",function(event)
{
event.preventDefault();
var f_name=$("#f_name").val();
var l_name=$("#l_name").val();
var father_name=$("#father_name").val();
var age=$("#age").val();
var gender=$("input[name=gender]:checked").val();
var pic_source=$("#pic").val();
var dob=$("#dob").val();
var contact_no=$("#contact_no").val();	
console.log(f_name);
console.log(pic_source);
var save="save";
if(f_name == "")
{
	alert("Provide First Name");
	$("#f_name").css("border-color","red");
	return false;
}
else if(l_name=="")
{
	alert("Provide Last Name");
		$("#l_name").css("border-color","red");

	return false;
}
else if(father_name=="")
{
	alert("Provide Father Name");
		$("#father_name").css("border-color","red");

	return false;
}
else if(age == 0)
{
	alert("Provide Your Age");
		$("#age").css("border-color","red");
		return false;

}
else if(age < 17 || age > 25)
{
	alert("Age Must be within 17 to 25");
	$("#age").css("border-color","red");
	return false;
}
else if($("input[name=gender]:checked").length <= 0)
{
	alert("Select your gender");
	return false;
}
else if(pic_source == "")
{
	alert("Provide your image");
	$("#pic").css("border-color","red");
	return false;

}
else if(dob == 0)
{
	alert("Provide your Date of Birth");
			$("#dob").css("border-color","red");

	return false;

}
else if(contact_no == 0)
{
	alert("Provide your contact no");
	$("#contact_no").css("border-color","red");
	return false;
}
else if(contact_no.length >11)
{
	alert("Provide  a valid Number");
	return false;
}
else
{
$.ajax({
url:"catch_personal_info.php",
method:"POST",
//data:{save:save,First_name:f_name,Last_name:l_name,Father_name:father_name,age:age,pic:pic_source,Contact_no:contact_no,dob:dob,gender:gender},
data:new FormData(this),
contentType:false,
processData:false,
success:function(resp)
{
$("#my_area").html(resp);
console.log(resp);
},
error:function(resp)
{
$("#my_area").html(resp);
console.log(resp);
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