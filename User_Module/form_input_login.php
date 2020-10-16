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
			width: 400px;
			margin:0 auto;
			margin-top:40px;
			border:0px solid black;

		}
		.my_form input
		{
			border-radius: 0px;
			width: 400px;
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
		.my_form input
		{
			border-radius: 0px;
			width: 100%;
		}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="bg-success text-center">
		<h1  style="font-family: Agency Fb">Abc College  Abbottabad</h1>
		<h2  style="font-family: Agency Fb">Abc College Online Admission System</h2>
	</div>
		<h2 class="text-center" style="margin-top: 50px">Create Account</h2>	<div class="show">
			
			</div>	
	<form class="form-horizontal my_form " method="POST" action="">
		<div class="form-group">
		<div class="col-md-12">
			<input type="text" name="username" placeholder="Username" class="form-control" id="username">
			<span id="availab"></span>
		</div>
		</div>
		<div class="form-group">
		<div class="col-md-12">
			<input type="text" name="e_mail" placeholder="Email" class="form-control" id="e_mail">
		</div></div>
		<div class="form-group">
		<div class="col-md-12">
			<input type="password" name="password" placeholder="Password" class="form-control" id="password">
		</div>
		</div>
		<div class="form-group">
		<div class="col-md-12">
			<input type="password" name="confirm" placeholder="Confirm Password" class="form-control" id="confirm_pass">
		</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
			<input type="submit" name="create" value="Create Account" class="form-control btn btn-success" id="create">
			</div>
		</div>	
		<hr>

	</form>
	<p class="text-center">Already a member ? <a href="user_log_in.php" class="">Log in</a></p>
	</div>
<script src="../Supporting_Files/js/JQurey.js"></script>
<script>
	$("document").ready(function()
	{
		var check="Check";
		$("#username").blur(function()
		{		var username=$(this).val();

				$.ajax({
					url:"check_username.php",
					method:"POST",
					data:{username:username,check:check},
					success:function(resp)
					{
						$("#availab").html(resp);
						//$("#username").css("border-color","red");
						console.log(resp);
					},
					error:function(resp)
					{
						$("#username").css("border-color","red");

					}

				});
		});
		

$("#create").click(function(event)
{
var create=$(this).val();
	event.preventDefault();
var username = $("#username").val();
var email = $("#e_mail").val();
var password = $("#password").val();
var pass_confirm = $("#confirm_pass").val();
if(username == "")
{
	alert("username field must be filled");
	return false;
}
else if(email == "")
{
alert("Must Provide Email");
return false;
}
else if(password == "")
{
	alert("Please Fill password Field");
	return false;
}
else if(pass_confirm != password)
{
	alert("password not matched");
	return false;
}
else
{
$.ajax({
url:"catch_log_in.php",
method:"POST",
data:{create:create,username:username,e_mail:email,password:password},
success:function(resp)
{
$(".show").html(resp);
},
error:function(resp)
{
	$(".show").html(resp);
}
});
}
});

	});


</script>
<script src="../Supporting_Files/js/bootstrap.js"></script>	
<script  type="text/javascript" src="Validation_Files/validate.js"></script>
</body>
</html>