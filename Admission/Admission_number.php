<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
?>
<html >
<head>
	<title>Admission number</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
		<?php include "report.php";?>
		<div class="header"></div>
		<form action="Admission_Number1.php" method=POST>
		<h2>Search By Admission Number</h2>
		<table align="center" >
		
		<tr>
			<td>
			Admission Number :
			<td><input type="Text" id="textbox" name="Adm_No" >
			</td></td>
		</tr>
		
		<tr>
			<td colspan="2"><input id="gobutton" type="Submit" value="Search" ></td>
		</tr>
		</table>
		</form>
	
</body>
</html>