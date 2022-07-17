<?php
session_start();
echo "<a href=logout.php>Logout</a>";
echo "<br><br>";
echo "<a href=back.php>Back</a>";

echo "<br><br>";
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="h_and_t";

$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $sql="Select * from fdetails where username='$name'";
    $result=mysqli_query($conn,$sql);
    echo "<table border=1>";
while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
    echo "name:".$row2['name']."</td><td>";
    echo "username:".$row2['username']."</td><td>";
    echo "department:".$row2['department']."</td><td>";
    echo "emailid:".$row2['emailid']."</td><td>";
    echo "querysubject:".$row2['querysubject']."</td><td>";
    echo "query:".$row2['query']."</td>";
    echo "<td><a href=delete_fht.php?id1=".$row2['username'].">Delete</a></td></tr>";
}
}
else{
$sql="Select * from fdetails";
$result=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<th><a href=fh&t.php?sort=name>name</a></th>";
echo "<th><a href=fh&t.php?sort=username>username</a></th>";
echo "<th><a href=fh&t.php?sort=department>department</a></th>";
echo "<th><a href=fh&t.php?sort=email>emailid</a></th>";
echo "<th><a href=fh&t.php?sort=querysubject>querysubject</a></th>";
echo "<th><a href=fh&t.php?sort=query>query</a></th></th></th></th></th></tr>";
if(isset($_GET['sort']))
{
    $sql="Select * from fdetails order by username";
    $result=mysqli_query($conn,$sql);
    while($row2=mysqli_fetch_assoc($result))
    {
    echo "<tr><td>";
    echo $row2['name']."</td><td>";
    echo $row2['username']."</td><td>";
    echo $row2['department']."</td><td>";
    echo $row2['emailod']."</td><td>";
    echo $row2['querysubject']."</td><td>";
    echo $row2['query']."</td>";
    echo "<td><a href=delete_fht.php?id1=".$row2['username'].">Delete</a></td></tr>";
    }
}


while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
    echo $row2['name']."</td><td>";
    echo $row2['username']."</td><td>";
    echo $row2['department']."</td><td>";
    echo $row2['emailid']."</td><td>";
    echo $row2['querysubject']."</td><td>";
    echo $row2['query']."</td>";
    echo "<td><a href=delete_fht.php?id1=".$row2['username'].">Delete</a></td></tr>";
}
}
mysqli_close($conn);
?>

