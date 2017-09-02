<!DOCTYPE html>
<html>
<head>
	<title>Pages</title>
	<link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
	<?php

session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}

	include "report.php";
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db='admissionmanagementsystem';

	// Create connection
	$conn =  mysqli_connect($servername, $username, $password,$db);

	// Check connection
	/*if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	else {
	echo"conection is succesful";
	}*/
	$Adm_no=$_POST['Adm_No'];
	$sql="SELECT Date,Adm_No,Name,Phone_Number,Department, Community, Quota ,Cut_off,Total from admission where Adm_No='$Adm_no'";
	$result = mysqli_query($conn,$sql);
	if($result === FALSE) { 
			mysql_error();  
				}
			else{
				// echo"connection succesful to department";
			}
	?>
		
	<table align="center">
      <thead>
        <tr>
          <th> Date	</th>
		  <th>Admission Number</th>
          <th>Name</th>
		  <th>Phone number</th>
          <th>Department</th>
          <th>Community</th>
          <th>Quota</th>
		  <th>Cut off</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
	  <?php
	while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['Date']}</td>
			  <td>{$row['Adm_No']}</td>
              <td>{$row['Name']}</td>
			  <td>{$row['Phone_Number']}</td>
              <td>{$row['Department']}</td>
              <td>{$row['Community']}</td>
              <td>{$row['Quota']}</td>
			  <td>{$row['Cut_off']}</td>
			  <td>{$row['Total']}</td>
            </tr>\n";
          }
		  echo"<br>"

 ?>
 <br>
 <center>
 <br>
 <input type="button" value="Print this page" onClick="window.print()" style="float: bottom;"><br><br><br>
</body>
</html>
 