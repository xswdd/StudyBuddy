<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Marks</title>
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
				<button><a href="marks.php">Back</a></button>
				<br><br><br><br>
    
<?php
session_start();
$a=$_SESSION['enrollment'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "exam";
$conn = mysqli_connect($servername, $username, $password,$db);
$query = "SELECT * FROM internal1 where enrollmentno=$a";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$b=$result['toc'];
$c=$result['ai'];
$d=$result['cc'];
$e=$result['wt'];
$f=$result['iot'];
$g=$result['uiux'];
$h=$result['cp'];
$i=$result['asb'];
echo "<center>";
echo "<table border=1 width=400 height=400><tr><td>";
echo "<center>Enrollment No</td><td></center><center>".$a."</center></td></tr>";
echo "<tr><td><center>TOC</td><td></center><center>".$b."</center></td></tr>";
echo "<tr><td><center>AI</td><td></center><center>".$c."</center></td></tr>";
echo "<tr><td><center>CC</td><td></center><center>".$d."</center></td></tr>";
echo "<tr><td><center>WT</td><td></center><center>".$e."</center></td></tr>";
echo "<tr><td><center>IOT</td><td></center><center>".$f."</center></td></tr>";
echo "<tr><td><center>UIUX</td><td></center><center>".$g."</center></td></tr>";
echo "<tr><td><center>CP</td><td></center><center>".$h."</center></td></tr>";
echo "<tr><td><center>ASB</td><td></center><center>".$i."</center></td></tr>";
echo "</table>";
echo "</center>";
?>
<br><br><br><br>
</div>
			</div>
		</div>
	</div>
</body>
</html>
