<?php
session_start();
require('configuration.php');

$id = $_REQUEST['id'];
$target_path = "profile/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){

	$image = basename( $_FILES['uploadedfile']['name']);
	


$title = $_POST['title'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$year_of_service = $_POST['year_of_service'];
$service_start_date = $_POST['service_start_date'];
$gradelvl = $_POST['gradelvl'];
$category = $_POST['category'];
$cert = $_POST['cert'];
$salary = $_POST['salary'];
$allowance = $_POST['allowance'];
$ext_ao_slr = $_POST['ext_ao_slr'];
$ext_ao_pension = $_POST['ext_ao_pension'];
$ext_ao_tax = $_POST['ext_ao_tax'];
$ext_ao_other = $_POST['ext_ao_other'];


$sql = mysql_query("UPDATE `staffs` SET `pport` = '$image', 
		
		`title` = '$title',
		`fname` = '$fname',
		`mname` = '$mname',
		`lname` = '$lname',
		`gender` = '$gender',
		`dob` = '$dob',
		`year_of_service` = '$year_of_service',
		`service_start_date` = '$service_start_date',
		`gradelvl` = '$gradelvl',
		`category` = '$category',
		`cert` = '$cert',
		`salary` = '$salary',
		`allowance` = '$allowance',
		`ext_ao_slr` = '$ext_ao_slr',
		`ext_ao_pension` = '$ext_ao_pension',
		`ext_ao_tax` = '$ext_ao_tax',
		`ext_ao_other` = '$ext_ao_other'
			
		where staff_id = '$id';");

		if($sql){ echo '<script>alert("Updated");location="main_index.php?action=updated";</script>'; }else{echo mysql_error();}

	}
	else{
		echo mysql_error();
		}

?>