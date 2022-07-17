<?php
session_start();
echo "<a href=logout.php>Logout</a>";
echo "<br><br>";
echo "<a href=back.php>Back</a>";
echo "<br><br>";

$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="login";

$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($POST['submit']))
{
    $Username=$_POST['Username'];
    $sql="Select * from loginform where Username='$Username'";
    $result=mysqli_query($conn,$sql);
    echo "<table border=1>";
while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
    echo "Name:".$row2['Name']."</td><td>";
    echo "Email:".$row2['Email']."</td><td>";
    echo "Department:".$row2['Department']."</td><td>";
    echo "Username:".$row2['Username']."</td><td>";
    echo "Password:".$row2['Password']."</td><td>";
    echo "Confirm_Password:".$row2['Confirm_Password']."</td><td>";
    echo "<td><a href=edit.php?id1=".$row2['Username'].">Edit</a></td>";
    echo "<td><a href=delete.php?id1=".$row2['Username'].">Delete</a></td></tr>";
}
}
else{
$sql="Select * from loginform";
$result=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<th><a href=dashboard.php?sort=Name>Name</a></th>";
echo "<th><a href=dashboard.php?sort=Email>Email</a></th>";
echo "<th><a href=dashboard.php?sort=Department>Department</a></th>";
echo "<th><a href=dashboard.php?sort=Username>Username</a></th>";
echo "<th><a href=dashboard.php?sort=Password>Password</a></th>";
echo "<th><a href=dashboard.php?sort=Confirm_Password>Confirm_Password</a></th></th></th></th></th></th></tr>";

if(isset($_GET['sort']))
{
    $sql="Select * from loginform order by Username";
    $result=mysqli_query($conn,$sql);
    while($row2=mysqli_fetch_assoc($result))
    {
    echo "<tr><td>";
    echo $row2['Name']."</td><td>";
    echo $row2['Email']."</td><td>";
    echo $row2['Department']."</td><td>";
    echo $row2['Username']."</td><td>";
    echo $row2['Password']."</td><td>";
    echo $row2['Confirm_Password']."</td>";
    echo "<td><a href=edit.php?id1=".$row2['Username'].">Edit</a></td>";
    echo "<td><a href=delete.php?id1=".$row2['Username'].">Delete</a></td></tr>";
    }
}


while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
    echo $row2['Name']."</td><td>";
    echo $row2['Email']."</td><td>";
    echo $row2['Department']."</td><td>";
    echo $row2['Username']."</td><td>";
    echo $row2['Password']."</td><td>";
    echo $row2['Confirm_Password']."</td>";
    echo "<td><a href=edit.php?id1=".$row2['Username'].">Edit</a></td>";
    echo "<td><a href=delete.php?id1=".$row2['Username'].">Delete</a></td></tr>";
}
}
mysqli_close($conn);
?>
