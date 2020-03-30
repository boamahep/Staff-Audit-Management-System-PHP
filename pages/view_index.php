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
.style20 {font-size: 14px}
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
  </div>
  <!--end of banner-->
  <div class="add-user-menus-panel">

      <table width="669" align="center">
        <tr>
          <td height="43" colspan="2" bgcolor="#000099"><h2 align="center"><span class="style3"> Welcome to automated staffs audit system </span></h2></td>
        </tr>
        <tr>
          <td width="417"><a href="main_index.php?action=view"><button>Back</button></a>&nbsp;


	<font color="red" size="1">Current User: </font><font color="green" size="1"><?php if(isset($_SESSION['ad'])){echo $_SESSION['ad'];} ?></font>
    </td> </tr>
    </table>

  </div>
  <!--###########################################################################-->
 <div class="add-user-main-panel">
	 <table width="669" align="center">
	 	<?php

			require('../db/configuration.php');

			$id = $_REQUEST['viewid'];

			$qry = mysql_query("select * from staffs where staff_id = '$id'");
			if(!$qry){echo mysql_error();}else{

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
					$verification = $row['verify'];
				}
			}


		?>
        <tr>
			<td width="345"><img src="../profile/<?php echo $passport; ?>" alt="Passport" width="147" height="137" /><br /></td>
	 	    <td width="312"><img src="../profile/<?php echo $verification; ?>" alt="Passport" width="147" height="137" /></td>
        </tr>

		<tr>
		<td><span class="style20">Name: <font color="green"><?php echo $title; ?> <?php echo $firstname; ?> <?php echo $middlename; ?> <?php echo $lastname; ?> </font></span></td>
	   </tr>
		<tr>
		  <td><span class="style20">Gender: <font color="green"><?php echo $gender; ?></font></span></td>
	   </tr>
		<tr>
		  <td><span class="style20">Date of Birth: <font color="green"><?php echo $dob; ?></font></span></td>
	   </tr>
	   <tr>
		  <td><span class="style20">Year Of Service: <font color="green"><?php echo $year_of_service; ?></font></span></td>
	   </tr>
	   <tr>
		  <td><span class="style20">Service Start Date: <font color="green"><?php echo $service_start_date; ?></font></span></td>
	   </tr>
	    <tr>
	      <td><span class="style20">Grade Level: <font color="green"><?php echo $gradelvl; ?></font></span></td>
       </tr>
	    <tr>
	      <td><span class="style20">Category: <font color="green"><?php echo $category; ?></font></span></td>
       </tr>
	   <tr>
	      <td><span class="style20">Highest Qualification: <font color="green"><?php echo $certificate; ?></font></span></td>
       </tr>
	   <tr>
	      <td><span class="style20">Salary: <font color="green"><?php echo $salary; ?></font></span></td>
       </tr>
	   <tr>
	      <td><span class="style20">Allowance: <font color="green"><?php echo $allowance; ?></font></span></td>
       </tr>
	   <tr>
	      <td><span class="style20">Extimated Arrears of Salary: <font color="green"><?php echo $ext_ao_slr; ?></font></span></td>
       </tr>
	   <tr>
	      <td><span class="style20">Extimated Arrears of Pension: <font color="green"><?php echo $ext_ao_pension; ?></font></span></td>
       </tr>
	   <tr>
	      <td><span class="style20">Extimated Arrears of Tax: <font color="green"><?php echo $ext_ao_tax; ?></font></span></td>
       </tr>
	   <tr>
	      <td><span class="style20">Extimated Arrears of Others: <font color="green"><?php echo $ext_ao_other; ?></font></span></td>
       </tr>
       <tr>
	      <td>&nbsp;</td>
       </tr
		><tr><td><a href="verify.php?verifyid=<?php echo $id; ?>"><button>Verify</button></a></td>
         <td><a href="notverify.php?verifyid=<?php echo $id; ?>"><button>Not Verify</button></a></td>
        </tr>
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
