<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Timetable</title>
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
				<?php
				session_start();
				$a=$_SESSION['enrollment'];
				$servername="localhost";
				$username="root";
				$password="";//password is always empty.
				$database="timetable";

				$conn=mysqli_connect($servername,$username,$password,$database);
				$query = "SELECT * FROM timetable_f where Username='$a'";
				$data = mysqli_query($conn, $query);
				$total = mysqli_num_rows($data);
				$result = mysqli_fetch_assoc($data);
				$target_path1="images/";

				$image=$target_path1.$result['photo'];
				//echo "".$image."</td><td>";
				echo "<img src=".$image." width=500 height=500/></td> ";
				echo "<a href='https://drive.google.com/drive/folders/1661IL3DVnNayRkOAKYEr9Z4DCR2Nv2uJ?usp=sharing'>Download here</a> "
				?>
				</div>
</body>
</html>