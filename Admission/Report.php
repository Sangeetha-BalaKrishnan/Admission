<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<style type="text/css">
/* ================================================================================================== */
html { 
  background: url(../IMAGES/a13.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body { margin: 0; padding: 0; font-family: Arial, sans-serif; font-size: 12px; line-height: 50%;   }

/* Menu General Styles */

.dropDownMenu a {
	color: #fff;
}
.dropDownMenu,
.dropDownMenu ul {
	background:#7A7A7A;
	list-style: none;
	margin: 0;
	padding: 0;
}
.dropDownMenu li {
	position: relative;
}
.dropDownMenu a {
	padding: 9px 20px;
	display: block;
	text-decoration: none;
}
.dropDownMenu a:hover {
	background: #000;
}
.dropDownMenu li:hover> a{
		background-color: #000;
		}

/* Level 1 Drop Down Menu */
.dropDownMenu > li {
	display: inline-block;
	vertical-align: top;
	margin-left: -2px; /* solve the 4 pixels spacing between list-items */
}
.dropDownMenu > li:first-child {
	margin-left: 0;
}
.dropDownMenu > li > a {}
.dropDownMenu > li > a:hover {}



/* Level 2 */
.dropDownMenu > li > ul {
	text-align: left;
	width: 120px; /* change auto value with 200px if you want a bigger menu */
	display: none;
	background: #4fbb87;
	position: absolute;
	top: 100%;
	left: 0; /* if you have YouTube iframes, is good to have a bigger z-index so the video can appear above the video */
}
.dropDownMenu > li:hover > ul {
	display: block;
}
.dropDownMenu ul li a {}
.dropDownMenu ul li a:hover {}



/* Level 3 */
.dropDownMenu > li > ul > li > ul {
	text-align: left;
	width:120px;
	display: none;
	background: #50bc91;
	position: absolute;
	left: 100%;
	top: 0;
}
.dropDownMenu > li > ul > li:hover > ul {
	display: block;
}
.dropDownMenu ul ul li {}
.dropDownMenu ul ul li a {}
.dropDownMenu ul ul li a:hover {}
</style>
</head>
<body>
<div class="drop"  >
<ul class="dropDownMenu">
<li><a href="Overall.php" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">Overall list</a></li>
<li><a href="#"  >DEPARTMENT</a>
    <ul>
      <li><a href="#"  >BCA</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	  <li><a href="#"  >BCOM MM</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	 <li><a href="#"  >BCOM HON</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	 <li><a href="#"  >BCOM CS</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	  <li><a href="#">BCOM A&F I</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	  <li><a href="#">BCOM A&F II</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	  <li><a href="#">BCOM A&F III</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBs </a></li>
			<li><a href="page.php?Quota=SC&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	  <li><a href="#">BSC FSM</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
      <li><a href="#">BSC COMP</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	  <li><a href="#">BSC MATH</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	  <li><a href="#">BSC VISCOM</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BSC+VISCOM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	  <li><a href="#">BSC EM</a>
		<ul>
			<li><a href="page.php?Quota=All&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> BC </a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MBC </a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SC </a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> ST </a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> MQ </a></li>
			<li><a href="page.php?Quota=SPORTS&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> SPORTS </a></li>
		</ul>
	 </li>
	</ul>
</li>
<li><a href="#">COMMUNITY</a>
    <ul>
	  <li><a href="#" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)"> OC </a>
		<ul >
            <li><a href="page.php?Quota=OC&Dept=All" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCA</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM MM</a></li>
		<li><a href="page.php?Quota=OC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM HON</a></li>	<li><a href="page.php?Quota=OC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM CS</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM A&F I</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF II</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF III</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC FSM</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC COMP</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC MATH</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC VISCOM</a></li>
			<li><a href="page.php?Quota=OC&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC EM</a></li>					
		</ul>
	   </li>
   	  <li><a href="#"> BC </a>
		<ul >
            <li><a href="page.php?Quota=BC&Dept=All" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=BC&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCA</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM MM</a></li>
		<li><a href="page.php?Quota=OC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM HON</a></li>	<li><a href="page.php?Quota=OC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM CS</a></li>			<li><a href="page.php?Quota=BC&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF I</a></li>
			<li><a href="page.php?Quota=BC&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF II</a></li>
			<li><a href="page.php?Quota=BC&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF III</a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC FSM</a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC COMP</a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC MATH</a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC VISCOM</a></li>
			<li><a href="page.php?Quota=BC&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC EM</a></li>					
		</ul>
	   </li>
	  <li><a href="#"> MBC </a>
		<ul >
            <li><a href="page.php?Quota=MBC&Dept=All" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCA</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM MM</a></li>
		<li><a href="page.php?Quota=OC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM HON</a></li>	<li><a href="page.php?Quota=OC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM CS</a></li>			<li><a href="page.php?Quota=MBC&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF I</a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF II</a></li>
			<li><a href="page.php?Quota=MBC&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF III</a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC FSM</a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC COMP</a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC MATH</a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+VICSOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC VISCOM</a></li>
			<li><a href="page.php?Quota=MBC&Dept=BSC+EM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC EM</a></li>					
		</ul>
	   </li>
 	  <li><a href="#"> SC </a>
		<ul >
            <li><a href="page.php?Quota=SC&Dept=All " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=SC&Dept=BCA " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCA</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM MM</a></li>
		<li><a href="page.php?Quota=OC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM HON</a></li>	<li><a href="page.php?Quota=OC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM CS</a></li>			<li><a href="page.php?Quota=SC&Dept=BCOM+AF+I " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF I</a></li>
			<li><a href="page.php?Quota=SC&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF II</a></li>
			<li><a href="page.php?Quota=SC&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF III</a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+FSM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC FSM</a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+COMP " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC COMP</a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+MATH " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC MATH</a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+VISCOM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC VISCOM</a></li>
			<li><a href="page.php?Quota=SC&Dept=BSC+FSM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC EM</a></li>					
		</ul>
	   </li>
	  <li><a href="#"> ST </a>
		<ul >
            <li><a href="page.php?Quota=ST&Dept=All " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=ST&Dept=BCA " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCA</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM MM</a></li>
		<li><a href="page.php?Quota=OC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM HON</a></li>	<li><a href="page.php?Quota=OC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM CS</a></li>			<li><a href="page.php?Quota=ST&Dept=BCOM+AF+I " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF I</a></li>
			<li><a href="page.php?Quota=ST&Dept=BCOM+AF+II " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF II</a></li>
			<li><a href="page.php?Quota=ST&Dept=BCOM+AF+III " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF III</a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+FSM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC FSM</a></li>
			<li><a href="page.php?Quota=ST&Dept=B " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC COMP</a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC MATH</a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+VICSOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC VISCOM</a></li>
			<li><a href="page.php?Quota=ST&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC EM</a></li>					
		</ul>
	   </li>
      <li><a href="#"> MQ </a>
		<ul >
            <li><a href="page.php?Quota=MQ&Dept=All" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">ALL</a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCA</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM MM</a></li>
		<li><a href="page.php?Quota=OC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM HON</a></li>	<li><a href="page.php?Quota=OC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM CS</a></li>			<li><a href="page.php?Quota=MQ&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF I</a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF II</a></li>
			<li><a href="page.php?Quota=MQ&Dept=BCOM+AF+III " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF III</a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+FSM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC FSM</a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+COMP " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC COMP</a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+MATH " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC MATH</a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+VISCOM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC VISCOM</a></li>
			<li><a href="page.php?Quota=MQ&Dept=BSC+EM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC EM</a></li>					
		</ul>
	   </li>
	  <li><a href="#"> SPORTS </a>
		<ul >
            <li><a href="page.php?Quota=Sports&Dept=All" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)" >All</a></li>
			<li><a href="page.php?Quota=Sports&Dept=BCA" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value) ">BCA</a></li>
			<li><a href="page.php?Quota=OC&Dept=BCOM+MM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM MM</a></li>
		<li><a href="page.php?Quota=OC&Dept=BCOM+HONORS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM HON</a></li>	<li><a href="page.php?Quota=OC&Dept=BCOM+CS" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM CS</a></li>			<li><a href="page.php?Quota=Sports&Dept=BCOM+AF+I" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF I</a></li>
			<li><a href="page.php?Quota=Sports&Dept=BCOM+AF+II" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF II</a></li>
			<li><a href="page.php?Quota=Sports&Dept=BCOM+AF+III" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BCOM AF III</a></li>
			<li><a href="page.php?Quota=Sports&Dept=BSC+FSM " target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC FSM</a></li>
			<li><a href="page.php?Quota=Sports&Dept=BSC+COMP" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)  ">BSC COMP</a></li>
			<li><a href="page.php?Quota=Sports&Dept=BSC+MATH" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC MATH</a></li>
			<li><a href="page.php?Quota=Sports&Dept=BSC+VISCOM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC VISCOM</a></li>
			<li><a href="page.php?Quota=Sports&Dept=BSC+EM" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">BSC EM</a></li>					
		</ul>
	   </li>
	</ul>
  </li>
  <li><a href="#">Search By</a>
    <ul>
	  <li><a href="Date.php" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">Date</a></li>					
  	  <li><a href="Admission_Number.php" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">Adm_No</a></li>					
	  <li><a href="Name.php" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">Name</a></li>					
	  <li><a href="Phone_Number.php" target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">Phone_No</a></li>					
	</ul>
  </li>
  <li><a href="Deletion_List.php"  target="_self" onclick="openWindow(setit.options[setit.selectedIndex].value)">Deletion List</a></li>


 </ul>
</div>
<script type="text/javascript">
function openWindow(location){
    if(location == "#")return;
    window.open(location,'_self');
}
</script>
</body>
</html>
