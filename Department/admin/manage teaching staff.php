<?php
	include "connection.php";
	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

		 
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Manage Teachin-staff Record</title>

</head>

<body>
	<center>
		<blockquote style="font-size:50px;color:#001f3f;"> Teaching-Staff Record</blockquote>
				
	</center>
	<!-----------------------search box---------------------------->
  <div class="srch" style="padding-left:900px;">
        <form class="navbar-form" method="post" name="form1">
			<input class="form-control" type="text" name="search" placeholder=" Enter Cr_No.." >
			<button style="background-color:#208eec;" type="submit" name="submit" class="btn btn-default" value="Search">Search</button>   
	    </form><br>
   </div>
	<!--<table width="90%" height="40" style="margin: 92px; border:2px solid white;margin-top:auto" >
		<tr bgcolor="#0F83E3" bordercolor="#FBF9F9">
			<th style="font-size:19px;width:10%;">Cr No</th>
			<th style="font-size:19px;width:18%;">Student Name</th>
			<th  style="font-size:19px;width:18%;">Father's Name</th>
			<th style="font-size:19px;width:8%;">Gender</th>
			<th style="font-size:19px;width:10%;">DOB    </th>
			<th style="font-size:19px;width:15%;">Contact</th>
			<th style="font-size:19px;width:7%;">Email-Id</th>
			<th style="font-size:19px;width:20px;">Address</th>
		</tr>-->
		<!---------------------if button is pressed-------------------------->
		<?php
			//if($_SERVER['REQUEST_METHOD'] == 'POST')
			/*if(isset($_POST['submit']))
			{			
				$q=mysqli_query($db,"SELECT * FROM `teaching_staff` WHERE ");
				if(mysqli_num_rows($q)==0)
				{
					echo '<script type="text/javascript">alert("Record Not Found.Try Again")</script>';
				}
				else
					 
				{
					echo "<table class='table table-bordered table-hover'>";
					echo "<tr style='background-color:#208eec;'>";
					// table header
					echo "<th>";  echo "Proffessor";  echo "</th>";
					
					echo "<th>"; echo "Contact"; echo "</th>"; 
					echo "<th>"; echo "Email-Id"; echo "</th>";
					echo "<th>"; echo "Department";echo "</th>";
					echo "</tr>";
					while($row=mysqli_fetch_assoc($q))
					{
						echo "<tr>";
						echo "<td>"; echo $row['prof_name']; echo "</td>";
						
						echo "<td>"; echo $row['contact']; echo "</td>";
						echo "<td>"; echo $row['email_Id']; echo "</td>";
						echo "<td>"; echo $row['address']; echo "</td>";
       					echo "</tr>";
					}
					echo "</table>";
				}
			}	
			else*/
			{
				$res=mysqli_query($db,"SELECT * FROM `teaching_staff` ; ");
				echo "<table class='table table-bordered table-hover'>";
				echo "<tr style='background-color:#208eec;'>";
				// table header
					
					echo "<th>"; echo "Proffesor"; echo "</th>";
					
					echo "<th>"; echo "contact"; echo "</th>";
					
					echo "<th>"; echo "Email-Id"; echo "</th>";
					echo "<th>"; echo "Department"; echo "</th>";
					echo "</tr>";
					while($row=mysqli_fetch_assoc($res))
					{
						echo "<tr>";
						
						echo "<td>"; echo $row['prof_name']; echo "</td>";
						echo "<td>"; echo $row['contact']; echo "</td>";
						
						echo "<td>"; echo $row['email_Id']; echo "</td>";
						echo "<td>"; echo $row['deptt_name']; echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
				
			}
		?>
	</table>
	<center>
		
		<input type="button" name="edit" value="Edit Record" style="background:#86CFF8;font-size:19px;padding:4px 20px;">
		&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" name="view" value="View Student" style="background: #86CFF8;font-size:19px;padding:4px 20px;">
	</center>

</body>
</html>