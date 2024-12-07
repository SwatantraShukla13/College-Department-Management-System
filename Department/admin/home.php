<?php 
	include "connection.php";
	session_start();
	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);*/
	
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link href="home.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="wrapper">		
			<header>
				<h1 class="head"'>
					<?php
					echo'Welcome-'.$_SESSION['login_user'];
					?>
				</h1>
				<div class="line">	&nbsp;&nbsp;
					<div class="dd1">
						<li id="main-menu-1" class="main-menu-111"style="list-style-type: none;" ><a href="#">Add Record</a></li>
							<div class="dd-content-1">
								<ul class="sub-menu" style="list-style-type: none;">
									<li id="menu-1" class="main-menu-11"><a href="student registration form.php">Add Student</a></li>
									<li id="menu-2" class="main-menu-11"style="list-style-type: none;"><a href="#">Add Staff</a></li>
										<div class="dd-content-2"style="list-style-type: none;">
											<ul class="sub-menu-111"style="list-style-type: none;">
												<li id="sub-menu-1" class="sub-menu-11"style="list-style-type: none;"><a href="teaching staff form.php">Teaching Staff</a></li>
												<li id="sub-menu-2" class="sub-menu-11"style="list-style-type: none;"><a href="non teaching staff.php ">Non Teaching Staff</a></li>
											</ul>
										</div>
								</ul>
							</div>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="dd1">
						<li id="main-menu-2" class="main-menu-111"style="list-style-type: none;"><a href="#">Manage record</a></li>
							<div class="dd-content-1">
								<ul class="sub-menu"style="list-style-type: none;">
									<li id="menu-3" class="main-menu-11"style="list-style-type: none;"><a href="manage student.php">Student Record</a></li>
									<li id="menu-4" class="main-menu-11"style="list-style-type: none;"><a href="#">Staff record</a></li>
										<ul class="sub-menu-111"style="list-style-type: none;">
											<li id="sub-menu-3" class="sub-menu-11"style="list-style-type: none;"><a href="manage teaching staff.php">Teaching Staff Record</a></li>
											<li id="sub-menu-4" class="sub-menu-11"style="list-style-type: none;"><a href="manage non teaching.php">Non Teaching Staff Record</a></li>
										</ul>
								</ul>
							</div>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="dd1">
						<li id="main-menu-3" class="main-menu-111"style="list-style-type: none;"><a href="#">DOCS Fees</a></li>
							<div class="dd-content-1">
								<ul class="sub-menu"style="list-style-type: none;">
									<li id="menu-5" class="main-menu-11"style="list-style-type: none;"><a href="manage fees.php">DOCS_Fees</a></li>
								</ul>
							</div>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="dd1">
						<li id="main-menu-4" class="main-menu-111"style="list-style-type: none;"><a href="#">Information and About</a></li>
							<div class="dd-content-1">
								<ul class="sub-menu"style="list-style-type: none;">
									<li id="menu-6" class="main-menu-11">Information and About</li>
								</ul>
							</div>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="dd1">
						<li id="main-menu-5" class="main-menu-111"style="list-style-type: none;"><a href="#">Help</a></li>
							<div class="dd-content-1">
								<ul class="sub-menu"style="list-style-type: none;">
									<li id="menu-7" class="main-menu-11"style="list-style-type: none;">Help</li>
								</ul>	
							</div>
					</div>&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="dd1">
						<li id="main-menu-6" class="main-menu-111"style="list-style-type: none;"><a href="logout.php">Logout</a></li>
					</div>
					</div>
			</header>
		<section>

		</section>
		<footer >
		
		</footer>
	</div>
</body>
</html>
