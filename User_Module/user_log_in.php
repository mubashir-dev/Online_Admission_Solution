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
			width: 300px;
			margin:0 auto;
			margin-top:30px;
			border:0px solid black;

		}
		.my_form input
		{
			border-radius: 0px;
			width: 300px;
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
		#error
		{
			width:400px;
			margin:0 auto;
			border-radius:0px;
			color:black;
			background-color:;
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
		#error
		{
			width:90%;
			margin: 0 auto;
			background-color:#E10A23;
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
		<h2 class="text-center" style="margin-top: 40px">Login</h2>		
	<form class="form-horizontal my_form " method="POST" action="">
		<div class="form-group">
		<div class="col-md-12">
			<input type="text" name="username" placeholder="Username" class="form-control" id="username">
		</div>
		</div>
		<div class="form-group">
		<div class="col-md-12">
			<input type="password" name="password" placeholder="Password" class="form-control" id="password">
		</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
			<input type="submit" name="log_in" value="Login" class="form-control btn btn-success" id="log_in">
			</div>
		</div>	
		<hr>

	</form>
	<p class="text-center">New to site ? <a href="form_input_login.php" class="">Create Account</a></p>
	<p class="text-center"><a href="#">Lost Your Password ?</a></p>
	</div>
<script src="../Supporting_Files/js/JQurey.js"></script>
<script type="text/javascript">
		$("#log_in").click(function()
		{


			var username=$("#username").val();
			var password=$("#password").val();
			if(username == "")
			{
				alert("Please Type Your Username !");
				$("#username").css("border-color","red");
				return false;
			}
			else if(password == "")
			{
				alert("Please Type Your Password !");
				$("#password").css("border-color","red");
				return false;	
			}
			else
			{
					//		alert(username +"\n"+password);
							
							return true;
			}
		});
</script>
<script src="../Supporting_Files/js/bootstrap.js"></script>	
<script  type="text/javascript" src="Validation_Files/validate.js"></script>
</body>
</html>
<?php
require "../Supporting_Files/connection.php";
if(isset($_POST["log_in"]))
{
$username=$_POST["username"];
$password=$_POST["password"];
$sql="SELECT *FROM log_in where username ='$username' AND password ='$password'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	$row=mysqli_num_rows($fire);
	$data=mysqli_fetch_array($fire);
	//print_r($data);
	$reg_id=$data["reg_id"];
	if($row == 1)
	{
		session_start();
		$_SESSION["reg_id"]=$reg_id;
		$sql_1="UPDATE 	 log_in SET flag=1 WHERE reg_id='$reg_id'";
		if(mysqli_query($con,$sql_1))
		header("Location:index.php");
	}
	else 
	{

 echo "<div class='alert alert-danger alert-dismissible fade in' id='error'>
 <p><strong><i class='glyphicon glyphicon-exclamation-sign' style='font-size1.4em'></i> Username or Password may be wrong</strong></p></div>";
	}

}
else
{

}



}
else
{
	echo "";
}










?>