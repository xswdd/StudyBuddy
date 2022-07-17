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
    Department:-
    <input type = "text" name = "Department" placeholder= "Department" />
    <br>
    <br>
    Photo:-
    <input type = "file" name = "photo" placeholder= "Choose your Photo" />
    <br>
    <br>
    <input type = "Submit" name = "submit" value = "Submit" />
</center>
</form>
<?php
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="timetable";

$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['submit']))
{
    $enroll = $_POST['Username'];
    $department = $_POST['Department'];
    $photo=$_FILES['photo']['name'];
    $target_path="C:/xampp/htdocs/demo/admin/images";
    $target_path1=$target_path.$photo;
    move_uploaded_file($_FILES['photo']['tmp_name'],$target_path1);
    $sql="insert into timetable set Username='$enroll',Department='$department',photo='$photo'";

    if(mysqli_query($conn, $sql))
    {
        // $q="select * from timetable";
        // $result=mysqli_query($conn,$q);
        // $result=mysqli_fetch_assoc($result);
        // print_r($result);
       
        header("location:timetable.php");
    }
}
echo "<a href=timetable_data.php>Timetable Data</a>";
mysqli_close($conn);
?>
</body>
</html>

