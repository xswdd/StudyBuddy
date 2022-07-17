<?php
session_start();
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="exam";

$conn=mysqli_connect($servername,$username,$password,$database);
$id2=$_GET['id1'];

$sql="Select * from internal2 where enrollmentno=$id2";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<form method="post">
    <input type="text" name="t1" value="<?php echo $row['enrollmentno']; ?>" />
    <input type="text" name="t2" value="<?php echo $row['toc']; ?>" />
    <input type="text" name="t3" value="<?php echo $row['ai']; ?>" />
    <input type="text" name="t4" value="<?php echo $row['cc']; ?>" />
    <input type="text" name="t5" value="<?php echo $row['wt']; ?>" />
    <input type="text" name="t6" value="<?php echo $row['iot']; ?>" />
    <input type="text" name="t7" value="<?php echo $row['uiux']; ?>" />
    <input type="text" name="t8" value="<?php echo $row['cp']; ?>" />
    <input type="text" name="t9" value="<?php echo $row['asb']; ?>" />
    <input type="submit" name="submit" value="Update"/>
</form>

<?php
if(isset($_POST['submit']))
{
    $enrollmentno=$_POST['t1'];
    $toc=$_POST['t2'];
    $ai=$_POST['t3'];
    $cc=$_POST['t4'];
    $wt=$_POST['t5'];
    $iot=$_POST['t6'];
    $uiux=$_POST['t7'];
    $cp=$_POST['t8'];
    $asb=$_POST['t9'];
    $sql="update internal2 set enrollmentno='$enrollmentno',toc='$toc',ai='$ai',cc='$cc',wt='$wt',iot='$iot',uiux='$uiux',cp='$cp',asb='$asb' where enrollmentno='$id2'";
    if(mysqli_query($conn,$sql))
    {
        header('location:internal2.php');
    }
}
?>