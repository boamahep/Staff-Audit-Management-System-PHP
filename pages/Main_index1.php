<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Staff Audit</title>
<link href="../assets/css/layout.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
.style19 {font-size: 24px; font-family: Geneva, Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body>
<div class="add-container">
  <div class="banner-div">
    <div class="logo"> <img src="../assets/images/logo.png"/> </div>
    <div class="site-title style3"><h2>Ghana Education Service</h2></div>
    <div class="site-slogan"><h3>Automated Staff Audit and Verification System</h3></div>
    <div class="logo2">
	<div class="logo"> <img src="../assets/images/logo2.png"/> </div>
	</div>
  </div>
  <!--end of banner-->
  <div class="add-user-menus-panel">

      <table width="669" align="center">
        <tr>
          <td height="43" colspan="2" bgcolor="#000099"><h2 align="center"><span class="style3"> Welcome to automated staffs audit system </span></h2></td>
        </tr>
        <tr>
          <td width="417"><a href="add_index.php?action=add"><button>New staff</button></a>&nbsp;
	<a href="logout.php?action=logged%out"><button>LogOut</button></a> &nbsp;

	<font color="red" size="1">Current User: </font><font color="green" size="1"><?php if(isset($_SESSION['ad'])){echo $_SESSION['ad'];} ?></font>

	</td>
          <td width="240">
		  	<form name="searchForm" action="search_index.php" method="POST">
		  		<input type="textfield" name="search" placeholder="Search Staff" />
				<button type="submit">Search</button>
		  	</form>
		  </td>
        </tr>
    </table>

  </div>
  <!--###########################################################################-->
 <div class="add-user-main-panel">
	 <table width="669" align="center">
	 	<?php

			require('../db/configuration.php');

			$qry = mysql_query("select * from staffs");
			if(!$qry){echo mysql_error();}else{
				echo '	<style>
							th{text-align:left;background:#000099;color:#fff;padding:5px;font-size:14px;}
							a{text-decoration:none;}
						</style>

						<th>S/No</th><th>Name</th><th>Gender</th><th>Date Of Birth</th><th>Year of Service</th><th>Actions</th>';
				$sno = 0;
				while($row = mysql_fetch_array($qry)){
					$id = $row['staff_id'];
					$passport = $row['pport'];
					$title = $row['title'];
					$firstname = $row['fname'];
					$middlename = $row['mname'];
					$lastname = $row['lname'];
					$gender = $row['gender'];
					$dob = $row['dob'];
					$year_of_service = $row['year_of_service'];
					$service_start_date = $row['service_start_date'];
					$gradelvl = $row['gradelvl'];
					$category = $row['category'];
					$certificate = $row['cert'];
					$salary = $row['salary'];
					$allowance = $row['allowance'];
					$ext_ao_slr = $row['ext_ao_slr'];
					$ext_ao_pension = $row['ext_ao_pension'];
					$ext_ao_tax = $row['ext_ao_tax'];
					$ext_ao_other = $row['ext_ao_other'];

					$sno = $sno + 1;

				echo '<tr>
						<td>'.$sno.'</td>
						<td>'.$title.' '.$firstname.' '.$middlename.' '.$lastname.'</td>
						<td>'.$gender.'</td>
						<td>'.$dob.'</td>
						<td>'.$year_of_service.'</td>
						<td>
							<a href="update_index1.php?updateid='.$id.'"><img src="../assets/images/edit.png" title="Update"></a>

							<a href="delete_index.php?id='.$id.'"><img src="../assets/images/close.png" title="Delete"></a>
						</td>
					</tr>';
				}
			}



		?>

     </table>
 </div>
 <div class="footer-div">
                <h5 align="center"><strong>Copyright &copy;2016 <a href="">GHANA EDUCATION SERVICE</a>.</strong> All rights
    reserved.<font color="white">__Created by <a href="">Nsiah Isaac</a></font></h5> </div>
            <div class="footer-div"></div>
</div>
    <div class="date" align="center">
	
      <script language="JavaScript" type="text/javascript">
      			document.write(TODAY);
			</script>
    </div>
	
<!-- java script for showing current time and date-->
    <div class="time" align="center">
      <script type="text/javascript">
				<!--
				var currentTime = new Date()
				var hours = currentTime.getHours()
				var minutes = currentTime.getMinutes()
				if (minutes < 10){
				minutes = "0" + minutes
				}
				document.write(hours + ":" + minutes + " ")
				if(hours > 11){
				document.write("PM")
				} else {
				document.write("AM")
				}
				//-->
			</script>
    </div>
</body>
</html>
