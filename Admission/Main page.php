<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<frameset cols="250,*" frameborder="2" name="framename" border="0" framespacing="0" frameborder="0">
	<frame src="Link.php" name="second" scrolling="no">
	<frame src="Welcome.php" name="three">
	</frameset>
	</frameset>
</head>
</html>