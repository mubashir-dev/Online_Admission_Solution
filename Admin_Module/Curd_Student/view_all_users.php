<!DOCTYPE html>
<html>
<head>
	<title>
		Dashboard :: 
	</title>
	<style type="text/css">
	a
	{
color: red;
	}
		.table-striped
		{
			background-color: #3fb5935e;
		}
		@media(max-width: 550px)
		{
		 table
		{
			width: 100%;
			
		}	
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./../../Supporting_Files/css/bootstrap.css">

</head>

<body>
<div class="container" style="border:0px solid red;margin-top: 25px;">
	<div id="show">
	
	</div>
</div>
<div class="modal fade" id="mypoint" style="background-color: white;border-radius:0px">
	<div class="modal-dialog md-lg">
		<div class="modal-content" style="border-radius: 0px ">
		<div class="modal-header">
			<h4 class="modal-title">User Details</h4>
		</div>
			<div class="modal-body" id="modal_cont">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


			</div>	
			<div class="modal-footer">
				<button class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
				<button class="btn btn-success pull-right" data-dismiss="modal">Save</button>


			</div>
		</div>	
	</div>
</div>
<!--<button class="btn btn-success" data-toggle="modal" data-target="#mypoint"> Modal Show</button>-->
<script src="./../../Supporting_Files/js/JQurey.js"></script>

<script src="./../../Supporting_Files/js/bootstrap.js"></script>

	<script type="text/javascript">
		Fetch_Data();
		function Fetch_Data()
		{
		$(document).ready(function()
		{
			var view_all="view";
		$("#show").html("<img  id ='loader'src='loder.gif' align='center' style='margin-left:385px;margin-bottom:15px'>");
		$.ajax({
			url:"serve_all_user_request.php",
			data:{view_all:view_all},
			method:"GET",
			success:function(resp)
			{
				$("#show").html(resp);
			},
			error:function(resp)
			{
			$("#show").html(resp);
			}
		});
		});}
		Update_Data();
		function Update_Data()
		{
		$(document).on('click','.update',function(){

console.log("Click On Update Button");
var data=$(this).data();
alert(data);
console.log(data);
	});
	}
	delete_data();
	function delete_data()
	{
$(document).on('click','.remove',function()
{
	console.log("Clcik On remove Button");
	var id=$(this).data();
	console.log(id);


});
}
View_Data();
function View_Data()
{
	$(document).on('click','.view',function()
	{
		var id=$(this).data("id");
		var View="Veiw";
		$.ajax({
			url:"view_suer_single.php",
			data:{View:View,id:id},
			method:"POST",
			success:function(resp)
			{
			$("#modal_cont").html(resp);
			},
			error:function(resp)
			{
				$("#modal_cont").html(resp);
			}


		});

	});
}
		
	</script>
<!--<script  type="text/javascript" src="./../../Validation_Files/validate.js"></script> -->
</body>
</html>