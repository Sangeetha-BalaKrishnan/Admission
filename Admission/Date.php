<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
?>
<html>
<head>
	<title>Date</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php include "report.php";?>
	<div class="header"></div>
	<form action="Date1.php" method=POST>
	<h2>Search By Date </h2>
	<table align="center" >
	<tr>
		<td>DATE:<td><input type="date" name="d"   id="textbox">
		</td>
	</tr>
	<tr >
		<td colspan=2><input id="gobutton" type="Submit" value="Search" ></td>
	</tr>
</table>

	
</body>
</html>