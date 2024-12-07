<?php
	include "connection.php";
	if($_server["request_method"]=='post')
		$username=test_input($_POST["userId"]);
		$password=test_input($_POST["password"]);
		
	else{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Department Management System</title>
	<link href="lp1.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">
		function Func(a)
		{
			if(a=="Admin")
			{
				document.getElementById("usr").style.display="block";
				document.getElementById("pwd").style.display="block";
				document.getElementById("crn").style.display="none";
				document.getElementById("db").style.display="none";
			}
			else
			{
				document.getElementById("usr").style.display="none";
				document.getElementById("pwd").style.display="none";
				document.getElementById("crn").style.display="block";
				document.getElementById("db").style.display="block";
			}
		}
	</script>
	
</head>

<body>
	<div class="new">
		<center>
		  <blockquote>
		    <h1><em>Department Management System</em></h1>
	      </blockquote>
				<form method="post" action="" name="login">
					<label>Select Type</label>
					<select id="user" name="user" onchange="Func(this.value)">
						<option value="Admin">Admin</option>
						<option value="Student">Student</option>
					</select><br><br>
					<span id="usr">
					<label id="userlbl">User ID</label>
  					<input type="text" name="userId" id="userId" placeholder="Enter Your Id"/><br><br>
					</span>
					<span id="pwd">
					<label id="pwdlbl">Password</label>
  					<input type="password" name="password" id="password" placeholder="Enter Your Password"/><br><br>
					</span>
					<span id="crn" style="display:none;">
					<label id="crlbl">CR No.</label>
  					<input type="text" name="crno" placeholder="Enter Your CR No."/><br><br>
					</span>
					<span id="db" style="display:none;">
					<label id="doblbl" >DOB</label>
  					<input type="date" name="dob" id="dob" /><br><br>
					</span>
					<input type="submit" value="Submit" name="submit">
					<input type="reset" value="Reset" name="reset">
				</form>
		</center>
	</div>
	<?php
	if(isset($_POST['submit']))
	{
		/*$count=0;
		$res=mysqli_query($db,"SELECT * FROM `user`WHERE username='abu' && password='talha';");
		$count=mysqli_num_rows($res);*/
		if(user=='admin' && userId=='abu' && password=='talha')
		{
			?>
			<script type="text/javascript">
				//windows.location="home.php";
				alert("data not match")
			</script>
					
			<?php
		}
		else
		{	
			?>
			<script type="text/javascript">
				windows.location="Home.php";
				//alert("User Name and password doesn't match.")	
			</script>
			<?php
		}
	}
?>
</body>
</html>
<?php 
	}
?>                   