<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
?>
<html>
<head>
	<title>Phone Number</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php include "report.php";?>
	<div class="header"></div>
	<form action="Phone_Number1.php" method=POST>
	<h2>Search By Phone Number </h2>
	
	<table align="center">
	<tr>
		<td>Phone Number :
		<td><input type="Text" name="Phone_no"  id="textbox">
		</td></td>
	</tr>
	<tr >
		<td colspan=2><input type="Submit" id="gobutton" value="Search" ></td>
	</tr>
	</table>
</body>
</html>