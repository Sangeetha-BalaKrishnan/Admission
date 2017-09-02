<?php

		session_start();
		if (!isset($_SESSION['uid'])) {
			header('Location: Login.html');
		}

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

	$Date= $_POST['Date'];
	$Adm_no=$_POST['Adm_no'];
	$Name=$_POST['Name'];
	$Dep=$_POST['Department_Name'];
	$Email_id=$_POST['Email_id'];
	$Phone_no=$_POST['Phone_no'];
	$board=$_POST['Board'];
	$lan=$_POST['Lan_Opt'];
	$Community=$_POST['Community'];
	$Quota=$_POST['Quota'];
	$Cut_off=$_POST['Cut_off'];
	$Total=$_POST['Total'];
	$sport=$_POST['Sport'];

	/*if($Quota=='SPORTS')
	{
		$res="INSERT INTO sports VALUES ('$Date','$Adm_no','$Name','$Dep','$Phone_no','$Email_id','$sport','$Community')";
		if (mysqli_query($conn, $res))
		{
			//	echo"record inserted succefully";
		} 
		else
		{
			echo "Error: " . $res . "<br>" . mysqli_error($conn);
		}
	}*/


	//To Insert Values 
	$sql = "INSERT INTO admission VALUES ('$Date','$Adm_no','$Name','$Email_id','$Phone_no','$Dep','$board','$lan','$Community','$Quota','$Cut_off','$Total')";
	
	if (mysqli_query($conn, $sql)) 
	{
		//echo"record inserted succefully";
		print "<script type=\"text/javascript\">"; 
		print "alert('The Data Is Successfully Inserted')";
		print '</script>'; 
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	require "admission_page.php";	
	


?>

