<?php
session_start();
require("../db/configuration.php");

$id = $_REQUEST['id'];

$qry = mysql_query("delete from staffs where staff_id='$id'");

if($qry){ echo '<script>alert("Deleted successfully");location="main_index.php?action=deleted";</script>';}else{echo mysql_error();}





?>