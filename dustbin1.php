<?php
include('connect.php');

$sqlget = "SELECT * FROM DUSTBIN1";
$sqldata = mysqli_query($dbcon,$sqlget) or  die('ERROR');

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
	
	$DateTime = $row['DateTime'] ;
	
	$DUSTBINID = $row['DUSTBINID'] ;
	
	$LEVEL = $row['LEVEL'] ;
	
	}
echo '<i style="color:darkblue;font-size:45px;font-family:calibri ;">
	<p> Statistics of Dustbin 1: </i> ';
echo "<p> Last update at:";
echo "$DateTime";		
echo "<p> Empty Level of Garbage Bin (in cm):";
echo "$LEVEL";		

echo '<i style="color:darkblue;font-size:15px;font-family:calibri ;">
	<p> Garbage Level: </i> ';
if ($LEVEL>40)
{
$dustbin = '<img src="Images/low.png"  />
}

if ((20<$LEVEL) && ($LEVEL<=40))
{
$dustbin = '<img src="Images/medium.png"  />
}

if ($LEVEL<=20)
{
$dustbin = '<img src="Images/high.png"  />
}


    
</p>';

include 'dustbintemp.php';
?>

