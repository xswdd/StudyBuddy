<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Dashboard</title>
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
				<br><br><br><br><br><br><br><br>
					<h1>Study Buddy</h1>
					<h2>Your Campus Partner</h2>
				
					<p>This project is made by Shobhit and Aum.</p>
					<br><br><br><br><br><br><br><br>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
session_start();
//echo $_SESSION['user'];
if (empty($_SESSION['user']))
{
	$_SESSION['user']="Please Login again";
}
echo $_SESSION['user'];
?>