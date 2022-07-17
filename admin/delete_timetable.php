<?php
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="timetable";

$conn=mysqli_connect($servername,$username,$password,$database);
$id2=$_GET['id1'];
$sql="DELETE FROM timetable where Username=$id2";
if(mysqli_query($conn,$sql))
{
    header('location:timetable_data.php');
}
?>