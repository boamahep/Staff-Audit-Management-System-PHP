<?php
$host = "localhost";
$user = "root";
$pass = "mysql";
$dbase = "audit";

$link = mysql_connect($host, $user, $pass) or die("connection not establish");

mysql_select_db($dbase, $link) or die("database not selected");


?>