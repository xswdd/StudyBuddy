<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Attendance</title>
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

<form method = "POST" enctype = "multipart/form-data" >
<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
				<button><a href="logout.php">Logout</a></button>	
				<br><br>
				<input type = "text" name = "Username" placeholder= "Username" />
				<br>
				<input type = "text" name = "Name" placeholder= "Name" />
				<br>
				<input type = "text" name = "Department" placeholder= "Department" />
				<br>
				<button name="submit">submit</button>

				<br><br>
				<a href=attendancee.php>Attendance Data</a>
				<br><br><br><br><br><br><br>
			</div>
		</div>
	</div>
</div>
</form>
<?php
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="attendance";

$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['submit']))
{
    $enroll = $_POST['Username'];
    $name = $_POST['Name'];
    $department = $_POST['Department'];
    $sql="insert into attendance set enrollmentno='$enroll',Name='$name',Department='$department'";

    if(mysqli_query($conn, $sql))
    {
        // $q="select * from timetable";
        // $result=mysqli_query($conn,$q);
        // $result=mysqli_fetch_assoc($result);
        // print_r($result);
       
        header("location:attendance.php");
    }
}
mysqli_close($conn);
?>
</body>
</html>
