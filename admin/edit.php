<?php
session_start();
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="login";

$conn=mysqli_connect($servername,$username,$password,$database);
$id2=$_GET['id1'];

$sql="Select * from loginform where Username=$id2";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<form method="post">
    <input type="text" name="t1" value="<?php echo $row['Name']; ?>" />
    <input type="text" name="t2" value="<?php echo $row['Email']; ?>" />
    <input type="text" name="t3" value="<?php echo $row['Department']; ?>" />
    <input type="text" name="t4" value="<?php echo $row['Username']; ?>" />
    <input type="text" name="t5" value="<?php echo $row['Password']; ?>" />
    <input type="text" name="t6" value="<?php echo $row['Confirm_Password']; ?>" />
    <input type="submit" name="submit" value="Update"/>
</form>

<?php
if(isset($_POST['submit']))
{
    $Name=$_POST['t1'];
    $Email=$_POST['t2'];
    $Department=$_POST['t3'];
    $Username=$_POST['t4'];
    $Password=$_POST['t5'];
    $Confirm_Password=$_POST['t6'];
    $sql="update loginform set Name='$Name',Email='$Email',Department='$Department',Username='$Username',Password='$Password',Confirm_Password='$Confirm_Password' where Username='$id2'";
    if(mysqli_query($conn,$sql))
    {
        header('location:userlogin.php');
    }
}
?>