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
</head>

<body>
<div class="left-spacer"></div>
<div class="right-spacer"></div>
<div class="container">
	<div class="banner-div">
		<div class="logo">
			<img src="images/logo.png"	 />
		</div>

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
	<div class="footer-div">

</div>
</body>
</html>
