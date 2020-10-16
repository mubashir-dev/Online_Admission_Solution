<!DOCTYPE html>
<html>
<head>
	<title>
		
		Test Php
	</title>
		<link rel="stylesheet" type="text/css" href="./../../Supporting_Files/css/bootstrap.css">

</head>
<body>
	<table class="table table-responsive">
	<tbody><tr class="bg-success" style="background-color:yellow">
		<th>#</th>
		<th>Name</th>
		<th>Father Name</th>
		<th>Date of Birth</th>
		<th>Hssc Marks</th>
		<th>Admission Choice</th>
		<th>Department</th>
		<th>Update</th>
		<th>Remove</th>
		<th></th>
		</tr><tr><td>3</td><td>Asad  Ali</td><td>Muzaffar Ali</td><td>2018-09-08</td><td>1001</td><td>BS Mathematics</td><td>Mathematics</td><td style="border-radius:0px;"><a href="#" id="up" class="update btn btn-warning" data-id="3">update</a></td><td style="border-radius:none;"><a href="#" class="btn btn-danger" data-id="3">Remove</a></td><td></td></tr><tr><td>4</td><td>Amjad Abbasi</td><td>Muhammad Dildar</td><td>2018-09-08</td><td>775</td><td>BS Software Engineering</td><td>Information Technology</td><td style="border-radius:0px;"><a href="#" id="up" class="update btn btn-warning" data-id="4">update</a></td><td style="border-radius:none;"><a href="#" class="btn btn-danger" data-id="4">Remove</a></td><td></td></tr><tr><td>2</td><td>Omer  Abdullah</td><td>Abdual Qudoos</td><td>2018-09-08</td><td>775</td><td>BS Mathematics</td><td>Mathematics</td><td style="border-radius:0px;"><a href="#" id="up" class="update btn btn-warning" data-id="2">update</a></td><td style="border-radius:none;"><a href="#" class="btn btn-danger" data-id="2">Remove</a></td><td></td></tr><tr><td>1</td><td>Omer  Shakeel</td><td>Muhammad Shakeel</td><td>2018-09-08</td><td>775</td><td>BS Mlt</td><td>MLT</td><td style="border-radius:0px;"><a href="#" id="up" class="update btn btn-warning" data-id="1">update</a></td><td style="border-radius:none;"><a href="#" class="btn btn-danger" data-id="1">Remove</a></td><td></td></tr><tr><td>5</td><td>Imran  Khan</td><td>Muhammad Shamzam Khan Naizi</td><td>2018-09-08</td><td>690</td><td>BS Micobiology</td><td>Micobiology</td><td style="border-radius:0px;"><a href="#" id="up" class="update btn btn-warning" data-id="5">update</a></td><td style="border-radius:none;"><a href="#" class="btn btn-danger" data-id="5">Remove</a></td><td></td></tr></tbody></table>
<div class="btn-group">
	<button id ="update" class="btn btn-info">Update</button> 	<button class="btn btn-info" data-id="4">Info</button>
	<button class="btn btn-info">Info</button>
	<button class="btn btn-info">Info</button>
	<button class="btn btn-info">Info</button>
	<button class="btn btn-info">Info</button>
	<!--<a href="#" id="update" data-id="2">update</a> -->
 
</div>
<script src="./../../Supporting_Files/js/bootstrap.js"></script>
<script src="./../../Supporting_Files/js/JQurey.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$(".update").click(function()
		{

alert("Click On Update Button");
var INFO=$(this).data();
console.log(INFO);
alert(INFO);
		});

	});

</script>
</body>
</html>