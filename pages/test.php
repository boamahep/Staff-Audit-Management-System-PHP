<?php
session_start();
require("configuration.php");

$up = $_REQUEST['up'];

$target_path = "profile/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){

	$image = basename( $_FILES['uploadedfile']['name']);




$sql = mysql_query("UPDATE `staffs` SET `pport` = '$image' WHERE `staff_id` = 2;");

if($qry){ echo '<script>alert("Updated");location="main_index.php?action=updated";</script>';}else{echo mysql_error();}


}


?>