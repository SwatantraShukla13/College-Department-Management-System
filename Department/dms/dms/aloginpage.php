<?php
	include "connection.php";
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
	
<?php
        if(isset($_POST['Submit']))
        {
            $count=0;
            $res=mysqli_query($db,"SELECT * FROM `user`where userId='$_POST[username]' and password='$_POST[password]';");
            $row=mysqli_fetch_assoc($res);
            $count=mysqli_num_rows($res);
            if($count==0)
            {
                ?>
               <!-- <script type="text/javascript">
                alert("The username and password doesn't match.");
                </script>-->
                <!--<div class="alert alert-danger" style="width:400px;margin-left:480px; background-color:#de1313;color:white;">-->
                <strong> &nbsp &nbsp &nbsp &nbsp The username and password doesn't match.
                </strong>
                </div>
                <?php
            }
            else
            {
                /*--------if username nd password matches--------*/

               $_SESSION['login_user'] = $_POST['username'];
               $_SESSION['pic']=$row['pic'];
               ?>
                <script type="text/javascript">
                window.location="home.php"
                </script>
                <?php
            }
        }
        ?></div>
</body>
</html>
                   