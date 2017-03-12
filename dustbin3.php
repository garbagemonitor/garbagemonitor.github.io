<?php 
$t = 115;
echo '<strong style="color:purple;font-size:60px;font-family:calibri ;">
	<p> Statistics of Dustbin 1: </strong> ';
if ($t>40)
{
echo '<strong style="color:lightgreen;font-size:45px;font-family:calibri ;">
	<p> Low </strong> ';
 }
else {
echo '<strong style="color:black;font-size:45px;font-family:calibri ;">
	<p>Low </strong>';
}

if ((20<$t) && ($t<=40))
{
echo '<strong style="color:yellow;font-size:45px;font-family:calibri ;">
	<p> Medium </strong> ';
 }
else {
echo '<strong style="color:black;font-size:45px;font-family:calibri ;">
	<p> Medium </strong>';
}

if ($t<=20)
{
echo '<strong style="color:red;font-size:45px;font-family:calibri ;">
	<p> High </strong> ';
 }
else {
echo '<strong style="color:black;font-size:45px;font-family:calibri ;">
	<p> High </strong>';
}

?>

 

