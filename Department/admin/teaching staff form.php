<?php
	include"connection.php";
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if(isset($_SESSION['login_user']))
				{
				
					mysqli_query($db,"INSERT INTO `teaching_staff` (`uid`, `prof_name`, `contact`, `email_Id`, `deptt_name`) VALUES (NULL, '$_POST[prof_name]', '$_POST[contact]', '$_POST[email_Id]', '$_POST[deptt_name]');");
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
<title>Teaching Staff</title>
<link href="form2.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, intial-scale=1"> 
</head>

<body>
	<div class="form2">
		<center>
			<h1>Teaching Staff Record</h1>
		</center>
		<form action="" method="post">
			<br><br> &nbsp; &nbsp; &nbsp; &nbsp;
			<span id="prof">
				<label id="proflbl">1. Professor Name :</label>&nbsp;<input type="text" name="prof_name" id="professor">
			</span><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
			<span id="cont">
				<label id="contlbl">2. Contact :</label>&nbsp; <input type="text" name="contact" id="contact">
 			</span><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
			<span id="emailid">
				<label id="emaillbl">3. Email Id :</label>&nbsp; <input type="email" id="email" name="email_Id">
			</span><br><br> &nbsp; &nbsp; &nbsp; &nbsp;
			<span id="deptt">
				<label id="depttlbl">4. Department Name :</label>&nbsp; <input type="text" name="deptt_name" id="department">
			</span><br><br><br><br><center>&nbsp;
			<input type="submit" name="submit" value="Submit">&nbsp; &nbsp; <input type="reset" name="reset" value="Reset">
			</center>
			</form>
	</div>
</body>
</html>
