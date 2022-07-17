<?php
session_start();
$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="attendance";

$conn=mysqli_connect($servername,$username,$password,$database);
$id2=$_GET['id1'];

$sql="Select * from attendance where enrollmentno=$id2";
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
    <input type="text" name="t10" value="<?php echo $row['toclab']; ?>" />
    <input type="text" name="t11" value="<?php echo $row['ailab']; ?>" />
    <input type="text" name="t12" value="<?php echo $row['cclab']; ?>" />
    <input type="text" name="t13" value="<?php echo $row['wtlab']; ?>" />
    <input type="text" name="t14" value="<?php echo $row['iotlab']; ?>" />
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
    $toclab=$_POST['t10'];
    $ailab=$_POST['t11'];
    $cclab=$_POST['t12'];
    $wtlab=$_POST['t13'];
    $iotlab=$_POST['t14'];
    $sql="update attendance set enrollmentno='$enrollmentno',toc='$toc',ai='$ai',cc='$cc',wt='$wt',iot='$iot',uiux='$uiux',cp='$cp',asb='$asb',toclab='$toclab',ailab='$ailab',cclab='$cclab',wtlab='$wtlab',iotlab='$iotlab' where enrollmentno='$id2'";
    if(mysqli_query($conn,$sql))
    {
        header('location:attendancee.php');
    }
}
?>