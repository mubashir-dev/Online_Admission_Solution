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
			margin:0 auto;
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
	<div class="container">
		<div class="bg-success">
		<h3 >Personal Information</h3></div>
	<form class="form-horizontal my_form" method="POST" enctype="multipart/form-data" action="catch_personal_info.php">
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
			<input type="submit" name="save" value="Save" class="form-control btn btn-success" id="submit">
			</div>
		</div>
	</form>


	</div>

<script src="../Supporting_Files/js/JQurey.js"></script>
<script src="../Supporting_Files/js/bootstrap.js"></script>	
<script  type="text/javascript" src="Validation_Files/validate.js"></script>
</body>
</html>