<?php
session_start();
require("../db/configuration.php");

$user = $_POST['user1'];
$pass = $_POST['pass1'];

$qry = mysql_query("select * from entry_users where user='$user' and pass='$pass'");

if(!$qry){echo mysql_error();}else{
	while($row=mysql_fetch_array($qry)){
			$username = $row['user'];
			$password = $row['pass'];
		}

	}

if($user==$username || $pass==$password){
			echo '<script>location="add_index.php?action=add";</script>';
			
			isset($_SESSION['ad']);
			
			$_SESSION['ad'] = $username;
		}
		else{
            
			isset($_SESSION['error']);
			
			$_SESSION['error'] = "Incorrect username or password";
			
			echo '<script type="text/javascript">
									var myVar=setInterval(function(){myTimer()},100);

							function myTimer()
							{
								window.location="../index.php";

								}
							</script>';
			}





?>