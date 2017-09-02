<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
?>
<html>
<head>
	<title>Deletion</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<form action="Deletion_Details.php" method=POST>
	<h2>To Delete </h2>
	<table align="center">
	<tr>
		<td>Phone Number</td>
		<td><input id="textbox"type="text" name="Phone_Number" placeholder="Number">
		</td>
	</tr>
	<tr>
		<td>Admission Number</td>
		<td><input id="textbox"type="text" name="Adm_no" placeholder="Number">
		</td>
	</tr>
	<tr >
		<td colspan=2><input id="submitbutton" type="Submit" value="delete" ></td>
	</tr>
</table>
</body>
</html>