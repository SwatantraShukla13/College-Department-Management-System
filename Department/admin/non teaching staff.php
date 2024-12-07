<?php
	include"connection.php";
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if(isset($_SESSION['login_user']))
				{
				
					mysqli_query($db,"INSERT INTO `non_teach_staff` (`uid`, `staff_name`, `contact`, `deptt_name`) VALUES (NULL, '$_POST[staff_name]', '$_POST[contact]', '$_POST[deptt_name]');");
					echo '<script type="text/javascript">alert("Record Submit Successfully.")</script>';
				}
				else
				{
					echo '<script type="text/javascript">alert("You have to login first.")</script>';
				}
			} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Non Teaching Staff</title>
<link href="form3.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, intial-scale=1">
</head>

<body>
	<div class="form3">
	<center>
		<h1>Non-Teaching Staff Record</h1>
	</center>
		<form method="post" action=""><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
			<span id="name">
				<label id="stfnamelbl">1. Name :</label>&nbsp; <input type="text" name="staff_name" id="staffname" required="">	
			</span><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
			<span id="cont">
				<label id="contlbl">2. Contact :</label>&nbsp; <input type="text" name="contact" id="contact" required="">
			</span><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
			<span id="deptt">
				<label id="depttlbl">3. Department Name :</label>&nbsp; <input type="text" name="deptt_name" id="department" required="">
			</span><br><br><br><br><center>&nbsp;
			<input type="submit" name="submit" value="Submit">&nbsp; &nbsp; <input type="reset" name="reset" value="Reset">
			</center>
		</form>
	</div>
</body>
</html>
