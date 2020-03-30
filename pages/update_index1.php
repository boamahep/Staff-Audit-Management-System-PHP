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
          <td width="417"><a href="Main_index1.php">
          <button>Cancel</button></a>&nbsp;

	<font color="red" size="1">Current User: </font><font color="green" size="1"><?php if(isset($_SESSION['ad'])){echo $_SESSION['ad'];} ?></font>

		  </td>

    </table>
  </div>
  <!--###########################################################################-->
  <?php
			session_start();
			require('../db/configuration.php');

			$id = $_REQUEST['updateid'];

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

				}
			}



		?>
 <div class="add-user-main-panel">
 	<form enctype="multipart/form-data" name="newStaffForm" action="update_code.php?id=<?php echo $id; ?>" method="POST">

	 <table width="669" align="center">
	 	<tr>
			<td width="122" rowspan="5"><img src="profile/<?php echo $passport; ?>" alt="Passport" width="147" height="137" /><br />
				<input id="textfield"type="hidden" name="MAX_FILE_SIZE" value="1000000" />
				<input id="textfield"name="uploadedfile" type="file" />		    </td>
		    <td width="535">Make sure you use valid information for this registration, because it is very important to this institute for future use. </td>
	 	</tr>
	 	<tr>
	 	  <td>&nbsp;</td>
 	    </tr>
	 	<tr>
	 	  <td>&nbsp;</td>
 	    </tr>
	 	<tr>
	 	  <td>&nbsp;</td>
 	    </tr>
	 	<tr>
	 	  <td>&nbsp;</td>
 	    </tr>
     </table>
<hr />
	 <table width="669" align="center">

	 	<tr>
	 	  <td colspan="4" bgcolor="#000099"><h3><span class="style3">Staff Details information</span> </h3></td>
 	    </tr>
	 	<tr>
			<td width="96"><label for="select">Title</label>
			  <select name="title" id="select">
			    <option selected="seleted"><?php echo $title; ?></option>
			    <option value="Mr.">Mr.</option>
			    <option value="Mrs.">Mrs.</option>
			    <option value="Dr.">Dr.</option>
			    <option value="Eng.">Eng.</option>
			    <option value="Prof.">Prof.</option>
			    <option value="Alh">Alh.</option>
			    <option value="Haj.">Haj.</option>
		      </select>		    </td>
		    <td width="181"><label for="label">First Name</label>
	        <input name="fname" type="text" id="label" size="10" value="<?php echo $firstname; ?>" /></td>
		    <td width="191"><label for="label2">Middle Name</label>
	        <input name="mname" type="text" id="label2" size="10" value="<?php echo $middlename; ?>" /></td>
		    <td width="181"><label for="label3">Last Name</label>
	        <input name="lname" type="text" id="label3" size="10" value="<?php echo $lastname; ?>" /></td>
	 	</tr>
	  </table>
<hr />
		<table width="669" align="center">
		<tr>
		  <td colspan="2"><label for="label4">Gender</label>
            <select name="gender" id="label4">
			  <option selected="seleted"><?php echo $gender; ?></option>
			  <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select></td>
	      <td width="250"><label for="textfield">Date of Birth</label>
          <input name="dob" type="text" id="textfield" size="20" value="<?php echo $dob; ?>" /></td>
	      <td width="276"><label for="label5">Year of Service</label>
          <input type="text" name="year_of_service" id="label5" value="<?php echo $year_of_service; ?>" /></td>
		</tr>

	 </table>
<hr />
	 <table width="669" align="center">
		<tr>
		  <td colspan="2"><label for="label6">Service Start Date</label>
	      <input type="text" name="service_start_date" id="label6" value="<?php echo $service_start_date; ?>" /></td>
		  <td width="204"><label for="label7">Grade Level</label>
		    <select name="gradelvl" id="label7">
			  <option selected="seleted"><?php echo $gradelvl; ?></option>
		      <option value="Level 3">Level 3</option>
		      <option value="Level 4">Level 4</option>
		      <option value="Level 5">Level 5</option>
		      <option value="Level 6">Level 6</option>
		      <option value="Level 7">Level 7</option>
		      <option value="Level 8">Level 8</option>
		      <option value="Level 9">Level 9</option>
                </select>	      </td>
	      <td width="150"><label for="label8">Category</label>
	        <select name="category" id="label8">
			  <option selected="seleted"><?php echo $category; ?></option>
	          <option value="junior">Junior</option>
	          <option value="Senior">Senior</option>
            </select>
          </td>
		</tr>
	 </table>
<hr />
	  <table width="669" align="center">
		<tr>
		  <td><label for="label9">Highest Qualification</label>
	      <input name="cert" type="text" id="label9" size="70" value="<?php echo $certificate; ?>"/>	</td>
	    </tr>
	 </table>
<hr />
	 <table width="669" align="center">
		<tr>
		  <td colspan="3" bgcolor="#000099"><h3 class="style3">Salary and other payment Details </h3></td>
	    </tr>
		<tr>
		  <td width="189"><label for="label10">Salary</label><br />
	      <input name="salary" type="text" id="label10" size="15" value="<?php echo $salary; ?>" /></td>
		  <td width="185"><label for="label11">Allowance</label><br />
	      <input name="allowance" type="text" id="label11" size="15" value="<?php echo $allowance; ?>" /></td>
	      <td width="279"><label for="label12">Extimated arrear of salary</label><br />
          <input type="text" name="ext_ao_slr" id="label12" value="<?php echo $ext_ao_slr; ?>" /></td>
		</tr>
	 </table>
<hr />
	 <table width="669" align="center">
		<tr>
		  <td colspan="2"><label for="label13">Extimated arrear of Pension</label><br />
	      <input type="text" name="ext_ao_pension" id="label13" value="<?php echo $ext_ao_pension; ?>" /></td>
		  <td width="218"><label for="label14">Extimated arrear of Tax</label><br />
	      <input type="text" name="ext_ao_tax" id="label14" value="<?php echo $ext_ao_tax; ?>" /></td>
	      <td width="191"><label for="label15">Extimated arrear of other</label><br />
          <input type="text" name="ext_ao_other" id="label15" value="<?php echo $ext_ao_other; ?>" /></td>
		</tr>
	 </table>
<hr />
	  <table width="669" align="center">
		<tr>
		  <td bgcolor="#999900"><span class="style3">Before submitting, make sure that all the information you used are correct</span></td>
	    </tr>
	 </table>
<hr />
	  <table width="669" align="center">
		<tr>
		  <td colspan="2"><label for="Submit"></label>
	      <input type="submit" name="submit" value="Submit" id="Submit" /></td>
		  <td width="482"><label for="label16"></label>
	      <input type="reset" name="reset" value="Reset" id="label16" /></td>
        </tr>
	 </table>


    </form>
 </div>
  <div class="footer-div">
                <h5 align="center"><strong>Copyright &copy;2017 <a href="">GHANA EDUCATION SERVICE</a>.</strong> All rights
    reserved.<font color="white">__Created by <a href="">Nsiah Isaac</a></font></h5> </div>
            <div class="footer-div"></div>
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
