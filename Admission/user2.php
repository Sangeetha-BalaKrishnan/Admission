<?php
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$db='admissionmanagementsystem';
		$conn =  mysqli_connect($servername, $username, $password,$db);
		$username=$_POST['User_Id'];
		$password=$_POST['password'];
		$pri=$_POST['pri'];
		// Check connection
		/*if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		else {
			echo"conection is succesful";
		}*/
		$sql="INSERT INTO `admissionmanagementsystem`.`login`(`User_Id`,`Password`,`Privelage`)VALUES('$username','$password','$pri')";
		$result=mysqli_query($conn, $sql);
		$count=mysqli_num_rows($result);
if($count!=0){
		
		/*if($result === FALSE) {
			die(mysql_error()); 
			echo"Not Connected";
		}
		else{
			echo"connection succesful to department";
		}*/$Message="The User Is Added To The Database";
				echo "<script type='text/javascript'>alert('$Message');</script>";
}
else{
	$Message="The User already Exists Try Another User Name";
	echo "<script type='text/javascript'>alert('$Message');</script>";
	include "user.php";
}
	?>
	