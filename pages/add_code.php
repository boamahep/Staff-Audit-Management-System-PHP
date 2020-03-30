<?php
session_start();
require('../db/configuration.php');

$target_path = "../profile/";
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


$qry1 = mysql_query("
	insert into staffs_backup
	(
		pport,
		title,
		fname,
		mname,
		lname,
		gender,
		dob,
		year_of_service,
		service_start_date,
		gradelvl,
		category,
		cert,
		salary,
		allowance,
		ext_ao_slr,
		ext_ao_pension,
		ext_ao_tax,
		ext_ao_other,
		verify
	)
	values(
		'$image',
		'$title',
		'$fname',
		'$mname',
		'$lname',
		'$gender',
		'$dob',
		'$year_of_service',
		'$service_start_date',
		'$gradelvl',
		'$category',
		'$cert',
		'$salary',
		'$allowance',
		'$ext_ao_slr',
		'$ext_ao_pension',
		'$ext_ao_tax',
		'$ext_ao_other',
		'unverified.png'
	)
	");

$qry = mysql_query("
	insert into staffs
	(
		pport,
		title,
		fname,
		mname,
		lname,
		gender,
		dob,
		year_of_service,
		service_start_date,
		gradelvl,
		category,
		cert,
		salary,
		allowance,
		ext_ao_slr,
		ext_ao_pension,
		ext_ao_tax,
		ext_ao_other,
		verify
	)
	values(
		'$image',
		'$title',
		'$fname',
		'$mname',
		'$lname',
		'$gender',
		'$dob',
		'$year_of_service',
		'$service_start_date',
		'$gradelvl',
		'$category',
		'$cert',
		'$salary',
		'$allowance',
		'$ext_ao_slr',
		'$ext_ao_pension',
		'$ext_ao_tax',
		'$ext_ao_other',
		'unverified.png'
	)
	");

			if($qry){

				echo 'Please wait... ';

				echo '<script type="text/javascript">

						var myVar=setInterval(function(){myTimer()},2000);

				function myTimer()
				{
					window.location="main_index.php";

				}
			</script>';
			}else {	echo mysql_error();	}

	}
	else{
		echo mysql_error();
		}

?>