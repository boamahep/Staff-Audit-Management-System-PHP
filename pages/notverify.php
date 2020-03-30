<?php
session_start();
	require('../db/configuration.php');
	
	$id = $_REQUEST['verifyid'];
	
	$qry = mysql_query("Update staffs set verify = 'unverified.png' where staff_id = '$id'");
	
	echo '<script> location="view_index.php?viewid='.$id.'"; </script>';

?>