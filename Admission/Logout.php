<?php
session_start();
$con =  mysqli_connect("localhost","root","","admissionmanagementsystem") or die("Unable to Connect");
date_default_timezone_set('Asia/Kolkata');
	$date = date('d/m/Y h:i:s a', time());
	$sid=$_SESSION['uid'];
	$query="UPDATE login SET `Last_Logout_time` = '$date' WHERE `User_Id` = '$sid'";
	if(mysqli_query($con,$query))
	{
		unset($_SESSION['uid']);
if (!isset($_SESSION['uid'])) {
session_destroy();
header('Location: Login.html');
}
	}
	else{
		echo "Error: " . $res . "<br>" . mysqli_error($con);
		
	}/*
	while(mysqli_query($conn,$query))
	{
		unset($_SESSION['uid']);
if (!isset($_SESSION['uid'])) {
session_destroy();
header('Location: Login.html');
}

}*/






?>