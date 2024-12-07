<?php
	
	include "connection.php";
	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if(isset($_SESSION['login_user']))
				{
					//$uid=$_POST['uid'];
					$cr_no=$_POST['cr_no'];
					$stu_name=$_POST['stu_name'];
					$father_name=$_POST['father_name'];
					$mother_name=$_POST['mother_name'];
					$gender=$_POST['gender'];
					$DOB=$_POST['DOB'];
					$contact=$_POST['contact'];
					$email_Id=$_POST['email_Id'];
					$address=$_POST['address'];
					$course_name=$_POST['course_name'];
					$admission_date=$_POST['admission_date'];
					mysqli_query($db,"INSERT INTO `stu_record` (`uid`, `cr_no`, `stu_name`, `father_name`, `mother_name`,`gender`,`DOB`, `contact`, `email_Id`, `address`, `course_name`, `admission_date`) VALUES (NULL, '$cr_no', '$stu_name', '$father_name', '$mother_name','$gender', '$DOB', '$contact', '$email_Id','$address','$course_name','$admission_date');");
					echo '<script type="text/javascript">alert("Student Registered Successfully.")</script>';
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
<title>Student_Registration_Form</title>
<link href="form1.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="form1">
		<center><br><br><br>
			<h1>Student Registration</h1>
		</center>
		<form name="sturegistration" method="post" action="">
			<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="crn"><label id="crlbl">1.  Cr_No :</label>&nbsp;<input name="cr_no" type="text" id="cr" required=""></span>
				<br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 			<span id="stud">
				<label id="stulbl">2.  Student Name :</label>&nbsp;<input type="text" name="stu_name" id="stu" required=""></span> <br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="fath"><label id="fatherlbl">3.  Father's Name :</label>&nbsp;<input type="text" name="father_name" id="father" required=""></span><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="moth"><label id="motherlbl">4.  Mother's Name :</label>&nbsp;<input type="text" name="mother_name" id="mother" required=""></span><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="db"><label id="doblbl">5.  Date Of Birth :</label>&nbsp;<input type="date" name="DOB" id="dob" required=""></span><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="sx"><label id="sexlbl">6.  Gender :   </label>&nbsp;<input type="radio" value="male" name="gender" id="male"><label for="male">male</label>&nbsp; <input type="radio" name="gender" id="female" value="female"><label for="female">female</label></span><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			    <span id="cont"><label id="contactlbl">7.  Contact No.  :</label>&nbsp; <input type="text" name="contact" id="contact" required=""></span>
				<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="emailid"><label id="emaillbl">8.  Email_Id: </label><input type="email" name="email_Id" id="email" required="">
				</span><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="addr"><label id="addresslbl">9.  Address :</label>  &nbsp &nbsp &nbsp <textarea  type="address" name="address" id="address" style="" required=""></textarea></span> 
				<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="cours"><label id="courselbl">10. Course Name :</label>&nbsp;<input type="text" name="course_name" id="coursename" required=""></span><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="admis"><label id="addatelbl">11. Admission Date :</label>&nbsp;<input type="date" name="admission_date" id="admission" required=""></span>
				<br><br><br><br><center>
				&nbsp; &nbsp; &nbsp; <input type="submit" value="Save" name="save">&nbsp; &nbsp; &nbsp;<input type="reset" value="Reset"></center>
		</form>
</div>	
</body>
</html>
