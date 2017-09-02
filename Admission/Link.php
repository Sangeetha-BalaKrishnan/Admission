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
		// Check connection
		/*if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		else {
			echo"conection is succesful";
		}*/
		$sid=$_SESSION['uid'];
		$sql="SELECT `login`.`Privelage` FROM `admissionmanagementsystem`.`login` WHERE `login`.`User_Id`='$sid'";
		$privelage=mysqli_query($conn, $sql);
		/*if($result === FALSE) {
			die(mysql_error()); 
			echo"Not Connected";
		}
		else{
			echo"connection succesful to department";
		}*/
		$result=mysql_fetch_array($privelage);
	
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/link.css">
</head>
<body >
	<table>
	<?php
	if($result['Privelage']="yes")
	{
	echo "<tr>";
		echo "<td >";
		echo"<a href='user.php' target='three'><button type='button' class='myButton'>User_ID Geneartion</button></a>";
		echo"</td>";
	echo"</tr>";
	}
	?>
	<?php
	if($result['Privelage']=="yes")
	{
	echo "<tr>";
		echo "<td >";
		echo"<a href='User_Details.php' target='three'><button type='button' class='myButton'>Users</button></a>";
		echo"</td>";
	echo"</tr>";
	}
	?>
	
	<tr>
		<td >
		<a href="Admission_Page.php" target="three"><button type="button" class="myButton">Admission</button></a>
		</td>
	</tr><br>
	<?php
	if($result['Privelage']=="yes")
	{
	echo "<tr>";
		echo "<td >";
		echo"<a href='Delete.php' target='three'><button type='button' class='myButton'>Delete</button></a>";
		echo"</td>";
	echo"</tr>";
	}
	?>
	<tr>
		<td >
		<a href="Report.php" target="three"><button class="myButton" type="button" >Report</button></a>
		</td>
	</tr><br>
	<tr>
		<td >
		<a href="Logout.php" target="_parent"><button class="myButton" type="button" >Logout</button></a>
		</td>
	</tr>
</table>
</body>
</html>