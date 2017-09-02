<?php

session_start();
if (!isset($_SESSION['uid'])) {
header('Location: Login.html');
}

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
$pno=$_POST['Phone_Number'];
$Adm_no=$_POST['Adm_no'];

/*$sql= "SELECT * FROM admission WHERE Adm_No='$Adm_no'";
	  $result = mysqli_query($conn,$sql);
	  if($result ==true) { 
		mysql_error(); 
	
			}
		 else{
			 echo"Result found";
		 }
		 
		/* while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
			  <td>{$row['Date']}</td>
			  <td>{$row['Adm_No']}</td>
              <td>{$row['Name']}</td>
			  <td>{$row['Email_Id']}</td>
			  <td>{$row['Phone_Number']}</td>
              <td>{$row['Department']}</td>
              <td>{$row['Community']}</td>
              <td>{$row['Quota']}</td>
			  <td>{$row['Cut_off']}</td>
			  <td>{$row['Total']}</td>
            </tr>\n";
          }*/
		$res= "INSERT INTO deletion_details(`Date`, `Add_No`, `Name`, `Department`, `Email_id`, `Phone_number`, `Quota`)"." SELECT `Date` , `Adm_No` , `Name` , `Department` , `Email_Id` , `Phone_Number` , `Quota`"." FROM admission WHERE Adm_No='$Adm_no' & Phone_Number='$pno'";
		
		if (mysqli_query($conn, $res)) {
//echo"record inserted succefully";
} else {
 echo "Error: " . $res . "<br>" . mysqli_error($conn);
}
$sql = "DELETE FROM admission WHERE Adm_No='$Adm_no'";

if (mysqli_query($conn, $sql)) {
  //  echo "Record deleted successfully";
  print "<script type=\"text/javascript\">"; 
		print "alert('The Data Is Successfully Deleted')";
		print '</script>'; 
	
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
require "delete.php";
		  
		
	?>