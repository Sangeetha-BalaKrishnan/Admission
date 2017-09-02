<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
?>
<html>
<head>
<style>
h1{
	color:White;
}
</style>
  </head>
<body >
<center>
<marquee>
<h1>WELCOME!</h1>
</center>
</body>
</html>