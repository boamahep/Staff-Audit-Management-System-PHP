<?php
session_start();

?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <!-- header begins here-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <!-- website title here-->
        <title>Atwima Kwanwoma Senior High School</title>
        <!-- Call CSS and javescript files-->
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
        <script language="JavaScript" type="text/javascript">
            //--------------- LOCALIZEABLE GLOBALS ---------------
            var d = new Date();
            var monthname = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            //Ensure correct for language. English is "January 1, 2004"
            var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
            //---------------   END LOCALIZEABLE   ---------------
        </script>
        <style type="text/css">
            <!-- .style3 {
                color: #FFFFFF
            }
            
            .style19 {
                font-size: 24px;
                font-family: Geneva, Arial, Helvetica, sans-serif;
            }
            
            -->
        </style>
        <!-- Login vaildation script-->
        <script>
            function validateForm() {
                var name = document.adminLogin.user.value;
                var pass = document.adminLogin.pass.value
                if ((name == null || name == "") || (pass == null || pass == "")) {
                    alert("Blank field are not accepted!");
                    return false;
                }
                return;
            }
        </script>
    </head>
<!-- body content begins here-->
    <body>
        <div class="add-container">
            <div class="banner-div">
                <div class="logo"> <img src="assets/images/logo.png" /> </div>
                <div class="site-title style3">
                    <h2>Ghana Education Service</h2></div>
                <div class="site-slogan">
                    <h3>Automated Staff Audit and Verification System</h3></div>
                <div class="logo2">
                    <div class="logo"> <img src="assets/images/logo2.png" /> </div>
                </div>
            </div>
            <!--end of banner-->
            <div class="add-user-menus-panel">
                <table width="669" align="center">
                    <tr>
                        <td height="43" colspan="2" bgcolor="#000099">
                            <h2 align="center"><span class="style3">Automated Staff Audit and Verification System</span></h2></td>
                    </tr>
                </table>
            </div>
            <!-- login form start here-->
            <div class="add-user-main-panel">
                <form id="form1">
                    <label></label>
                    <label></label>
                    <label for="Submit"></label>
                    <table width="315" align="center">
                        <tr>
                            <td height="43" colspan="2" bgcolor="#000099"><span class="style3">
            <h4 align="center">Please, select login type</h4>
          </span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <a href="entry.php" class="style">
                                    <h2 align="center"> Registrar</h2></a>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><a href="supervisor.php" class="style"><h2 align="center">Supervisors</h2></a> </td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- website footer starts here-->
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
                if (minutes < 10) {
                    minutes = "0" + minutes
                }
                document.write(hours + ":" + minutes + " ")
                if (hours > 11) {
                    document.write("PM")
                }
                else {
                    document.write("AM")
                }
                //-->
            </script>
        </div>
    </body>

    </html>