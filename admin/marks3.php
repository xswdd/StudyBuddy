<?php
echo "<a href=logout.php>Logout</a>";
echo "<br><br>";
echo "<a href=back.php>Back</a>";
echo "<br><br>";
?>
<html>
<body>
<form method = "POST" enctype = "multipart/form-data" >
    <center>
    Enrollment No:-
    <input type = "text" name = "Username" placeholder= "Username" />
    <br>
    <br>
    Name:-
    <input type = "text" name = "Name" placeholder= "Name" />
    <br>
    <br>
    Department:-
    <input type = "text" name = "Department" placeholder= "Department" />
    <br>
    <br>
    <input type = "Submit" name = "submit" value = "Submit" />
</center>
</form>
<?php
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="exam";

$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['submit']))
{
    $enroll = $_POST['Username'];
    $name = $_POST['Name'];
    $department = $_POST['Department'];
    $sql="insert into external set enrollmentno='$enroll',Name='$name',Department='$department'";

    if(mysqli_query($conn, $sql))
    {
        // $q="select * from timetable";
        // $result=mysqli_query($conn,$q);
        // $result=mysqli_fetch_assoc($result);
        // print_r($result);
       
        header("location:marks3.php");
    }
}
echo "<a href=external.php>Marks Data</a>";
mysqli_close($conn);
?>
</body>
</html>

