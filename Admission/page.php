<html>
<head><title>Pages</title>
<link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}

 include "report.php";
 echo"<br>";
 echo"<br>";
 echo"<br>";
 echo"<br>";
 $servername = '127.0.0.1';
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


 $dept= $_GET['Dept'];
 $quota=$_GET['Quota'];
 
 
 if($dept=='All')
  {
	  $sql= "SELECT Date,Adm_No,Name,Phone_Number,Department, Community, Quota ,Cut_off,Total FROM admission WHERE Quota='$quota'";
	  $result = mysqli_query($conn,$sql);
	 echo "<h2> <center> <bold> <br> ";
	echo " List of students of ".$dept."  department under ".$quota;
  }
  else if($quota=='All')
  {
	$sql= "SELECT Date,Adm_No,Name,Phone_Number,Department, Community, Quota ,Cut_off,Total FROM admission WHERE Department='$dept' ";
	  $result = mysqli_query($conn,$sql);
	   echo "<h2> <center> <bold> <br>";
	echo " List of students of  ".$dept."  department under ".$quota."Quota";
  }
  else{
	  $sql= "SELECT Date,Adm_No,Name,Phone_Number,Department, Community, Quota ,Cut_off,Total FROM admission WHERE Department='$dept' AND Quota='$quota'";
	  $result = mysqli_query($conn,$sql);
	   echo "<h2> <center> <bold> <br>";
	  echo " List of students of ".$dept." department  under ".$quota."Quota";
  }

 /*if($result === FALSE) { 
		mysql_error();  
			}
		 else{
			 echo"connection succesful to department";
		 }*/
		 ?>
		<center>
		<br><br>
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

 ?>
 <br>
 <input type="button" value="Print this page" onClick="window.print()" style="float: bottom;"><br><br><br>
</tbody>
 </table>

</body>
</html>
 