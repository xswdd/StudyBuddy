<?php
session_start();
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $database="login";
    $conn = mysqli_connect($Servername , $Username, $Password, $database);

$id2= $_SESSION['enrollment'];

$sql="select * from loginform where Username='$id2'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<form align='center' method='post'>

    Name:
	<input type="text" name="t1"  value="<?php echo $row['Name'];?>"/><br><br>
	Email:
	<input type="text" name="t2"  value="<?php echo $row['Email'];?>"/><br><br>
	Department:
	<input type="text" name="t3" value="<?php echo $row['Department'];?>"/><br><br>
	Enrollment Number:
	<input type="text" name="t4" value="<?php echo $row['Username'];?>"/><br><br>
	<input type="submit" name="submit" value='update' />

</form>
<?php

if(isset($_POST['submit']))
{
	$n=$_POST['t1'];
	$e=$_POST['t2'];
	$d=$_POST['t3'];
	$u=$_POST['t4'];

	$sql="update loginform set Name='$n',Email='$e',Department='$d',Username='$u' where Username='$id2'";
	if(mysqli_query($conn,$sql))
	{
		header("location:profile.php");
	}
}
	
?>