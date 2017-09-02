<?php
$username=$_POST['User_Id'];
$value=$_POST['length'];
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$db='admissionmanagementsystem';
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$db);
	
$password = random_password($value);
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
<body>
<form action="user2.php" method="POST">
		<h2>User Password Creation</h2>
		<table align="center" >
		
		<tr>
			<td>
			User Name/Id :
			<td><input type="Text" id="textbox" name="User_Id" value="<?php echo $username;?>">
			</td></td>
		</tr>
		<tr>
			<td>
			Enter The Length Of the Password
			<td><input type="Text" id="textbox" name="length" value="<?php echo $value;?>">
			</td></td>
		
		<tr>
		
		<tr>
			<td>
			Password Generated
			<td><input type="Text" id="textbox" name="password" value="<?php echo $password;?>">
			</td></td>
		<tr>
			<td>
			Privellegae
			<td><input type="Text" id="textbox" name="pri" >
			</td></td>
		
		<tr>
		<td><input id="gobutton" type="Submit" value="Store"></td>
			
		</tr>
		</table>
		</form>
	</body>
</html>
