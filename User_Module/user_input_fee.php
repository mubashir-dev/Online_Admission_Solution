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
<?php
require "header.php";
?>
<body>
	<div class="container">
		<!--<div class="bg-success">
		<h3 >Academic Information</h3></div> -->
	<form class="form-horizontal my_form" method="POST" action="catch_fee_payment.php">
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Challan No</label>
		<div class="col-md-8">
			<input type="text" name="challan_no" placeholder="Bank Challan No" class="form-control" id="challan_no">
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Fee Amount</label>
		<div class="col-md-8">
			<input type="Number" name="fee_amount" placeholder="Fee Amount" class="form-control" id="fee_amount">
		</div></div>
		<div class="form-group">
		<label class="col-md-2 col-md-offset-2 control-label">Date</label>
		<div class="col-md-8">
			<input type="date" name="date_challan"  class="form-control" id="date_challan">
		</div>
		</div>
		<div class="form-group">
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="save" value="Cancel" class="form-control btn btn-danger">	
			</div>
			<div class="col-md-2 col-md-offset-4">
			<input type="submit" name="payment" value="Save" class="form-control btn btn-success" id="fee_payment">
			</div>
		</div>
	</form>


	</div>

<script src="../Supporting_Files/js/JQurey.js"></script>
<script src="../Supporting_Files/js/bootstrap.js"></script>	
<script  type="text/javascript" src="Validation_Files/validate.js"></script>
</body>
</html>