
<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Staff Audit</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />

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

<script>
function validateForm(){
var name = document.adminLogin.user.value;


if(name==null || name=="")
	{
		alert("Please Enter your username!");
		return false;
	}
return;

}
</script>

</head>

<body>
<div class="add-container">
  <div class="banner-div">
    <div class="logo"> <img src="images/logo.png"	 /> </div>
    <div class="site-title style3">Automated Staff Audit System </div>
    <div class="site-slogan">Kazaure L.G.A. Secretriate </div>
    <div class="date">
      <script language="JavaScript" type="text/javascript">
      			document.write(TODAY);
			</script>
    </div>
    <div class="time">
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
  </div>
  <!--end of banner-->
  <div class="add-user-menus-panel">
    <table width="669">
      <tr>
        <td height="43" colspan="2" bgcolor="#000099"><h2 align="center"><span class="style3"> Welcome to automated staffs audit system </span></h2></td>
      </tr>
    </table>
  </div>
  <!--###########################################################################-->
  <div class="add-user-main-panel">

      <label></label>
      <label></label>
      <label for="Submit"></label>
      <table width="315" align="center">
        <tr>
          <td height="43" colspan="2" bgcolor="#000099"><span class="style3">
            <h4 align="center">Authorized User Login Area</h4>
          </span></td>
        </tr>

        <tr>
          <td style="text-align:center;">Your password is shown below:

              <br />
              <font color="red" size="1">
              <?php if(isset($_SESSION['pass'])){echo $_SESSION['pass'];} ?>
            </font>
            <br /><br />
            <a href="index.php"><button>Back</button></a>

            </td>
        </tr>


      </table>

  </div>
  <div class="footer-div"></div>
</div>
</body>
</html>
