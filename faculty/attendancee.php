<?php
session_start();
echo "<a href=logout.php>Logout</a>";
echo "<br><br>";
echo "<a href=attendance.php>Back</a>";
echo "<br><br>";

$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="attendance";

$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($POST['submit']))
{
    $Username=$_POST['Username'];
    $sql="Select * from attendance where enrollmentno='$Username'";
    $result=mysqli_query($conn,$sql);
    echo "<table border=1>";
while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
    echo "enrollmentno:".$row2['enrollmentno']."</td><td>";
    echo "toc:".$row2['toc']."</td><td>";
    echo "ai:".$row2['ai']."</td><td>";
    echo "cc:".$row2['cc']."</td><td>";
    echo "iot:".$row2['wt']."</td><td>";
    echo "iot:".$row2['iot']."</td><td>";
    echo "uiux:".$row2['uiux']."</td><td>";
    echo "cp:".$row2['cp']."</td><td>";
    echo "asb:".$row2['asb']."</td><td>";
    echo "toc:".$row2['toclab']."</td><td>";
    echo "ai:".$row2['ailab']."</td><td>";
    echo "cc:".$row2['cclab']."</td><td>";
    echo "iot:".$row2['wtlab']."</td><td>";
    echo "iot:".$row2['iotlab']."</td>";
    echo "<td><a href=edit_attendance.php?id1=".$row2['enrollmentno'].">Edit</a></td>";
    echo "<td><a href=delete_attendance.php?id1=".$row2['enrollmentno'].">Delete</a></td></tr>";
}
}
else{
$sql="Select * from attendance";
$result=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<th><a href=dashboard.php?sort=enrollmentno>enrollmentno</a></th>";
echo "<th><a href=dashboard.php?sort=toc>toc</a></th>";
echo "<th><a href=dashboard.php?sort=ai>ai</a></th>";
echo "<th><a href=dashboard.php?sort=cc>cc</a></th>";
echo "<th><a href=dashboard.php?sort=wt>wt</a></th>";
echo "<th><a href=dashboard.php?sort=iot>iot</a></th>";
echo "<th><a href=dashboard.php?sort=uiux>uiux</a></th>";
echo "<th><a href=dashboard.php?sort=cp>cp</a></th>";
echo "<th><a href=dashboard.php?sort=asb>asb</a></th>";
echo "<th><a href=dashboard.php?sort=toc>toclab</a></th>";
echo "<th><a href=dashboard.php?sort=ai>ailab</a></th>";
echo "<th><a href=dashboard.php?sort=cc>cclab</a></th>";
echo "<th><a href=dashboard.php?sort=wt>wtlab</a></th>";
echo "<th><a href=dashboard.php?sort=iot>iotlab</a></th></th></th></th></th></th></th></th></th></th></th></th></th></th></tr>";

if(isset($_GET['sort']))
{
    $sql="Select * from attendance order by enrollmentno";
    $result=mysqli_query($conn,$sql);
    while($row2=mysqli_fetch_assoc($result))
    {
    echo "<tr><td>";
    echo "enrollmentno:".$row2['enrollmentno']."</td><td>";
    echo "toc:".$row2['toc']."</td><td>";
    echo "ai:".$row2['ai']."</td><td>";
    echo "cc:".$row2['cc']."</td><td>";
    echo "iot:".$row2['wt']."</td><td>";
    echo "iot:".$row2['iot']."</td><td>";
    echo "uiux:".$row2['uiux']."</td><td>";
    echo "cp:".$row2['cp']."</td><td>";
    echo "asb:".$row2['asb']."</td><td>";
    echo "toc:".$row2['toclab']."</td><td>";
    echo "ai:".$row2['ailab']."</td><td>";
    echo "cc:".$row2['cclab']."</td><td>";
    echo "iot:".$row2['wtlab']."</td><td>";
    echo "iot:".$row2['iotlab']."</td>";
    echo "<td><a href=edit_attendance.php?id1=".$row2['enrollmentno'].">Edit</a></td>";
    echo "<td><a href=delete_attendance.php?id1=".$row2['enrollmentno'].">Delete</a></td></tr>";
    }
}


while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
    echo $row2['enrollmentno']."</td><td>";
    echo $row2['toc']."</td><td>";
    echo $row2['ai']."</td><td>";
    echo $row2['cc']."</td><td>";
    echo $row2['wt']."</td><td>";
    echo $row2['iot']."</td><td>";
    echo $row2['uiux']."</td><td>";
    echo $row2['cp']."</td><td>";
    echo $row2['asb']."</td><td>";
    echo $row2['toclab']."</td><td>";
    echo $row2['ailab']."</td><td>";
    echo $row2['cclab']."</td><td>";
    echo $row2['wtlab']."</td><td>";
    echo $row2['iotlab']."</td>";
    echo "<td><a href=edit_attendance.php?id1=".$row2['enrollmentno'].">Edit</a></td>";
    echo "<td><a href=delete_attendance.php?id1=".$row2['enrollmentno'].">Delete</a></td></tr>";
}
}
mysqli_close($conn);
?>
