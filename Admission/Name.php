<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
?>
<html>
<head>
<title>Name</title>
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<?php include "report.php";?>
	<div class="header"></div>
	<form action="Name1.php" method=POST>
	<h2>Search By Name </h2>
	<table align="center">
	<tr>
		<td>Name :
		<td><input type="text" id="textbox"name="name">
		</td></td>
	</tr>
	<tr >
		<td colspan=2><input  id="gobutton" type="Submit" value="Search" ></td>
	</tr>
	</table>
	</form>
</body>
</html>