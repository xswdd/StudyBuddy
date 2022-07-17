<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Profile</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#">
				<br><button><a href="profile.php">Profile</a></button><br>
				<br><br><button><a href="marks.php">Marks</a></button><br>
				<br><br><button><a href="timetable.php">Timetable</a></button><br>
				<br><br><button><a href="attendance.php">Attendance</a></button><br>
				<br><br><button><a href="material.php">Material</a></button><br>
				<br><br><button><a href="h&t.php">Hostel and Transport Details</a></button><br>	
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					
					<button><a href="logout.php">Logout</a></button>
					<br><br><br>
					<?php
					session_start();
					$a=$_SESSION['name'];
					$b=$_SESSION['email'];
					$c=$_SESSION['department'];
					$d=$_SESSION['enrollment'];
					echo "<center>";
					echo "<table border=1 width=400 height=400><tr><td>";
					echo "<center>Name:-</td><td></center><center>".$a."</center></td></tr>";
					echo "<tr><td><center>Email:-</td><td></center><center>".$b."</center></td></tr>";
					echo "<tr><td><center>Department:-</td><td></center><center>".$c."</center></td></tr>";
					echo "<tr><td><center>Enrollment:-</td><td></center><center>".$d."</center></td></tr>";
					echo "</table>";
					echo "</center>";
					?>
					
				   <br><br>
				   <button><a href="update.php">Update</a></button>
				   <br>
			    </div>
		    </div>
		</div>
	</body>
</html>
