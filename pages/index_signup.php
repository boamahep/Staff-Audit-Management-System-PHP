<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Site title</title>
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
.style1 {font-size: 12px}
.style3 {color: #FFFFFF}
-->
</style>
</head>

<body>
<div class="left-spacer"></div>
<div class="right-spacer"></div>
<div class="container">
	<div class="banner-div">
		<div class="logo">
			<img src="images/logo.png"	 />		</div>
		
		<div class="site-title">
		The site title </div>
		
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
			
		<div class="menus-div">
			<nav style="float:right;">
				<ul>
					<li><a href="#" class="active">category1</a>
						<ul>
						<li><a href="#" rel="facebox">men</a></li>
						<li><a href="#" rel="facebox">women</a></li>
						<li><a href="#" rel="facebox">kids</a></li>
						</ul>
					</li>
					<li><a href="#" rel="facebox">ages</a>
						<ul>
						<li><a href="#" rel="facebox">1</a></li>
						<li><a href="#" rel="facebox">2</a></li>
						<li><a href="#" rel="facebox">3</a></li>
						<li><a href="#" rel="facebox">4</a></li>
						<li><a href="#" rel="facebox">5</a></li>
						<li><a href="#" rel="facebox">(...)</a></li>
						</ul>
					</li>
					<li><a href="#" rel="facebox">height</a>
						<ul>
						<li><a href="#" rel="facebox">2.0(...)</a></li>
						<li><a href="#" rel="facebox">3.0(...)</a></li>
						<li><a href="#" rel="facebox">4.0(...)</a></li>
						<li><a href="#" rel="facebox">5.0(...)</a></li>
						<li><a href="#" rel="facebox">6.0(...)</a></li>
						<li><a href="#" rel="facebox">7.0(...)</a></li>
						</ul>
					</li>
					<li><a href="#" rel="facebox">category2 </a>
						<ul>
						<li><a href="#" rel="facebox">PAINTS</a></li>
						<li><a href="#" rel="facebox">SHIRTS</a></li>
						<li><a href="#" rel="facebox">BLAZERS</a></li>
						<li><a href="#" rel="facebox">SUITS</a></li>
						<li><a href="#" rel="facebox">SAFARI</a></li>
						<li><a href="#" rel="facebox">ETC</a></li>
						</ul>
					</li>
					<li><a href="#" rel="facebox">support</a></li>
					<li></li>
				</ul>
			</nav>	
	  </div>
	</div>
	<!--end of banner-->
	<div class="user-signup-panel">
	  <form id="form1" name="form1" method="post" action="">
	    <label></label>
            
        <label></label>
        
              <label for="Submit"></label>
              
              <table width="552">
                <tr>
                  <td height="49" colspan="4" bgcolor="#0033FF"><span class="style3">Personal Information </span></td>
                </tr>
                <tr>
                  <td colspan="4"><p><a href="index.php" class="style1">You already have an account?</a>
                    </td>
                </tr>
                <tr>
                  <td colspan="2">*First Name <br />    
                      <input type="text" name="textfield" />                    </td>
                  <td colspan="2">*Last Name<br />
                     
                      <input type="text" name="textfield2" />                   </td>
                </tr>
                <tr>
                  <td colspan="4">*Address 1<br />
                    
                      <input name="textfield3" type="text" size="70" />                   </td>
                </tr>
                <tr>
                  <td colspan="4">Address 2<br />
                    
                      <input name="textfield4" type="text" size="70" />                    </td>
                </tr>
                <tr>
                  <td width="174">*City <br />
                  <input name="textfield5" type="text" size="10" /></td>
                  <td width="110">*State<br />
                    <input name="textfield52" type="text" size="10" /></td>
                  <td width="5">&nbsp;</td>
                  <td width="250">*Postal Code <br />
                  <input name="textfield53" type="text" size="10" /></td>
                </tr>
                <tr>
                  <td colspan="4">*Phone Number <br />
                    <input type="text" name="textfield6" /></td>
                </tr>
                <tr>
                  <td colspan="4">*Email Address <br />
                    <input type="text" name="textfield7" /></td>
                </tr>
                <tr>
                  <td colspan="4">*Position applying for <br />
                    <select name="select">
                    </select>                  </td>
                </tr>
                <tr>
                  <td colspan="4">*Are you legally authorized to work at united state? <br />
                    <label for="radiobutton"><span class="style1">Yes</span></label>
                    <span class="style1">
                    <input name="work" type="radio" value="yes" id="radiobutton" /> 
					<label for="label">No</label>
					<input name="work" type="radio" value="no" id="label" />
                    <label for="label"></label>
                    </span>
                  <label for="radiobutton"></label></td>
                </tr>
                <tr>
                  <td colspan="4">*Have you ever been convinted of felony?<br />
                      <label for="radiobutton"><span class="style1">Yes</span></label>
                      <span class="style1">
                      <input name="felony" type="radio" value="yes" id="radiobutton" />
                      <label for="label">No</label>
                      <input name="felony" type="radio" value="no" id="label" />
                      </span>
                      <label for="label"></label>
                      <label for="radiobutton"></label></td>
                </tr>
                <tr>
                  <td colspan="4">*If yes please explain <br />
                  <textarea name="textarea" cols="50" rows="5"></textarea></td>
                </tr>
                <tr>
                  <td colspan="4"><button tabindex="2" ><a href="index_signupnext1.php">Next</a></button></td>
                </tr>
        </table>
      </form>
	 
  </div>
</div>
</body>
</html>
