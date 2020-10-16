<?php
require "./../../Supporting_Files/connection.php";
sleep(2);
if(isset($_GET["view_all"]))
{
$sql="SELECT personal_info.reg_id,personal_info.first_name,personal_info.last_name, personal_info.father_name,personal_info.DOB,academic_details.inter_marks,course.option_one,course.Department_one,address.city FROM personal_info INNER JOIN academic_details ON personal_info.reg_id = academic_details.reg_id INNER JOIN course ON course.reg_id = academic_details.reg_id INNER JOIN address ON address.reg_id = course.reg_id LIMIT 5";
$fire=mysqli_query($con,$sql);
if($fire)
{

echo '<table class="table table-responsive">
	<tr class="bg-success" style="background-color:yellow">
		<th>#</th>
		<th>Name</th>
		<th>Father Name</th>
		<th>Hssc Marks</th>
		<th>Admission Choice</th>
		<th>Department</th>
		<th>Update</th>
		<th>Remove</th>
		<th>View</th>
		</tr>';
	//

while($data=mysqli_fetch_assoc($fire))
{
	echo "<tr>";
	echo "<td>$data[reg_id]</td>";
	echo "<td>$data[first_name] $data[last_name]</td>";
	echo "<td>$data[father_name]</td>";
	echo "<td>$data[inter_marks]</td>";
	echo "<td>$data[option_one]</td>";
	echo "<td>$data[Department_one]</td>";
	echo "<td style='border-radius:0px;'><a href='#'  class='update btn btn-warning' data-id='".$data['reg_id']."'>update</a></td>";
	echo "<td style='border-radius:none;'><a href='#' class='remove btn btn-danger' data-id='$data[reg_id]'>Remove</a></td>";
	echo "<td style='border-radius:none;'><a href='#' id='view' data-toggle='modal' data-target='#mypoint' class='view btn btn-success' data-id='$data[reg_id]'>View</a><t/d>";
	echo "</tr>";
}
echo "</table>";
}
else
{
echo '<div class="alert alert-success" style="border-radius:0px"><p>No Data Found</p></div>';
}

}
else
{
	echo "Access Denied";
}


?>