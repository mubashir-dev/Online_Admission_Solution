<?php
require "header.php";
?>
<?php
require "../Supporting_Files/connection.php";
$reg_id=$_SESSION["reg_id"];
$sql="SELECT *FROM academic_details where reg_id ='$reg_id'";
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
		<!--<div class="bg-success">
		<h3 >Academic Information</h3></div> -->
	<form class="form-horizontal my_form" method="POST" action="">
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Ssc Marks</label>
		<div class="col-md-8">
			<input type="Number" name="ssc_marks" placeholder="Scc Marks" class="form-control" id="ssc_marks">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Matric Board</label>
		<div class="col-md-8">
			<input type="text" name="scc_board" placeholder="Matric Board" class="form-control" id="ssc_board">
		</div></div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Hssc Marks</label>
		<div class="col-md-8">
			<input type="Number" name="Hssc_Marks" placeholder="Hssc Marks" class="form-control" id="hssc_marks">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label"> Hssc Board</label>
		<div class="col-md-8">
			<input type="text" name="hssc_board" placeholder="Hssc Board" class="form-control" id="hssc_board">
		</div>
		</div>
		<div class="form-group">
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="Cancel" class="form-control btn btn-danger">	
			</div>
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="academic" value="Save" class="form-control btn btn-success" id="academic">
			</div>
		</div>
	</form>


	</div>

<script src="../Supporting_Files/js/JQurey.js"></script>
<script>
$("document").ready(function()
{
$("#academic").click(function(event)
{
event.preventDefault();
var ssc_marks=$("#ssc_marks").val();
var ssc_baord=$("#ssc_board").val();
var hssc_marks=$("#hssc_marks").val();
var hssc_board=$("#hssc_board").val();
console.log(ssc_marks+"\n"+ssc_baord+"\n"+hssc_marks);
if(ssc_marks == 0 )
{
	alert("Fill ssc Marks Field");
	return false;
}
else if(ssc_marks > 1100)
{
	alert("Enter valid  ssc Marks");
	return false;
}
else if(ssc_baord == "")
{
	alert("Provide ssc Borad");
	return false;
}
else if(hssc_marks == 0)
{
	alert("provide hssc marks");
	return false;
}
else if(hssc_marks > 1100)
{
	alert("Enter valid  Hssc Marks");
	return false;
}
else if(hssc_board == "")
{
	alert("Provide Hssc Borad");
	return false;
}
else 
{
$.ajax({
url:"catch_acadmic.php",
method:"POST",
data:{academic:"academic",ssc_marks:ssc_marks,scc_board:ssc_baord,Hssc_Marks:hssc_marks,hssc_board:hssc_board},
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