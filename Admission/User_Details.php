<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>User Details</title>
	  <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
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
?>
<?php 
$sql="SELECT * FROM `admissionmanagementsystem`.`login`";
 $result = mysqli_query($conn,$sql);
?>
<center>
		<br><br>
	<table align="center" border="2">
      <thead>
        <tr>
          <th> User_ID	</th>
		  <th>Password</th>
    	  <th>Privellage</th>
		  <th>Last_Login_Time</th>
		  <th>Last_Logout_Time</th>
		 </tr>
      </thead>
      <tbody>
	  <?php
	while( $row = mysqli_fetch_assoc( $result ) ){
		
            echo
            "<tr>
              <td>{$row['User_Id']}</td>
			  <td>{$row['Password']}</td>
              <td>{$row['Privelage']}</td>
			  <td>{$row['Last_Login_Time']}</td>
              <td>{$row['Last_Logout_time']}</td>
            </tr>\n";
          }

 ?>
 <br>
 <input type="button" value="Print this page" onClick="window.print()" style="float: bottom;"><br><br><br>
</tbody>
 </table>

</body>
</html>
 