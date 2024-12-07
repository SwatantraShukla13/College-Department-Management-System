<?php
	include "connection.php";
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
			<h1>Student Registration</h1></center>
		<form name="sturegistration" method="post" action="">
			<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="crn"><label id="crlbl">1.  Cr_No :</label>&nbsp;<input name="cr" type="text" id="cr"></span>
				<br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 			<span id="stud">
				<label id="stulbl">2.  Student Name :</label>&nbsp;<input type="text" name="stu" id="stu"></span> <br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="fath"><label id="fatherlbl">3.  Father's Name :</label>&nbsp;<input type="text" name="father" id="father"></span><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="moth"><label id="motherlbl">4.  Mother's Name :</label>&nbsp;<input type="text" name="mother" id="mother"></span><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="db"><label id="doblbl">5.  Date Of Birth :</label>&nbsp;<input type="date" name="dob" id="dob"></span><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="sx"><label id="sexlbl">6.  Gender :   </label>&nbsp;<input type="radio" value="male" name="gender" id="male"><label for="male">male</label>&nbsp; <input type="radio" name="gender" id="female" value="female"><label for="female">female</label></span><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			    <span id="cont"><label id="contactlbl">7.  Contact No.  :</label>&nbsp; <input type="text" name="contact" id="contact"></span>
				<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="emailid"><label id="emaillbl">8.  Email_Id.  :</label><input type="email" name="email" id="email">
				</span><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="addr"><label id="addresslbl">9.  Address :</label>&nbsp;<input type="text" name="address" id="address" style=""></span> 
				<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="cours"><label id="courselbl">10. Course Name :</label>&nbsp;<input type="text" name="coursename" id="coursename"></span><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<span id="admis"><label id="addatelbl">11. Admission Date :</label>&nbsp;<input type="date" name="admission" id="admission"></span>
				<br><br><br><br><center>
				&nbsp; &nbsp; &nbsp; <input type="submit" value="Submit">&nbsp; &nbsp; &nbsp;<input type="reset" value="Reset"></center>
		</form>
		  <?php
    if(isset($_POST['Submit']))
    {
        if(isset($_SESSION['login_user']))
        {
            mysqli_query($db,"insert into `stu_record` values('$_POST[cr_no]','$_POST[stu_name]','$_POST[father_name]','$_POST[mather_name]','$_POST[DOB]','$_POST[contact]','$_POST[email_Id]','$_POST[address]','$_POST[course_name]','$_POST[admission_date]';");
       ?>
          <script type="text/javascript">
          alert("Student Registered Successfully.");
          </script>
        <?php
        }
      else
      {
          ?>
               <script type="text/javascript">
               alert("You need to log in first.");
             </script>
          <?php
      }
    } 
  ?>
</div>
	</div>	
</body>
</html>
