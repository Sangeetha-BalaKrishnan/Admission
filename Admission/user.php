<?phpsession_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
<body>
<form action="user1.php" method="POST">
		<h2>User Password Creation</h2>
		<table align="center" >
		
		<tr>
			<td>
			User Name/Id :
			<td><input type="Text" id="textbox" name="User_Id" >
			</td></td>
		</tr>
		<tr>
			<td>
			Enter The Length Of the Password
			<td><input type="Text" id="textbox" name="length" value="">
			</td></td>
		
		<tr>
		<td><input id="gobutton" type="Submit" value="generate"></td>
			
		</tr>
		</table>
		</form>
	</body>
</html>
