<?php
$dbServer='localhost';
$dbUser='root';
$dbPass='harshitag'; //Enter MySQL password here.
$dbName='mysql';
$Link = mysqli_connect("$dbServer","$dbUser","$dbPass") or die("Could not conect to MySQL");
print "<h1>Connected to MySQL successfully</h1>";
mysqli_select_db($link,"$dbName") or die("Could not Select Database");
print "<h1>Database selected successfully</h1>";
mysqli_close($link);
?>