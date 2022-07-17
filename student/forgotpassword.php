<?php
    session_start();
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $database="login";
    $conn = mysqli_connect($Servername , $Username, $Password, $database);

    $d=$_SESSION['enrollment'];
    $sql="select * from loginform where Username='$d'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
?>

<form align='center' method='post'>

    Enrollment Number:
	<input type="text" value="<?php echo $row['Username'];?>" readonly /><br><br>
    Name:
    <input type="text" value="<?php echo $row['Name'];?>" readonly /><br><br>
	Password:
	<input type="text" name="t2" value="<?php echo $row['Password'];?>"/><br><br>
    Confirm_Password:
    <input type="text" name="t3" value="<?php echo $row['Confirm_Password'];?>"/><br><br>
	<input type="submit" name="submit" value='update' />
	

</form>

<?php
    if(isset($_POST['submit']))
    {
        $pass=$_POST['t2'];
        $cpass=$_POST['t3'];
        
        $sql="update loginform set Password='$pass',Confirm_Password='$cpass' where Username='$d'";
        if(mysqli_query($conn,$sql))
        {
            header("location:login.php");
        }
    }	
?>