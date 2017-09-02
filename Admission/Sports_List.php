<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Sports List</title>
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

     $conn =  mysqli_connect($servername, $username, $password,$db);

	 // Check connection
	 /*if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
	 else {
		echo"conection is succesful";
		  }
	*/
     //execute the SQL query and return records
     $sql = "SELECT Date,Add_No,Name,Department,Phone_number,Sport,Community FROM sports";
	 $result = mysqli_query($conn, $sql);
	 /*if($result === FALSE) { 
		mysql_error();  
			}
		 else{
			 echo"connection succesful to department";
		 }*/
      ?>
	  <h2>Sports List</h2><br>
      <table align="center" >
      <thead>
        <tr>
          <th>Date	</th>
          <th>Admission Number	</th>
          <th>Name</th>
          <th>Department</th>
		  <th>Phone number</th>
		  <th>Sport</th>
          <th>Community</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['Date']}</td>
              <td>{$row['Add_No']}</td>
			  <td>{$row['Name']}</td>
			  <td>{$row['Department']}</td>
			  <td>{$row['Phone_number']}</td>
			  <td>{$row['Sport']}</td>
              <td>{$row['Community']}</td>
            </tr>\n";
          }
        ?>
      <br>
 <input type="button" value="Print this page" onClick="window.print()" style="float: bottom;"><br><br><br>
 </tbody>
 </table>

    </body>
    </html>