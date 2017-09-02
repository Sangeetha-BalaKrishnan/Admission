<html>
<head>
	<title> Student Admission </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body >
	<form action="Admission.php" name="form1" method=POST>
	<h2><strong>ADMISSION ENTRIES</strong><hr/></h2>
	<table  align="center">
	<tr>
		<td>DATE :
		<td><input type="date" name="Date" id="textbox" >
		</td> </td>
		<td>Admission no :
		<td><input id="textbox" type="text" name="Adm_no" maxlength="50">
		</td></td>
	</tr>
	<tr>
		<td>NAME :
		<td><input id="textbox" type="text" name="Name" maxlength="50">
		</td></td>
		<td>DEPARTMENT :
		<td>
		</td></td>
	</tr>
	<tr>
		<td>EMAIL ID :
		<td><input  id="textbox" type="text" name="Email_id">
		</td></td>
		<td>Phone No:
		<td><input id="textbox" type="text" name="Phone_no">
		</td></td>
	</tr>
	<tr>
		<td>Language_Opted :
		<td><input id="textbox" type="text" name="Lan_Opt">
		</td></td>
		<td>Board
		<td><input type="text" name="Board">
		</td></td>
	</tr>
	<tr>
		<td>CUT OFF :
		<td><input type="text" name="Cut_off">
		</td></td>
		<td>TOTAL :
		<td><input type="text" name="Total">
		</td></td>
	</tr>
	<tr>
		<td>COMMUNITY :
		<td><select id="textbox" name="Community">
			<option> </option>
			<option> OC </option>
			<option> BC </option>
			<option> MBC </option>
			<option> SC </option>
			<option> ST </option>
			<option> MQ </option>
		</select>
		</td></td>
		<td>QUOTA :
		<td><select id="textbox" name="Quota">
			<option> </option>
			<option> OC </option>
			<option> BC </option>
			<option> MBC </option>
			<option> SC </option>
			<option> ST </option>
			<option> MQ </option>
			<option> SPORTS </option>
		</select>
		</td></td>
	</tr>
	<tr>
		<td>Sport :
		<td><input type="text" name="Sport" id="textbox">
		</td></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input id="submitbutton" type=submit > </td>
		<form action="#" method="POST">
		<td colspan="2" ><input id="submitbutton" type=reset value="reset"></td>
		</form>
	</tr>
<br>
 <input type="button" value="Print this page" onClick="window.print()" style="float: bottom;"><br><br><br>

 </table>
</form>
																				
</body>
</html> 