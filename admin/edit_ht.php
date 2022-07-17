<?php
session_start();
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="h_and_t";

$conn=mysqli_connect($servername,$username,$password,$database);
$id2=$_GET['id1'];

$sql="Select * from details where enrollmentno=$id2";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<form method="post">
    <input type="text" name="t1" value="<?php echo $row['name']; ?>" />
    <input type="text" name="t2" value="<?php echo $row['enrollmentno']; ?>" />
    <input type="text" name="t3" value="<?php echo $row['department']; ?>" />
    <input type="text" name="t4" value="<?php echo $row['emailid']; ?>" />
    <input type="text" name="t5" value="<?php echo $row['querysubject']; ?>" />
    <input type="text" name="t6" value="<?php echo $row['query']; ?>" />
    <input type="submit" name="submit" value="Update"/>
</form>

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['t1'];
    $er_no=$_POST['t2'];
    $dept=$_POST['t3'];
    $email=$_POST['t4'];
    $query_subject=$_POST['t5'];
    $query=$_POST['t6'];

    $sql="update details set name='$name',enrollmentno='$enrollmentno',department='$department',emailid='$emailid',querysubject='$querysubject',query='$query' where enrollmentno='$id2'";
    if(mysqli_query($conn,$sql))
    {
        header('location:h&t.php');
    }
}
?>