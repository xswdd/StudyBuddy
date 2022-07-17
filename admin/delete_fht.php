<?php
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="h_and_t";

$conn=mysqli_connect($servername,$username,$password,$database);
$id2=$_GET['id1'];
$sql="DELETE FROM fdetails where username='$id2'";
if(mysqli_query($conn,$sql))
{
    header('location:fh&t.php');
}
?>