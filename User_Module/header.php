<?php
session_start();
if(isset($_SESSION["reg_id"]))
{


}
else
{
header("Location:user_log_in.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../Supporting_Files/css/bootstrap.css">
	<style type="text/css">
	.nav
	{
		font-family: Agency Fb;
		font-size: 1.2em;
		font-weight: bold;
	}
	.nav{
margin-top: 0px;

	}
	.chane
	{
		background-color: black;
	}
	.nav >li > a
	{
		color: green;
	}
	.nav > li > a:hover
	{
		background-color: #333;
		color: #fff;
		border-radius: 0px;
	}
		@media(max-width: 750px)
		{
			.nav li 
			{
			width: 100%;	
			}
			.active
			{
				border-bottom: 0px solid #cccccc;
			}
		}
	</style>

</head>
<body>
<div class="container-fluid">
		<ul class="nav nav-tabs nav-justified">
		<li class="active tab-pane fade in"><a href="index.php" >Personal Information</a
			></li>
		    <li  class="tab-pane" id="Academic"><a href="form_input_academic.php" >Academic Details</a></li>
		   	<li class="tab-pane" id="Admission"><a href="user_input_options.php" >Admission Choices</a></li>
	<li class="tab-pane" id="Fee"><a href="user_input_fee.php" >Fee Payment</a></li>
		   	<li class="tab-pane" id="Address"><a href="form_input_address.php" >Address Information</a></li> 
		   	<li><a href="generate_slip.php">Generate Slip</a></li>
		   	<li><a href="write_any_qurey.php">Write Qurey</a></li>
		    <li class="tab-pane"><a href="user_log_out.php" >Log Out</a></li> 
		</ul>
	
<script src="../Supporting_Files/js/jqurey.js"></script>
<script type="text/javascript">
	$("document").ready(function()
	{
		$("#Personal").click(function()
		{
			$(this).addClass("active");
		});

	});
</script>
<script src="../Supporting_Files/js/bootstrap.js"></script>
</body>
</html>