<?php
session_start();

$a=$_SESSION['name'];
$b=$_SESSION['email'];
$c=$_SESSION['department'];
$d=$_SESSION['enrollment'];
echo "<center>";
echo "<table border=1 width=300 height=200><tr><td>";
echo "Name:-</td><td>".$a."</td></tr>";
echo "<tr><td>Email:-</td><td>".$b."</td></tr>";
echo "<tr><td>Department:-</td><td>".$c."</td></tr>";
echo "<tr><td>Enrollment No:-</td><td>".$d."</td></tr>";
echo "</table>";
echo "</center>";
?>
