<?php
echo "<a href=logout.php>Logout</a>";
echo "<br><br>";
echo "<a href=back.php>Back</a>";
echo "<br><br>";
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="timetable";

$conn=mysqli_connect($servername,$username,$password,$database);
echo "<h1 align='center'>ADMIN</h1>";
// echo "<br>";
// echo "Connected successfully";
// echo "<br>";

if(isset($_POST['submit']))
{
	
	echo "<center><table border=1>";
	echo "<tr><th>Enrollment Number</th><th>Department</th><th>Photo</th></tr>";
	
	$name=$_POST['enrollment'];
	$q="select * from timetable where Username='$name'";
	$result = mysqli_query($conn, $q);
	
	while($row2=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>";
	
		echo "".$row2['Username']."</td><td>";
		echo "".$row2['Department']."</td><td>";

		$target_path1="images/";
		$image=$target_path1.$row2['photo'];
		echo "<img src=".$image." width=70 height=100/></td> ";
		//echo "".$image."</td><td>";
		echo "<td><a href=delete_timetable.php?id1=".$row2['Username']." >Delete</a></td>";
		echo "</tr>";
	}
	echo "</table></center>";
}
else
{
	echo "<center><table border=1>";
	echo "<tr><th><a href='admin.php?sort=Username'>Enrollment Number</a></th>
		  <th>Department</a></th>
		  <th>Photo</th></tr>";
	
	if(isset($_GET['sort']))
	{
		$f=$_GET['sort'];
		$q="select * from timetable order by $f";
		$result = mysqli_query($conn, $q);

		while($row2=mysqli_fetch_assoc($result))
		{
			echo "<tr><td>";
	
			echo "".$row2['Username']."</td><td>";
			echo "".$row2['Department']."</td><td>";
			//echo "".$row2['photo']."</td><td>";
				$target_path1="images/";

				$image=$target_path1.$row2['photo'];
				//echo "".$image."</td><td>";
				echo "<img src=".$image." width=70 height=100/></td> ";
			echo "<td><a href=delete_timetable.php?id1=".$row2['Username']." >Delete</a></td>";
			echo "</tr>";
		}
		
		
	}
	else
	{
	$q="select * from timetable ";
	$result = mysqli_query($conn, $q);

	while($row2=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>";
	
		echo "".$row2['Username']."</td><td>";
		echo "".$row2['Department']."</td><td>";

		//echo "".$row2['photo']."</td><td>";
		$target_path1="images/";

		$image=$target_path1.$row2['photo'];
		//echo "".$image."</td><td>";
		echo "<img src=".$image." width=70 height=100/></td> ";
		echo "<td><a href=delete_timetable.php?id1=".$row2['Username']." >Delete</a></td>";
		echo "</tr>";
	}
	}
	echo "</table></center>";
}


mysqli_close($conn);

?>

