<?php 
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
}
/*
function savePasswordToDatabase($password, $dbh){
  // First we prepare our query
  $stmt = $dbh->prepare("INSERT INTO tablenamehere (`fieldnamehere`) VALUES (:password)");

  // We bind values to our prepared query
  $stmt->bindParam(':password',$password);

  // We execute our query
  $stmt->execute();
}

$dbh = new PDO('mysql:host=HOST_HERE;dbname=DATABASENAME_HERE', 'USERNAME_HERE', 'PASSWORD_HERE');*/
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
<body>
<form method="POST">
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
			Password:
			<td><input type="password" id="textbox" name="Password" value="<?php echo $password;?>"></td></td>
		</tr>
		
		<tr>
		<td><input id="gobutton" type="Submit" value="Generate"></td>
			
		</tr>
		</table>
		</form>
	</body>
</html>
<?php 
if (isset($_POST['Generate'])) {
   $password = random_password(8);
    /*savePasswordToDatabase($randomPassword, $dbh);*/
    echo "Password is: {$password}";
}
?>