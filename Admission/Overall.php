<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Overall List</title>
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
	else	 {
	echo"conection is succesful";
	}*/
	$quota = array("OC", "BC ", "MBC", "SC", "ST" , "MQ" , "SPORTS"  );
	$dept = array("BCA", "BCOM HONORS " , "BCOM MM",  "BCOM CS ", "BCOM AF I", "BCOM AF II", "BCOM AF III" , "BSC FSM" , "BSC MATH", "BSC COMP" , "BSC VISCOM" , "BSC EM" );
?>
	<h2>Overall List</h2>
	<table align="center" >
	<thead>
	<tr>
		<th>Department</th>
		<th>OC</th>
		<th>BC</th>
		<th>MBC</th>
		<th>SC</th>
		<th>ST</th>
		<th>MQ</th>
		<th>SPORTS</th>
		<th>SUM</th>
	</tr>
	</thead>
<?php
	echo"<tbody>";
	for($x=0;$x<12;$x++)
	{	
		echo"<tr>";
		echo"<td>{$dept[$x]}</td>";
		for($y=0;$y<=6;$y++)
		{
			$result=mysqli_query($conn, "SELECT count(*) from `admission`  where Quota='$quota[$y]' AND Department='$dept[$x]' ");
			while($row=mysqli_fetch_array($result))
			{
			echo "<td>{$row[0]}</td>";
						
			}
		}		
		$res=mysqli_query($conn,"select COUNT(Quota) as SUM from `admission` where Department='$dept[$x]'");
		while($row=mysqli_fetch_array($res))
		{
			echo"<td>{$row['SUM']}";
		}
	}

	echo"</tr>";
	/*echo"<tr>";
	echo"<td>{$dept[$x]}</td>";
	$result=mysqli_query($conn, "SELECT count(*) from `admission`  where QUOTA='$quota[$x]' AND DEPARTMENT='$dept[$x]' ");	
	$row= mysqli_fetch_array($result);
	echo "<td>{$row[0]}</td>";
	echo"</tr>";
	*/
	/*if($result === FALSE) {
	die(mysql_error());  
	}
	else{
	echo"connection succesful to admission";
	}*/	
	echo"</tbody>";
?>
	<br>
 <input type="button" value="Print this page" onClick="window.print()" style="float: bottom;"><br><br>
 </tbody>
 </table>


</body>
</html>