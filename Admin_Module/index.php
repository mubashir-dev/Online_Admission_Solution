<!DOCTYPE html>
<html>
<head>
	<title>
	Admin Dashboard::
	</title>
		<link rel="stylesheet" type="text/css" href="../Supporting_Files/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../Supporting_Files/FontAwesome/css/all.css">


	</head>
<style type="text/css">
	
		*
		{
			padding: 0px;
			margin: 0px;
						text-decoration: none;

		}
		a
		{
			color: ;
		}
		.navbar
		{
			height: 40px;
		//	background-color: black;
			color: #fff;font-family:Agency Fb;
			font-size: 1.5em;
			
		}
		.navbar-default .navbar-nav >li>a:hover
				{
					color: green;
				}
		.navbar-default .navbar-brand >a 
		{
			//color: ;
			font-family: Agency Fb;
			font-weight: bold;
			font-size: 1.3em;
		}
		.navbar-default .navbar-nav >li>a 
		{
			color: white;
			font-weight: ;
		}
		.user_profile
		{
			height: 45px;
			width: 45px;
			border-radius: 50px;
			margin-top: px;
			background-color: white;
			border:1px solid red;
			margin-right: 00px;
			margin-top: -15px;
		}
		.dropdown-menu
		{
			font-size: 1.0em;
		}

	</style>
<body>
<!-- Top NavBar On Website // -->
<div class="container-fluid">
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;color:white">
	<div class="container-fluid">
	<div class="navbar-header">
		<div class="navbar-brand">
		<a href="#">E-Admission System</a>
		</div>
			<a href="#" class="navbar-toggle" data-toggle="collapse" data-target="#NavBar" class="btn btn-success mybtn"><i class="icon-bar"></i><i class="icon-bar"></i><i class="icon-bar"></i></a>	
		</div>
	<div  id ="NavBar" class="collapse navbar-collapse">
	<ul class="nav navbar-nav">
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">All Recoreds <i class="caret"></i></a>
	<ul class="dropdown-menu">
	<li><a href="#">Department Wise</a></li>
	<li><a href="#">Marks Wise</a></li>
	</ul>
	</li>
	<li>
	<a href="#"><i class="fas fa-headset"></i><b class="badge badge-info">25</b></a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">

	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">AdminOne <i class="caret"></i></a>
	<ul class="dropdown-menu">
	<li><a href="#" class="dropdown-item"><i class="fas fa-user-circle"></i>  Profile</a>
	</li>
	<li><a href="#"> <i class="far fa-calendar-alt"></i> Calender</a></li>
	<li><a href="#"><i class="fas fa-sliders-h"></i> Setting</a></li>
	<li class="divider"></li>
	<li><a href="#"><i class="fa fa-power-off"></i>  Log Out</a></li>
	</ul>
	</li>
	</ul>
	</div>
</div>
</nav>
<!-- End of Main Navbar -->
		<div class="conatainer-fluid" style="margin-top: 60px;margin-bottom: 15px">
	<div class="col-md-3" style="font-size: 1.1em;margin: 0 auto">

		 	<ul class="navbar navbar-default nav" style="height: 100vh;font-family: Agency Fb;font-size: 1.3em;color:black;font-weight: bold;margin:0 auto">
		 		<li><a href="#"><img src="s.jpg" width="85px" height="85px" class="center-block" style="border-radius: 85px;border:1px solid green"></a> <span style=";width:100px;height:85px;font-size:1.5em;margin-left: 85px;font-family:;border:0px solid green;border-radius: 95px;color:green">Offline</span></li>
		 		<li><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i>  Dashboard</a></li>
		 		<li><a href="#" data-toggle="collapse" data-target="#Mert_List"> <i class="fas fa-sort-numeric-down"></i>

   Merit List</a>
		 		</li>
		 	<div class="collapse nav" id="Mert_List" style="margin-left: 20px">
					<li><a href="#"><i class="fas fa-building"></i> Department</a></li>
					<li><a href="#"><i class="fas fa-graduation-cap"></i>

 	Score Level</a></li>
		    </div>
			<li>
					<a href="#"  data-toggle="collapse" data-target="#upload">
					<i class="fas fa-upload"></i> Uploads</a>
			</li>
			<div class="collapse nav" id="upload" style="margin-left: 20px">
					<li><a href="#"><i class="fas fa-trophy"></i>


						Entry Test Result</a></li>
					<li><a href="#"><i class="fas fa-bell"></i>  Notice</a></li>
			</div>
				<li>
					<a href="#" data-toggle="collapse" data-target="#users">
					<i class="fas fa-users"></i> All Users</a>
				</li>
			<div class="collapse nav" id="users" style="margin-left: 20px">
					<li><a href="#"><i class="glyphicon glyphicon-ok"></i> Complet Prfile</a></li>
					<li><a href="#"><i class="glyphicon glyphicon-remove"></i> 	Incomplete Profile</a></li>
			</div>
				<li><a href="#" data-toggle="collapse" data-target="#fee"><i class="fas fa-hand-holding-usd"></i>

 Fee Payments</a>
				</li>
			<div class="collapse nav" id="fee" style="margin-left: 20px">
					<li><a href="#"><i class="glyphicon glyphicon-ok"></i> Paid</a></li>
					<li><a href="#"><i class="glyphicon glyphicon-remove"></i> 	Unpaid</a></li>
			</div>
				<li><a href="#" data-toggle="collapse" data-target="#Search"><i class="glyphicon glyphicon-search"></i> Search Recored</a></li>
			<div class="collapse nav" id="Search" style="margin-left: 20px">
				<li><a href="#"><i class="fas fa-user-circle"></i> By
  			Name</a></li>
				<li><a href="#"><i class="fas fa-id-badge"></i>

 By Id</a></li>




			</div>
		 	</ul>


	</div>
	<div class="col-md-9" style="border:0px solid red;height: 100vh">
		<div class="row">
			<div class="col-md-4" style="border:0px solid red;font-size: 1.0em">
				<div class="panel panel-default panel-success">
					<div class="panel-body" style="background-color:lightgreen;">
						<div class="row">
							
							<div class="col-md-3" style="font-size: 4.0em">
								<span class="glyphicon glyphicon-signal"></span>		
							</div>
							<div class="col-md-offset-3 col-md-6 text-right" style="font-size: 1.1em">
							<p><b>45 <br>Total Admissions </b></p>	

							</div>
						</div> <!-- End of Row -->
					</div>
					<div class="panel-footer" >
						<a href="#" style="color: black">View More Details
						<i class="pull-right glyphicon glyphicon-arrow-right"></i> </a>
					</div>


				</div><!-- End of Panel -->
			</div><!-- End of Col -->
			<div class="col-md-4" style="border:0px solid red;font-size: 1.0em">
<div class="panel panel-default panel-success">
					<div class="panel-body" style="background-color:lightgreen;">
						<div class="row">
							
							<div class="col-md-3" style="font-size: 4.0em">
<i class="fas fa-dollar-sign"></i>						</div>
							<div class="col-md-offset-3 col-md-6 text-right" style="font-size: 1.1em">
														<p>Rs  <br>Fee Payed </p>	

							</div>
						</div> <!-- End of Row -->
					</div>
					<div class="panel-footer" >
						<a href="#" style="color: black">View More Details
						<i class="pull-right glyphicon glyphicon-arrow-right"></i> </a>
					</div>


				</div><!-- End of Panel -->


			</div>
			<div class="col-md-4" style="border:0px solid red;font-size: 1.0em">
				<div class="panel panel-default panel-success">
					<div class="panel-body" style="background-color:lightgreen;">
						<div class="row">
							<div class="col-md-3">
<i class="glyphicon glyphicon-list-alt"  style="font-size: 4.0em"></i>							</div>
							<div class="col-md-offset-3 col-md-6 text-right" style="font-size: 1.1em">
							<p>45 <br>Total Admissions </p>	

							</div>
						</div> <!-- End of Row -->
					</div>
					<div class="panel-footer" >
						<a href="#" style="color: black">View More Details
						<i class="pull-right glyphicon glyphicon-arrow-right"></i> </a>
					</div>


				</div><!-- End of Panel -->

		</div>
			<div class="col-md-3" style="border:0px solid red;font-size: 1.0em">
			

	</div>

</div> <!-- End of Row -->
<h3>Latest Admission</h3>
<div id="show">
	
</div>
</div>
<!--Modal For View -->
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
<!-- End of Modal-->
<div class="row">
	<div class="col-md-12" style="background-color: black;color: green;line-height:">
			<p class="pull-right" style="margin-right: 10px;font-family:Agency Fb;font-size:1.4em;line-height:35px;">Developed By TechAbbott In Abbottabad</p>

	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	Fetch_Data();
		function Fetch_Data()
		{
		$(document).ready(function()
		{
			var view_all="view";
		$("#show").html("<img  id ='loader'src='loder.gif' align='center' style='margin-left:385px;margin-top:100px'>");
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>