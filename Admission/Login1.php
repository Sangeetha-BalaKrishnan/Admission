<?php
session_start();
$uid=$_SESSION["uid"]=$_POST['uid'];
$pwd=$_SESSION["pwd"]=$_POST['pwd'];
$con =  mysqli_connect("localhost","root","","admissionmanagementsystem") or die("Unable to Connect");
$sql="SELECT * FROM login where User_Id='$uid' and Password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count!=0)
{
	date_default_timezone_set('Asia/Kolkata');
	$date = date('d/m/Y h:i:s a', time());

$query="UPDATE login SET `Last_Login_Time` = '$date' WHERE `User_Id` = '$uid'";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);
	while($fetch=mysqli_fetch_row($result))
	{
		 $_SESSION['uid']=$uid;
		 echo "<script>window.open('Main page.php','_self')</script>"; 
	}
}
else{
	$_SESSION['errMsg'] = "Invalid username or password";
	if(!empty($_SESSION['errMsg'])) 
			{
				$Message=$_SESSION['errMsg'];
				echo "<script type='text/javascript'>alert('$Message');</script>";
			}
	unset($_SESSION['errMsg']);
    header("Location: ../login.html"); //Redirect user back to your login form

}

?>