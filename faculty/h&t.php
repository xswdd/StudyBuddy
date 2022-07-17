<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>H&T</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#" method="post">
				<br><button><a href="profile.php">Profile</a></button><br>
				<br><br><button><a href="marks.php">Marks</a></button><br>
				<br><br><button><a href="timetable.php">Timetable</a></button><br>
				<br><br><button><a href="attendance.php">Attendance</a></button><br>
				<br><br><button><a href="material.php">Material</a></button><br>
				<br><br><button><a href="h&t.php">Hostel and Transport Details</a></button><br>	
			</form>
		</div>
		<div class="container" id="container">
		<div class="overlay-container">
			<form action="#" method="post">	
			<button><a href="logout.php">Logout</a></button>
				<br><br>
				<h1>Form</h1>
				<input id="name" name="name" placeholder="Name" />
				<input id="text" name="username" placeholder="Username"/>
				<input id="department" name="department" placeholder="Department"/>
				<!--<select name="department"><br><br>
        			<option value="sb">Select Branch</option>
        			<option value="ce">CE</option>
        			<option value="it">IT</option>
        			<option value="ceai">CE-AI</option>
    			</select>-->
				<input id="emailid" name="emailid" placeholder="Email Id" />
				<input id="querysubject" name="querysubject" placeholder="QuerySubject" />
				<input id="query" name="query" placeholder="Query" />
				<br>
				<button name="submit">submit</button>
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$db = "h_and_t";
				$conn = mysqli_connect($servername, $username, $password, $db);
				/*if (!$conn)
				{
				echo "Connection failed";
				}
				echo "<br>";
				echo "Connected successfully";
				echo "<br>";*/
				if(isset($_POST["submit"]))
				{
					$q="insert into fdetails(name,username,department,emailid,querysubject,query) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['department']."','".$_POST['emailid']."','".$_POST['querysubject']."','".$_POST['query']."')";
					$query = mysqli_query($conn, $q);
					if(!$query)
					{
						echo"not submitted";
					}
					else
					{
						echo"submitted";
					}
				}
				?>
				<br><br><br>

				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
