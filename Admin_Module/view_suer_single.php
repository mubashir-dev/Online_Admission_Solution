<?php
require "../Supporting_Files/connection.php";
if(isset($_POST["View"]))
{
	$id=$_POST["id"];
$id=$_POST["id"];
$sql="SELECT personal_info.first_name,personal_info.last_name,personal_info.father_name,personal_info.Age,personal_info.contact_no,personal_info.photo_path,academic_details.inter_marks,course.option_one,course.Department_one,address.Province,address.City FROM personal_info INNER JOIN academic_details ON personal_info.reg_id =academic_details.reg_id INNER JOIN course ON course.reg_id = academic_details.reg_id INNER JOIN address ON address.reg_id=course.reg_id AND personal_info.reg_id ='$id'";
$fire=mysqli_query($con,$sql);
if($fire)
{
while($data=mysqli_fetch_assoc($fire))
{
	$name=$data["first_name"] ." ". $data["last_name"];
	$father_name=$data["father_name"];
	$age=$data["Age"];
	$photo=$data["photo_path"];
	$Province=$data["Province"];
	$Department=$data["Department_one"];
	$option=$data["option_one"];
	$marks=$data["inter_marks"];
	$Address =$data["City"];
	$contact_no=$data["contact_no"];
	echo "<div>
	<p>
<h4>Name : $name</h4>
<h4>Father Name : $father_name</h4>
<h4>Age : $age</h4>
<h4>Admission Choice:  $option</h4>
<h4>Deapertment:  $Department</h4>
<h4>Inter Marks:  $marks</h4>
<h4>Province : $Province</h4>
<h4>Address:  $Address</h4>
<h4>Contact No :$contact_no</h4>
<img src='$photo' width='120' height='150' align='right' style='margin-top:-200px;border:1px solid black'>
</p>
	</div>";
}


}
else
{
	echo '<div class="alert alert-danger"><p>Error Occured Try Again</p></div>';
}
}
else
{
	header("Location:../");
}

?>