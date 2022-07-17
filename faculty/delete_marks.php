<?php
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="exam";

$conn=mysqli_connect($servername,$username,$password,$database);
$id2=$_GET['id1'];
$sql="DELETE FROM internal1 where enrollmentno=$id2";
if(mysqli_query($conn,$sql))
{
    header('location:exam1.php');
}
?>